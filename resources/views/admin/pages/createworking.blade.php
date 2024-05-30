@extends('admin.layouts.app')
@push('styles')
 <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/plugins/forms/form-quill-editor.css')}}">

@endpush
@push('content')



        <!-- full Editor start -->
        <section class="full-editor">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Full Editor</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                            </p>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="full-wrapper">
                                        <div id="full-container">
                                            <div class="editor">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- full Editor end -->


    </div>
@endpush
@push('scripts')
{{-- <script src="../../../app-assets/js/scripts/forms/form-quill-editor.js"></script> --}}
 <script src="https://cdn.quilljs.com/1.3.6/quill.min.js" type="text/javascript"></script>
 <script src="{{ asset('admin/js/scripts/forms/form-quill-editor.js') }}"></script>
@endpush