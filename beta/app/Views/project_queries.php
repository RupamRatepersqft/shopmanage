{% include 'commons/header.php' %}
{% include 'commons/header_breadcrumbs.php' %}
{% include 'commons/sidebar.php' %}

        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title"> 
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Project Queries</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Project Queries</li>
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
                          <th scope="col">Phone</th>
                          <th scope="col">Project Name</th>
                          <th scope="col">Entry Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        {% set i = 1 %}
                        {% for res in return %}
                         
                          <tr> 
                            <th scope="row">{{i}}</th>
                            <td>{{res.name}}</td>
                            <td>{{res.phone}}</td>
                            <td>{{res.project_name}}</td>
                            <td>{{res.date}}</td>
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
          <!-- Container-fluid Ends-->
        </div>

        <script>

          var u = "{{ u }}";


        </script>

{% include 'commons/footer.php' %}