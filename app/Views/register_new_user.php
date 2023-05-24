{% include 'commons/header.php' %}

    <!-- login page start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <h1>Shop Manage</h1>
            </div>
            <div class="col-md-10">
                <div class="card">
                  <div class="card-header">
                    <h5 class="for-dark text-white">Register Your Business Here</h5>
                    <h5 class="for-light text-dark">Register Your Business Here</h5>
                  </div>
                  <form class="form theme-form basic-html-input-control-form" action="{{u}}auth/save_user" method="post">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3 row">
                            <h3>Business Name</h3><hr>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Business Name</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="text" name="businessname" placeholder="Enter Business Name Here">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Business Type</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="text" name="businesstype" placeholder="Type your title in Placeholder">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">GST</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="text" name="businessgst" placeholder="Enter GST Number">
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-3 col-form-label">Write About Your Business In Brief</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" rows="5" cols="5" name="businessdesc" placeholder="Write the Information Here"></textarea>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <h3>Admin Information</h3><hr>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="text" name="firstname" placeholder="Your First Name" value="">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="text" name="lastname" placeholder="Your Last Name" value="">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="password" name="pass" placeholder="Password input" value="">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input class="form-control digits" type="email" name="email" placeholder="Enter Email" value="">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-2">
                              <input class="form-control m-input digits" type="number" value="" maxlength="2" minlength="2" placeholder="+91">
                            </div>
                            <div class="col-sm-7">
                              <input class="form-control m-input digits" type="number" name="phone" value="" maxlength="10" minlength="10" placeholder="1234567890">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <div class="col-sm-9 offset-sm-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <input class="btn btn-light" type="reset" value="Cancel">
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
{% include 'commons/footer.php' %}
