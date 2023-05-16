@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Blog Content -->
        <div class="card col-xl-12">
            <div class="card-header d-flex align-item-center">
                <h5 class="mb-0">Project Editor</h5>
                <div class="d-flex justify-content-end align-items-end ms-auto">
                    <label class="form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" checked="">
                        <span class="form-check-label">Activate</span>
                    </label>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-xl-10">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-form-label col-lg-3">Project Title:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-10">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-form-label col-lg-3">Category:</label>
                                        <div class="col-lg-9">
                                            <select class="form-select" placeholder="">
                                                <option value="Learning">Learning</option>
                                                <option value="Facilitation">Facilitation</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 pb-3 border-bottom">
                            <label class="form-label">Slideshow Images:</label>
							<form action="#" class="dropzone" id="dropzone_multiple"></form>
                            <div class="form-text text-muted">Accepted formats: png, jpg. Max file size 2Mb</div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="ckeditor_classic_empty" placeholder="Enter your text..."></textarea>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-form-label col-lg-3">Project Date:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-form-label col-lg-3">Client:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-form-label col-lg-3">Participants:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-form-label col-lg-3">Goal:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-form-label col-lg-3">Activity:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Simpan <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </div>
        </div>
        <!-- /empty with placeholder -->

    </div>
    <!-- /content area -->
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/editor_ckeditor_classic.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/picker_date.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/uploaders/dropzone.min.js') }}"></script>
	<script src="{{ asset('admin/demo/pages/uploader_dropzone.js') }}"></script>
@endsection
