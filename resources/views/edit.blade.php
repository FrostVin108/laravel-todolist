<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="{{ route('pegawai.update', $pegawai->id) }}">

    @csrf
    @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail">Nama Pegawai</label><br>
                <input type="text" placeholder="Input Nama" name="nama_pegawai" value="{{ old('nama_pegawai', $pegawai->nama_pegawai) }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Nomer Pegawai</label><br>
                <input type="text" placeholder="Input Nomer" name="nomor_pegawai" value="{{ old('nomor_pegawai', $pegawai->nomor_pegawai) }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Tanggal Bergabung</label><br>
                <input type="date" name="tanggal_bergabung" value="{{ old('tanggal_bergabung', $pegawai->tanggal_bergabung) }}">
            </div>

        <button type="submit" class="btn btn-success">update</button>
        <a href="{{ route('pegawai.index')}}">return</a>
</form>

</body>
</html>