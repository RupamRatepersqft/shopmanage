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
                  <h3>Website Users</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Website Users</li>
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
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Entry Date</th>
                          <th scope="col">Email</th>
                          <!-- <th scope="col">Message</th> -->
                        </tr>
                      </thead>
                      <tbody>
                      {% set i = 1 %}
                        {% for res in return %}
                          <tr> 
                            <th scope="row">{{i}}</th>
                            <td>
                                {% if res.name == null %}
                                    ---
                                {% else %}
                                    {{res.name}}
                                {% endif %}
                            </td>
                            <td>
                                {% if res.phone == null %}
                                    ---
                                {% else %}
                                    {{res.phone}}
                                {% endif %}
                            </td>
                            <td>
                                {% if res.insert_date == null %}
                                    ---
                                {% else %}
                                    {{res.insert_date}}
                                {% endif %}
                            </td>
                            <td>
                                {% if res.social.mail == null %}
                                    ---
                                {% else %}
                                    {{res.social.mail}}
                                {% endif %}
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
          </div>
          <div class="row">
              <div id="all_cue" class="col-md-12" style="margin-left: 5px;" >
                {{ pager | raw}}
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
{% include 'commons/footer.php' %}