@extends('layouts.app')

@section('title', 'Track Pelaporan - LaporAPP')

@section('content')

    <div class="container">
        <h1 class="text-center">Hasil Pelacakan</h1>
        <p class="text-center">Detail laporan Anda berdasarkan tiket: <strong>{{ $report->ticket }}</strong></p>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Detail Laporan</h5>
                <p><strong>Nama:</strong> {{ $report->nama }}</p>
                <p><strong>Email:</strong> {{ $report->email }}</p>
                <p><strong>Program Studi:</strong> {{ $report->program_studi }}</p>
                <p><strong>Angkatan:</strong> {{ $report->angkatan }}</p>
                <p><strong>No HP:</strong> {{ $report->no_hp }}</p>
                <p><strong>Status Pelapor:</strong> {{ $report->status_pelapor }}</p>
                <p><strong>Jenis Pelaporan:</strong> {{ $report->jenis_pelaporan }}</p>
                <p><strong>Pesan:</strong> {{ $report->pesan }}</p>
                @if($report->lampiran)
                    <p><strong>Lampiran:</strong> <a href="{{ asset('storage/' . $report->lampiran) }}" target="_blank">Lihat Lampiran</a></p>
                @else
                    <p><strong>Lampiran:</strong> Tidak ada</p>
                @endif
                <p><strong>Status Pelacakan:</strong> {{ $report->status_pelacakan }}</p>
            </div>
        </div>
        <a href="/track" class="btn btn-secondary mt-3">Kembali</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @endsection
