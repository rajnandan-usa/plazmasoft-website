@extends('admin.layouts.main')


@section('bodyContent')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">All media Files</h4>

        {{-- Media list  --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">media Files</h5>
                        <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary btn-sm">Upload
                            Media</a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Media File</th>
                                    <th>Category</th>
                                    <th>File Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse ($mediaFiles as $media)
                                    <tr>
                                        <td>
                                            <strong>{{ $media->id }}</strong>
                                        </td>
                                        <td>
                                            <img loading="lazy" height="50px" class="rounded"
                                                src="{{ str_starts_with($media->mediaFile, 'http') ? $media->mediaFile : asset('/storage/' . $media->mediaFile) }}"
                                                alt="{{ $media->description }}">
                                        </td>
                                        <td>
                                            @if ($media?->tags)
                                                @forelse (json_decode($media?->tags) as $t)
                                                    <small class="badge badge-sm bg-info">{{ $t }}</small>
                                                @empty
                                                @endforelse
                                            @endif
                                        </td>
                                        <td>
                                            {{ $media->type }}
                                        </td>
                                        <td>
                                            <form class="d-inline-block"
                                                action="{{ route('admin.galleries.status', $media->id) }}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <button data-toggle="tooltip" data-placement="top" title="Click to Change"
                                                    class="btn btn-sm {{ $media->status ? 'btn-outline-success' : 'btn-outline-danger' }}"><i
                                                        class="bx {{ $media->status ? 'bx-check-circle' : 'bx-x-circle' }}"></i>
                                                </button>
                                            </form>
                                        </td>

                                        <td>
                                            <button title="Copy to clipboard"
                                                data-url="{{ str_starts_with($media->mediaFile, 'http') ? $media->mediaFile : asset('/storage/' . $media->mediaFile) }}"
                                                class="copyLinkBtn btn btn-sm btn-outline-success">
                                                <i class="bx bx-clipboard"></i>
                                            </button>
                                            <a class="btn btn-sm btn-outline-primary"
                                                href="{{ route('admin.galleries.edit', $media->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i></a>
                                            <form class="d-inline-block"
                                                action="{{ route('admin.galleries.destroy', $media->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    onclick="return confirm('All Posts related to this Media will be deleted permanently. Are you sure to delete?')"
                                                    class="btn btn-sm btn-outline-danger"><i class="bx bx-trash me-1"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="text-center py-4">
                                        <td colspan="7">No record found!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="col-12 my-4 px-2">
                        <div class="d-flex justify-content-end small">
                            {{ $mediaFiles->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- Media list end  --}}

    </div>
@endsection
