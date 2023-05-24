

<!-- header_breadcrumbs.php -->
    <div class="loader-wrapper">
      <div class="push-pop loader">
        <div></div>
        <div></div>
      </div>
    </div>
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0"> 
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{cdn}}public/assets/images/logo/logo.png" alt=""></a></div>
            <div class="toggle-sidebar">
              <div class="status_toggle middle sidebar-toggle"><img class="for-light" src="{{cdn}}public/assets/images/menu-icon.svg" alt=""><img class="for-dark" src="{{cdn}}public/assets/images/menu-icon-dark.png" alt=""></div>
            </div>
          </div>
          <div class="left-side-header col ps-0 d-none d-md-block">
            <div class="input-group"><span class="input-group-text" id="basic-addon1"><i data-feather="search"></i></span>
              <input class="form-control" type="text" placeholder="Search here" aria-label="search" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
            <ul class="nav-menus">
              <li>
                <div class="mode animated backOutRight"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="d-md-none resp-serch-input">
                <div class="resp-serch-box"><i data-feather="search"></i></div>
                <div class="form-group search-form">
                  <input type="text" placeholder="Search here.">
                </div>
              </li>
              <li class="cart-nav onhover-dropdown">
                <div class="cart-box"><i data-feather="shopping-cart"></i><span class="badge rounded-pill badge-primary">2</span></div>
                <div class="cart-dropdown onhover-show-div">
                  <div class="dropdown-title">
                    <h6 class="f-18 mb-0">Cart</h6><a class="f-right" href="cart.html">Go to shoping bag</a>
                  </div>
                  <ul>
                    <li>
                      <div class="media"><img class="img-fluid b-r-5 me-3 img-60" src="{{cdn}}public/assets/images/banner-1.jpg" alt="">
                        <div class="media-body">
                          <h6>Lorem ipsum dolor sit amet cons</h6>
                          <p>$500</p>
                        </div>
                        <div class="cart-quantity"><span class="plus"><i class="fa fa-plus"></i></span>
                          <input class="count" type="text" name="qty" value="3"><span class="minus"><i class="fa fa-minus"></i></span>
                        </div>
                        <div class="close-circle"><a href="#"><i data-feather="trash-2"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img class="img-fluid b-r-5 me-3 img-60" src="{{cdn}}public/assets/images/product-4.png" alt="">
                        <div class="media-body">
                          <h6>Lorem ipsum dolor sit amet cons</h6>
                          <p>$500</p>
                        </div>
                        <div class="cart-quantity"> <span class="plus"><i class="fa fa-plus"></i></span>
                          <input class="count" type="text" name="qty" value="3"><span class="minus"><i class="fa fa-minus"></i></span>
                        </div>
                        <div class="close-circle"><a href="#"><i data-feather="trash-2"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img class="img-fluid b-r-5 me-3 img-60" src="{{cdn}}public/assets/images/product-6.jpg" alt="">
                        <div class="media-body">
                          <h6>Lorem ipsum dolor sit amet cons{{cdn}}public{{cdn}}public</h6>
                          <p>$500</p>
                        </div>
                        <div class="cart-quantity"> <span class="plus"><i class="fa fa-plus"></i></span>
                          <input class="count" type="text" name="qty" value="3"><span class="minus"><i class="fa fa-minus"></i></span>
                        </div>
                        <div class="close-circle"><a href="#"><i data-feather="trash-2"></i></a></div>
                      </div>
                    </li>
                    <li class="order-total">
                      <h6 class="mb-0">Total : <span class="f-right">$100.00</span></h6><a class="btn btn-primary view-checkout" href="checkout.html">Checkout</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="star"></i></div>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                        <ul class="bookmark-dropdown pb-0">
                          <li class="p-0">
                            <div class="row">
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="file-text"></i></div><span>Forms</span>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="user"></i></div><span>Profile</span>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="server"></i></div><span>Tables</span>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="text-center"><a class="flip-btn btn btn-primary" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search">
                            </div>
                          </li>
                          <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i class="notify-ani" data-feather="bell"> </i><span class="badge rounded-pill badge-warning">4 </span></div>
                <div class="onhover-show-div notification-dropdown">
                  <div class="dropdown-title">
                    <h6 class="f-18 mb-0">Notification</h6><a class="f-right" href="#">Mark all                            </a>
                  </div>
                  <ul>
                    <li>
                      <div class="media">
                        <div class="notification-img bg-light-primary"><img src="{{cdn}}public/assets/images/avtar/man.png" alt=""></div>
                        <div class="media-body">
                          <h5>Jhone Doe</h5>
                          <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="notification-right"><span>10:20</span><a href=""><i class="fa fa-share"></i></a><a class="text-danger" href=""><i class="fa fa-trash"></i></a></div>
                      </div>
                    </li>
                    <li> 
                      <div class="media">
                        <div class="notification-img bg-light-secondary"><img src="{{cdn}}public/assets/images/avtar/teacher.png" alt=""></div>
                        <div class="media-body">
                          <h5>Jhone Doe</h5>
                          <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="notification-right"><span>10:20</span><a href=""><i class="fa fa-share"></i></a><a class="text-danger" href=""><i class="fa fa-trash"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="notification-img bg-light-info"><img src="{{cdn}}public/assets/images/avtar/teenager.png" alt=""></div>
                        <div class="media-body">
                          <h5>Jhone Doe</h5>
                          <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="notification-right"><span>10:20</span><a href=""><i class="fa fa-share"></i></a><a class="text-danger" href=""><i class="fa fa-trash"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="notification-img bg-light-success"><img src="{{cdn}}public/assets/images/avtar/chinese.png" alt=""></div>
                        <div class="media-body">
                          <h5>Jhone Doe</h5>
                          <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="notification-right"><span>10:20</span><a href=""><i class="fa fa-share"></i></a><a class="text-danger" href=""><i class="fa fa-trash"></i></a></div>
                      </div>
                    </li>
                    <li class="p-0"><a class="btn btn-primary" href="#">Check all</a></li>
                  </ul>
                </div>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
                <div class="media profile-media"><img class="b-r-10" src="{{cdn}}public/assets/images/profile-image.png" alt="">
                  <div class="media-body"><span>{{office_user}}</span>
                    <!-- <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p> -->
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href=""><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href=""><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href=""><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href=""><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="{{cdn}}auth/logout"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends-->
