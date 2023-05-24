{% include 'commons/header.php' %}
{% include 'commons/header_breadcrumbs.php' %}
{% include 'commons/sidebar.php' %}


        <div class="page-body">
          <div class="container-fluid">        
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Default</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <a class="home-item" href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"> Dashboard</li>
                    <li class="breadcrumb-item active"> Default</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard-section">
            <div class="row"> 
              <div class="col-xxl-6 col-xl-12 morning-sec">
                <div class="card profile-greeting">
                  <div class="card-body">
                    <div class="media">
                      <div class="media-body"> 
                        <div class="greeting-user">
                          <h1>Hello, {{office_user}}</h1>
                          <h4>Welcome back, your dashboard is ready!</h4>
                          <div class="whatsnew-btn"><a class="btn btn-outline-white_color">Get Started<i data-feather="arrow-right"></i></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="cartoon-img"><img class="img-fluid" src="public/assets/images/images.svg" alt=""></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-12 dashboard-chart-sec">
                <div class="row">
                  <div class="col-xxl-6 col-md-6 col-lg-6 earning-cart-sec">
                    <div class="card earning-card pb-0 o-hidden">
                      <div class="card-header earning-back"></div>
                      <div class="card-body p-0">
                        <div class="earning-content"><img class="img-fluid" src="{{cdn}}public/assets/images/avatar.jpg" alt="">
                          <h4>Today's Earning</h4><span>(Mon 15 - Sun 21)</span>
                          <h6>$573.67</h6>
                          <div id="earning-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-6 col-md-6 col-lg-6 weekly-column-chart-sec">
                    <div class="card">
                      <div class="card-body">
                        <div class="weekly-column-chart">
                          <div class="small-chart-new"> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-6 news">
                <div class="card">
                  <div class="card-header card-no-border"> 
                    <div class="header-top">
                      <h5 class="m-0">News &amp; Update</h5>
                      <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                        <div class="icon-box-show onhover-show-div">
                          <ul> 
                            <li> <a>
                                 Today</a></li>
                            <li> <a>
                                 Yeasterday</a></li>
                            <li> <a>
                                 Tommorow 
                                </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="news-update media"><img class="img-fluid me-3 b-r-5" src="{{cdn}}public/assets/images/dashboard/Rectangle-26.jpg" alt="">
                      <div class="media-body">
                        <h5>Google  Apply</h5>
                        <p>Today's News Headlines, Breaking{{cdn}}public.</p>
                      </div><span class="badge badge-light-theme-light font-theme-light">1day ago</span>
                    </div>
                    <div class="news-update media"> <img class="img-fluid me-3 b-r-5" src="{{cdn}}public/assets/images/dashboard/Rectangle-27.jpg" alt="">
                      <div class="media-body">
                        <h5>Business Logo </h5>
                        <p>Check out latest{{cdn}}public</p>
                      </div><span class="badge badge-light-theme-light font-theme-light">1day ago</span>
                    </div>
                    <div class="news-update media"><img class="img-fluid me-3 b-r-5" src="{{cdn}}public/assets/images/dashboard/Rectangle-28.jpg" alt="">
                      <div class="media-body">
                        <h5>Business Project </h5>
                        <p>News in English: Get all Breaking{{cdn}}public.  </p>
                      </div><span class="badge badge-light-theme-light font-theme-light">1day ago</span>
                    </div>
                    <div class="news-update media"><img class="img-fluid me-3 b-r-5" src="{{cdn}}public/assets/images/dashboard/Rectangle-29.jpg" alt="">
                      <div class="media-body">
                        <h5>Recruitment in it</h5>
                        <p>Technology and Indian Business News{{cdn}}public.</p>
                      </div><span class="badge badge-light-theme-light font-theme-light">1day ago</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-5 col-xl-12 ongoing-project-sec">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="card ongoing-project">
                      <div class="card-header card-no-border">
                        <div class="media media-dashboard">
                          <div class="media-body"> 
                            <h5 class="mb-0">Ongoing Projects         </h5>
                          </div>
                          <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                            <div class="icon-box-show onhover-show-div">
                              <ul> 
                                <li> <a>
                                     Done</a></li>
                                <li> <a>
                                     Pending</a></li>
                                <li> <a>
                                     Rejected</a></li>
                                <li> <a>In Progress</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pt-0">
                        <div class="ongoing-project-table table-responsive">
                          <table class="table table-bordernone">
                            <thead> 
                              <tr> 
                                <th> <span>Name </span></th>
                                <th> <span>Date</span></th>
                                <th> <span>Project </span></th>
                                <th> <span>Status   </span></th>
                              </tr>
                            </thead>
                            <tbody> 
                              <tr>
                                <td>
                                  <div class="media">
                                    <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{cdn}}public/assets/images/avtar/boy.png" alt=""></div>
                                    <div class="media-body ps-2">
                                      <div class="avatar-details">
                                        <h5>Gary</h5><span> UK Desig Team</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td class="img-content-box">
                                  <h5>12 May 2020</h5><span>In 6 Days</span>
                                </td>
                                <td>
                                  <h5>Product Design</h5><span>Toyota</span>
                                </td>
                                <td>
                                  <div class="badge badge-light-primary">Done</div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media">
                                    <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{cdn}}public/assets/images/avtar/girl.png" alt=""></div>
                                    <div class="media-body ps-2">
                                      <div class="avatar-details">
                                        <h5>Gary</h5><span> UK Desig Team</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td class="img-content-box">
                                  <h5>12 May 2020</h5><span>In 6 Days</span>
                                </td>
                                <td>
                                  <h5>Product Design</h5><span>Toyota</span>
                                </td>
                                <td>
                                  <div class="badge badge-light-secondary">Pending</div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media">
                                    <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{cdn}}public/assets/images/avtar/man.png" alt=""></div>
                                    <div class="media-body ps-2">
                                      <div class="avatar-details">
                                        <h5>Gary</h5><span> UK Desig Team</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td class="img-content-box">
                                  <h5>12 May 2020</h5><span>In 6 Days</span>
                                </td>
                                <td>
                                  <h5>Product Design</h5><span>Toyota</span>
                                </td>
                                <td>
                                  <div class="badge badge-light-danger">Rejected</div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media">
                                    <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{cdn}}public/assets/images/avtar/woman.png" alt=""></div>
                                    <div class="media-body ps-2">
                                      <div class="avatar-details">
                                        <h5>Gary</h5><span> UK Desig Team</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td class="img-content-box">
                                  <h5>12 May 2020</h5><span>In 6 Days</span>
                                </td>
                                <td>
                                  <h5>Product Design</h5><span>Toyota</span>
                                </td>
                                <td>
                                  <div class="badge badge-light-info">In Progress</div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-6 recent-activity-sec">
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="media media-dashboard">
                      <div class="media-body"> 
                        <h5 class="mb-0">Recent Activity      </h5>
                      </div>
                      <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                        <div class="icon-box-show onhover-show-div">
                          <ul> 
                            <li> <a>
                                 Latest </a></li>
                            <li> <a>
                                 Earlist</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0 recent-activity">
                    <div class="media">
                      <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{cdn}}public/assets/images/avtar/teacher.png" alt=""></div>
                      <div class="media-body">
                        <h5>Alana Brady added new event</h5>
                        <h6 class="font-primary">Sunday Cooking Class</h6>
                      </div><span class="badge badge-light-theme-light font-theme-light">2 hours ago</span>
                    </div>
                    <div class="media">
                      <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{cdn}}public/assets/images/avtar/teenager.png" alt=""></div>
                      <div class="media-body">
                        <h5>Lena Burton added new</h5>
                        <h6>Comment on <span class="font-primary">Vegetarian food fest</span></h6>
                        <div class="activity-msg"> <span class="activity-msg-box">
                             Again this was our mistake, we are truly sorry for not adhering to a strictly non animal product event.</span></div>
                      </div><span class="badge badge-light-theme-light font-theme-light">10 jul 2020</span>
                    </div>
                    <div class="media">
                      <div class="square-box me-2"><img class="img-fluid b-r-5" src="{{cdn}}public/assets/images/avtar/chinese.png" alt=""></div>
                      <div class="media-body">
                        <h5>Max Simmons attached 2</h5>
                        <h6>photos to <span class="font-primary">Food photography Class</span></h6>
                        <div class="d-flex">
                          <div class="inner-img"><img class="img-fluid" src="{{cdn}}public/assets/images/dashboard/img-26.png" alt="Product-1"></div>
                          <div class="inner-img ms-3"><img class="img-fluid" src="{{cdn}}public/assets/images/dashboard/image-20.jpg" alt="Product-2"></div>
                        </div>
                      </div><span class="badge badge-light-theme-light font-theme-light">22 Jun 2020</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-12 total-transactions-sec">
                <div class="card">
                  <div class="row m-0">
                    <div class="col-lg-6 col-sm-6 p-0">
                      <div class="card-header card-no-border">
                        <h5>Total Transactions</h5>
                      </div>
                      <div class="card-body pt-0">
                        <div> 
                          <div id="transaction-chart"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 p-0 report-sec">
                      <div class="card-header card-no-border"> 
                        <div class="header-top">
                          <h5 class="m-0">News &amp; Update</h5>
                          <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                            <div class="icon-box-show onhover-show-div">
                              <ul> 
                                <li> <a>
                                     Today</a></li>
                                <li> <a>
                                     Yeasterday</a></li>
                                <li> <a>
                                     Tommorow</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pt-0">
                        <div class="row"> 
                          <div class="col-6 report-main">
                            <div class="report-content text-center"> 
                              <h6 class="font-theme-light">Report</h6>
                              <h5>+86.53%</h5>
                              <div class="progress progress-round-primary">
                                <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="report-content text-center"> 
                              <h6 class="font-theme-light">Report</h6>
                              <h5>+86.53%</h5>
                              <div class="progress progress-round-secondary">
                                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">        
                            <div class="media report-perfom">
                              <div class="media-body">
                                <h6 class="font-theme-light">Performance </h6>
                                <h5 class="m-0">+93.82%</h5>
                              </div>
                              <button class="btn btn-primary">New Report</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-md-6 yearly-chart-sec">
                <div class="card">
                  <div class="card-header card-no-border">
                    <h5 class="f-22 pb-2">$3,500,000</h5>
                    <h6 class="font-theme-light f-14 m-0">November 2021</h6>
                  </div>
                  <div class="card-body pt-0">
                    <div> 
                      <div id="yearly-chart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-md-6 premium-access-sec">
                <div class="card bg-primary"> 
                  <div class="card-body">
                    <div class="premium-access">
                      <h6 class="f-22">Premium Access!</h6><span>We add 20+ new features and update community in your project We add 20+ new features</span>
                      <button class="btn btn-outline-white_color"> Try now for free</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        

{% include 'commons/footer.php' %}


   