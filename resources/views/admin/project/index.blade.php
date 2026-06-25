@extends('layouts.admin')

@section('title', 'Project')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Project</h3>
        <a href="{{ route('project.create') }}" class="btn btn-primary">Tambah Project</a>
    </div>

    <div class="row">
        @forelse ($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if ($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}" style="height: 180px; object-fit: cover;">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                        @if ($project->tech_stack)
                            <p class="mb-2">
                                @foreach (explode(',', $project->tech_stack) as $tech)
                                    <span class="badge bg-secondary">{{ trim($tech) }}</span>
                                @endforeach
                            </p>
                        @endif
                        <div class="mt-auto">
                            <a href="{{ route('project.edit', $project) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('project.destroy', $project) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus project ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">Belum ada data project.</div>
            </div>
        @endforelse
    </div>
@endsection