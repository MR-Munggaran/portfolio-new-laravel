@extends('layouts.admin')

@section('title', 'About')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">About</h3>
        @if (!$about)
            <a href="{{ route('about.create') }}" class="btn btn-primary">Tambah About</a>
        @endif
    </div>

    @if ($about)
        <div class="card">
            <div class="row g-0">
                @if ($about->photo)
                    <div class="col-md-3">
                        <img src="{{ asset('storage/' . $about->photo) }}" class="img-fluid rounded-start" alt="{{ $about->title }}">
                    </div>
                @endif
                <div class="col-md-{{ $about->photo ? 9 : 12 }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $about->title }}</h5>
                        <p class="card-text">{{ $about->description }}</p>
                        <a href="{{ route('about.edit', $about) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('about.destroy', $about) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data about ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-info">Belum ada data About. Silakan tambahkan.</div>
    @endif
@endsection