@extends('layouts.admin')

@section('title', 'Experience')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Experience</h3>
        <a href="{{ route('experience.create') }}" class="btn btn-primary">Tambah Experience</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle bg-white">
            <thead class="table-light">
                <tr>
                    <th>Position</th>
                    <th>Company</th>
                    <th>Periode</th>
                    <th>Description</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($experiences as $experience)
                    <tr>
                        <td>{{ $experience->position }}</td>
                        <td>{{ $experience->company }}</td>
                        <td>
                            {{ $experience->start_date->format('M Y') }} -
                            {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Present' }}
                        </td>
                        <td>{{ Str::limit($experience->description, 80) }}</td>
                        <td>
                            <a href="{{ route('experience.edit', $experience) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('experience.destroy', $experience) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data experience.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection