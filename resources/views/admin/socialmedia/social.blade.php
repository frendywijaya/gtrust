@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic initialization -->
        <div class="card col-xl-6 col-md-12">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">Social Media Link</h5>
                <div class="my-auto ms-auto">
                </div>
                {{-- <div class="my-auto ms-auto">
                    <button type="button" class="btn btn-primary btn-create"><i class="ph-plus-circle me-1"></i>
                        tambah blog</button>
                </div> --}}
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Facebook</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-facebook-logo"></i></span>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">instagram</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-instagram-logo"></i></span>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">LinkedIn</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-linkedin-logo"></i></span>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">Youtube</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-youtube-logo"></i></span>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-form-label col-lg-3">Tiktok</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <span class="input-group-text"><i class="ph-tiktok-logo"></i></span>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary btn-save">Simpan <i
                        class="ph-check-square-offset ms-2"></i></button>
            </div>
        </div>
        <!-- /basic initialization -->

    </div>
    <!-- /content area -->
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
@endsection
