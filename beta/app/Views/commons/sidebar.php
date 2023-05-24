 <!-- Page Body Start-->
 <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper"> 
          <div>
            <div class="logo-wrapper"><a href="{{cdn}}"><img class="img-fluid for-light" src="{{cdn}}public/image/logo/rpsf_logo_(White).png" alt=""><img class="img-fluid for-dark" src="{{cdn}}public/image/logo/RPSF-Logo-4.png" alt=""></a>
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
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title {% if sidebarHeader == 'Enquires' %}active{% endif %}" ><i data-feather="help-circle"></i><span >Enquires</span></a>
                    <ul class="sidebar-submenu" style="{% if sidebarHeader == 'Enquires' %}overflow :visible;display: block !important;{% else %}display:none{% endif %}">
                      <li ><a class="{% if sidebar == 'contact_enquires' %}active{% endif %}" href="{{cdn}}ourservices/contact_enquires">Contact us</a></li>
                      <li><a class="{% if sidebar == 'our_service_enquiries' %}active{% endif %}" href="{{cdn}}ourservices/our_service_enquiries">Our Services</a></li>
                      <li><a class="{% if sidebar == 'property_enquiries' %}active{% endif %}" href="{{cdn}}ourservices/property_enquiries">Property</a></li>
                      <li><a class="{% if sidebar == 'thirdparty_service_enquiries' %}active{% endif %}" href="{{cdn}}ourservices/thirdparty_service_enquiries">Third Party Services</a></li>
                      <li><a class="{% if sidebar == 'project_queries' %}active{% endif %}" href="{{cdn}}ourservices/project_queries">Project Queries</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title " ><i data-feather="users"></i><span >Users</span></a>
                    <ul class="sidebar-submenu" style="{% if sidebarHeader == 'Users' %}overflow :visible;display: block !important;{% else %}display:none{% endif %}">
                      <li><a class="{% if sidebar == 'mongo_user' %}active{% endif %}" href="{{cdn}}home/mongo_user">Website Users</a></li>
                      <li><a class="{% if sidebar == 'newsletter_subscriber' %}active{% endif %}" href="{{cdn}}home/newsletter_subscriber">Newsletter Subscribers</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-light-primary">2</label><a class="sidebar-link sidebar-title" href="#"><i data-feather="home"></i><span class="lan-3">Dashboard</span></a>
                    <ul class="sidebar-submenu" style="display:none">
                      <li><a class="lan-4" href="">Default</a></li>
                      <li><a class="lan-5" href="">E-commerce</a></li>
                      <li><a href="">Crypto</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" ><i data-feather="airplay"></i><span class="lan-6">Widgets</span></a>
                    <ul class="sidebar-submenu" style="display:none">
                      <li><a href="">General</a></li>
                      <li><a href="">Chart</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" ><i data-feather="shopping-bag"></i><span>E-commerce</span></a>
                    <ul class="sidebar-submenu" style="display:none">
                      <li><a href="">Product</a></li>
                      <li><a href="">Product page</a></li>
                      <li><a href="">Product list</a></li>
                      <li><a href="">Payment Details</a></li>
                      <li><a href="">Order History</a></li>
                      <li><a href="">Invoice</a></li>
                      <li><a href="">Cart</a></li>
                      <li><a href="">Wishlist</a></li>
                      <li><a href="">Checkout</a></li>
                      <li><a href="">Pricing</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" ><i data-feather="list"> </i><span>Contacts</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" ><i data-feather="check-square"> </i><span>Tasks</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" ><i data-feather="clock"> </i><span>To-Do</span></a></li>
                  <li class="mega-menu sidebar-list"><a class="sidebar-link sidebar-title"><i data-feather="layers"></i><span>Others</span></a>
                    <div class="mega-menu-container menu-content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Error Page</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="">Error 404</a></li>
                                <li><a href="">Error 500</a></li>
                                <li><a href="">Error 503</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Authentication</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="" target="_blank">Login Simple</a></li>
                                <li><a href="" target="_blank">Login with bg image</a></li>
                                <li><a href="" target="_blank">Login with image two                      </a></li>
                                <li><a href="" target="_blank">Login With validation</a></li>
                                <li><a href="" target="_blank">Register Simple</a></li>
                                <li><a href="" target="_blank">Register with Bg Image                             </a></li>
                                <li><a href="" target="_blank">Register with Bg video</a></li>
                                <li><a href="" target="_blank">Register wizard</a></li>
                                <li><a href="">Unlock User</a></li>
                                <li><a href="">Forget Password</a></li>
                                <li><a href="">Reset Password</a></li>
                                <li><a href="">Maintenance</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Coming Soon</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="">Coming Simple</a></li>
                                <li><a href="">Coming with Bg Image</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Email templates</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="">Basic Email</a></li>
                                <li><a href="">Basic With Header</a></li>
                                <li><a href="">Ecomerce Template</a></li>
                                <li><a href="">Email Template 2</a></li>
                                <li><a href="">Ecommerce Email</a></li>
                                <li><a href="">Order Success</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" ><i data-feather="image"></i><span>Gallery</span></a>
                    <ul class="sidebar-submenu" style="display:none">
                      <li><a href="">Gallery Grid</a></li>
                      <li><a href="">Gallery Grid Desc</a></li>
                      <li><a href="">Masonry Gallery</a></li>
                      <li><a href="">Masonry with Desc</a></li>
                      <li><a href="">Hover Effects</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" ><i data-feather="map"></i><span>Maps</span></a>
                    <ul class="sidebar-submenu" style="display:none">
                      <li><a href="">Maps JS</a></li>
                      <li><a href="">Vector Maps</a></li>
                    </ul>
                  </li>                 
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->