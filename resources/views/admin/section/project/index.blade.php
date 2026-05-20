@extends('admin.layouts.main')


@section('bodyContent')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">All Projects</h4>

        {{-- Post list  --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Your Projects</h5>
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-sm">Create New Post</a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>title</th>
                                    <th>Banner</th>
                                    <th>Category</th>
                                    <th>budget</th>
                                    <th>DateTime</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse ($projects as $project)
                                    <tr>
                                        <td>
                                            <strong>{{ $project->id }}</strong>
                                        </td>
                                        <td>
                                            {{ substr($project->title, 0, 50) }}
                                        </td>
                                        <td>
                                            <img loading="lazy" height="50px" class="rounded"
                                                src="{{ str_starts_with($project->banner, 'http') ? $project->banner : asset('/storage/' . $project->banner) }}"
                                                alt="post-image">
                                        </td>
                                        <td>
                                            {{ $project->category }}
                                        </td>
                                        <td>
                                            {{ $project->budget }}
                                        </td>
                                        <td>
                                            {{ $project->startDate }} <br>
                                            {{ $project->endDate }}
                                        </td>

                                        <td>

                                            <a class="btn btn-sm btn-outline-primary"
                                                href="{{ route('admin.projects.edit', $project->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i></a>
                                            <form class="d-inline-block"
                                                action="{{ route('admin.projects.destroy', $project->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Are you sure to delete?')"
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
                            {{ $projects->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>


            </div>
        </div>
        {{-- Post list end  --}}

    </div>
@endsection
