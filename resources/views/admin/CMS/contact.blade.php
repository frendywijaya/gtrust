@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Expanded state -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Contact Page Content Management</h5>
            </div>

            <div class="card-body">
                <div class="accordion" id="accordion_expanded">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#expanded_item1">
                                Section 1 - Breadcrumb Cover
                            </button>
                        </h2>
                        <div id="expanded_item1" class="accordion-collapse collapse show"
                            data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <!-- Default input -->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="row mb-3">
                                            <div class="col-lg-12 mb-3">
                                                <p class="fw-semibold">Cover Image</p>
                                                <input type="file" class="file-input">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#expanded_item2">
                                Section 2 - Left Section
                            </button>
                        </h2>
                        <div id="expanded_item2" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <!-- Default input -->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Section Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Section Text</label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" id="ckeditor_classic_empty" name="jabatan"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Button Text</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#expanded_item3">
                                Section 3 - Right Section
                            </button>
                        </h2>
                        <div id="expanded_item3" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <!-- Default input -->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Section Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Section Text</label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" id="ckeditor_classic_empty" name="jabatan"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Google Map Link</label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" name="jabatan" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary btn-save">Simpan <i
                            class="ph-check-square-offset ms-2"></i></button>
                </div>
            </div>
        </div>
        <!-- /expanded state -->
    </div>
    <!-- /content area -->

    <!-- modal edit link -->
    <div id="modal_edit" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <h6 class="fw-semibold">Judul Pesan</h6>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent
                        commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet
                        rutrum faucibus dolor auctor.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal edit link -->

    @include('admin.layout.modal_delete')
@endsection

@section('js')
    {{-- <script src="{{ asset('admin/js/vendor/uploaders/dropzone.min.js') }}"></script> --}}
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/vendor/editors/ckeditor/ckeditor_classic.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/editor_ckeditor_classic.js') }}"></script> --}}
@endsection
