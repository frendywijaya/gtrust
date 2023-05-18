@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic initialization -->
        <div class="card col-xl-8 col-md-12">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3" id="title-page">Brand Logo</h5>
                <div class="my-auto ms-auto">
                </div>
                <div class="my-auto ms-auto">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal_form" data-url="{{route('admin.global.brand_logo.store') }}" 
                    class="btn btn-primary btn-create"><i class="ph-plus-circle me-1"></i>
                        tambah logo</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Brand Name</th>
                        <th>Logo</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($brandLogos as $brandLogo)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $brandLogo->title }}</td>
                        <td><img class="w-30" width="100" src="{{ asset('uploads/brand-logo/'.$brandLogo->image) }}" class="img-fluid card-img" alt=""></td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body btn-edit" data-bs-popup="tooltip" aria-label="Edit"
                                    data-bs-original-title="Edit" data-url="{{route('admin.global.brand_logo.update' , $brandLogo->id)}}" data-bs-toggle="modal" data-bs-target="#modal_form" data-item="{{json_encode($brandLogo)}}">
                                    <i class="ph-pen"></i>
                                </a>
                                <a class="text-body mx-2 btn-delete" data-bs-toggle="modal" data-bs-target="#modal_delete"
                                    href="#" data-url="{{route('admin.global.brand_logo.destroy' , $brandLogo->id)}}">
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
                        <div class="row mb-3 pb-3 border-bottom">
                            <label class="col-form-label col-lg-3">Brand Name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="title">
                            </div>
                        </div>
                        <div class="row mb-3 mt-2">
                            <div class="col-lg-6">
                                <p class="fw-semibold">Footer Logo</p>
                                <input type="file" data-show-caption="true" data-show-upload="false" accept="image/*"
                                    data-show-remove="false" id="file-input-company-logo" class="form-dynamic file-upload" name="image">
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
