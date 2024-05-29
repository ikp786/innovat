@extends('admin.layouts.app')
@push('styles')
    <style>
        <style>.show-more-button {
            color: #451275 !important;
        }
    </style>
    </style>
@endpush
@push('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <section id="advanced-search-datatable">
            <div class="row">
                <div class="col-12">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div class="alert-body">
                            {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div class="alert-body">
                            {{ session('error') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Services</h4>
                            <div class="dt-action-buttons text-end pt-3 pt-md-0">
                                <div class="dt-buttons"> <a href="{{ route('admin.services.create') }}"> <button
                                            class="btn btn-primary waves-effect waves-light" type="button">Add New</button>
                                    </a> </div>
                            </div>
                        </div>
                        <!--Search Form -->
                        <div class="card-body mt-2">
                            <form class="dt_adv_search" method="POST">
                                <div class="row g-1 mb-md-1">
                                    <div class="col-md-4">
                                        {!! html()->label('Title', 'title')->class('form-label') !!}
                                        {!! html()->text('title')->class('form-control dt-input dt-full-name')->id('title')->placeholder('Search Title') !!}
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr class="my-0" />
                        <div class="card-datatable">
                            <table class="dt-advanced-search table table-bordered yajra-datatable">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Title</th>
                                        <th>Inco</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endpush

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.table-bordered').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.services.index') }}",
                    data: function(d) {
                        // Add form data to the DataTables request
                        d.title = $('#title').val();
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'icon',
                        name: 'icon'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'full_description',
                        name: 'full_description'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ],
            });

            // Handle form field changes
            $('form.dt_adv_search input').on('keyup change input', function() {
                table.ajax.reload();
            });

        });

        $(document).on('click', '.delete-record', function() {
            var serviceId = $(this).data('id');
            // Display a confirmation dialog to confirm deletion
            if (confirm('Are you sure you want to delete this service?')) {
                $.ajax({
                    url: "{{ url('admin/services') }}/" + serviceId, // Use the url() function
                    type: 'DELETE',
                    data: {
                        '_token': '{{ csrf_token() }}', // You may need to pass CSRF token
                    },
                    success: function(res) {
                        if (res.status === 200) {
                            toastr.success(res.message);
                            window.location.href =
                                "{{ route('admin.services.index') }}";
                        }
                    },
                    error: function(xhr) {
                        toastr.error('Oops... Something went wrong. Please try again.');
                    }
                });
            }
        });

        $(document).on('change', '.status-toggle', function() {
            var serviceId = $(this).data('id');
            var status = $(this).prop('checked') ? 1 : 0;

            // Send an AJAX request to update the status
            $.ajax({
                url: "{{ route('admin.services.update-status', ['id' => ':id']) }}".replace(':id',
                    serviceId),
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'status': status
                },
                success: function(response) {
                    toastr.success(response.message);
                    // Optionally, you can perform additional actions upon success
                },
                error: function(xhr) {
                    toastr.error('Oops! Something went wrong.');
                    // Handle error response if needed
                }
            });
        });


        function toggleDescription(button) {
            var container = $(button).closest('.description-container');
            var shortenedDescription = container.find('.shortened-description');
            var fullDescription = container.find('.full-description');
            if (fullDescription.is(':visible')) {
                // If full Description are visible, toggle to show shortened description
                shortenedDescription.show();
                fullDescription.hide();
                $(button).text('Show More');
            } else {
                // If shortened Description are visible, toggle to show full description
                shortenedDescription.hide();
                fullDescription.show();
                $(button).text('Show Less');
            }
        }
    </script>
@endpush
