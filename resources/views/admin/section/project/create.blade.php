@extends('admin.layouts.main')


@section('bodyContent')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Create New Project</h4>

        <!-- create Project -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Create New Project</h5>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm">View Projects</a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Project Title -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="title">Project Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter project title" required maxlength="150"
                                        value="{{ old('title') }}">
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-10">
                                            <!-- Banner Image -->
                                            <div class="col-12" id="bannerImageBox">
                                                <label class="form-label" for="banner">Banner Image (max: 2MB)</label>

                                                <input type="file" accept="image/*" class="js-preview form-control"
                                                    id="banner" name="banner" value="{{ old('banner') }}">
                                                <x-input-error :messages="$errors->get('banner')" class="mt-2" />
                                            </div>
                                            <!-- Banner Url -->
                                            <div class="col-12" id="bannerUrlBox" style="display: none">
                                                <label class="form-label" for="bannerUrl">Banner URL</label>

                                                <input type="url" class="form-control" id="bannerUrl" name="bannerUrl"
                                                    value="{{ old('bannerUrl') }}" placeholder="Enter banner URL ">
                                                <x-input-error :messages="$errors->get('bannerUrl')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="bannerType" />
                                                <label class="form-check-label" for="bannerType">URL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-3 col-md-6">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-10">
                                            <!-- logo Image -->
                                            <div class="col-12" id="logoImageBox">
                                                <label class="form-label" for="logo">logo Image (max: 2MB)</label>
                                                <input type="file" accept="image/*" class="js-preview form-control"
                                                    id="logo" name="logo" value="{{ old('logo') }}">
                                                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                                            </div>
                                            <!-- logo Url -->
                                            <div class="col-12" id="logoUrlBox" style="display: none">
                                                <label class="form-label" for="logoUrl">logo URL</label>

                                                <input type="url" class="form-control" id="logoUrl" name="logoUrl"
                                                    value="{{ old('logoUrl') }}" placeholder="Enter logo URL ">
                                                <x-input-error :messages="$errors->get('logoUrl')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="logoType" />
                                                <label class="form-check-label" for="logoType">URL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- Category -->
                                <div class="mb-3 col-md-6">
                                    <label for="category" class="form-label">Category</label>
                                    <input type="text" class="form-control" id="category" name="category"
                                        placeholder="Enter project category" required value="{{ old('category') }}">
                                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                                </div>

                                <!-- Technologies -->
                                <div class="mb-3 col-md-6">
                                    <label for="technologies" class="form-label">Technologies</label>
                                    <input type="text" class="form-control" id="technologies" name="technologies"
                                        placeholder="Enter technologies used" value="{{ old('technologies') }}">
                                    <x-input-error :messages="$errors->get('technologies')" class="mt-2" />
                                </div>

                                <!-- Project URL -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="url">Project URL</label>
                                    <input type="url" class="form-control" id="url" name="url"
                                        placeholder="Enter project URL" value="{{ old('url') }}">
                                    <x-input-error :messages="$errors->get('url')" class="mt-2" />
                                </div>

                                <!-- Short Description -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="shortDescription">Short Description</label>
                                    <input type="text" class="form-control" id="shortDescription"
                                        name="shortDescription" placeholder="Enter short description"
                                        value="{{ old('shortDescription') }}">
                                    <x-input-error :messages="$errors->get('shortDescription')" class="mt-2" />
                                </div>

                                <!-- Full Description -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="content">Full Description</label>
                                    <textarea class="d-none form-control" id="content" name="description"
                                        placeholder="Enter full project description">{{ old('description') }}</textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>

                                <!-- Country -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="country">Country</label>
                                    <input type="text" class="form-control" id="country" name="country"
                                        placeholder="Enter country" value="{{ old('country') }}">
                                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                                </div>

                                <!-- Budget -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="budget">Budget</label>
                                    <input type="text" class="form-control" id="budget" name="budget"
                                        placeholder="Enter project budget" value="{{ old('budget') }}">
                                    <x-input-error :messages="$errors->get('budget')" class="mt-2" />
                                </div>

                                <!-- Type of Project -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="type">Project Type</label>
                                    <input type="text" class="form-control" id="type" name="type"
                                        placeholder="Enter project type (e.g., App, Website)"
                                        value="{{ old('type') }}">
                                    <x-input-error :messages="$errors->get('type')" class="mt-2" />
                                </div>

                                <!-- Project Status -->
                                <div class="mb-3 col-md-6">
                                    <label for="status" class="form-label">Status</label>
                                    <select id="status" class="form-select" required name="status">
                                        <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft
                                        </option>
                                        <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>
                                            Published</option>
                                        <option value="in_progress"
                                            {{ old('status') === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                                </div>

                                <!-- Start Date -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="startDate">Start Date</label>
                                    <input type="date" class="form-control" id="startDate" name="startDate"
                                        value="{{ old('startDate') }}">
                                    <x-input-error :messages="$errors->get('startDate')" class="mt-2" />
                                </div>

                                <!-- End Date -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="endDate">End Date</label>
                                    <input type="date" class="form-control" id="endDate" name="endDate"
                                        value="{{ old('endDate') }}">
                                    <x-input-error :messages="$errors->get('endDate')" class="mt-2" />
                                </div>

                                <!-- Video URL -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="videoUrl">Video URL</label>
                                    <input type="url" class="form-control" id="videoUrl" name="videoUrl"
                                        placeholder="Enter video URL" value="{{ old('videoUrl') }}">
                                    <x-input-error :messages="$errors->get('videoUrl')" class="mt-2" />
                                </div>

                                <!-- Client Name -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="clientName">Client Name</label>
                                    <input type="text" class="form-control" id="clientName" name="clientName"
                                        placeholder="Enter client name" value="{{ old('clientName') }}">
                                    <x-input-error :messages="$errors->get('clientName')" class="mt-2" />
                                </div>

                                <!-- Client Avatar -->
                                <div class="mb-3 col-md-6">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-10">
                                            <!-- client avatar Image -->
                                            <div class="col-12" id="clientAvatarImageBox">
                                                <label class="form-label" for="clientAvatar">Client Avatar (max:
                                                    2MB)</label>
                                                <input type="file" accept="image/*" class="form-control"
                                                    id="clientAvatar" name="clientAvatar"
                                                    value="{{ old('clientAvatar') }}">
                                                <x-input-error :messages="$errors->get('clientAvatar')" class="mt-2" />
                                            </div>
                                            <!-- client avatar Url -->
                                            <div class="col-12" id="clientAvatarUrlBox" style="display: none">
                                                <label class="form-label" for="clientAvatarUrl">Client Avatar URL</label>

                                                <input type="url" class="form-control" id="clientAvatarUrl"
                                                    name="clientAvatarUrl" value="{{ old('clientAvatarUrl') }}"
                                                    placeholder="Enter clientAvatar URL ">
                                                <x-input-error :messages="$errors->get('clientAvatarUrl')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="clientAvatarType" />
                                                <label class="form-check-label" for="clientAvatarType">URL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- Client Feedback -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="clientFeedback">Client Feedback</label>
                                    <textarea class="form-control" id="clientFeedback" name="clientFeedback"
                                        placeholder="Enter feedback from the client" value="{{ old('clientFeedback') }}">{{ old('clientFeedback') }}</textarea>
                                    <x-input-error :messages="$errors->get('clientFeedback')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Create Project</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <!-- create Project end -->

        <hr class="my-5">


    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#bannerType').on('change', function() {
                if ($(this).prop('checked')) {
                    $('#bannerImageBox').hide(); // Hide image box
                    $('#bannerUrlBox').show(); // Show URL box
                } else {
                    $('#bannerImageBox').show(); // Show image box
                    $('#bannerUrlBox').hide(); // Hide URL box
                }
            });
            $('#logoType').on('change', function() {
                if ($(this).prop('checked')) {
                    $('#logoImageBox').hide(); // Hide image box
                    $('#logoUrlBox').show(); // Show URL box
                } else {
                    $('#logoImageBox').show(); // Show image box
                    $('#logoUrlBox').hide(); // Hide URL box
                }
            });

            $('#clientAvatarType').on('change', function() {
                if ($(this).prop('checked')) {
                    $('#clientAvatarImageBox').hide(); // Hide image box
                    $('#clientAvatarUrlBox').show(); // Show URL box
                } else {
                    $('#clientAvatarImageBox').show(); // Show image box
                    $('#clientAvatarUrlBox').hide(); // Hide URL box
                }
            });
        });
    </script>
@endpush
