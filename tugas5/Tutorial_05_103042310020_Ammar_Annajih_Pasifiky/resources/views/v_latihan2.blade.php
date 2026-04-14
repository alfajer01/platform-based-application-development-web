<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>

<body>
    <h3>{{ $title }}</h3>
    <p>Nama Pengumpul : {{ $nama_pengumpul }}</p>
    <p>NIM Pengumpul : {{ $nim }}</p>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Asal</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($daf_mhs as $mhs)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['asal'] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>