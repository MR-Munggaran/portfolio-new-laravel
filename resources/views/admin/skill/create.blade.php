@extends('layouts.admin')

@section('title', 'Tambah Skill')

@section('content')
    <h3 class="mb-4">Tambah Skill</h3>

    <form action="{{ route('skill.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ old('category') }}" placeholder="Frontend, Backend, Tools, dll">
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" name="icon" id="icon" class="form-control" value="{{ old('icon') }}" placeholder="contoh: fa-brands fa-laravel">
            <div class="form-text">Pakai class icon (misal FontAwesome) atau path/url gambar.</div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('skill.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection