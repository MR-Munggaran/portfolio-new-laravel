@extends('layouts.admin')

@section('title', 'Tambah Project')

@section('content')
    <h3 class="mb-4">Tambah Project</h3>

    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="4" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="tech_stack" class="form-label">Tech Stack</label>
            <input type="text" name="tech_stack" id="tech_stack" class="form-control" value="{{ old('tech_stack') }}" placeholder="Laravel, Tailwind, MySQL">
            <div class="form-text">Pisahkan dengan koma.</div>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="demo_url" class="form-label">Demo URL</label>
                <input type="url" name="demo_url" id="demo_url" class="form-control" value="{{ old('demo_url') }}" placeholder="https://...">
            </div>
            <div class="col-md-6 mb-3">
                <label for="repo_url" class="form-label">Repo URL</label>
                <input type="url" name="repo_url" id="repo_url" class="form-control" value="{{ old('repo_url') }}" placeholder="https://github.com/...">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('project.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection