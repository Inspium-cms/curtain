<div class="sidebar">
    <div class="menu-btn"><i class="bi bi-list"></i></div>
    <div class="head">
        <div class="user-img">
            <img src="{{ asset('images/logo.svg') }}" alt="">
        </div>
    </div>
    <div class="nav">
        <div class="menu w-100">
            <ul class="p-0">
                @if (Auth::user()->getRoleNames()[0] == 'Super Admin')
                    <li class="active"><a href="{{ route('super.admin.dashboard') }}"><i class="bi bi-house"></i><span class="text">Dashboard</span></a></li>
                    <li><a href="/user_list"><i class="bi bi-people"></i><span class="text">Users</span></a></li>
                    <li><a href="{{ route('franchise.temp.index') }}"><i class="bi bi-building-add"></i><span class="text">Franchise</span></a></li>
                    <li><a href="/products"><i class="bi bi-box2"></i><span class="text">Products</span></a></li>
                    <li><a href="{{ route('appointments.list.index') }}"><i class="bi bi-journal"></i></i><span class="text">Appointments</span></a></li>
                    <li><a href=""><i class="bi bi-receipt-cutoff"></i><span class="text">Quotations</span></a></li>
                    <li><a href="#"><i class="bi bi-database"></i><span class="text">Masters</span><i class="arrow ph-bold ph-caret-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href=""><span class="text">ZIP Codes</span></a></li>
                            <li><a href=""><span class="text">Product Type</span></a></li>
                            <li><a href=""><span class="text">Supplier Name</span></a></li>
                            <li><a href=""><span class="text">Supplier Collection</span></a></li>
                            <li><a href=""><span class="text">Supplier Design</span></a></li>
                            <li><a href=""><span class="text">Color</span></a></li>
                            <li><a href=""><span class="text">Composition</span></a></li>
                            <li><a href=""><span class="text">Type</span></a></li>
                            <li><a href=""><span class="text">Usage</span></a></li>
                            <li><a href=""><span class="text">Design Type</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="bi bi-truck"></i><span class="text">Orders</span></a></li>
                    <li><a href="#"><i class="bi bi-file-earmark-bar-graph"></i><span class="text">Reports</span></a></li>
                @endif
                @if (Auth::user()->getRoleNames()[0] == 'Admin')
                    <li class="active"><a href="{{ route('super.admin.dashboard') }}"><i class="bi bi-house"></i><span class="text">Dashboard</span></a></li>
                    <li><a href="{{ route('franchise.temp.index') }}"><i class="bi bi-building-add"></i><span class="text">Franchise</span></a></li>
                    <li><a href="/products"><i class="bi bi-box2"></i><span class="text">Products</span></a></li>
                    <li><a href="{{ route('appointments.list.index') }}"><i class="bi bi-journal"></i></i><span class="text">Appointments</span></a></li>
                    <li><a href=""><i class="bi bi-receipt-cutoff"></i><span class="text">Quotations</span></a></li>
                    <li><a href="#"><i class="bi bi-database"></i><span class="text">Masters</span><i class="arrow ph-bold ph-caret-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href=""><span class="text">ZIP Codes</span></a></li>
                            <li><a href=""><span class="text">Product Type</span></a></li>
                            <li><a href=""><span class="text">Supplier Name</span></a></li>
                            <li><a href=""><span class="text">Supplier Collection</span></a></li>
                            <li><a href=""><span class="text">Supplier Design</span></a></li>
                            <li><a href=""><span class="text">Color</span></a></li>
                            <li><a href=""><span class="text">Composition</span></a></li>
                            <li><a href=""><span class="text">Type</span></a></li>
                            <li><a href=""><span class="text">Usage</span></a></li>
                            <li><a href=""><span class="text">Design Type</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="bi bi-truck"></i><span class="text">Orders</span></a></li>
                    <li><a href="#"><i class="bi bi-file-earmark-bar-graph"></i><span class="text">Reports</span></a></li>
                @endif
                @if (Auth::user()->getRoleNames()[0] == 'Franchise')
                    <li class="active"><a href="{{ route('super.admin.dashboard') }}"><i class="bi bi-house"></i><span class="text">Dashboard</span></a></li>
                    <li><a href="/products"><i class="bi bi-box2"></i><span class="text">Products</span></a></li>
                    <li><a href="{{ route('appointments.list.index') }}"><i class="bi bi-journal"></i></i><span class="text">Appointments</span></a></li>
                    <li><a href=""><i class="bi bi-receipt-cutoff"></i><span class="text">Quotations</span></a></li>
                    <li><a href="#"><i class="bi bi-file-earmark-bar-graph"></i><span class="text">Reports</span></a></li>

                @endif
                @if (Auth::user()->getRoleNames()[0] == 'Help Desk')
                    <li class="active"><a href="{{ route('super.admin.dashboard') }}"><i class="bi bi-house"></i><span class="text">Dashboard</span></a></li>
                    <li><a href="{{ route('appointments.list.index') }}"><i class="bi bi-journal"></i></i><span class="text">Appointments</span></a></li>
                    <li><a href=""><i class="bi bi-receipt-cutoff"></i><span class="text">Quotations</span></a></li>
                    <li><a href="#"><i class="bi bi-truck"></i><span class="text">Orders</span></a></li>
                    <li><a href="#"><i class="bi bi-file-earmark-bar-graph"></i><span class="text">Reports</span></a></li>
                @endif
                @if (Auth::user()->getRoleNames()[0] == 'Fulfillment Desk')
                    <li class="active"><a href="{{ route('super.admin.dashboard') }}"><i class="bi bi-house"></i><span class="text">Dashboard</span></a></li>
                    <li><a href="#"><i class="bi bi-truck"></i><span class="text">Orders</span></a></li>
                    <li><a href="#"><i class="bi bi-file-earmark-bar-graph"></i><span class="text">Reports</span></a></li>
                @endif
                @if (Auth::user()->getRoleNames()[0] == 'Data Entry Operator')
                    <li class="active"><a href="{{ route('super.admin.dashboard') }}"><i class="bi bi-house"></i><span class="text">Dashboard</span></a></li>
                    <li><a href="/products"><i class="bi bi-box2"></i><span class="text">Products</span></a></li>
                @endif
            </ul>
        </div>
    </div>
  </div>