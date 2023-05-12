@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic initialization -->
        <div class="card col-xl-8 col-md-12">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">Brand Logo</h5>
                <div class="my-auto ms-auto">
                </div>
                <div class="my-auto ms-auto">
                    <button type="button" class="btn btn-primary btn-create"><i class="ph-plus-circle me-1"></i>
                        tambah logo</button>
                </div>
            </div>
            <table class="table datatable-key-basic">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Brand Name</th>
                        <th>Logo</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#">Tips Mencari Ilmu di Kuliah</a></td>
                        <td><img class="w-30" src="{{ asset('frontend/img/brand/brand_img01.png') }}" class="img-fluid card-img" alt=""></td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Edit"
                                    data-bs-original-title="Edit" data-bs-toggle="modal" data-bs-target="#modal_edit" data-bs-toggle="modal" data-bs-target="#modal_edit">
                                    <i class="ph-pen"></i>
                                </a>
                                <a class="text-body mx-2 btn-delete" data-bs-toggle="modal" data-bs-target="#modal_delete"
                                    href="#" data-url="">
                                    <i class="ph-trash"></i>
                                </a>
                                {{-- <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Options" data-bs-original-title="Options">
                                    <i class="ph-gear"></i>
                                </a> --}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Weible</td>
                        <td><img class="w-30" src="{{ asset('frontend/img/brand/brand_img02.png') }}" class="img-fluid card-img" alt=""></td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Edit"
                                    data-bs-original-title="Edit" data-bs-toggle="modal" data-bs-target="#modal_edit">
                                    <i class="ph-pen"></i>
                                </a>
                                <a class="text-body mx-2 btn-delete" data-bs-toggle="modal" data-bs-target="#modal_delete"
                                    href="#" data-url="">
                                    <i class="ph-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Hard</td>
                        <td><img class="w-30" src="{{ asset('frontend/img/brand/brand_img03.png') }}" class="img-fluid card-img" alt=""></td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Edit"
                                    data-bs-original-title="Edit" data-bs-toggle="modal" data-bs-target="#modal_edit">
                                    <i class="ph-pen"></i>
                                </a>
                                <a class="text-body mx-2 btn-delete" data-bs-toggle="modal" data-bs-target="#modal_delete"
                                    href="#" data-url="">
                                    <i class="ph-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /basic initialization -->

    </div>
    <!-- /content area -->

    <!-- modal edit link -->
    <div id="modal_edit" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Link</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row mb-3 pb-3 border-bottom">
                        <label class="col-form-label col-lg-3">Brand Name</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="sender_name">
                        </div>
                    </div>
                    <div class="row mb-3 mt-2">
                        <div class="col-lg-6">
                            <p class="fw-semibold">Footer Logo</p>
                            <input type="file" data-show-caption="true" data-show-upload="false" accept="image/*"
                                data-show-remove="false" id="file-input-company-logo" name="company_logo">
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

    @include('admin.layout.modal_delete')
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
