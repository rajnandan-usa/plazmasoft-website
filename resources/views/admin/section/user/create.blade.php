@extends('admin.layouts.main')


@section('bodyContent')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">New Registration</h4>

        {{-- project list  --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"> User Details</h5>
                        <a class="btn btn-sm btn-warning" href="{{ route('admin.users.index') }}">View Users</a>
                    </div>
                    <form class="card-body" method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 row">
                            <label for="avatar"
                                class="col-md-4 col-form-label small">{{ __('register.image') }}
                                <sup class="text-danger"> (max: 2MB) </sup> </label>
                            <div class="col-md-8">
                                <input class="form-control form-control-sm" type="file" accept="image/*"
                                    name="avatar" id="avatar">
                                <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                            </div>
                           <div class="my-2 w-100 d-flex justify-content-start align-items-center">
                            <img id="imagePreview" src="#" alt="Image Preview" class="rounded-circle" width="100px" height="100px" style="display:none;"/>
                           </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="fullname" class="col-md-4 col-form-label">{{ __('register.name') }} <sup
                                    class="text-danger">*</sup></label>
                            <div class="col-md-8">
                                <input class="form-control form-control-sm" type="text" name="name"
                                    value="{{ old('name') }}" id="fullname" placeholder="Enter full name" required>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>
{{-- 
                        <div class="mb-3 row">
                            <label for="dob" class="col-md-4 col-form-label">{{ __('register.dob') }} <sup
                                    class="text-danger">*</sup></label>
                            <div class="col-md-8">
                                <input class="form-control form-control-sm" type="date" max="2010-12-31" name="dob"
                                    value="{{ old('dob') }}" id="dob" placeholder="Enter date of birth" required>
                                <x-input-error :messages="$errors->get('dob')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="gender" class="col-md-4 col-form-label">{{ __('register.gender') }} <sup
                                    class="text-danger">*</sup></label>
                            <div class="col-md-8">
                                <select id="gender" class="form-select form-select-sm" name="gender" required>
                                    <option value="M" {{ old('gender') == 'M' ? 'selected' : '' }}>
                                        {{ __('register.male') }}</option>
                                    <option value="F" {{ old('gender') == 'F' ? 'selected' : '' }}>
                                        {{ __('register.female') }}</option>
                                    <option value="O" {{ old('gender') == 'O' ? 'selected' : '' }}>
                                        {{ __('register.other') }}</option>
                                </select>
                                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                            </div>
                        </div> --}}

                        {{-- <div class="mb-3 row">
                            <label for="phoneNo" class="col-md-4 col-form-label">{{ __('register.phone_no') }} <sup
                                    class="text-danger">*</sup></label>
                            <div class="col-md-8">
                                <input class="form-control form-control-sm" type="tel" name="phoneNo"
                                    value="{{ old('phoneNo') }}" id="phoneNo" placeholder="Enter phone number" required>
                                <x-input-error :messages="$errors->get('phoneNo')" class="mt-2" />
                            </div>
                        </div> --}}

                        {{-- <div class="mb-3 row">
                            <label for="whatsappNo"
                                class="col-md-4 col-form-label">{{ __('register.whatsapp_no') }}</label>
                            <div class="col-md-8">
                                <input class="form-control form-control-sm" type="tel" name="whatsappNo"
                                    value="{{ old('whatsappNo') }}" id="whatsappNo" placeholder="Enter WhatsApp number">
                                <x-input-error :messages="$errors->get('whatsappNo')" class="mt-2" />
                            </div>
                        </div> --}}

                        <div class="mb-3 row">
                            <label for="email" class="col-md-4 col-form-label">{{ __('register.email') }}</label>
                            <div class="col-md-8">
                                <input class="form-control form-control-sm" type="email" name="email"
                                    value="{{ old('email') }}" id="email" placeholder="Enter email address">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>

                    

                        <div class="row my-4">
                            <div class="col-12 text-center">
                                <button type="submit"
                                    class="w-100 btn btn-warning">{{ __('register.submit_details') }}</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
        {{-- project list end  --}}

    </div>
@endsection
