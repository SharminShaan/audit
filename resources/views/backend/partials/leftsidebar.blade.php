<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      {{-- <span class="brand-text font-weight-light dashsidebar">ISLAM AFTAB KAMRUL & CO.
    </span> --}}
    <img src="{{ asset('frontend/assets/images/logo.png') }}" class="dashsidebar" alt="AdminLTE Logo">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{ route('themeoptions.index') }}" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                ThemeOptions

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('slider.index')}}" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Slider

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Category

              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p> Home Page <i class="fas fa-angle-left right"></i> </p> </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('homepage.whoweare')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Who We Are</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/profile.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Meet Our Team</p>
                  </a>
                </li>


              </ul>
         </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p> About Us  <i class="fas fa-angle-left right"></i> </p> </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Company Profile</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/profile.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Meet Our Team</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/e-commerce.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Affiliation</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/projects.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Enlistment</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/project-add.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Membership</p>
                  </a>
                </li>

              </ul>
         </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-ellipsis-h"></i>
              <p> Services  <i class="fas fa-angle-left right"></i> </p> </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Audit & Assurance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/profile.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Taxation & VAT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/e-commerce.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Advisory</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/projects.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Secretarial & compliance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/project-add.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Business Services</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/project-add.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Human Resources</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/project-add.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Training & Development</p>
                    </a>
                  </li>
              </ul>
         </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
              <p> Client <i class="fas fa-angle-left right"></i> </p> </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Financial Institutions</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/profile.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listed Companies</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/e-commerce.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>International Clients</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/projects.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Japanese Clients</p>
                  </a>
                </li>
              </ul>
         </li>

         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p> Media <i class="fas fa-angle-left right"></i> </p> </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Newsletter</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/profile.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Blog</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/e-commerce.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Publications</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/projects.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Gallery</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/projects.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Events</p>
                    </a>
                  </li>
              </ul>
         </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p> Career <i class="fas fa-angle-left right"></i> </p> </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Professional</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/profile.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Articleship</p>
                  </a>
                </li>
              </ul>
         </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Regulators</p> </a>
         </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
              <p>Contact Us</p> </a>
         </li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                LogOut
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

          </li> --}}
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{-- {{ Auth::user()->name }} --}}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
