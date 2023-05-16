@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic initialization -->
        <div class="card col-xl-8 col-md-12">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">Blog Category</h5>
                <div class="my-auto ms-auto">
                </div>
                <div class="my-auto ms-auto">
                    <a href="#" class="btn btn-primary btn-create" data-bs-toggle="modal"
                    data-bs-target="#modal_edit"><i
                            class="ph-plus-circle me-1"></i>
                        tambah kategori</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Kategori</th>
                        <th>Jumlah Post</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Management</td>
                        <td>12</td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Edit"
                                    data-bs-original-title="Edit" data-bs-toggle="modal"
                                    data-bs-target="#modal_edit">
                                    <i class="ph-pen"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" aria-label="Remove"
                                    data-bs-original-title="Remove" data-bs-toggle="modal"
                                    data-bs-target="#modal_delete">
                                    <i class="ph-trash"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Options"
                                    data-bs-original-title="Options">
                                    <i class="ph-eye"></i>
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

    <!-- modal detail -->
    <div id="modal_edit" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-3">Judul Kategori</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="sender_name">
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
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
