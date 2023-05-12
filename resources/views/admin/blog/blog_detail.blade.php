@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Blog Content -->
        <div class="card col-xl-8">
            <div class="card-header d-flex align-item-center">
                <h5 class="mb-0">Blog Editor</h5>
                <div class="d-flex justify-content-end align-items-end ms-auto">
                    <label class="form-check form-check-inline form-switch">
                        <input type="checkbox" class="form-check-input" checked="">
                        <span class="form-check-label">Activate</span>
                    </label>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <label class="form-label">Title:</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="mb-3">
                            <label class="form-label">Category:</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="mb-3">
                            <label class="form-label">Writer:</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <label class="form-label">Timestamp:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                            <input type="text" class="form-control daterange-single" value="03/18/2020">
                        </div>
                    </div>
                </div>
                    <div class="mb-3 pb-3 border-bottom">
                        <label class="form-label">Blog Cover Image:</label>
                        <input type="file" class="form-control">
                        <div class="form-text text-muted">Accepted formats: png, jpg. Max file size 2Mb</div>
                    </div>


                <form action="#">
                    <div class="mb-3">
                        <textarea class="form-control" id="ckeditor_classic_empty" placeholder="Enter your text..." rows="50"></textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan <i
                                class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>
                </form>
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
@endsection
