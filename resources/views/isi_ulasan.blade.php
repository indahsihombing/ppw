<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ulasan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Detail Ulasan</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Laporan: {{ $report->deskripsi_kerusakan }}</h5>
                <p><strong>Ulasan:</strong> {{ $report->reviews->first()->review ?? 'Belum ada ulasan' }}</p>
                <p><strong>Rating:</strong> {{ $report->reviews->first()->rating ?? '-' }}</p>
            </div>
        </div>
    </div>
</body>
</html>