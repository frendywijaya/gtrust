@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Expanded state -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">About Page Content Management</h5>
            </div>

            <form>
                <div class="card-body">
                    <div class="alert alert-success alert-dismissible fade show" id="success-message" role="alert" style="display: none;">
                        Data berhasil di ubah
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="accordion" id="accordion_expanded">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#expanded_item1">
                                    Home Page
                                </button>
                            </h2>
                            <div id="expanded_item1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Meta Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_company_title"
                                                        id="home_title" value="{{ @$home->title }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Meta Description</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" name="about_company_section_subtitle" id="home_description">{{ @$home->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Meta Keywords</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control"
                                                        name="about_company_section_subtitle" id="home_keywords"
                                                        value="{{ @$home->keywords }}">
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
                                    data-bs-toggle="collapse" data-bs-target="#expanded_item2">
                                    About Page
                                </button>
                            </h2>
                            <div id="expanded_item2" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Meta Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_company_title"
                                                        id="about_title" value="{{ @$about->title }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Meta Description</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" name="about_company_section_subtitle" id="about_description">{{ @$about->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Meta Keywords</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control"
                                                        name="about_company_section_subtitle" id="about_keywords"
                                                        value="{{ @$about->keywords }}">
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
                                    Facilitation
                                </button>
                            </h2>
                            <div id="expanded_item3" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Meta Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="about_company_title" id="facilitation_title"
                                                        value="{{ @$facilitation->title }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Meta Description</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" name="about_company_section_subtitle" id="facilitation_description">{{ @$facilitation->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Meta Keywords</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control"
                                                        name="about_company_section_subtitle" id="facilitation_keywords"
                                                        value="{{ @$facilitation->keywords }}">
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
                                    Learning
                                </button>
                            </h2>
                            <div id="expanded_item4" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control"
                                                        name="history_section_title"
                                                        value="{{ @$staticPage->history_section_title }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control"
                                                        name="history_section_subtitle"
                                                        value="{{ @$staticPage->history_section_subtitle }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3 pb-3 border-bottom">
                                                <label class="col-form-label col-lg-3">Section Text</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" id="ckeditor_classic_empty" name="history_section_text">
                                                        {{ @$staticPage->history_section_text }}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="fw-bold border-bottom pb-2 mb-3">Video Cover Image</div>
                                                <div class="row mb-3">
                                                    <input type="file" class="file-input file-upload"
                                                        name="history_video_cover_image" accept="image/*"
                                                        data-default="{{ @$staticPage->history_video_cover_image }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Video Link</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="history_video_link"
                                                        value="{{ @$staticPage->history_video_link }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Image 1 Large</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload"
                                                    name="history_image_large" accept="image/*"
                                                    data-default="{{ @$staticPage->history_image_large }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="fw-bold border-bottom pb-2 mb-3">Image 2 Small-Bottom</div>
                                            <div class="row mb-3">
                                                <input type="file" class="file-input file-upload"
                                                    name="history_image_small" accept="image/*"
                                                    data-default="{{ @$staticPage->history_image_small }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#expanded_item5">
                                    Contact Page
                                </button>
                            </h2>
                            <div id="expanded_item5" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control"
                                                        name="our_team_section_title"
                                                        value="{{ @$staticPage->our_team_section_title }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control"
                                                        name="our_team_section_subtitle"
                                                        value="{{ @$staticPage->our_team_section_subtitle }}">
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
                                    Blog Page
                                </button>
                            </h2>
                            <div id="expanded_item6" class="accordion-collapse collapse"
                                data-bs-parent="#accordion_expanded">
                                <div class="accordion-body">
                                    <!-- Default input -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control"
                                                        name="testimonials_section_title"
                                                        value="{{ @$staticPage->testimonials_section_title }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Section Subtitle</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control"
                                                        name="testimonials_section_subtitle"
                                                        value="{{ @$staticPage->testimonials_section_subtitle }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-end mt-3">
                        <button type="button" class="btn btn-primary" onclick="updateData()">Simpan <i
                                class="ph-check-square-offset ms-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /expanded state -->
    </div>
    <!-- /content area -->
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/datatables_extension_key_table.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
    <script>
        function updateData() {
            let data = {};

            // Get the values from the input fields for page 1
            let HomeTitle = document.querySelector('#home_title').value;
            let HomeDesc = document.querySelector('#home_description').value;
            let HomeKeywords = document.querySelector('#home_keywords').value;

            data['home'] = {
                title: HomeTitle,
                description: HomeDesc,
                keywords: HomeKeywords,
            };

            // Get the values from the input fields for page 2
            let AboutTitle = document.querySelector('#about_title').value;
            let AboutDesc = document.querySelector('#about_description').value;
            let AboutKeywords = document.querySelector('#about_keywords').value;

            data['about'] = {
                title: AboutTitle,
                description: AboutDesc,
                keywords: AboutKeywords,
            };

            // Get the values from the input fields for page 2
            let FacilitationTitle = document.querySelector('#facilitation_title').value;
            let FacilitationDesc = document.querySelector('#facilitation_description').value;
            let FacilitationKeywords = document.querySelector('#facilitation_keywords').value;

            data['facilitation'] = {
                title: FacilitationTitle,
                description: FacilitationDesc,
                keywords: FacilitationKeywords,
            };


            // Send a POST request to the /seo/update route
            fetch('/admin/SEO/update', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        data
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('form submitted')

                    // Form submitted successfully
                    // Update the page content to display the success message
                    document.getElementById('success-message').style.display = 'block';
                })
                .catch(error => {
                    // An error occurred
                    // Handle the error here
                });
        }
    </script>
@endsection
