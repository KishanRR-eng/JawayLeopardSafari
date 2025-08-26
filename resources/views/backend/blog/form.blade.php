@extends('layouts.vertical', ['title' => request()->route('id') ? 'Edit Blog' : 'Create Blog'])

@section('css')
    @vite(['node_modules/mobius1-selectr/dist/selectr.min.css'])
    @vite(['node_modules/quill/dist/quill.snow.css'])
@endsection

@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">{{ request()->route('id') ? 'Edit Blog' : 'Create Blog' }}</h4>
                    </div>
                    <div class="col text-end">
                        <a href="{{ route('backend.blog.index') }}" type="button" class="btn rounded-pill btn-outline-danger"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                @include('backend.notes.image', ['format' => ['JPEG', 'PNG', 'WEBP', 'SVG']])
                <form id="blogForm" method="POST" action="{{ request()->route('id') ? route('backend.blog.update', ['id' => request()->route('id')]) : route('backend.blog.store') }}" enctype="multipart/form-data" class="row g-3 needs-validation {{ count($errors) > 0 ? 'was-validated' : '' }}"
                    novalidate>
                    @csrf
                    @method('POST')
                    <div class="col-md-12 has-validation">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $data->title ?? (old('title') ?? '') }}" required>
                        <div class="invalid-feedback">{{ $errors->first('title') ?? '' }}</div>
                    </div>
                    <div class="col-md-6 has-validation">
                        <label for="header_image" class="form-label">Header Image <small>{Max : 1}</small></label>
                        <input type="file" class="form-control" id="header_image" name="header_image" accept="image/jpeg,image/png,image/svg+xml,image/webp" onchange="fileUploader({ input :this, maxFileSize: 5120, maxFiles: 1, errorPopup:true }).handleFileUpload()"
                            @if (!isset($data->image_path)) required @endif>
                        <div class="invalid-feedback">{{ $errors->first('header_image') ?? '' }}</div>
                    </div>
                    <div class="col-md-6 has-validation">
                        <label for="primary_media" class="form-label">Primary media {Max : 1}</label>
                        <input type="file" class="form-control" id="primary_media" name="primary_media" accept="image/jpeg,image/png,image/svg+xml,image/webp" onchange="fileUploader({ input :this, maxFileSize: 5120, maxFiles: 1, errorPopup:true }).handleFileUpload()"
                            @if (!isset($data->primary_media)) required @endif>
                        <div class="invalid-feedback">{{ $errors->first('primary_media') ?? '' }}</div>
                    </div>
                    <div class="col-md-6 has-validation">
                        <label class="form-label">Category</label>
                        <select id="category" name="category[]" class="form-select" multiple>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ((old('_token') == null && isset($data->categoryMap) && $data->categoryMap->pluck('blog_category_id')->contains($category->id)) || (old('category') != null && in_array($category->id, old('category')))) selected @endif>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback {{ $errors->first('category') ? 'd-block' : '' }}">{{ $errors->first('category') ?? '' }}</div>
                    </div>
                    <div class="col-md-6 has-validation">
                        <label for="created_by" class="form-label">Created By</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" value="{{ $data->created_by ?? (old('created_by') ?? '') }}" required>
                        <div class="invalid-feedback">{{ $errors->first('created_by') ?? '' }}</div>
                    </div>
                    <div class="col-md-6 has-validation">
                        <label for="isVisible" class="form-label">Visibility</label>
                        <div class="form-check form-switch form-switch-success">
                            <input class="form-check-input" type="checkbox" id="isVisible" name="isVisible" @if ((isset($data->isVisible) && $data->isVisible) || old('isVisible') == 'on') checked @endif>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('isVisible') ?? '' }}</div>
                    </div>

                    <div class="col-md-12 has-validation h-100">
                        <label for="editor" class="form-label">Content</label>
                        <div id="editor"></div>
                        <input type="hidden" name="content" id="content" value="{{ $data->content ?? (old('content') ?? '') }}">
                        <div class="invalid-feedback">{{ $errors->first('content') ?? '' }}</div>
                    </div>

                    <div class="col-md-6 has-validation">
                        <label for="meta_title" class="form-label">Meta Title</label>
                        <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ old('meta_title') ?? ($data->meta_title ?? '') }}">
                        <div class="invalid-feedback">{{ $errors->first('meta_title') ?? '' }}</div>
                    </div>

                    <div class="col-md-6 has-validation">
                        <label for="meta_url" class="form-label">Meta Url</label>
                        <input type="text" class="form-control" id="meta_url" name="meta_url" value="{{ old('meta_url') ?? ($data->meta_url ?? '') }}">
                        <div class="invalid-feedback">{{ $errors->first('meta_url') ?? '' }}</div>
                    </div>

                    <div class="col-md-12 has-validation">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea class="form-control" rows="5" id="meta_description" name="meta_description" required>{{ old('meta_description') ?? ($data->meta_description ?? '') }}</textarea>
                        <div class="invalid-feedback">{{ $errors->first('meta_description') ?? '' }}</div>
                    </div>

                    <div class="col-md-12 has-validation">
                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') ?? ($data->meta_keywords ?? '') }}">
                        <div class="invalid-feedback">{{ $errors->first('meta_keywords') ?? '' }}</div>
                    </div>

                    <div class="col-md-12 text-end">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
@endsection
@section('script')
    @vite(['resources/js/pages/form-editor.init.js'])
@endsection
