@extends('layouts.app')

@section('title', 'Dashboard - SiLapor')

@section('content')
    <!-- Jumbotron -->
    <div class="container mt-5">
        <div class="jumbotron position-relative p-5 rounded shadow text-dark">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <p class="lead font-relax-tag">#YouSaveWithUs</p>
                    <h1 class="display-4 font-relax">Selamat Datang di SiLapor</h1>
                    <blockquote class="blockquote mt-4">
                        <p class="mb-0">"Silence is not the solution, speaking up is the first step toward justice"</p>
                    </blockquote>
                </div>
                <div class="col-lg-6 col-md-12 text-center">
                    <img src="{{ asset('images/grafis1.png') }}" alt="Ilustrasi SiLapor" class="img-fluid" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>

    <br/> 

    <!-- Card Layanan dengan geser -->
    
    <!-- We Are Here Section -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <!-- Gambar -->
            <div class="col-lg-6 col-md-12 mb-4">
                <img src="{{ asset('images/grafis3.png') }}" alt="Ilustrasi Bergandengan" class="img-fluid">
            </div>

            <!-- Konten -->
            <div class="col-lg-6 col-md-12">
                <h2 class="font-relax mb-3">We Are Here</h2>
                <p class="font-relax-tag mb-4">Mendampingi Anda di setiap langkah</p>

                <!-- Card Container -->
                <div class="d-flex flex-wrap gap-1">
                    <!-- Card 1 -->
                    <div class="card we-are-here-card">
                        <a href="/laporkan/kesehatan-mental"class="no-underline">
                            <h5>Kesehatan Mental</h5>
                            <p>Bantuan untuk kesehatan mental Anda melalui layanan kami.</p>
                        </a>
                    </div>
                    <!-- Card 2 -->
                    <div class="card we-are-here-card">
                        <a href="/laporkan/kekerasan-seksual"class="no-underline">
                            <h5>Kekerasan Seksual</h5>
                            <p>Lindungi diri Anda dengan melaporkan kekerasan seksual.</p>
                        </a>
                    </div>

                    <!-- Card 3 -->
                    <div class="card we-are-here-card">
                        <a href="/track"class="no-underline">
                            <h5>Track Pelaporan</h5>
                            <p>Pantau status laporan Anda dengan fitur tracking kami.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/> 
    <br/> 
    <!-- How You Are Heard Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4 font-relax">Bagaimana Kami Membantu Anda</h2>
        <br/> 
        <div class="row">
            <div class="col-md-6">
                <h5 class="font-relax">Langkah 1: Pengisian Laporan</h5>
                <p>Isi formulir laporan sesuai dengan jenis permasalahan Anda, apakah itu terkait dengan kesehatan mental atau kekerasan seksual.</p>
            </div>
            <div class="col-md-6">
                <h5 class="font-relax">Langkah 2: Verifikasi & Tindak Lanjut</h5>
                <p class="text-dark">Tim kami akan memverifikasi laporan Anda dan memastikan bahwa laporan tersebut diterima dengan benar.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="font-relax">Langkah 3: Proses Investigasi</h5>
                <p class="text-dark">Laporan Anda akan diteruskan ke pihak yang berkompeten untuk penyelidikan lebih lanjut, sesuai dengan kebijakan yang berlaku.</p>
            </div>
            <div class="col-md-6">
                <h5 class="font-relax">Langkah 4: Update Status Laporan</h5>
                <p class="text-dark">Anda dapat melacak perkembangan laporan melalui fitur 'Track Pelaporan'. Status laporan akan diperbarui secara berkala.</p>
            </div>
        </div>
    </div>

    <!-- Custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap');
        .no-underline {
        text-decoration: none;
    }
        .font-relax {
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
            color: #334eac;
        }

        .font-relax-tag {
            font-family: 'Quicksand', sans-serif;
            font-weight: 300;
            color: #334eac;
        }

        .jumbotron {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
        }

        .jumbotron img {
            max-width: 100%;
            height: 500px;
        }

        blockquote {
            font-style: italic;
            color: #6e7e91;
        }

        blockquote footer {
            font-size: 1rem;
            color: #7096d1;
        }

        .we-are-here-card {
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: calc(33% - 10px);
            min-width: 200px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .we-are-here-card h5 {
            font-weight: bold;
            font-size: 18px;
            background: linear-gradient(45deg, #69b7ec, #5391f5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .we-are-here-card:hover {
            background: linear-gradient(45deg, #69b7ec, #5391f5);
            color: white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .we-are-here-card:hover h5 {
            -webkit-text-fill-color: white;
        }

        .we-are-here-card p {
            font-size: 14px;
            margin-top: 10px;
            color: #6e7e91;
        }

        .we-are-here-card:hover p {
            color: white;
        }

        /* Responsiveness */
        @media (max-width: 992px) {
            .we-are-here-card {
                width: 100%;
            }
        }
    </style>
@endsection
