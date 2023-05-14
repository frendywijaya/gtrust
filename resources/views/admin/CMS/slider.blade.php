@extends('admin.layout.master')

@section('content')
    <!-- Simple thumbnail with image -->

    <div class="content">

        <div class="card">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">Social Media Link</h5>
                <div class="my-auto ms-auto">
                </div>
                <div class="my-auto ms-auto">
                    <button type="button" class="btn btn-primary btn-create"><i class="ph-plus-circle me-1"></i>
                        tambah banner</button>
                </div>
            </div>

            <!-- Widgets list -->
            <div class="row">
                <div class="col-lg-6 col-xl-4">
                    <div class="card m-3">
                        <div class="card-img-actions mx-1 mt-1">
                            <a href="#course_preview" class="d-inline-block position-relative" data-bs-toggle="modal">
                                <img src="{{ asset('admin/images/demo/flat/10.png') }}" class="img-fluid card-img"
                                    alt="">
                            </a>
                        </div>

                        <div class="card-body">
                            <h6 class="mb-1">Title</h6>
                            <p class="mb-3">Company Facilitation</p>
                            <h6 class="mb-1">Subtitle</h6>
                            <p class="mb-3">Unique Strategic Development</p>
                            <h6 class="mb-1">Content</h6>
                            <p class="mb-3">Seed project includes the most basic components that can help you in
                                development process.</p>

                        </div>

                        <div class="card-footer d-flex justify-content-between">
                            <span class="text-muted"></span>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#modal_edit">Edit</a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="modal"
                                        data-bs-target="#modal_delete">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /simple thumbnail with image -->
                </div>
            </div>

        </div>

    </div>

    <!-- modal detail -->
    <div id="modal_edit" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row mb-3 mt-2 pb-3 border-bottom">
                        <div class="col-lg-6">
                            <p class="fw-semibold">Footer Logo</p>
                            <input type="file" data-show-caption="true" data-show-upload="false" accept="image/*"
                                data-show-remove="false" id="file-input-company-logo" name="company_logo">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Title</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="sender_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Subtitle</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="sender_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Content</label>
                        <div class="col-lg-9">
                            <textarea class="form-control" name="sender_name"></textarea>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan <i
                            class="ph-check-square-offset ms-2"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal edit link -->
@endsection

@include('admin.layout.modal_delete')


@section('js')
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
