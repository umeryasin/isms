          <div class="sidebar">
            <ul class="iconMenu-bar custom-scrollbar">
              <li id="sidebar-dashboard">
                <a class="bar-icons" href="javascript:void(0)">
                  <!--img(src='../assets/images/menu/home.png' alt='')--><i class="pe-7s-home"></i><span>General    </span>
                </a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Dashboard</li>
                  <li>
                    <a id="sidebar-dashboard-main" href="{{ route('admin_dashboard') }}">Main</a></li>
                </ul>
              </li>
              <li id="sidebar-settings">
                <a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-portfolio"></i><span>Settings</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Settings</li>
                  <li><a id="sidebar-settings-general-settings" href="{{ route('admin_settings_general_settings') }}">General Settings</a></li>
                  <li><a id="sidebar-settings-payment-settings" href="{{ route('admin_settings_payment_settings') }}">Payment Settings</a></li>
                  <li><a id="sidebar-settings-sms-settings" href="{{ route('admin_settings_sms_settings') }}">SMS Settings</a></li>
                  <li><a id="sidebar-settings-email-settings" href="{{ route('admin_settings_email_settings') }}">Email Settings</a></li>
                  <li><a id="sidebar-settings-academic-year" href="{{ route('admin_settings_academic_year') }}">Academic Year</a></li>
                  <li><a href="grid.html">User Role</a></li>
                  <li><a href="#">Role Permision</a></li>
                  <li><a href="#">Manage Super Admin</a></li>
                  <li><a href="#">Manage User</a></li>
                  <li><a href="#">Reset User Password</a></li>
                  <li><a href="#">Reset Username</a></li>
                  <li><a href="#">User Credientials</a></li>
                  <li><a href="#">Activity Log</a></li>
                  <li><a href="#">Manage Feedback</a></li>
                  <li><a href="#">Backup Datebase</a></li>
                </ul>
              </li>
              <li id="sidebar-school-management">
                <a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-diamond"></i><span>School</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">School Management</li>
                  <li>
                    <a id="sidebar-school-management-add-school" href="{{ route('admin_school_management_add_school') }}">Schools</a>
                  </li>
                  <li>
                    <a id="sidebar-school-management-add-branch" href="{{ route('admin_school_management_add_branch') }}">Branches</a>
                  </li>
                </ul>
              </li>


              <li id="sidebar-teacher-management">
                <a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-note2"></i><span>Teacher</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Teachers Management</li>
                  <li>
                    <a id="sidebar-teacher-management-add-teacher" href="{{ route('admin_teacher_management_add_teacher') }}">Teacher</a>
                  </li>
                </ul>
              </li>
              <li id="sidebar-student-management">
                <a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-id"></i><span>Student</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Student Management</li>
                  <li>
                    <a id="sidebar-student-management-add-student-type" href="{{ route('admin_student_management_add_student_type') }}">Student Type</a>
                  </li>
                  <li>
                    <a id="sidebar-student-management-add-student" href="{{ route('admin_student_management_add_student') }}">Student</a>
                  </li>

                  <!-- <li><a href="bootstrap-border-table.html">Border Tables</a></li>
                  <li><a href="bootstrap-styling-table.html">Styling Tables</a></li>
                  <li><a href="table-components.html">Table components</a></li> -->
                  
                 
                </ul>
              </li>
              <!--<li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-graph3"></i><span>Charts</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Charts</li>
                  <li><a href="chart-apex.html">Apex Chart</a></li>
                  <li><a href="chart-google.html">Google Chart</a></li>
                  <li><a href="chart-sparkline.html">sparkline chart</a></li>
                  <li><a href="chart-flot.html">Flot Chart</a></li>
                  <li><a href="chart-knob.html">Knob Chart</a></li>
                  <li><a href="chart-morris.html">Morris Chart</a></li>
                  <li><a href="chartjs.html">chatjs Chart</a></li>
                  <li><a href="chartist.html">chartist Chart</a></li>
                  <li><a href="chart-peity.html">Peity Chart</a></li>
                </ul>
              </li>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-server"></i><span>Apps</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">Ecommerce</li>
                  <li><a href="product.html">Product</a></li>
                  <li><a href="product-page.html">Product page</a></li>
                  <li><a href="list-products.html">Product list</a></li>
                  <li><a href="payment-details.html">Payment Details</a></li>
                  <li><a href="order-history.html">Order History</a></li>
                  <li><a href="invoice-template.html">Invoice</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li class="iconbar-header sub-header"> Blog</li>
                  <li><a href="blog.html">Blog Details</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                  <li><a href="add-post.html">Add Post</a></li>
                  <li class="iconbar-header sub-header">Timeline</li>
                  <li><a href="timeline-v-1.html">Timeline 1</a></li>
                  <li><a href="timeline-v-2.html">Timeline 2</a></li>
                  <li><a href="timeline-small.html">Timeline 3</a></li>
                  <li class="iconbar-header sub-header"> Gallery</li>
                  <li><a href="gallery.html">Gallery Grid</a></li>
                  <li><a href="gallery-with-description.html">Gallery Grid with Desc</a></li>
                  <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                  <li><a href="masonry-gallery-with-disc.html">Masonry Gallery Desc</a></li>
                  <li><a href="gallery-hover.html">Hover Effects</a></li>
                  <li class="iconbar-header sub-header">Job Search</li>
                  <li><a href="job-cards-view.html">Cards view</a></li>
                  <li><a href="job-list-view.html">List View</a></li>
                  <li><a href="job-details.html">Job Details</a></li>
                  <li><a href="job-apply.html">Apply</a></li>
                  <li class="iconbar-header sub-header">Learning</li>
                  <li><a href="learning-list-view.html">Learning List</a></li>
                  <li><a href="learning-detailed.html">Detailed Course                </a></li>
                </ul>
              </li>
              <li><span class="badge badge-pill badge-primary">New</span><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-gift"></i><span>Apps</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">User</li>
                  <li><a href="user-profile.html">Users Profile</a></li>
                  <li><a href="edit-profile.html">Users Edit</a></li>
                  <li><a href="user-cards.html">Users Cards</a></li>
                  <li><a href="email-application.html">Email App</a></li>
                  <li><a href="email-compose.html">Email Compose</a></li>
                  <li><a href="chat.html">Chat App</a></li>
                  <li><a href="chat-video.html">Video chat</a></li>
                  <li><a href="calendar-basic.html">Calender Basic</a></li>
                  <li> <a href="social-app.html">Social App</a></li>
                  <li><a href="to-do.html">To-Do</a></li>
                  <li class="iconbar-header sub-header">Editors</li>
                  <li><a href="summernote.html">Summer Note</a></li>
                  <li><a href="ckeditor.html">CK editor</a></li>
                  <li><a href="simple-MDE.html">MDE editor</a></li>
                  <li><a href="ace-code-editor.html">ACE code editor</a></li>
                  <li class="iconbar-header sub-header">Others</li>
                  <li><a href="landing-page.html">Landing page</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="knowledgebase.html">Knowledgebase</a></li>
                  <li><a href="internationalization.html">Internationalization</a></li>
                  <li class="iconbar-header sub-header">Maps</li>
                  <li><a href="map-js.html">Maps JS</a></li>
                  <li><a href="vector-map.html">Vector Maps           </a></li>
                </ul>
              </li>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-copy-file"></i><span>Pages</span></a>
                <ul class="iconbar-mainmenu custom-scrollbar">
                  <li class="iconbar-header">All Pages</li>
                  <li><a href="sample-page.html">Sample page</a></li>
                  <li><a href="support-ticket.html">Support Ticket</a></li>
                  <li><a href="search.html">Search Website</a></li>
                  <li><a href="error-400.html">Error 400</a></li>
                  <li><a href="error-404.html">Error 404</a></li>
                  <li><a href="error-500.html">Error 500</a></li>
                  <li><a href="maintenance.html">Maintenance</a></li>
                  <li><a href="login.html">Login Simple</a></li>
                  <li><a href="signup.html">Register Simple</a></li>
                  <li><a href="forget-password.html">Forget Password</a></li>
                  <li><a href="comingsoon.html">Coming Simple</a></li>
                  <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                  <li><a href="comingsoon-bg-img.html">Coming with Bg Image               </a></li>
                </ul>
              </li> -->
            </ul>
          </div>