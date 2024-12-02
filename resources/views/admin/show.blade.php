@extends('admin.layouts.app')

@section('title', 'Admin - LaporAPP')
@section('content')
 
    <div class="containeraa">
        <h1 class="text-center">Detail Laporan</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Ticket:</strong> {{ $report->ticket }}</p>
                <p><strong>Nama:</strong> {{ $report->nama }}</p>
                <p><strong>Email:</strong> {{ $report->email }}</p>
                <p><strong>No HP:</strong> {{ $report->no_hp }}</p>
                <p><strong>Program Studi:</strong> {{ $report->program_studi }}</p>
                <p><strong>Angkatan:</strong> {{ $report->angkatan }}</p>
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
        <a href="{{ route('admin.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>

    @endsection
    <style>

.containeraa {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #444;
}

.card {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    background-color: #fff;
}

.card-body p {
    margin: 10px 0;
    line-height: 1.5;
}

.card-body p strong {
    font-weight: 600;
    color: #555;
}

a {
    text-decoration: none;
    color: #007bff;
}

a:hover {
    text-decoration: underline;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn-secondary {
    background-color: #6c757d;
    color: white;
    border: none;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

.mt-3 {
    margin-top: 20px;
}

.text-center {
    text-align: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .containeraa {
        margin: 20px auto;
        padding: 15px;
    }

    h1 {
        font-size: 1.5rem;
    }

    .btn {
        width: 100%;
        padding: 10px;
    }
}
</style>
