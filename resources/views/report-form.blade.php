@extends('layouts.app')

@section('title', "Laporkan $type - LaporAPP")

@section('content')
    <div class="form-container d-flex justify-content-between align-items-center">
        <!-- Gambar Kiri -->
        <div class="form-image">
            <img src="{{ asset('images/grafis4.png') }}" alt="Image" class="img-fluid">
        </div>

        <!-- Form Kanan -->
        <div class="form-content">
            <h2 class="form-title">Laporkan {{ $type }}</h2>

            <form action="/laporkan" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="type" value="{{ $type }}">

                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required value="{{ old('nama') }}">
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="program_studi">Program Studi</label>
                    <input type="text" name="program_studi" id="program_studi" class="form-control" required value="{{ old('program_studi') }}">
                    @error('program_studi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="angkatan">Angkatan</label>
                    <input type="text" name="angkatan" id="angkatan" class="form-control" required value="{{ old('angkatan') }}">
                    @error('angkatan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="no_hp">Nomor HP</label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control" required value="{{ old('no_hp') }}">
                    @error('no_hp')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status_pelapor">Status</label>
                    <select name="status_pelapor" id="status_pelapor" class="form-control" required>
                        <option value="Pelapor" {{ old('status_pelapor') == 'Pelapor' ? 'selected' : '' }}>Pelapor</option>
                        <option value="Saksi" {{ old('status_pelapor') == 'Saksi' ? 'selected' : '' }}>Saksi</option>
                    </select>
                    @error('status_pelapor')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" id="pesan" class="form-control" rows="4" required>{{ old('pesan') }}</textarea>
                    @error('pesan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="lampiran">Lampiran (Opsional)</label>
                    <input type="file" name="lampiran" id="lampiran" class="form-control">
                    @error('lampiran')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <input type="hidden" name="type" value="{{ $type }}">


                <button type="submit" class="btn-submit">Kirim Laporan</button>
            </form>
        </div>
    </div>
@endsection

<style>
    .form-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px;
    }

    .form-image img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .form-content {
        width: 50%;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        font-size: 2rem;
        margin-bottom: 20px;
        text-align: center;
    }

    .form-control {
        border-radius: 8px;
        margin-bottom: 15px;
        padding: 12px;
        font-size: 1rem;
    }

    .btn-submit {
        background: linear-gradient(45deg, #69b7ec, #5391f5);
        border: none;
        color: white;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 8px;
        cursor: pointer;
    }
    
    .btn-submit:hover {
        background: white;
        color: black;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .form-container {
            flex-direction: column;
            text-align: center;
        }

        .form-content {
            width: 100%;
            margin-top: 20px;
        }
    }
</style>
