<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;

class AdminController extends Controller
{
    // Menampilkan semua laporan
    public function index()
    {
        $reports = Report::paginate(10);
        return view('admin.index', compact('reports'));
    }

    // Menampilkan detail laporan
    public function show($id)
    {
        $report = Report::findOrFail($id);
        return view('admin.show', compact('report'));
    }

    // Memperbarui status pelacakan
    public function update(Request $request, $id)
    {
        // Validasi dan update laporan
        $report = Report::findOrFail($id);
        $validated = $request->validate([
            'status_tracking' => 'required|in:Diterima,Diproses,Selesai',
        ]);

        $report->status_pelacakan = $validated['status_tracking'];
        $report->save();

        return redirect()->route('admin.index')->with('success', 'Status pelaporan berhasil diperbarui.');
    }

    // Menampilkan halaman login admin
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Mengelola proses login admin
    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Coba autentikasi admin
        if (Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $request->remember)) {
            // Jika berhasil login, redirect ke halaman laporan admin (index)
            return redirect()->route('admin.index');
        }

        // Jika gagal login, kembali dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Logout
    public function logout()
    {
        Auth::guard('web')->logout();  // Log out the admin
        return redirect('/');
    }
}
