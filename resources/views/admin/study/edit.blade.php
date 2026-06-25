@extends('layouts.admin')

@section('title', 'Edit Study')

@section('content')
    <h3 class="mb-4">Edit Study</h3>

    <form action="{{ route('study.update', $study) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="institution" class="form-label">Institution</label>
            <input type="text" name="institution" id="institution" class="form-control" value="{{ old('institution', $study->institution) }}" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="major" class="form-label">Major</label>
                <input type="text" name="major" id="major" class="form-control" value="{{ old('major', $study->major) }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="degree" class="form-label">Degree</label>
                <input type="text" name="degree" id="degree" class="form-control" value="{{ old('degree', $study->degree) }}" placeholder="S1, SMA, dll">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', $study->start_date->format('Y-m-d')) }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date', $study->end_date?->format('Y-m-d')) }}">
                <div class="form-text">Kosongkan jika masih berjalan (Present).</div>
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="4" class="form-control">{{ old('description', $study->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('study.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection