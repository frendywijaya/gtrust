@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pengaturan Footer</h5>
                    </div>

                    <div class="card-body">
                        <div class="mb-1">
                            <!-- Default input -->
                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Footer Title</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="sender_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">Footer Text</label>
                                <div class="col-lg-9">
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea" name="sender_address"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3 pb-3 border-bottom">
                                <label class="col-form-label col-lg-3">Footer Tagline</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="sender_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <p class="fw-semibold">Footer Logo</p>
                                    <input type="file" data-show-caption="true" data-show-upload="false" accept="image/*"
                                        data-show-remove="false" id="file-input-company-logo" name="company_logo">
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
        </div>
    </div>
    <!-- /content area -->
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
@endsection
