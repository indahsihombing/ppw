<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kerusakan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/duktek_form.css') }}">

</head>
<body>
    <div class="container mt-5">
        <h2>Laporan Kerusakan</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @foreach($reports as $report)
            <div class="card mb-3">
                <div class="card-body">
                    <!-- Nama Lengkap -->
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Nama Lengkap</strong></div>
                        <div class="col-md-9">{{ $report->nama_lengkap }}</div>
                    </div>

                    <!-- Nomor Handphone -->
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Nomor Handphone</strong></div>
                        <div class="col-md-9">{{ $report->nomor_handphone }}</div>
                    </div>

                    <!-- Program Studi -->
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Program Studi</strong></div>
                        <div class="col-md-9">{{ $report->program_studi }}</div>
                    </div>

                    <!-- Lokasi Kerusakan -->
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Lokasi Kerusakan</strong></div>
                        <div class="col-md-9">{{ $report->lokasi_kerusakan }}</div>
                    </div>

                    <!-- Deskripsi Kerusakan -->
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Deskripsi Kerusakan</strong></div>
                        <div class="col-md-9">{{ $report->deskripsi_kerusakan }}</div>
                    </div>

                    <!-- Foto Kerusakan -->
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Foto Bukti</strong></div>
                        <div class="col-md-9">
                            @if($report->foto_kerusakan)
                                <img src="{{ asset('uploads/' . $report->foto_kerusakan) }}" alt="Foto Kerusakan" width="200">
                            @else
                                Tidak ada foto
                            @endif
                        </div>
                    </div>

                    <!-- Ditujukan Kepada -->
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Ditujukan Kepada</strong></div>
                        <div class="col-md-9">{{ $report->ditujukan_kepada }}</div>
                    </div>

                    

                    <!-- Tombol Terima dan Tolak -->
                    <div class="row mb-3">
                        <div class="col-md-12 text-center">
                            <form action="{{ route('report.accept', $report->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-success">Terima</button>
                            </form>
                            <form action="{{ route('report.reject', $report->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger">Tolak</button>
                                <div class="mb-3">
                                    
                                    <label for="rejection_reason" class="form-label">Alasan Penolakan</label>
                                    <input type="text" class="form-control" name="rejection_reason" required>
                                </div>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script src="{{ asset('js/duktek_form.js') }}"></script>
</body>
</html>
