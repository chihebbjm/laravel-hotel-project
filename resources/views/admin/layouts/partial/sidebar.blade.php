<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('backend/dist/img/AdminLTELogo.png')}}" alt="Sheraton Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Administration</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
                  <li class="nav-item">
                    <a href="{{ url('/slider') }}" class="nav-link">
                        <i class="fas fa-photo-video nav-icon "></i>
                       <p>
                        Gérer Sliders
                      </p>
                    </a>
                  </li>
              <li class="nav-item">
                    <a href="{{ url('/galerie') }}" class="nav-link">
                        <i class="fas fa-images nav-icon "></i>
                        <p>
                        Gérer Galeries
                        </p>
                    </a>
                </li>
             
              
                <li class="nav-item">
                    <a href="{{ url('/reservation-admin')}}" class="nav-link">
                        <i class="fas fa-concierge-bell nav-icon"></i>
                        <p>
                            Consulter les Réservations
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/commodites') }}" class="nav-link">
                        <i class="fas fa-folder-plus nav-icon"></i>
                        <p>
                        Gérer Commodités
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="{{ url('/chambres') }}" class="nav-link">
                        <i class="fas fa-bed nav-icon"></i>
                        <p>
                            Gérer Chambres
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/contact-admin')}}" class="nav-link">
                        <i class="fas fa-envelope nav-icon"></i>
                        <p>
                            Consulter Contacts
                        </p>
                    </a>
                </li>


              </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
