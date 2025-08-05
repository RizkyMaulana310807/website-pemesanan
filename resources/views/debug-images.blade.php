<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostik Gambar</title>
    <style>
        body { font-family: sans-serif; padding: 2em; line-height: 1.6; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; vertical-align: top; word-break: break-all; }
        th { background-color: #f4f4f4; }
        .status-ok { color: green; font-weight: bold; }
        .status-error { color: red; font-weight: bold; }
        code { background-color: #eee; padding: 2px 5px; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Diagnostik Path Gambar (Tingkat Lanjut)</h1>
    <p>Halaman ini akan membantu kita menemukan masalah. Perhatikan kolom <strong>"File Ditemukan?"</strong> dan <strong>"Gambar Base64"</strong>.</p>

    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Path dari Database</th>
                <th>URL yang Dihasilkan</th>
                <th>File Ditemukan?</th>
                <th>Hasil Gambar (dari URL)</th>
                <th>Gambar Base64 (Tes Baca File)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                @php
                    $path = public_path($product->image);
                    $fileExists = file_exists($path);
                    $base64Image = '';
                    if ($fileExists) {
                        try {
                            $type = mime_content_type($path);
                            $data = file_get_contents($path);
                            $base64Image = 'data:' . $type . ';base64,' . base64_encode($data);
                        } catch (\Exception $e) {
                            $base64Image = 'Error: Gagal membaca file. Cek izin akses (permissions).';
                        }
                    }
                @endphp
                <tr>
                    <td>{{ $product->name }}</td>
                    <td><code>{{ $product->image }}</code></td>
                    <td><code>{{ asset($product->image) }}</code></td>
                    <td>
                        @if($fileExists)
                            <span class="status-ok">YA, DITEMUKAN</span>
                        @else
                            <span class="status-error">TIDAK ADA</span>
                        @endif
                    </td>
                    <td>
                        <img src="{{ asset($product->image) }}" alt="Gagal dimuat dari URL" width="100">
                    </td>
                    <td>
                        @if($base64Image)
                            @if(str_starts_with($base64Image, 'data:image'))
                                <img src="{{ $base64Image }}" alt="Gambar Base64" width="100">
                                <span class="status-ok">Sukses!</span>
                            @else
                                <span class="status-error">{{ $base64Image }}</span>
                            @endif
                        @else
                            <span class="status-error">File tidak ada.</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
