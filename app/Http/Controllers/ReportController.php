<?php
namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReportController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function createForm($type)
    {
        $formattedType = ucwords(str_replace('-', ' ', $type));

        return view('report-form', [
            'type' => $formattedType, // Tampilkan format yang sudah rapi
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'program_studi' => 'required|string|max:255',
            'angkatan' => 'required|string|max:10',
            'no_hp' => 'required|string|max:15',
            'status_pelapor' => 'required|in:Pelapor,Saksi',
            'pesan' => 'required|string',
            'lampiran' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'type' => 'required|in:Kesehatan Mental,Kekerasan Seksual', // 'type' 
        ]);
    
        $validated['ticket'] = strtoupper(Str::random(10));
    
        if ($request->hasFile('lampiran')) {
            $validated['lampiran'] = $request->file('lampiran')->store('lampiran', 'public');
        }
    
        Report::create($validated);
    
        // Redirect dengan membawa tiket sebagai parameter
        return redirect()->route('report.success', ['ticket' => $validated['ticket']]);
    }
    public function success(Request $request)
    {
        // Mengambil tiket dari query string
        $ticket = $request->query('ticket');
        
        return view('success', ['ticket' => $ticket]);
    }
    

    public function trackForm()
    {
        return view('track');
    }

    public function track(Request $request)
    {
        $report = Report::where('ticket', $request->ticket)->first();

        return view('track-result', ['report' => $report]);
    }

    public function trackResult(Request $request)
{
    $validated = $request->validate([
        'ticket' => 'required|string|max:10',
    ]);

    $report = Report::where('ticket', $validated['ticket'])->first();

    if (!$report) {
        return redirect('/track')->with('error', 'Tiket tidak ditemukan. Pastikan Anda memasukkan tiket yang benar.');
    }

    return view('track-result', compact('report'));
}

}
