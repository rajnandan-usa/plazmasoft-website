@extends('admin.layouts.main')


@section('bodyContent')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Manage Media Files</h4>

        <!-- create Media File -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"> {{ $galleryTagEdit ? 'Edit' : 'Create' }} category for gallery</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST"
                            action="{{ $galleryTagEdit ? route('admin.galleries.tag-update', $galleryTagEdit->id) : route('admin.galleries.tag-store') }}">
                            @csrf

                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="tagName">Gallery Category</label>
                                    <input type="text" placeholder="Add new Category" class="form-control" id="tagName"
                                        name="tagName" value="{{ $galleryTagEdit?->name }}" required>
                                    <x-input-error :messages="$errors->get('tagName')" class="mt-2" />
                                </div>

                                <div class="mb-3 col-md-8">
                                    <div class="d-flex justify-content-start align-items-start flex-wrap gap-4">

                                        @forelse ($galleryTags as $tag)
                                            <div class="shadow-sm rounded p-2 small">
                                                {{ $tag->name }}
                                                <div class="border-top d-flex flex-col justify-content-between gap-1">
                                                    <a href="{{ route('admin.galleries.tag-destroy', $tag->id) }}"
                                                        class="text-danger">
                                                        <i class="bx bx-trash"></i>
                                                    </a>
                                                    <a href="{{ route('admin.galleries.tag-edit', $tag->id) }}"
                                                        class="text-info">
                                                        <i class="bx bx-edit"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @empty
                                            <span>No Category available!</span>
                                        @endforelse
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Upload New Media File</h5>
                        <a href="{{ route('admin.galleries.index') }}" class="btn btn-primary btn-sm">View Media Files</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.galleries.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="mediaFile">Media File Name</label>
                                    <input type="file" class="form-control" id="mediaFile" name="mediaFile" required>
                                    <x-input-error :messages="$errors->get('mediaFile')" class="mt-2" />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="galleryCategory">Category <small> (Hold & Press to select
                                            multiple)</small></label>
                                    <select name="galleryCategory[]" id="galleryCategory" class="form-select" multiple>
                                        @forelse ($galleryTags as $tag)
                                            <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    <x-input-error :messages="$errors->get('galleryCategory')" class="mt-2" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label class="form-label" for="description">Description</label>
                                    <input type="text" placeholder="Describe Media" class="form-control" id="description"
                                        name="description">
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Upload Media File</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- create Media File end -->

        <hr class="my-5">

    </div>
@endsection
