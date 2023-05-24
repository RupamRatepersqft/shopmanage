

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
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
                <div class="media profile-media"><img class="b-r-10" src="{{cdn}}public/assets/images/profile-image.png" alt="">
                  <div class="media-body"><span>{{office_user}}</span>
                    <!-- <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p> -->
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href=""><i data-feather="user"></i><span>Account </span></a></li>
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
