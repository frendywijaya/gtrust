@extends('admin.layout.master')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- add form -->
        <form action="{{$action}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <!-- Blog Content -->
            <div class="card col-xl-8">
                <div class="card-header d-flex align-item-center">
                    <h5 class="mb-0">Blog Editor</h5>
                    <div class="d-flex justify-content-end align-items-end ms-auto">
                        <label class="form-check form-check-inline form-switch">
                            @if($isedit)
                                <input type="checkbox" class="form-check-input" name="status" {{ $blog->status == 1 ? 'checked' : '' }}>
                            @else
                                <input type="checkbox" class="form-check-input" name="status" checked>
                            @endif
                            <span class="form-check-label">Activate</span>
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="mb-3">
                                <label class="form-label">Title:</label>
                                <input type="text" class="form-control" name="title" value="{{ $isedit ? old('title', $blog->title) : old('title') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mb-3">
                                <label class="form-label">Category:</label>
                                <!-- Select2 -->
                                <select class="form-select form-control" name="category_id" data-placeholder="Select Category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $isedit ? (($category->id == $blog->category_id) ? 'selected' : '') : '' }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mb-3">
                                <label class="form-label">Writer:</label>
                                <input type="text" class="form-control" name="writer" value="{{ $isedit ? old('writer', $blog->writer) : old('writer') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <label class="form-label">Timestamp:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="ph-calendar"></i></span>
                                
                                <input type="text" class="form-control daterange-single" name="date" value="{{ $isedit ? old('date', date('m/d/Y', strtotime($blog->date))) : old('date') }}" >
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 pb-3 border-bottom">
                        <label class="form-label">Blog Cover Image:</label>
                        <input type="file" class="form-control file-upload" name='image' accept="image/*" data-path="{{@$path}}" data-default="{{ $isedit ? $blog->image : '' }}">
                        <div class="form-text text-muted">Accepted formats: png, jpg. Max file size 2Mb</div>
                    </div>


                    <div class="mb-3">
                        <textarea class="form-control" id="ckeditor_classic_empty" placeholder="Enter your text..." name="description">
                            {{ $isedit ? old('description', $blog->description) : old('description') }}
                        </textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan <i
                                class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>
                </div>
            </div>
            <!-- /empty with placeholder -->
        </form>
        <!-- end form -->
    </div>
    <!-- /content area -->
@endsection

@section('js')
    <script src="{{ asset('admin/demo/pages/editor_ckeditor_classic.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/components_modals.js') }}"></script>
    <script src="{{ asset('admin/demo/pages/picker_date.js') }}"></script>
@endsection
