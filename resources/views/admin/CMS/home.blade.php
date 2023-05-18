@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Expanded state -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Home Content Management</h5>
            </div>

            <form action="{{ route('admin.staticpage.save', 'homestatic') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="accordion" id="accordion_expanded">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#expanded_item1">
                                    Section 1 - About
                                </button>
                            </h2>
                            <div id="expanded_item1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_title" value="{{@$staticPage->about_title}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_subtitle" value="{{@$staticPage->about_subtitle}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" id="ckeditor_classic_empty" name="about_text" value="{{@$staticPage->about_text}}"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Button Text</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_button_text" value="{{@$staticPage->about_button_text}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Button Link</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_button_link" value="{{@$staticPage->about_button_link}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-xl-6">
                                                    <label class="col-form-label col-lg-3">Image Text 1</label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" name="about_image_text_1"
                                                            placeholder="18 Years" value="{{@$staticPage->about_image_text_1}}">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="col-form-label col-lg-3">Image Text 2</label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" name="about_image_text_2"
                                                            placeholder="Experience" value="{{@$staticPage->about_image_text_2}}">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <div class="col-lg-12 mb-3">
                                                    <p class="fw-semibold">Image 1 Portrait</p>
                                                    <input type="file" class="file-input file-upload" name="about_image_1" 
                                                    accept="image/*" data-default="{{@$staticPage->about_image_1}}">
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <p class="fw-semibold">Image 2 Portrait</p>
                                                    <input type="file" class="file-input file-upload" name="about_image_2"
                                                    accept="image/*" data-default="{{@$staticPage->about_image_2}}">
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <p class="fw-semibold">Image 3 Landscape</p>
                                                    <input type="file" class="file-input file-upload" name="about_image_3"
                                                    accept="image/*" data-default="{{@$staticPage->about_image_3}}">
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
                                    Section 2 - Our Services
                                </button>
                            </h2>
                            <div id="expanded_item2" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="service_section_title" value="{{@$staticPage->service_section_title}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="service_section_subtitle" value="{{@$staticPage->service_section_subtitle}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">

                                            <div class="fw-bold border-bottom pb-2 mb-3">Facilitation Detail</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name ="service_facilitation_image" 
                                                accept="image/*" data-default="{{@$staticPage->service_facilitation_image}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Headline</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="service_facilitation_headline" value="{{@$staticPage->service_facilitation_headline}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" id="ckeditor_classic_empty" name="service_facilitation_text">
                                                        {{@$staticPage->service_facilitation_text}}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Button Text</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="service_facilitation_button_text" {{@$staticPage->service_facilitation_button_text}}>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Button Link</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="service_facilitation_button_link" {{@$staticPage->service_facilitation_button_link}}>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Learning Detail</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload" name ="service_learning_image" 
                                                accept="image/*" data-default="{{@$staticPage->service_learning_image}}">
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Headline</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="service_learning_headline" value="{{@$staticPage->service_learning_headline}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" id="ckeditor_classic_empty" name="service_learning_text" value="{{@$staticPage->service_learning_text}}"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Button Text</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="service_learning_button_text" value="{{@$staticPage->service_learning_button_text}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Button Link</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="service_learning_button_link" value="{{@$staticPage->service_learning_button_link}}">
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
                                    data-bs-toggle="collapse" data-bs-target="#expanded_item3">
                                    Section 2 - Statistic
                                </button>
                            </h2>
                            <div id="expanded_item3" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 1</div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Numbers</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="statistic_number_1" value="{{@$staticPage->statistic_number_1}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="statistic_text_1" value="{{@$staticPage->statistic_text_1}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 2</div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Numbers</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="statistic_number_2" value="{{@$staticPage->statistic_number_2}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="statistic_text_2" value="{{@$staticPage->statistic_text_2}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 3</div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Numbers</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="statistic_number_3" value="{{@$staticPage->statistic_number_3}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="statistic_text_3" value="{{@$staticPage->statistic_text_3}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Slot 4</div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Numbers</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="statistic_number_4" value="{{@$staticPage->statistic_number_4}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Text</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="statistic_text_4" value="{{@$staticPage->statistic_text_4}}">
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
                                    Section 3 - Contact CTA
                                </button>
                            </h2>
                            <div id="expanded_item4" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="contact_tilte" value="{{@$staticPage->contact_tilte}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="contact_subtitle" value="{{@$staticPage->contact_subtitle}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Button Text</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="contact_button_text" value="{{@$staticPage->contact_button_text}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Button Link</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="contact_button_link" value="{{@$staticPage->contact_button_link}}">
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
    <div id="modal_edit" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <h6 class="fw-semibold">Judul Pesan</h6>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent
                        commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet
                        rutrum faucibus dolor auctor.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal edit link -->

    @include('admin.layout.modal_delete')
@endsection

@section('js')
    {{-- <script src="{{ asset('admin/js/vendor/uploaders/dropzone.min.js') }}"></script> --}}
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/vendor/editors/ckeditor/ckeditor_classic.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/editor_ckeditor_classic.js') }}"></script> --}}
@endsection
