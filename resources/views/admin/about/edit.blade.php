@extends('layouts.admin')

@section('title', 'Edit About')

@section('content')
    <h3 class="mb-4">Edit About</h3>

    <form action="{{ route('about.update', $about) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $about->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="5" class="form-control" required>{{ old('description', $about->description) }}</textarea>
        </div>

        @if ($about->photo)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $about->photo) }}" alt="{{ $about->title }}" width="150" class="rounded d-block mb-2">
            </div>
        @endif

        <div class="mb-3">
            <label for="photo" class="form-label">Photo {{ $about->photo ? '(kosongkan jika tidak ingin mengganti)' : '' }}</label>
            <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('about.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection