<!DOCTYPE html>
<html>

<head>
    <title>UMKM Data</title>
</head>

<body>
    <h1>UMKM</h1>
    @if (isset($data))
        @foreach ($data as $umkm)
            <div>
                <h2>{{ $umkm['nama'] }}</h2>
                <p>Alamat: {{ $umkm['alamat'] }}</p>
                <p>No. Kontak: {{ $umkm['no_kontak'] }}</p>
                <p>Kategori: {{ $umkm['kategori'] }}</p>
                <p>Deskripsi: {{ $umkm['deskripsi'] }}</p>
                <p>NPWP: {{ $umkm['npwp'] }}</p>
            </div>
        @endforeach
        @else
        <p>No data available.</p>
    @endif
</body>

</html>
