@extends('admin.layouts.app')
@section('title', 'Manage Suppliers Collection')
@section('content')
<div class="dataOverviewSection mt-3">
    <div class="section-title">
        <h6 class="fw-bold m-0">All Supplier Collection <span class="fw-normal text-muted">({{ $collections->count() }})</span></h6>
        <a href="#" class="primary-btn addBtn" data-bs-toggle="modal" data-bs-target="#addCollectionModal">+
            Add Supplier Collection</a>
    </div>

    <!-- Add Supplier Collection Modal Start -->
    <div class="modal fade" id="addCollectionModal" tabindex="-1" aria-labelledby="addCollectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addCollectionModalLabel">Add Supplier Collection</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('supplier-collections.store') }}" method="POST" id="collectionForm">
                    @csrf
                    <input type="hidden" name="_method" value="POST" id="methodFieldCollection">
                    <div class="modal-body">
                        <div class="mb-1 w-100">
                            <label for="CollectionInput" class="form-label mb-1">Supplier Collection <span class="text-danger">*</span></label>
                            <input type="text" class="form-control w-100" id="CollectionInput" name="collection_name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="secondary-btn addBtn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="primary-btn addBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add Supplier Collection Modal End -->

    <div class="dataOverview mt-3">
        <div class="table-responsive">
            <table class="table" id="projectsTable">
                <thead>
                    <tr>
                        <th style="border-top-left-radius: 6px; border-bottom-left-radius: 6px;"
                            scope="col">S/N</th>
                        <th scope="col">Supplier Collection</th>
                        <th style="border-top-right-radius: 6px; border-bottom-right-radius: 6px;"
                            scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($collections as $collection)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $collection->collection_name }}</td>
                        <td>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item small" href="#" onclick="editCollection({{ $collection->id }})">Edit</a></li>
                                    <li>
                                        <button type="button" class="dropdown-item small text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setDeleteId({{ $collection->id }})">
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
    // Edit collection
    function editCollection(id) {
        fetch(`/supplier-collections/${id}/edit`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('CollectionInput').value = data.collection_name;
                document.getElementById('methodFieldCollection').value = 'PUT'; // For updating
                document.querySelector('#collectionForm').action = `/supplier-collections/${id}`; // Set form action

                // Update modal title
                document.querySelector('#addCollectionModalLabel').textContent = 'Edit Supplier Collection';
            });

        // Show modal
        new bootstrap.Modal(document.getElementById('addCollectionModal')).show();
    }

    $(document).ready(function() {
        // Form Validation
        $("#collectionForm").validate({
            rules: {
                collection_name: {
                    required: true,
                    maxlength: 255
                }
            },
            messages: {
                collection_name: {
                    required: "Please enter the collection name",
                    maxlength: "Collection name must not exceed 255 characters"
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

        // Reset form when modal is closed
        $('#addCollectionModal').on('hidden.bs.modal', function () {
            $('#collectionForm')[0].reset();
            $('#collectionForm').validate().resetForm();
        });

        $('#addCollectionModal').on('show.bs.modal', function () {
            $('#collectionForm').validate().resetForm();
        });
    });

    // Delete collection ID
    let deleteId = null;

    function setDeleteId(id) {
        deleteId = id;
    }

    // Confirm Delete
    document.getElementById('confirmDelete').addEventListener('click', function () {
        if (deleteId) {
            const form = document.createElement('form');
            form.action = `/supplier-collections/${deleteId}`;
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
