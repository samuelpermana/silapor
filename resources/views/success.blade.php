@extends('layouts.app')

@section('title', 'Laporan Berhasil - LaporAPP')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <!-- Card untuk menampilkan laporan sukses -->
                <div class="card shadow-lg border-light">
                    <div class="card-header bg-primary-gradient text-white text-center">
                        <h4>Laporan Berhasil Dikirim</h4>
                    </div>
                    <div class="card-body">
                        <p>Terima kasih telah mengirimkan laporan Anda. Nomor tiket Anda adalah:</p>
                        
                        <!-- Menampilkan tiket -->
                        <div class="ticket-box mb-4">
                            <div class="input-group">
                                <input type="text" id="ticketInput" value="{{ $ticket }}" readonly class="form-control form-control-lg">
                                <button id="copyButton" class="btn btn-outline-secondary">
                                    <i class="fas fa-copy"></i> Salin Tiket
                                </button>
                            </div>
                        </div>

                        <p class="mt-3">Silakan simpan tiket ini untuk melacak laporan Anda. Anda akan menerima email dan WhatsApp konfirmasi, serta pemberitahuan lebih lanjut bahwa laporan Anda akan segera diproses.</p>
                        
                        <p><strong>Himbauan:</strong> Segera salin tiket ini, karena hanya menggunakan tiket ini Anda dapat melacak status laporan.</p>
                    </div>

                    <div class="card-footer text-center">
                        <!-- Tombol Track Ticket -->
                        <a href="{{ route('trackForm') }}" class="btn btn-primary btn-lg w-100">Track Ticket Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsionalitas untuk menyalin tiket ke clipboard
        document.getElementById('copyButton').addEventListener('click', function() {
            var copyText = document.getElementById('ticketInput');
            copyText.select();
            document.execCommand('copy');
            alert("Tiket berhasil disalin!");
        });
    </script>

@endsection
<style>
    /* Custom class for gradient background */
.bg-primary-gradient {
    background: linear-gradient(45deg, #69b7ec, #5391f5);
    color: white; /* Agar teks tetap terlihat di atas background */
    border: none; /* Hapus border default jika ada */
}
    
</style>