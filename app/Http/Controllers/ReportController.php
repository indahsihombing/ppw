<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nomor_handphone' => 'required|string|max:20',
            'program_studi' => 'required|string',
            'lokasi_kerusakan' => 'required|string',
            'deskripsi_kerusakan' => 'required|string',
            'foto_kerusakan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'ditujukan_kepada' => 'required|string', // Tambahkan validasi untuk "ditujukan_kepada"
            
        ]);
    
        $data = $request->only([
            'nama_lengkap', 'nomor_handphone', 'program_studi',
            'lokasi_kerusakan', 'deskripsi_kerusakan', 'ditujukan_kepada'
        ]);
    
        if ($request->hasFile('foto_kerusakan')) {
            $imageName = time().'.'.$request->foto_kerusakan->extension();
            $request->foto_kerusakan->move(public_path('uploads'), $imageName);
            $data['foto_kerusakan'] = $imageName;
        }
    
        Report::create($data);
    
        return redirect()->route('form')->with('success', 'Laporan telah berhasil dikirim!');
    }

    public function storeAPI(Request $request)
{
    // Validasi data request
    $validated = $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'nomor_handphone' => 'required|string|max:20',
        'program_studi' => 'required|string',
        'lokasi_kerusakan' => 'required|string',
        'deskripsi_kerusakan' => 'required|string',
        'foto_kerusakan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'ditujukan_kepada' => 'required|string',
    ]);

    try {
        // Ambil data dari request
        $data = $request->only([
            'nama_lengkap', 'nomor_handphone', 'program_studi',
            'lokasi_kerusakan', 'deskripsi_kerusakan', 'ditujukan_kepada'
        ]);

        // Jika ada file foto kerusakan
        if ($request->hasFile('foto_kerusakan')) {
            $imageName = time() . '.' . $request->foto_kerusakan->extension();
            $request->foto_kerusakan->move(public_path('uploads'), $imageName);
            $data['foto_kerusakan'] = $imageName;
        }

        // Simpan data ke database
        $report = Report::create($data);

        // Kembalikan respons JSON berhasil
        return response()->json([
            'success' => true,
            'message' => 'Laporan berhasil dikirim!',
            'data' => $report
        ], 201); // HTTP 201 Created

    } catch (\Exception $e) {
        // Kembalikan respons JSON jika terjadi kesalahan
        return response()->json([
            'success' => false,
            'message' => 'Terjadi kesalahan saat mengirim laporan.',
            'error' => $e->getMessage()
        ], 500); // HTTP 500 Internal Server Error
    }
}


    public function getAllReports(Request $request)
    {
        // Ambil semua data laporan dari database
        $reports = Report::all();

        // Jika permintaan ingin JSON, kembalikan data dalam format JSON
        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Data laporan berhasil diambil',
                'data' => $reports
            ], 200);
        }

        // Jika bukan JSON, bisa mengembalikan view atau response lain
        return response()->json([
            'message' => 'Data laporan berhasil diambil',
            'data' => $reports
        ], 200);
    }
        
    public function index(Request $request)
    {
        // Jika ada ID yang diterima, tampilkan laporan tertentu
        if ($request->has('id')) {
            $reports = Report::where('id', $request->id)->get();
        } else {
            // Jika tidak, tampilkan semua laporan
            $reports = Report::all();
        }
        
        return view('duktek_form', compact('reports'));
    }

    
    
    public function lacak()
    {
        $reports = Report::select('id', 'deskripsi_kerusakan', 'lokasi_kerusakan', 'ditujukan_kepada')->get();
        return view('lacak', compact('reports'));
    }
    
    public function lacak_dm()
    {
        $reports = Report::select('deskripsi_kerusakan', 'lokasi_kerusakan', 'ditujukan_kepada', 'status', 'rejection_reason')->get();
        return view('lacak_dm', compact('reports'));
    }
    
    
public function duktek()
{
    // Ambil data dari tabel `reports`
    $reports = Report::select('id', 'deskripsi_kerusakan', 'lokasi_kerusakan', 'ditujukan_kepada')->get();
    
    // Kirim data ke view 'lacak'
    return view('lacak', compact('reports'));
}

public function accept($id)
{
    $report = Report::findOrFail($id);
    $report->status = 'accepted';
    $report->save();

    // Kirim notifikasi ke mahasiswa
    // Anda dapat menggunakan event dan listener atau langsung mengupdate session
    return redirect()->back()->with('success', 'Laporan berhasil diterima.');
}

public function reject(Request $request, $id)
{
    $report = Report::findOrFail($id);
    $report->status = 'rejected';
    $report->rejection_reason = $request->input('rejection_reason');
    $report->save();

    // Kirim notifikasi ke mahasiswa
    return redirect()->back()->with('success', 'Laporan berhasil ditolak.');
}

public function dashboard()
{
    // Hitung laporan berdasarkan status
    $totalReports = Report::count();
    $acceptedReports = Report::where('status', 'accepted')->count();
    $rejectedReports = Report::where('status', 'rejected')->count();

    // Kirim data ke view
    return view('dashboard', compact('totalReports', 'acceptedReports', 'rejectedReports'));
}


    // Hapus foto dari folder uploads jika ada
    // if ($report->foto_kerusakan && file_exists(public_path('uploads/' . $report->foto_kerusakan))) {
    //     unlink(public_path('uploads/' . $report->foto_kerusakan));
    // }

    // $report->delete();

    // return redirect()->route('duktek_form');
}

