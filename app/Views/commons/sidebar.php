 <!-- Page Body Start-->
 <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper"> 
          <div>
            <div class="logo-wrapper"><a href="{{cdn}}"><h1 class="for-light">Shop Manage</h1><h1 class="for-dark text-white">Shop Manage</h1></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            </div>
            <div class="logo-icon-wrapper"><a href=""><img class="img-fluid" src="{{cdn}}public/assets/images/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href=""><img class="img-fluid" src="{{cdn}}public/assets/images/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title {% if sidebarHeader == 'Enquires' %}active{% endif %}" ><i data-feather="help-circle"></i><span >Sales</span></a>
                    <ul class="sidebar-submenu" style="{% if sidebarHeader == 'Enquires' %}overflow :visible;display: block !important;{% else %}display:none{% endif %}">
                      <li ><a class="{% if sidebar == 'contact_enquires' %}active{% endif %}" href="{{cdn}}sales/daily_sales">Daily Sales</a></li>
                    </ul>
                  </li>        
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->