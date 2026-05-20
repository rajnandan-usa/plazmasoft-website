@extends('admin.layouts.main')

@section('title')
    Website Settings
@endsection



@section('bodyContent')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">New Admin Registration</h4>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h2 class="h6">General Settings <small class="fw-normal">({{ count($settings) }})</small></h2>
                    </div>


                    <div class="card-body py-4">

                        @forelse ($settings as $setting)
                            <form class="row mb-4 align-items-end" method="POST"
                                action="{{ route('admin.settings.update', $setting->id) }}">
                                @method('PUT')
                                @csrf
                                <div class="col-9 col-md-7 col-lg-6">
                                    <div>
                                        <label for="{{ $setting?->id }}"
                                            class="form-label small fw-semibold text-capitalize">{{ ucwords(strtolower(str_replace('_', ' ', $setting?->key))) }}
                                            <span class="text-secondary" role="button" title="{{ $setting?->description }}"
                                                class="p-1">
                                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                            </span>
                                        </label>
                                        <input type="text" class="form-control form-control-sm" name="value"
                                            id="{{ $setting?->id }}" value="{{ old('value', $setting?->value) }}"
                                            placeholder="Enter value">
                                        <x-input-error class="mt-2" :messages="$errors->get('value')" />
                                    </div>
                                </div>

                                <div class="col-3 col-md-3 col-lg-2">
                                    <button type="submit" class="w-100 btn btn-sm btn-primary"> Save
                                    </button>
                                </div>
                            </form>

                        @empty
                            <div class="text-center">
                                <h3 class="text-muted">No Setting available!</h3>
                                <p class="small text-muted">Add some settings in database</p>
                            </div>
                        @endforelse

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
