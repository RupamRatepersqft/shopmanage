{% include 'commons/header.php' %}
{% include 'commons/header_breadcrumbs.php' %}
{% include 'commons/sidebar.php' %}
<style type="text/css">
  .thead-dark{
    background-color: black;
  }
  .text-white{
    color: white;
  }
  label{
    font-size: 16px;
    font-weight: 600;
  }
  .form-submit .btn{
    background-color: #6362e7;
    color: white;
  }
  .form-submit .btn:hover{
    color: white;
  }
  i span{
    font-size: 20px;
    font-weight: 500;
  }
  .form-control:focus{
    box-shadow: none;
  }
</style>
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title"> 
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>Old Blogs</h3>
        </div>
        <div class="col-12 col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Blogs</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 mb-4 px-3">
                <label for="search">Search by Title</label>
                <input class="form-control" type="search" id="search" name="search">
              </div>
              <div class="col-md-2 mb-4 px-3">
                <label>Category</label><br>
                <select class="form-control">
                  <option value="">Select</option>
                  <option value="h">property</option>
                  <option value="h">property</option>
                  <option value="h">property</option>
                  <option value="h">property</option>
                  <option value="h">property</option>
                </select>
              </div>
              <div class="col-md-2 mb-4 px-3">
                <label>Sub Category</label><br>
                <select class="form-control">
                  <option value="">Select</option>
                  <option value="h">property</option>
                  <option value="h">property</option>
                  <option value="h">property</option>
                  <option value="h">property</option>
                  <option value="h">property</option>
                </select>
              </div>
              <div class="col-md-2 mb-4 px-3">
                <label>Author</label><br>
                <select class="form-control">
                    <option value="">Select</option>
                    <option value="h">Shivalika</option>
                    <option value="h">Silpi</option>
                  </select>
              </div>
              <div class="col-md-2 mb-4 px-3">
                <label>Published Date:</label><br>
                <input class="form-control" type="date" id="date" name="date">
              </div>
              <div class="col-md-4 mb-4 px-3 form-submit">
                <button class="btn">Submit</button>
            </div>
            <div class="table-responsive px-3">
              <h1>Category</h1>
              <table class="table table-bordered" style="text-align:center;">
              <thead class="thead-dark">
                <tr>
                  <th class="text-white" style="width:75px">Sl. No</th>
                  <th class="text-white" style="width:200px">Title</th>
                  <th class="text-white">Author</th>
                  <th class="text-white">Sub Category</th>
                  <th class="text-white">Status</th>
                  <th class="text-white">Stats</th>
                  <th class="text-white">Date</th>
                  <th class="text-white">Action</th>
                </tr>
              </thead>
              <tbody>
              {% set i = 1 %}
              {% for res in return %}
                <tr> 
                  <th scope="row">{{i}}</th>
                  <td>
                      {% if res.title == null %}
                          ---
                      {% else %}
                          {{res.title}}
                      {% endif %}
                  </td>
                  <td>
                      {% if res.category == null %}
                          ---
                      {% else %}
                          {{res.category}}
                      {% endif %}
                  </td>
                  <td>
                      {% if res.category == null %}
                          ---
                      {% else %}
                          {{res.category}}
                      {% endif %}
                  </td>
                  <td>
                      {% if res.category == null %}
                          ---
                      {% else %}
                          {{res.category}}
                      {% endif %}
                  </td>
                  <td>
                    <i class="fa fa-thumbs-up me-2" aria-hidden="true"><span>{% if res.like_count == null %}0{% else %}{{res.like_count}}{% endif %}</span></i>
                    <i class="fa fa-eye me-2" aria-hidden="true"><span>{% if res.view_count == null %}0{% else %}{{res.view_count}}{% endif %}</span></i>
                    <i class="fa fa-share" aria-hidden="true"><span>{% if res.share_count == null %}0{% else %}{{res.share_count}}{% endif %}</span></i>
                  </td>
                  <td> 
                    {% if res.date == null %}
                          ---
                      {% else %}
                          {{res.date}}
                      {% endif %}
                  </td>
                  <td>
                    <button>View</button>
                    <button>Edit</button>
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
</div>


{% include 'commons/footer.php' %}