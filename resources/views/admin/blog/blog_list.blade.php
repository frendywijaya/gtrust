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
                    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary btn-create"><i class="ph-plus-circle me-1"></i>
                        tambah blog</a>
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
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($blogs as $blog)
                    <tr>
                        <td>{{$no++}}</td>
                        <td><a href="#">{{$blog->title}}</a></td>
                        <td>{{$blog->category->title}}</td>
                        <td>{{date('d M Y', strtotime($blog->date))}}</td>
                        @if ($blog->status == 1)
                            <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                        @else 
                            <td><span class="badge bg-danger bg-opacity-10 text-danger">Inactive</span></td>
                        @endif
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="{{route('admin.blog.edit', $blog->id)}}" class="text-body" data-bs-popup="tooltip" aria-label="Edit" data-bs-original-title="Edit">
                                    <i class="ph-pen"></i>
                                </a>
                                <a href="#" class="text-body mx-2 btn-delete" btn-delete" data-bs-toggle="modal" data-bs-target="#modal_delete" 
                                    data-bs-popup="tooltip" aria-label="Remove" data-bs-original-title="Remove" data-url="{{route('admin.blog.destroy' , $blog->id)}}">
                                    <i class="ph-trash"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Options" data-bs-original-title="Options">
                                    <i class="ph-eye"></i>
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

    @include('admin.layout.modal_delete')
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
