<nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
            >
            <div
              class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none"
            >
              <a
                class="nav-item nav-link px-0 me-xl-6"
                href="javascript:void(0)"
              >
                <i class="bx bx-menu bx-md"></i>
              </a>
            </div>

            <div
              class="navbar-nav-right d-flex align-items-center"
              id="navbar-collapse"
            >
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item navbar-search-wrapper mb-0">
                  {{-- <a
                    class="nav-item nav-link search-toggler px-0"
                    href="javascript:void(0);"
                  >
                    <i class="bx bx-search bx-md"></i>
                    <span
                      class="d-none d-md-inline-block text-muted fw-normal ms-4"
                      >Search (Ctrl+/)</span
                    >
                  </a> --}}
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                
                
                <!-- Notification -->
                <li
                  class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2"
                >
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false"
                  >
                    <span class="position-relative">
                      <i class="bx bx-bell bx-md"></i>
                      <span
                        class="badge rounded-pill bg-danger badge-dot badge-notifications border"
                      ></span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end p-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div
                        class="dropdown-header d-flex align-items-center py-3"
                      >
                        <h6 class="mb-0 me-auto">Notification</h6>
                        <div class="d-flex align-items-center h6 mb-0">
                          <span class="badge bg-label-primary me-2">8 New</span>
                          <a
                            href="javascript:void(0)"
                            class="dropdown-notifications-all p-2"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            aria-label="Mark all as read"
                            data-bs-original-title="Mark all as read"
                            ><i class="bx bx-envelope-open text-heading"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                    <li
                      class="dropdown-notifications-list scrollable-container ps"
                    >
                      <ul class="list-group list-group-flush">
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img
                                  src="./assets/1.png"
                                  alt=""
                                  class="rounded-circle"
                                />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">
                                Congratulation Lettie 🎉
                              </h6>
                              <small class="mb-1 d-block text-body"
                                >Won the monthly best seller gold badge</small
                              >
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span
                                  class="avatar-initial rounded-circle bg-label-danger"
                                  >CF</span
                                >
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">Charles Franklin</h6>
                              <small class="mb-1 d-block text-body"
                                >Accepted your connection</small
                              >
                              <small class="text-muted">12hr ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img
                                  src="./assets/2.png"
                                  alt=""
                                  class="rounded-circle"
                                />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">New Message ✉️</h6>
                              <small class="mb-1 d-block text-body"
                                >You have new message from Natalie</small
                              >
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span
                                  class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="bx bx-cart"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">
                                Whoo! You have new order 🛒
                              </h6>
                              <small class="mb-1 d-block text-body"
                                >ACME Inc. made new order $1,154</small
                              >
                              <small class="text-muted">1 day ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img
                                  src="./assets/9.png"
                                  alt=""
                                  class="rounded-circle"
                                />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">
                                Application has been approved 🚀
                              </h6>
                              <small class="mb-1 d-block text-body"
                                >Your ABC project application has been
                                approved.</small
                              >
                              <small class="text-muted">2 days ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span
                                  class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="bx bx-pie-chart-alt"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">
                                Monthly report is generated
                              </h6>
                              <small class="mb-1 d-block text-body"
                                >July monthly financial report is generated
                              </small>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img
                                  src="./assets/5.png"
                                  alt=""
                                  class="rounded-circle"
                                />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">
                                Send connection request
                              </h6>
                              <small class="mb-1 d-block text-body"
                                >Peter sent you connection request</small
                              >
                              <small class="text-muted">4 days ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img
                                  src="./assets/6.png"
                                  alt=""
                                  class="rounded-circle"
                                />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">New message from Jane</h6>
                              <small class="mb-1 d-block text-body"
                                >Your have new message from Jane</small
                              >
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span
                                  class="avatar-initial rounded-circle bg-label-warning"
                                  ><i class="bx bx-error"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">CPU is running high</h6>
                              <small class="mb-1 d-block text-body"
                                >CPU Utilization Percent is currently at
                                88.63%,</small
                              >
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                        <div
                          class="ps__thumb-x"
                          tabindex="0"
                          style="left: 0px; width: 0px"
                        ></div>
                      </div>
                      <div class="ps__rail-y" style="top: 0px; right: 0px">
                        <div
                          class="ps__thumb-y"
                          tabindex="0"
                          style="top: 0px; height: 0px"
                        ></div>
                      </div>
                    </li>
                    <li class="border-top">
                      <div class="d-grid p-4">
                        <a
                          class="btn btn-primary btn-sm d-flex"
                          href="javascript:void(0);"
                        >
                          <small class="align-middle"
                            >View all notifications</small
                          >
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ Notification -->
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                  >
                    <div class="avatar avatar-online">
                      <img
                        src="./assets/1.png"
                        alt=""
                        class="w-px-40 h-auto rounded-circle"
                      />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a
                        class="dropdown-item"
                        href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/pages-account-settings-account.html"
                      >
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img
                                src="./assets/1.png"
                                alt=""
                                class="w-px-40 h-auto rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                            <small class="text-muted">{{ Auth::user()->getRoleNames()[0] }}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/pages-profile-user.html"
                      >
                        <i class="bx bx-user bx-md me-3"></i
                        ><span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/pages-account-settings-account.html"
                      >
                        <i class="bx bx-cog bx-md me-3"></i
                        ><span>Settings</span>
                      </a>
                    </li>
                    
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class='bx bx-log-out'></i> {{ __('Logout') }}
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

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <span
                class="twitter-typeahead"
                style="position: relative; display: inline-block"
                ><input
                  type="text"
                  class="form-control search-input container-xxl border-0 tt-input"
                  placeholder="Search..."
                  aria-label="Search..."
                  autocomplete="off"
                  spellcheck="false"
                  dir="auto"
                  style="position: relative; vertical-align: top" />
                <pre
                  aria-hidden="true"
                  style="
                    position: absolute;
                    visibility: hidden;
                    white-space: pre;
                    font-family: 'Public Sans', -apple-system,
                      BlinkMacSystemFont, 'Segoe UI', Oxygen, Ubuntu, Cantarell,
                      'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
                    font-size: 15px;
                    font-style: normal;
                    font-variant: normal;
                    font-weight: 400;
                    word-spacing: 0px;
                    letter-spacing: 0px;
                    text-indent: 0px;
                    text-rendering: auto;
                    text-transform: none;
                  "
                ></pre>
                <div
                  class="tt-menu navbar-search-suggestion ps"
                  style="
                    position: absolute;
                    top: 100%;
                    left: 0px;
                    z-index: 100;
                    display: none;
                  "
                >
                  <div class="tt-dataset tt-dataset-pages"></div>
                  <div class="tt-dataset tt-dataset-files"></div>
                  <div class="tt-dataset tt-dataset-members"></div>
                  <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                    <div
                      class="ps__thumb-x"
                      tabindex="0"
                      style="left: 0px; width: 0px"
                    ></div>
                  </div>
                  <div class="ps__rail-y" style="top: 0px; right: 0px">
                    <div
                      class="ps__thumb-y"
                      tabindex="0"
                      style="top: 0px; height: 0px"
                    ></div>
                  </div></div
              ></span>
              <i class="bx bx-x bx-md search-toggler cursor-pointer"></i>
            </div>
          </nav>