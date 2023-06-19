@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- add form -->
        <form action="{{$action}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <!-- project Content -->
            <div class="card col-xl-12">
                <div class="card-header d-flex align-item-center">
                    <h5 class="mb-0">Project Editor</h5>
                    <div class="d-flex justify-content-end align-items-end ms-auto">
                        <label class="form-check form-check-inline form-switch">
                            @if($isedit)
                                <input type="checkbox" class="form-check-input" name="status" {{ $project->status == 1 ? 'checked' : '' }}>
                            @else
                                <input type="checkbox" class="form-check-input" name="status" checked>
                            @endif
                            <span class="form-check-label">Activate</span>
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xl-10">
                                    <div class="mb-3">
                                        <div class="row">
                                            <label class="col-form-label col-lg-3">Project Title:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="title" value="{{ $isedit ? old('title', $project->title) : old('title') }}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-10">
                                    <div class="mb-3">
                                        <div class="row">
                                            <label class="col-form-label col-lg-3">Category:</label>
                                            <div class="col-lg-9">
                                                <select class="form-select form-control" name="category" placeholder="">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category }}" {{ $isedit ? (($category == $project->category) ? 'selected' : '') : '' }}>{{ $category }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 pb-3 border-bottom">
                                <label class="form-label">Slideshow Images:</label>
                                <input type="file" class="form-control file-upload file-input" name='image' accept="image/*" data-path="{{@$path}}" data-default="{{ $isedit ? $project->image : '' }}">
                                <div class="form-text text-muted">Accepted formats: png, jpg. Max file size 2Mb</div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="ckeditor_classic_empty" name="description" placeholder="Enter your text...">
                                    {{ $isedit ? old('description', $project->description) : old('description') }}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="mb-3">
                                        <div class="row">
                                            <label class="col-form-label col-lg-3">Project Date:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control daterange-single" name="project_date" value="{{ $isedit ? old('project_date', date('m/d/Y', strtotime($project->date))) : old('project_date') }}" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="mb-3">
                                        <div class="row">
                                            <label class="col-form-label col-lg-3">Client:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" placeholder="" name="client" value="{{ $isedit ? old('client', $project->client) : old('client') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="mb-3">
                                        <div class="row">
                                            <label class="col-form-label col-lg-3">Participants:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" placeholder="" name="participants" value="{{ $isedit ? old('participants', $project->participants) : old('participants') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="mb-3">
                                        <div class="row">
                                            <label class="col-form-label col-lg-3">Goal:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" placeholder="" name="goal" value="{{ $isedit ? old('goal', $project->goal) : old('goal') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="mb-3">
                                        <div class="row">
                                            <label class="col-form-label col-lg-3">Activity:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" placeholder="" name="activity" value="{{ $isedit ? old('activity', $project->activity) : old('activity') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan <i class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>
                </div>
            </div>
            <!-- /empty with placeholder -->
        </form>
    </div>
    <!-- /content area -->
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/editor_ckeditor_classic.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/picker_date.js') }}"></script>
@endsection
