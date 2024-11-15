<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme"
    style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold ms-2">C A B</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 ps ps--active-y">
        @if (Auth::user()->getRoleNames()[0] == 'Super Admin')
        <!-- Super Admin Menu -->
        <li class="menu-item active">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate">Users</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="/user_create" class="menu-link">Users Registration</a></li>
                <li class="menu-item"><a href="/user_list" class="menu-link">Users List</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div class="text-truncate">Franchise</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="{{ route('franchise.temp.index') }}" class="menu-link">Manage Franchise</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div class="text-truncate">Products</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="/products" class="menu-link">Manage Products</a></li>
                <li class="menu-item"><a href="/product_create" class="menu-link">Add Products</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                <div class="text-truncate">Appointments</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="{{ route('appointments.list.index') }}" class="menu-link">Manage Appointments</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div class="text-truncate">Quotations</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="/quotations" class="menu-link">Manage Quotations</a></li>
            </ul>
        </li>
        {{-- <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Reports</span>
        </li>
        <li class="menu-item">
            <a href="/orders_report" class="menu-link">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div class="text-truncate">Order Report</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/appointments_report" class="menu-link">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div class="text-truncate">Appointment Report</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/franchise_report" class="menu-link">
                <div class="text-truncate">Franchise Report</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/users_report" class="menu-link">
                <div class="text-truncate">Users Report</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/invoice_report" class="menu-link">
                <div class="text-truncate">Invoices Report</div>
            </a>
        </li> --}}

        @elseif (Auth::user()->getRoleNames()[0] == 'Admin')
        <!-- Admin Menu -->
        <li class="menu-item active">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div class="text-truncate">Franchise</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="{{ route('franchise.temp.index') }}" class="menu-link">Manage Franchise</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div class="text-truncate">Products</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="/products" class="menu-link">Manage Products</a></li>
                <li class="menu-item"><a href="/product_create" class="menu-link">Add Products</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                <div class="text-truncate">Appointments</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="{{ route('appointments.list.index') }}" class="menu-link">Manage Appointments</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div class="text-truncate">Quotations</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="/quotations" class="menu-link">Manage Quotations</a></li>
            </ul>
        </li>

        @elseif (Auth::user()->getRoleNames()[0] == 'Franchise')
        <!-- Franchise Menu -->
        <li class="menu-item active">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div class="text-truncate">Products</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="/products" class="menu-link">View Products</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                <div class="text-truncate">Appointments</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="{{ route('appointments.list.index') }}" class="menu-link">Manage Appointments</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div class="text-truncate">Quotations</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="/quotations" class="menu-link">Manage Quotations</a></li>
            </ul>
        </li>
        
        <li class="menu-item">
            <a href="/add-member" class="menu-link">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div class="text-truncate">Add Member</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/faqs" class="menu-link">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div class="text-truncate">FAQ’s</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/tutorials" class="menu-link">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div class="text-truncate">Tutorials</div>
            </a>
        </li>

        @elseif (Auth::user()->getRoleNames()[0] == 'Help Desk')
        <!-- Help Desk Menu -->
        <li class="menu-item active">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                <div class="text-truncate">Appointments</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="{{ route('appointments.list.index') }}" class="menu-link">Manage Appointments</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div class="text-truncate">Quotations</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="/quotations" class="menu-link">Manage Quotations</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="/orders" class="menu-link">
                <div class="text-truncate">Orders</div>
            </a>
        </li>

        @elseif (Auth::user()->getRoleNames()[0] == 'Fulfillment Desk')
        <!-- Fulfillment Desk Menu -->
        <li class="menu-item active">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/orders" class="menu-link">
                <div class="text-truncate">Orders</div>
            </a>
        </li>

        @elseif (Auth::user()->getRoleNames()[0] == 'Data Entry Operator')
        <!-- Data Entry Operator Menu -->
        <li class="menu-item active">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div class="text-truncate">Products</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item"><a href="/products" class="menu-link">Manage Products</a></li>
                <li class="menu-item"><a href="/product_create" class="menu-link">Add Products</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="/blogs" class="menu-link">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div class="text-truncate">Blogs (Text/Videos)</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/faqs" class="menu-link">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div class="text-truncate">FAQ’s</div>
            </a>
        </li>

        @endif
    </ul>
</aside>
