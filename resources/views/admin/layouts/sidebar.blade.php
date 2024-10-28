<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme"
    style="
  touch-action: none;
  user-select: none;
  -webkit-user-drag: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            {{-- <span class="app-brand-logo demo">
                
            </span> --}}
            <span class="app-brand-text demo menu-text fw-bold ms-2">C A B</span>
            {{-- <span class="">Curtain And Blinds</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 ps ps--active-y">
        <!-- Dashboards -->
        <li class="menu-item active">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboards">
                    Dashboards
                </div>
                
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate" data-i18n="Manage Users">Manage Users</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/user_create"
                        class="menu-link">
                        <div class="text-truncate" data-i18n=" Users Registration">
                            Users Registration
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('franchise.temp.index') }}"
                        class="menu-link">
                        <div class="text-truncate" data-i18n="Users Approval">
                            Users Approval
                        </div>
                    </a>
                </li>
                
                
            </ul>
        </li>

        <!-- Front Pages -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div class="text-truncate" data-i18n="Products">
                    Products
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href=""
                        class="menu-link" target="_blank">
                        <div class="text-truncate" data-i18n="Inventory">Inventory</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href=""
                        class="menu-link" target="_blank">
                        <div class="text-truncate" data-i18n="Product Attribute">Product Attribute</div>
                    </a>
                </li>
                
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                <div class="text-truncate" data-i18n="Roles &amp; Permissions">
                    Roles &amp; Permissions
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href=""
                        class="menu-link">
                        <div class="text-truncate" data-i18n="Roles">Roles</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href=""
                        class="menu-link">
                        <div class="text-truncate" data-i18n="Permission">
                            Permission
                        </div>
                    </a>
                </li>
            </ul>
        </li>


        <!-- Misc -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Reports">Reports</span>
        </li>
        <li class="menu-item">
            <a href="https://themeselection.com/support/" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div class="text-truncate" data-i18n="Sales Report">Sales Report</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div class="text-truncate" data-i18n="Pending Projects">
                    Pending Projects
                </div>
            </a>
        </li>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 843px; right: 4px">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 344px"></div>
        </div>
    </ul>
</aside>
