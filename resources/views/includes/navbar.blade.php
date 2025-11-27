          <!DOCTYPE html>
          <html lang="en">
          <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
          </head>
          <style>
            /* ====== GLOBAL STYLE ====== */
                body {
                    background: #f2f4f8;
                    font-family: "Nunito", sans-serif;
                }

                .navbar {
                    background: white;
                    border-bottom: 2px solid #e5e9f0;
                }

                .navbar-brand {
                    font-weight: 700;
                    font-size: 1.3rem;
                    color: #1e40af !important;
                }

                .nav-link {
                    font-weight: 600;
                    color: #374151 !important;
                }

                .nav-link:hover {
                    color: #1e40af !important;
                }

                /* ====== DROPDOWN STYLE ====== */
                .dropdown-menu {
                    border-radius: 10px;
                    padding: 10px 0;
                }

                .dropdown-item {
                    font-weight: 500;
                }

                .dropdown-item:hover {
                    background-color: #e5e7eb;
                }

                /* ====== MAIN CONTENT ====== */
                main {
                    padding-top: 25px;
                }

                /* ====== CARD STYLE ====== */
                .card {
                    border: none;
                    border-radius: 16px;
                    box-shadow: 0px 4px 12px rgba(0,0,0,0.07);
                }

                .card-header {
                    border-radius: 16px 16px 0 0 !important;
                    background: #1e40af;
                    color: white;
                    font-size: 1.1rem;
                    font-weight: 600;
                }

                /* ====== SELECT2 CUSTOM ====== */
                .select2-container--default .select2-selection--multiple {
                    border-radius: 12px;
                    border: 1px solid #a1a1aa;
                    padding: 6px;
                    min-height: 45px;
                }

                .select2-container--default .select2-selection--multiple .select2-selection__choice {
                    background-color: #1e40af;
                    border-radius: 8px;
                    padding: 4px 10px;
                    font-size: 0.85rem;
                    color: white;
                }

                /* ====== BUTTON STYLE ====== */
                .btn-primary {
                    background: #1e40af;
                    border: none;
                    border-radius: 10px;
                    font-weight: 600;
                }

                .btn-primary:hover {
                    background: #1d4ed8;
                }

          </style>
          <body>
            
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            <small class="text-muted">{{ Auth::user()->email }}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}" 
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          </body>
          </html>
          