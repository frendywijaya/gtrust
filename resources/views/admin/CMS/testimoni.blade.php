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
                    <a href="#" class="btn btn-primary btn-create" data-url="{{route('admin.cms.testimoni.store') }}"   data-bs-toggle="modal" data-bs-target="#modal_form"><i class="ph-plus-circle me-1"></i>
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
                    @php
                        $no = 1;
                    @endphp
                    @foreach($testimonies as $testimony)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$testimony->name}}</td>
                        <td>{{$testimony->position}}</td>
                        <td>{{$testimony->description}}</td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body btn-edit" data-bs-popup="tooltip" aria-label="Edit"
                                    data-bs-original-title="Edit" data-url="{{route('admin.cms.testimoni.update' , $testimony->id)}}" data-bs-toggle="modal" data-bs-target="#modal_form" data-item="{{json_encode($testimony)}}">
                                    <i class="ph-pen"></i>
                                </a>
                                <a class="text-body mx-2 btn-delete" data-bs-toggle="modal" data-bs-target="#modal_delete"
                                    href="#" data-url="{{route('admin.cms.testimoni.destroy' , $testimony->id)}}">
                                    <i class="ph-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
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
                                <input type="file" class="file-input file-upload form-dynamic" data-path="{{asset($path)}}" name="image" 
                                accept="image/*" data-default="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Nama Lengkap</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Jabatan</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="position">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Testimonial</label>
                            <div class="col-lg-9">
                                <textarea class="form-control form-dynamic" id="ckeditor_classic_empty" name="testimoni"></textarea>
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
