@extends('admin.layouts.app')

@section('title', 'User List')

@section('content')
<div class="dataOverviewSection mt-3">
    <div class="section-title">
        <h6 class="fw-bold m-0">All Users <span class="fw-normal text-muted">({{ count($users) }})</span></h6>
        <a href="#" class="primary-btn addBtn" data-bs-toggle="modal" data-bs-target="#addUserModal">+ Add
            Users</a>
    </div>

    <!-- Add User Modal Start -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="formAuthentication" method="POST" action="{{ route('custom.register.submit') }}" >
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addUserModalLabel">Add User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-1 w-100">
                        <label for="name" class="form-label mb-1">Name</label>
                        <input type="text" class="form-control w-100" @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <div id="passwordHelpBlock" class="form-text xsmall">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1 w-100">
                        <label for="email" class="form-label mb-1">Email ID</label>
                        <input type="email" class="form-control w-100" @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div id="passwordHelpBlock" class="form-text xsmall">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1 w-100">
                        <label for="password" class="form-label mb-1">Password</label>
                        <input type="password" @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" required autofocus class="form-control w-100"
                            aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text xsmall">
                            Your password must be 8-20 characters long</div>
                            @error('password')
                                <div id="passwordHelpBlock" class="form-text xsmall">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-1 w-100">
                        <label for="password_confirmation" class="form-label mb-1">Confirm Password</label>
                        <input type="password" @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus class="form-control w-100"
                            aria-describedby="passwordHelpBlock">
                            @error('password_confirmation')
                                <div id="passwordHelpBlock" class="form-text xsmall">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-1 w-100">
                        <label for="role" class="form-label mb-1">Select Role</label>
                        <select class="form-select form-select-lg mb-3 w-100" @error('role') is-invalid @enderror" id="role" name="role" required autofocus
                            aria-label="Large select example">
                            <option value="">Select</option>
                                <option value="Admin">Admin</option>
                                <option value="Help Desk">Help Desk</option>
                                <option value="Fulfillment Desk">Fulfillment Desk</option>
                                <option value="Data Entry Operator">Data Entry Operator</option>
                                <option value="Accounts">Accounts</option>
                                <option value="Franchise">Franchise</option>
                                <option value="Franchise Team Member">Franchise Team Member</option>
                        </select>
                        @error('role')
                            <div id="passwordHelpBlock" class="form-text xsmall">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="secondary-btn addBtn"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="primary-btn addBtn">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add User Modal End -->
    <div class="dataOverview mt-3">
        <div class="table-responsive">
            <table class="table" id="projectsTable">
                <thead>
                    <tr>
                        <th style="border-top-left-radius: 6px; border-bottom-left-radius: 6px;"
                            scope="col">S/N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email ID</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th style="border-top-right-radius: 6px; border-bottom-right-radius: 6px;"
                            scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $idx=>$user)
                    <tr>
                        <td>{{ $idx+1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->getRoleNames()[0] }}</td>
                        <td><span class="badge badge-active">Active</span></td>
                        <td>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item small" href="#">Edit</a></li>
                                    <li><a class="dropdown-item small" href="#" data-bs-toggle="modal"
                                            data-bs-target="#changePasswordModal">Change Password</a>
                                    </li>
                                    <li><a class="dropdown-item small" href="#">Active</a></li>
                                    <li><a class="dropdown-item small" href="#" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

