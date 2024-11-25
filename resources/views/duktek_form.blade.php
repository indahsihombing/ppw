<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kerusakan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Laporan Kerusakan</h2>
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Nomor Handphone</th>
                    <th>Program Studi</th>
                    <th>Lokasi Kerusakan</th>
                    <th>Deskripsi Kerusakan</th>
                    <th>Foto Bukti</th>
                    <th>Ditujukan Kepada</th> <!-- Kolom baru -->
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $report)
                    <tr>
                        <td>{{ $report->nama_lengkap }}</td>
                        <td>{{ $report->nomor_handphone }}</td>
                        <td>{{ $report->program_studi }}</td>
                        <td>{{ $report->lokasi_kerusakan }}</td>
                        <td>{{ $report->deskripsi_kerusakan }}</td>
                        <td>
                            @if($report->foto_kerusakan)
                                <img src="{{ asset('uploads/' . $report->foto_kerusakan) }}" alt="Foto Kerusakan" width="100">
                            @else
                                Tidak ada foto
                            @endif
                        </td>
                        <td>{{ $report->ditujukan_kepada }}</td> <!-- Menampilkan data ditujukan_kepada -->
                        <td>
                            <form action="{{ route('report.accept', $report->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-success">Terima</button>
                            </form>
                            <form action="{{ route('report.reject', $report->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <div class="mb-3">
                                    <label for="rejection_reason" class="form-label">Alasan Penolakan</label>
                                    <input type="text" class="form-control" name="rejection_reason" required>
                                </div>
                                <button type="submit" class="btn btn-danger">Tolak</button>
                            </form>
                        </td>
                                            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>