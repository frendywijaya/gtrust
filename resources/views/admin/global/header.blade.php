@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pengaturan Header</h5>
                    </div>

                    <div class="card-body">
                        <div class="mb-1">
                            <!-- Default input -->
                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Welcome Text</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="sender_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Jabatan</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="jabatan"
                                        >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Alamat Pengirim</label>
                                <div class="col-lg-9">
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="sender_address"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Email</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="email"
                                        >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">No Telpon</label>
                                <div class="col-lg-9">
                                    <input type="number" class="form-control" name="phone"
                                        >
                                </div>
                            </div>
                            <div class="row mb-3 pb-4 border-bottom">
                                <label class="col-form-label col-lg-3">Rekening</label>
                                <div class="col-lg-9">
                                    <input type="number" class="form-control" name="bank_account"
                                        >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <p class="fw-semibold">Logo Company</p>
                                    <input type="file" data-show-caption="true" data-show-upload="false" accept="image/*"
                                        data-show-remove="false" id="file-input-company-logo" name="company_logo">
                                </div>
                                <div class="col-lg-6">
                                    <p class="fw-semibold">Tanda Tangan</p>
                                    <input type="file" data-show-caption="true" data-show-upload="false" accept="image/*"
                                        data-show-remove="false" id="file-input-signature" name="signature">
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
            <!-- /input fields -->

            <!-- Card Kanan -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-10">
                        <!-- Table Metode Pembayaran -->
                        <div class="card">
                            <div class="card-header d-flex align-items-center py-0">
                                <h5 class="mb-0 py-3">Other Services Link</h5>
                                <div class="my-auto ms-auto">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal_metode"
                                        data-url="" class="btn btn-primary"><i
                                            class="ph-plus-circle me-1"></i>tambah link</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="bg-dark text-white">
                                            <th>Title</th>
                                            <th>Link</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Talenesia</td>
                                            <td>https://talenesia.id</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" class="text-body btn-edit" data-bs-toggle="modal"
                                                        data-bs-target="#modal_metode"
                                                        data-url=""
                                                        data-item="">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <a class="text-body mx-2 btn-delete" data-bs-toggle="modal"
                                                        data-bs-target="#modal_hapus" href="#"
                                                        data-url="">
                                                        <i class="ph-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        {{-- @foreach ($payments as $k => $item)
                                            <tr>
                                                <td>{{ $k + 1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="#" class="text-body btn-edit" data-bs-toggle="modal"
                                                            data-bs-target="#modal_metode"
                                                            data-url=""
                                                            data-item="">
                                                            <i class="ph-pen"></i>
                                                        </a>
                                                        <a class="text-body mx-2 btn-delete" data-bs-toggle="modal"
                                                            data-bs-target="#modal_hapus" href="#"
                                                            data-url="">
                                                            <i class="ph-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /Table Metode Pembayaran -->
                    </div>

                </div>

            </div>
            <!-- /Card Kanan -->

        </div>
    </div>
    <!-- /content area -->
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
@endsection
