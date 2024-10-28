@extends('admin.layouts.app')

@section('title', 'Franchise Temp List')

@section('content')
<style>
  table>thead{
    background: #6a6cff;
  }
  table > thead > tr > th{
    color: #ffffff !important;
  }
</style>
    <div class="card">
        <h5 class="card-header pb-0 text-md-start text-center">
            Franchise  List
        </h5>
        <div class="nav-align-top nav-tabs-shadow mb-6">
          <ul class="nav nav-tabs nav-fill" role="tablist">
            <li class="nav-item" role="presentation">
              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true"><span class="d-none d-sm-block"><i class="tf-icons bx bx-loader bx-sm me-1_5 align-text-bottom"></i> Pending List <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger ms-1_5 pt-50">3</span></span><i class="bx bx-home bx-sm d-sm-none"></i></button>
            </li>
            <li class="nav-item" role="presentation">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" aria-selected="false" tabindex="-1"><span class="d-none d-sm-block"><i class="tf-icons bx bxs-user-check bx-sm me-1_5 align-text-bottom"></i> Approved Users List</span><i class="bx bx-user bx-sm d-sm-none"></i></button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade active show" id="navs-justified-home" role="tabpanel">
              <div class="card-datatable table-responsive">
                <table class="dt-responsive table border-top">
                    <thead>
                        <tr>
                            
                            <th>Company Name</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Pincode</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Approve</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($franchiseTemps as $franchise)
                            <tr>
                                
                                <td>{{ $franchise->company_name }}</td>
                                <td>{{ $franchise->name }}</td>
                                <td>{{ $franchise->email }}</td>
                                <td>{{ $franchise->mobile }}</td>
                                <td>{{ $franchise->address }}</td>
                                <td>{{ $franchise->pincode }}</td>
                                <td>{{ $franchise->city }}</td>
                                <td>{{ $franchise->state }}</td>
                                <td>{{ $franchise->country }}</td>
                                <td>
                                  <a href="javascript:void(0);" 
                                  class="btn rounded-pill btn-icon btn-success" 
                                      onclick="confirmApproval('{{ route('franchise.approve', $franchise->id) }}')">
                                      <i class='bx bxs-user-check'></i>
                                  </a>    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
            <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
              <div class="card-datatable table-responsive">
                <table class="dt-responsive1 table border-top">
                    <thead>
                        <tr>
                            
                            <th>Company Name</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Pincode</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Country</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($franchises as $franchise)
                            <tr>
                                
                                <td>{{ $franchise->company_name }}</td>
                                <td>{{ $franchise->user->name }}</td>
                                <td>{{ $franchise->user->email }}</td>
                                <td>{{ $franchise->mobile }}</td>
                                <td>{{ $franchise->address }}</td>
                                <td>{{ $franchise->pincode }}</td>
                                <td>{{ $franchise->city }}</td>
                                <td>{{ $franchise->state }}</td>
                                <td>{{ $franchise->country }}</td>
                           
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        
    </div>
@endsection

@section('script')
<script>
  function confirmApproval(url) {
      Swal.fire({
          title: 'Are you sure?',
          text: "Do you want to approve this franchise?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, approve it!'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = url;
          }
      });
  }
  @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
            confirmButtonColor: '#3085d6'
        });
    @endif
</script>

    <script>
        $(document).ready(function(){
            $(".dt-responsive").dataTable({
              responsive: true,
              columnDefs: [
                  { responsivePriority: 1, targets: 0 },
                  { responsivePriority: 2, targets: -1 }
              ]
            });
            $(".dt-responsive1").dataTable({
              responsive: true,
              columnDefs: [
                  { responsivePriority: 1, targets: 0 },
                  { responsivePriority: 2, targets: -1 }
              ]
            });
        });
    </script>
@endsection
