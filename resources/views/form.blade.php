<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($name ?? '')
        <h1>Hello My Name Is {{ $name }}</h1><br>
        <img src="{{ Storage::url('public/user/') . $image }}">
    @else 
        <form action="proses" method="post" enctype="multipart/form-data">
            @csrf
            <label for="nama">Masukkan Nama</label>
            <input type="text" name="nama"><br>
            <label for="nama">Masukkan Gambar</label>
            <input type="file" name="gambar"><br>
            <input type="sumbit" value="Kirim">
        </form>
    @endif
    
</body>
</html>