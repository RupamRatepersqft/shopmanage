{% include 'commons/header.php' %}
{% include 'commons/header_breadcrumbs.php' %}
{% include 'commons/sidebar.php' %}

        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title"> 
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Property Enquires</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Enquires</li>
                    <li class="breadcrumb-item active">Property</li>
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
                          <th scope="col">Message</th>
                          <th scope="col">Property Type</th>
                          <th scope="col">Property ID</th>
                        </tr>
                      </thead>
                      <tbody>
                      {% set i = 1 %}
                        {% for res in return %}
                          <tr> 
                            <th scope="row">{{i}}</th>
                            <td>
                                {% if res.sender_name == null %}
                                    ---
                                {% else %}
                                    {{res.sender_name}}
                                {% endif %}
                            </td>
                            <td>
                                {% if res.sender_phone == null %}
                                    ---
                                {% else %}
                                    {{res.sender_phone}}
                                {% endif %}
                            </td>
                            <td>
                                {% if res.entry_date == null %}
                                    ---
                                {% else %}
                                    {{res.entry_date}}
                                {% endif %}
                            </td>
                            <td>
                                {% if res.enq_message.data1 == null %}
                                    ---
                                {% else %}
                                    {{res.enq_message.data1}}
                                {% endif %}
                            </td>
                            <td>
                                {% if res.pro_type == null %}
                                    ---
                                {% else %}
                                    {{res.pro_type}}
                                {% endif %}
                            </td>
                            <td>
                                {% if res.pro_id == null %}
                                    ---
                                {% else %}
                                    {{res.pro_id}}
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
          <!-- Container-fluid Ends-->
        </div>
{% include 'commons/footer.php' %}