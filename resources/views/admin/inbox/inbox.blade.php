@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic initialization -->
        <div class="card col-xl-12 col-md-12">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">Daftar Inbox</h5>
                <div class="my-auto ms-auto">
                </div>
                {{-- <div class="my-auto ms-auto">
                    <button type="button" class="btn btn-primary btn-create"><i class="ph-plus-circle me-1"></i>
                        tambah blog</button>
                </div> --}}
            </div>
            <table class="table datatable-key-basic">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pengirim</th>
                        <th>Perusahaan</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th>Waktu</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bambang</a></td>
                        <td>Sinarmas</td>
                        <td>08199233232</td>
                        <td>bambang@gmail.com</td>
                        <td>20 April 2023</td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" aria-label="Remove" data-bs-original-title="Remove" data-bs-toggle="modal" data-bs-target="#modal_delete">
                                    <i class="ph-trash"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Options" data-bs-original-title="view" data-bs-toggle="modal" data-bs-target="#modal_view">
                                    <i class="ph-eye"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Weible</td>
                        <td>Gramedia Group</a></td>
                        <td>08199233232</td>
                        <td>bambang@gmail.com</td>
                        <td>20 April 2023</td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" aria-label="Remove" data-bs-original-title="Remove" data-bs-toggle="modal" data-bs-target="#modal_delete">
                                    <i class="ph-trash"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Options" data-bs-original-title="view" data-bs-toggle="modal" data-bs-target="#modal_view">
                                    <i class="ph-eye"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Hard</td>
                        <td>Kompas</td>
                        <td>08199233232</td>
                        <td>bambang@gmail.com</td>
                        <td>20 April 2023</td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" aria-label="Remove" data-bs-original-title="Remove" data-bs-toggle="modal" data-bs-target="#modal_delete">
                                    <i class="ph-trash"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Options" data-bs-original-title="view" data-bs-toggle="modal" data-bs-target="#modal_view">
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


    <!-- inbox detail modal -->
	<div id="modal_view" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Detail Pesan</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<div class="modal-body">
					<h6 class="fw-semibold">Judul Pesan</h6>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>

				<div class="modal-footer">
                    <button type="button" class="btn btn-danger">Delete</button>
					<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /inbox detail modal -->
@endsection

@include('admin.layout.modal_delete')

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
