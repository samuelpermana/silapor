@extends('layouts.app')

@section('title', 'Track Pelaporan - LaporAPP')

@section('content')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Track Pelaporan</h2>

        <div class="card shadow-lg p-4">
            <h4 class="card-title text-center">Masukkan Ticket untuk Melacak Status Laporan</h4>
            <form action="/track" method="POST" class="d-flex justify-content-center align-items-center">
                @csrf
                <div class="mb-3 w-75">
                    <input type="text" name="ticket" placeholder="Masukkan Ticket" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Track</button>
            </form>
        </div>
    </div>

@endsection
