@extends('admin.layouts.app')
@section('title', 'Manage Supplier Collection Design')
@section('content')
<div class="dataOverviewSection mt-3">
    <div class="section-title">
        <h6 class="fw-bold m-0">All Supplier Collection Design <span class="fw-normal text-muted">({{ $supplierCollectionDesigns->count() }})</span></h6>
        <a href="#" class="primary-btn addBtn" data-bs-toggle="modal" data-bs-target="#addSupplierCollectionDesignModal">+
            Add Supplier Collection Design</a>
    </div>

    <!-- Add Supplier Collection Design Modal Start -->
    <div class="modal fade" id="addSupplierCollectionDesignModal" tabindex="-1" aria-labelledby="addSupplierCollectionDesignModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addSupplierCollectionDesignModalLabel">Add Supplier Collection Design</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('supplierCollectionDesigns.store') }}" method="POST" id="supplierCollectionDesignForm">
                    @csrf
                    <input type="hidden" name="_method" value="POST" id="methodFieldSupplierCollectionDesign">
                    <div class="modal-body">
                        <div class="mb-1 w-100">
                            <label for="SupplierCollectionDesignInput" class="form-label mb-1">Supplier Collection Design <span class="text-danger">*</span></label>
                            <input type="text" class="form-control w-100" id="SupplierCollectionDesignInput" name="design_name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="secondary-btn addBtn"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="primary-btn addBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add Supplier Collection Design Modal End -->

    <div class="dataOverview mt-3">
        <div class="table-responsive">
            <table class="table" id="projectsTable">
                <thead>
                    <tr>
                        <th style="border-top-left-radius: 6px; border-bottom-left-radius: 6px;"
                            scope="col">S/N</th>
                        <th scope="col">Supplier Collection Design</th>
                        <th style="border-top-right-radius: 6px; border-bottom-right-radius: 6px;"
                            scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($supplierCollectionDesigns as $design)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $design->design_name }}</td>
                        <td>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item small" href="#" onclick="editSupplierCollectionDesign({{ $design->id }})">Edit</a></li>
                                    <li>
                                        <button type="button" class="dropdown-item small text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setDeleteId({{ $design->id }})">
                                            Delete
                                        </button>
                                    </li>
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

@section('script')
<script>
    function editSupplierCollectionDesign(id) {
        fetch(`/supplierCollectionDesigns/${id}/edit`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('SupplierCollectionDesignInput').value = data.design_name;
                document.getElementById('methodFieldSupplierCollectionDesign').value = 'PUT'; // For updating
                document.querySelector('#supplierCollectionDesignForm').action = `/supplierCollectionDesigns/${id}`; // Set form action

                // Update modal title
                document.querySelector('#addSupplierCollectionDesignModalLabel').textContent = 'Edit Supplier Collection Design';
            });

        // Show modal
        new bootstrap.Modal(document.getElementById('addSupplierCollectionDesignModal')).show();
    }

    $(document).ready(function() {
        $("#supplierCollectionDesignForm").validate({
            rules: {
                design_name: {
                    required: true,
                    maxlength: 255
                }
            },
            messages: {
                design_name: {
                    required: "Please enter the design name",
                    maxlength: "Design name must not exceed 255 characters"
                }
            },
            errorElement: "div",
            errorPlacement: function (error, element) {
                error.addClass("form-text text-danger xsmall");
                error.insertAfter(element);
            },
            highlight: function (element) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function (element) {
                $(element).removeClass("is-invalid").addClass("is-valid");
            }
        });

        $('#addSupplierCollectionDesignModal').on('hidden.bs.modal', function () {
            $('#supplierCollectionDesignForm')[0].reset();
            $('#supplierCollectionDesignForm').validate().resetForm();
        });

        $('#addSupplierCollectionDesignModal').on('show.bs.modal', function () {
            $('#supplierCollectionDesignForm').validate().resetForm();
        });
    });

    let deleteId = null;

    function setDeleteId(id) {
        deleteId = id;
    }

    document.getElementById('confirmDelete').addEventListener('click', function () {
        if (deleteId) {
            const form = document.createElement('form');
            form.action = `/supplierCollectionDesigns/${deleteId}`;
            form.method = 'POST';
            form.innerHTML = `
                @csrf
                @method('DELETE')
            `;
            document.body.appendChild(form);
            form.submit();
        }
    });
</script>
@endsection
