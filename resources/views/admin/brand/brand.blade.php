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
                        <td>Keuangan</td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Edit"
                                    data-bs-original-title="Edit">
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
                        <td><a href="#">Airline Transport Pilot</a></td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Edit"
                                    data-bs-original-title="Edit">
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
                        <td>Business Services Sales Representative</td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Edit"
                                    data-bs-original-title="Edit">
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

    @include('admin.layout.modal_delete')
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
