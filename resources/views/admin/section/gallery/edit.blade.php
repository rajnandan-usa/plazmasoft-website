@extends('admin.layouts.main')


@section('bodyContent')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Manage Media Files</h4>

        <!-- create Media File -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit Media File</h5>
                        <a href="{{ route('admin.galleries.index') }}" class="btn btn-primary btn-sm">View Media Files</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.galleries.update',$mediaGallery->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="mediaFile">Media File Name</label>
                                    <input type="file" class="form-control" id="mediaFile" name="mediaFile">
                                    <x-input-error :messages="$errors->get('mediaFile')" class="mt-2" />
                                </div>


                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="galleryCategory">Category</label>
                                    <select name="galleryCategory[]" id="galleryCategory" class="form-select" multiple>
                                        @forelse ($galleryTags as $tag)
                                            <option  {{$mediaGallery->tags ? in_array($tag->name,json_decode($mediaGallery?->tags)) ? 'selected': null : null}} value="{{ $tag->name }}">{{ $tag->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    <x-input-error :messages="$errors->get('galleryCategory')" class="mt-2" />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="Describe Media"  value="{{ old('description', $mediaGallery->description) }}">
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>

                                <div class="mb-3 col-md-6">
                                 <img height="240px" class="rounded shadow"
                                                src="{{ asset('/storage/' . $mediaGallery->mediaFile) }}"
                                                alt="{{ $mediaGallery->description }}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- create Media File end -->

        <hr class="my-5">


    </div>
@endsection
