@extends('layouts.admin')

@section('title', 'Study')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Study</h3>
        <a href="{{ route('study.create') }}" class="btn btn-primary">Tambah Study</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle bg-white">
            <thead class="table-light">
                <tr>
                    <th>Institution</th>
                    <th>Major</th>
                    <th>Degree</th>
                    <th>Periode</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($studies as $study)
                    <tr>
                        <td>{{ $study->institution }}</td>
                        <td>{{ $study->major ?? '-' }}</td>
                        <td>{{ $study->degree ?? '-' }}</td>
                        <td>
                            {{ $study->start_date->format('M Y') }} -
                            {{ $study->end_date ? $study->end_date->format('M Y') : 'Present' }}
                        </td>
                        <td>
                            <a href="{{ route('study.edit', $study) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('study.destroy', $study) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data study.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection