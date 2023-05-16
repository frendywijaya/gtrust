@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-12">
                <div class="card accordion" id="accordion-collapse">
                    <div class="accordion-item">
                        <div class="card-header accordion-header">
                            <button class="accordion-button fw-semibold collapsed ps-1 pb-1 mt-0 pt-1" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapsed_item1">
                                <h5 class="pb-0 mb-0">Section 1 - About</h5>
                            </button>
                            {{-- <h5 class="mb-0">Section 1 - About</h5> --}}
                        </div>
                        <div id="collapsed_item1" class="accordion-collapse collapse" data-bs-parent="#accordion_collapsed">
                            <div class="card-body accordion-body">
                                <div class="mb-1">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="sender_name">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="jabatan">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" id="ckeditor_classic_prefilled" name="bank_account" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Button Text</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="jabatan">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Button Link</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="jabatan">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-xl-6">
                                                    <label class="col-form-label col-lg-3">Image Text 1</label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" name="jabatan" placeholder="18 Years">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="col-form-label col-lg-3">Image Text 2</label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" name="jabatan" placeholder="Experience">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <div class="col-lg-12 mb-3">
                                                    <p class="fw-semibold">Image 1 Portrait</p>
                                                    <input type="file" data-show-caption="true" data-show-upload="false"
                                                        accept="image/*" data-show-remove="false"
                                                        id="file-input-company-logo" name="company_logo">
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <p class="fw-semibold">Image 2 Portrait</p>
                                                    <input type="file" data-show-caption="true" data-show-upload="false"
                                                        accept="image/*" data-show-remove="false" id="file-input-signature"
                                                        name="signature">
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <p class="fw-semibold">Image 3 Landscape</p>
                                                    <input type="file" data-show-caption="true" data-show-upload="false"
                                                        accept="image/*" data-show-remove="false" id="file-input-signature"
                                                        name="signature">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary btn-save">Simpan <i
                                                class="ph-check-square-offset ms-2"></i></button>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
            <!-- /input fields -->

        </div>
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
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/editors/ckeditor/ckeditor_classic.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/editor_ckeditor_classic.js') }}"></script>
@endsection
