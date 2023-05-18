@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Expanded state -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Learning Page Content Management</h5>
            </div>

            <div class="card-body">
                <div class="accordion" id="accordion_expanded">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#expanded_item1">
                                Section 1 - Breadcrumb Cover
                            </button>
                        </h2>
                        <div id="expanded_item1" class="accordion-collapse collapse show"
                            data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <!-- Default input -->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="row mb-3">
                                            <div class="col-lg-12 mb-3">
                                                <p class="fw-semibold">Cover Image</p>
                                                <input type="file" class="file-input">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#expanded_item2">
                                Section 2 - About Learning Service
                            </button>
                        </h2>
                        <div id="expanded_item2" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <!-- Default input -->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Section Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Section Subtitle</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="jabatan">
                                            </div>
                                        </div>
                                        <div class="row mb-3 pb-3 border-bottom">
                                            <label class="col-form-label col-lg-3">Section Text</label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" id="ckeditor_classic_empty" name="jabatan"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Image Text 1</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="jabatan">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Image Text 2</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="jabatan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="fw-bold border-bottom pb-2 mb-3">Learning Image Cover</div>
                                        <div class="row mb-3">
                                            <input type="file" class="file-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#expanded_item3">
                                Section 3 - Process
                            </button>
                        </h2>
                        <div id="expanded_item3" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="fw-bold border-bottom pb-2 mb-3">Slot 1</div>
                                        <div class="row mb-3">
                                            <input type="file" class="file-input">
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Text</label>
                                            <div class="col-lg-9">
                                                <Textarea type="text" class="form-control" name="sender_name" rows="5"></Textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="fw-bold border-bottom pb-2 mb-3">Slot 2</div>
                                        <div class="row mb-3">
                                            <input type="file" class="file-input">
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Text</label>
                                            <div class="col-lg-9">
                                                <Textarea type="text" class="form-control" name="sender_name" rows="5"></Textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="fw-bold border-bottom pb-2 mb-3">Slot 3</div>
                                        <div class="row mb-3">
                                            <input type="file" class="file-input">
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Text</label>
                                            <div class="col-lg-9">
                                                <Textarea type="text" class="form-control" name="sender_name" rows="5"></Textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="fw-bold border-bottom pb-2 mb-3">Slot 4</div>
                                        <div class="row mb-3">
                                            <input type="file" class="file-input">
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Text</label>
                                            <div class="col-lg-9">
                                                <Textarea type="text" class="form-control" name="sender_name" rows="5"></Textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#expanded_item4">
                                Section 4 - Sub Services List
                            </button>
                        </h2>
                        <div id="expanded_item4" class="accordion-collapse collapse"
                            data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <!-- Basic initialization -->
                                <div class="card col-xl-12 col-md-12">
                                    <div class="card-header d-flex align-items-center py-0">
                                        <h5 class="mb-0 py-3">Sub Services List</h5>
                                        <div class="my-auto ms-auto">
                                        </div>
                                        <div class="my-auto ms-auto">
                                            <a href="#" class="btn btn-primary btn-create" data-bs-toggle="modal"
                                                data-bs-target="#modal_form"><i class="ph-plus-circle me-1"></i>
                                                tambah sub service</a>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Title</th>
                                                <th>Subtitle</th>
                                                <th>Deskripsi</th>
                                                <th>Image</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Strategic Planning</td>
                                                <td>Lorem Ipsum Dolor Sit Amet</td>
                                                <td>Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet</td>
                                                <td><img src="{{ asset('frontend/img/banner/banner_bg.jpg') }}" style="height: 50px;"></td>
                                                <td class="text-center">
                                                    <div class="d-inline-flex">
                                                        <a href="#" class="text-body" data-bs-popup="tooltip"
                                                            aria-label="Edit" data-bs-original-title="Edit"
                                                            data-bs-toggle="modal" data-bs-target="#modal_form">
                                                            <i class="ph-pen"></i>
                                                        </a>
                                                        <a href="#" class="text-body mx-2" data-bs-popup="tooltip"
                                                            aria-label="Remove" data-bs-original-title="Remove"
                                                            data-bs-toggle="modal" data-bs-target="#modal_delete">
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
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#expanded_item5">
                                Section 5 - Method
                            </button>
                        </h2>
                        <div id="expanded_item5" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="fw-bold border-bottom pb-2 mb-3">Slot 1</div>
                                        <div class="row mb-3">
                                            <input type="file" class="file-input">
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Text</label>
                                            <div class="col-lg-9">
                                                <Textarea type="text" class="form-control" name="sender_name" rows="5"></Textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="fw-bold border-bottom pb-2 mb-3">Slot 2</div>
                                        <div class="row mb-3">
                                            <input type="file" class="file-input">
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Text</label>
                                            <div class="col-lg-9">
                                                <Textarea type="text" class="form-control" name="sender_name" rows="5"></Textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="fw-bold border-bottom pb-2 mb-3">Slot 3</div>
                                        <div class="row mb-3">
                                            <input type="file" class="file-input">
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="sender_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Text</label>
                                            <div class="col-lg-9">
                                                <Textarea type="text" class="form-control" name="sender_name" rows="5"></Textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#expanded_item6">
                                Section 6 - File Downloads
                            </button>
                        </h2>
                        <div id="expanded_item6" class="accordion-collapse collapse"
                            data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <!-- Default input -->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-12">File 1</label>
                                            <div class="col-lg-12">
                                                <input type="file" class="file-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-12">File 2</label>
                                            <div class="col-lg-12">
                                                <input type="file" class="file-input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary btn-save">Simpan <i
                            class="ph-check-square-offset ms-2"></i></button>
                </div>
            </div>
        </div>
        <!-- /expanded state -->
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
                            <div class="col-lg-12 justify-content-center">
                                <p class="fw-semibold">Sub Service Image</p>
                                <input type="file" class="file-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Title</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Subtitle</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control form-dynamic" name="title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Deskripsi</label>
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
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
