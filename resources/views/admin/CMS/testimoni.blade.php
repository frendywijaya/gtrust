@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic initialization -->
        <div class="card col-xl-10 col-md-12">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">Testimoni List</h5>
                <div class="my-auto ms-auto">
                </div>
                <div class="my-auto ms-auto">
                    <a href="#" class="btn btn-primary btn-create" data-bs-toggle="modal" data-bs-target="#modal_form"><i class="ph-plus-circle me-1"></i>
                        tambah testimoni</a>
                </div>
            </div>
            <table class="table datatable-key-basic">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Testimonial</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Star Hasugian</td>
                    <td>Founder</td>
                        <td>Lorem Ipsum Dolor Sit Amet</td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Edit" data-bs-original-title="Edit" data-bs-toggle="modal" data-bs-target="#modal_form">
                                    <i class="ph-pen"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" aria-label="Remove" data-bs-original-title="Remove" data-bs-toggle="modal" data-bs-target="#modal_delete">
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
    <div id="modal_form" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Link</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <div class="modal-body">
                        <div class="row mb-3 mt-2 justify-content-center pb-3 border-bottom">
                            <div class="col-lg-6 justify-content-center">
                                <p class="fw-semibold">Client Photo</p>
                                <input type="file" class="file-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Nama Lengkap</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Jabatan</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Testimonial</label>
                            <div class="col-lg-9">
                                <textarea class="form-control form-dynamic" id="ckeditor_classic_empty" name="title"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan <i
                            class="ph-check-square-offset ms-2"></i></button>
                    </div>

                </form>

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
