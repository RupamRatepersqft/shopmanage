{% include 'commons/header.php' %}
{% include 'commons/header_breadcrumbs.php' %}
{% include 'commons/sidebar.php' %}

<style>
    .pagination {
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
  justify-content: center;
}

.pagination li a {
    width: 81px;
    text-align: center;
    padding: 5px 12px;
    background: #499f49;
    margin: 0 8px;
    border-radius: 5px;
    color: white;
}

.pagination li.active a {
    width: 81px;
    text-align: center;
    padding: 5px 12px;
    background: #db2b2b;
    margin: 0 8px;
    border-radius: 5px;
}
</style>

        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title"> 
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Contact Us Enquires</h3>
                  <button class="btn btn-info" onclick="exportExl()"><i class="fa fa-file-excel-o"></i> Export Excel</button>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Enquires</li>
                    <li class="breadcrumb-item active">Contact Us Enquires</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Results Table</h5>
                  </div>
                  <div class="table-responsive">
                    <table class="table" id="contact223">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Number</th>
                          <th scope="col">Subject</th>
                          <th scope="col">Entry Date</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        {% set i = 1 %}
                        {% for res in return %}
                         
                          <tr> 
                            <th scope="row">{{i}}</th>
                            <td>{{res.name}}</td>
                            <td>{{res.email}}</td>
                            <td>{{res.number}}</td>
                            <td>{{res.subject}}</td>
                            <td>{{res.entry_date}}</td>
                            <td>
                                {% if res.status.statusType == null %}
                                  <span class="badge badge-danger">Unseen</span>
                                {% else %}
                                  <span class="badge badge-success">{{res.status.statusType}}</span>                                    
                                {% endif %}
                            </td>
                            <td>
                              <button type="button" onclick="changeStatus('{{res.id}}')"><i class="fa fa-pencil"></i></button>
                              <button type="button" onclick="viewMsg('{{res.message}}')"><i class="fa fa-eye"></i></button>
                            </td>
                          </tr>      
                          {% set i=i+1 %}
                        {% endfor %}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div id="all_cue" class="col-md-12" style="margin-left: 5px;" >
                {{ pager | raw}}
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

        <script>

          var u = "{{ u }}";

          function changeStatus(id)
          {
              var modal_body = $('#modal_display >  div.modal-dialog > div.modal-content > div.modal-body');
              var modal_header = $('#modal_display >  div.modal-dialog > div.modal-content > div.modal-header');
              var modal_footer = $('#modal_display > modal_dialog div.modal-dialog > div.modal-content > div.modal-footer');
              var html='';
              modal_header.html('Change Enquiry Status');

              html+='<form>';
              html+='<lable for="newstatus" class="form-label">Change Status</lable>';
              html+='<div class="form-group"><select class="form-control" id="newstatus" name="newstatus">';
              html+='<option value="" disabled selected>Select</option>';
              html+='<option value="SEEN">SEEN</option>';
              html+='<option value="CALL NOT RECEIVED">CALL NOT RECEIVED</option>';
              html+='<option value="NO. NOT REACHABLE">NO. NOT REACHABLE</option>';
              html+='<option value="CLIENT IS INTERESTED">CLIENT IS INTERESTED</option>';
              html+='<option value="CLIENT IS NOT INTERESTED">CLIENT IS NOT INTERESTED</option>';
              html+='<option value="PPT REQUIRED">PPT REQUIRED</option>';
              html+='<option value="VISIT PLANNED">VISIT PLANNED</option>';
              html+='<option value="CANCELLED">CANCELLED</option>';
              html+='<option value="BROKER">BROKER</option>';
              html+='<option value="Others">Others</option></select></div>';
              html+='<div class="form-group"><lable for="msgStatus" class="form-label">Enter Message</lable>';
              html+='<input class="form-control" type="text" id="msgStatus" name="msgStatus" value=""/></div>';
              html+='<input class="form-control" type="hidden" id="oid" name="oid" value="'+id+'"/>';
              html+='<br><div><button class="btn btn-success" type="button" onclick="saveChanges()">Submit</button></div></form>';
              modal_body.html(html);
              $("#modal_display").modal("show"); 


          }

          function saveChanges(){
            // alert(id);

            var newstatus=$('#newstatus').val();
            var msgStatus=$('#msgStatus').val();
            var oid=$('#oid').val();
            // alert(u);
            $.ajax({
                type:"POST",
                url: u + "ourservices/changestatus",
                data:{newstatus:newstatus,msgStatus:msgStatus,oid:oid},
                success: function(response){  
                  alert(response);
                    $("#modal_display").modal("hide");
                }
            });
          }
          function viewMsg(msg){
            var modal_body = $('#modal_display >  div.modal-dialog > div.modal-content > div.modal-body');
            var modal_header = $('#modal_display >  div.modal-dialog > div.modal-content > div.modal-header');
            var modal_footer = $('#modal_display > modal_dialog div.modal-dialog > div.modal-content > div.modal-footer');
            var html='<p>'+msg+'</p>';
            modal_header.html('View Message');
            modal_body.html(html);
            $("#modal_display").modal("show"); 
          }

          function exportExl(){
            $.ajax({
                type:"POST",
                url: u + "ourservices/exportxlxs",
                success: function(response){  
                  alert("File Save In "+response);
                }
            });
          }
        </script>

{% include 'commons/footer.php' %}