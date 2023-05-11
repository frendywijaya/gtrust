@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic initialization -->
        <div class="card col-xl-10 col-md-12">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">Blog List</h5>
                <div class="my-auto ms-auto">
                </div>
                <div class="my-auto ms-auto">
                    <button type="button" class="btn btn-primary btn-create"><i class="ph-plus-circle me-1"></i>
                        tambah blog</button>
                </div>
            </div>
            <table class="table datatable-key-basic">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Blog</th>
                        <th>Ketegori</th>
                        <th>Tanggal Rilis</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#">Tips Mencari Ilmu di Kuliah</a></td>
                        <td>Keuangan</td>
                        <td>22 Jun 1972</td>
                        <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Edit" data-bs-original-title="Edit">
                                    <i class="ph-pen"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" aria-label="Remove" data-bs-original-title="Remove">
                                    <i class="ph-trash"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Options" data-bs-original-title="Options">
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
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
