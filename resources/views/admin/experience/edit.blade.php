@extends('layouts.admin')

@section('title', 'Edit Experience')

@section('content')
    <h3 class="mb-4">Edit Experience</h3>

    <form action="{{ route('experience.update', $experience) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" name="position" id="position" class="form-control" value="{{ old('position', $experience->position) }}" required>
        </div>

        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input type="text" name="company" id="company" class="form-control" value="{{ old('company', $experience->company) }}" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', $experience->start_date->format('Y-m-d')) }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date', $experience->end_date?->format('Y-m-d')) }}">
                <div class="form-text">Kosongkan jika masih bekerja di sini (Present).</div>
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="4" class="form-control">{{ old('description', $experience->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('experience.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection