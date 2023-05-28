@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Expanded state -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Facilitation Page Content Management</h5>
            </div>
            <form action="{{ route('admin.staticpage.save', 'servicefacilitation') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                                                    <input type="file" class="file-input file-upload" name="breadcrumb_cover_image" 
                                                    accept="image/*" data-default="{{@$staticPage->breadcrumb_cover_image}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="breadcrum_title" value="{{@$staticPage->breadcrum_title}}">
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
                                    Section 2 - About Facilitation Service
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
                                                    <input type="text" class="form-control" name="about_section_title" value="{{@$staticPage->about_section_title}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_section_subtitle" value="{{@$staticPage->about_section_subtitle}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3 pb-3 border-bottom">
                                                <label class="col-form-label col-lg-3">Section Text</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" id="ckeditor_classic_empty" name="about_section_text">
                                                        {{@$staticPage->about_section_text}}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Image Text 1</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_section_text_1" value="{{@$staticPage->about_section_text_1}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Image Text 2</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_section_text_2" value="{{@$staticPage->about_section_text_2}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Facilitation Image Cover</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="about_facilitation_image_cover" 
                                                    accept="image/*" data-default="{{@$staticPage->about_facilitation_image_cover}}">
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
                                                <input type="file" class="file-input file-upload" name="process_slot_1" 
                                                    accept="image/*" data-default="{{@$staticPage->process_slot_1}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="process_title_1" value="{{@$staticPage->process_title_1}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <Textarea type="text" class="form-control" name="process_text_1" rows="5">
                                                        {{@$staticPage->process_text_1}}
                                                    </Textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 2</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="process_slot_2" 
                                                    accept="image/*" data-default="{{@$staticPage->process_slot_2}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="process_title_2" value="{{@$staticPage->process_title_2}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <Textarea type="text" class="form-control" name="process_text_2" rows="5">
                                                        {{@$staticPage->process_text_2}}
                                                    </Textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 3</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="process_slot_3" 
                                                    accept="image/*" data-default="{{@$staticPage->process_slot_3}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="process_title_3" value="{{@$staticPage->process_title_3}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <Textarea type="text" class="form-control" name="process_text_3" rows="5">
                                                        {{@$staticPage->process_text_3}}
                                                    </Textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 4</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="process_slot_4" 
                                                    accept="image/*" data-default="{{@$staticPage->process_slot_4}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="process_title_4" value="{{@$staticPage->process_title_4}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <Textarea type="text" class="form-control" name="process_text_4" rows="5">
                                                        {{@$staticPage->process_text_4}}
                                                    </Textarea>
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
                                                    data-bs-target="#modal_form" data-url="{{route('admin.services.subservice.store') }}"><i class="ph-plus-circle me-1"></i>
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
                                                @php
                                                    $no = 1;   
                                                @endphp
                                                @foreach ($subServiceLists as $subList) 
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$subList->title}}</td>
                                                    <td>{{$subList->subtitle}}</td>
                                                    <td>{{Str::limit($subList->description, 50, '...')}}</td>
                                                    <td><img src="{{ asset($path).'/'.$subList->image }}" style="height: 50px;"></td>
                                                    <td class="text-center">
                                                        <div class="d-inline-flex">
                                                            <a href="#" class="text-body btn-edit" data-bs-popup="tooltip" aria-label="Edit"
                                                                data-bs-original-title="Edit" data-url="{{route('admin.services.subservice.update' , $subList->id)}}" data-bs-toggle="modal" data-bs-target="#modal_form" data-item="{{json_encode($subList)}}">
                                                                <i class="ph-pen"></i>
                                                            </a>
                                                            <a class="text-body mx-2 btn-delete" data-bs-toggle="modal" data-bs-target="#modal_delete"
                                                                href="#" data-url="{{route('admin.services.subservice.destroy' , $subList->id)}}">
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
                                                <input type="file" class="file-input file-upload" name="method_slot_1" 
                                                    accept="image/*" data-default="{{@$staticPage->method_slot_1}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="method_title_1" value="{{@$staticPage->method_title_1}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <Textarea type="text" class="form-control" name="method_text_1" rows="5">
                                                        {{@$staticPage->method_text_1}}
                                                    </Textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 2</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="method_slot_2" 
                                                    accept="image/*" data-default="{{@$staticPage->method_slot_2}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="method_title_2" value="{{@$staticPage->method_title_2}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <Textarea type="text" class="form-control" name="method_text_2" rows="5">
                                                        {{@$staticPage->method_text_2}}
                                                    </Textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 3</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name="method_slot_3" 
                                                    accept="image/*" data-default="{{@$staticPage->method_slot_3}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="method_title_3" value="{{@$staticPage->method_title_3}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <Textarea type="text" class="form-control" name="method_text_3" rows="5">
                                                        {{@$staticPage->method_text_3}}
                                                    </Textarea>
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
                                                <label class="col-form-label col-lg-3">Image (Kode FontAwesome) 1</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="download_icon_1" value="{{@$staticPage->download_icon_1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Image (Kode FontAwesome) 2</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="download_icon_2" value="{{@$staticPage->download_icon_2}}">
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
            </form>
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
                                <input class="form-dynamic" type="hidden" value="facilitation" name="category">
                                <input type="file" class="file-input file-upload form-dynamic" name="image"
                                accept="image/*" data-default=""  data-path="{{asset($path)}}">
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
                                <input type="text" class="form-control form-dynamic" name="subtitle">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Deskripsi</label>
                            <div class="col-lg-9">
                                <textarea class="form-control form-dynamic" id="ckeditor_classic_empty" name="description"></textarea>
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
    {{-- <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script> --}}
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
@endsection
