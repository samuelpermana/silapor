@extends('admin.layouts.app')

@section('title', 'Admin - LaporAPP')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Daftar Pelaporan</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ticket</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                    <th>Status Pelapor</th>
                    <th>Jenis Pelaporan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->ticket }}</td>
                    <td>{{ $report->email }}</td>
                    <td>{{ $report->nama }}</td>
                    <td>{{ $report->no_hp }}</td>
                    <td>{{ $report->program_studi }}</td>
                    <td>{{ $report->angkatan }}</td>
                    <td>{{ $report->status_pelapor }}</td>
                    <td>{{ $report->jenis_pelaporan }}</td>
                    <td>{{ $report->status_pelacakan }}</td>
                    <td>
                        <form action="/admin/{{ $report->id }}/update" method="POST" style="display:inline;">
                            @csrf
                            <select name="status_tracking">
                                <option value="Diterima" @if($report->status_pelacakan == 'Diterima') selected @endif>Diterima</option>
                                <option value="Diproses" @if($report->status_pelacakan == 'Diproses') selected @endif>Diproses</option>
                                <option value="Selesai" @if($report->status_pelacakan == 'Selesai') selected @endif>Selesai</option>
                            </select>
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </form>
                        <a href="{{ route('admin.show', $report->id) }}" class="btn btn-info btn-sm">Lihat Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $reports->links() }}
    </div>


@endsection