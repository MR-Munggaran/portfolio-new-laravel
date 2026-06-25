@extends('layouts.admin')

@section('title', 'Skill')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Skill</h3>
        <a href="{{ route('skill.create') }}" class="btn btn-primary">Tambah Skill</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle bg-white">
            <thead class="table-light">
                <tr>
                    <th width="60">Icon</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($skills as $skill)
                    <tr>
                        <td>
                            @if ($skill->icon)
                                <i class="{{ $skill->icon }}"></i>
                            @endif
                        </td>
                        <td>{{ $skill->name }}</td>
                        <td>{{ $skill->category ?? '-' }}</td>
                        <td>
                            <a href="{{ route('skill.edit', $skill) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('skill.destroy', $skill) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada data skill.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection