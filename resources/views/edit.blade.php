<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}">
    <title>Document</title>
</head>
<body class="body-bg Verdana">
    <div class="flex-pemisah">

        <div class="side-navbar Verdana">
            <b>Navbar</b>
            <hr>
            <input type="search" class="search-navbar" placeholder="Search">
        </div>

        <div class="outside-card">
            <div class="card">

                <form method="POST" action="{{ route('pegawai.update', $pegawai->id) }}" class="edit-input-position">
                
                    @csrf
                    @method('PUT')

                            <div class="nama-style">
                                <label for="exampleInputEmail">Nama Pegawai</label><br>
                                <input class="nama-input" type="text" placeholder="Input Nama" name="nama_pegawai" value="{{ old('nama_pegawai', $pegawai->nama_pegawai) }}">
                            </div>
                
                            <div class="nomor-style">
                                <label for="exampleInputEmail">Nomer Pegawai</label><br>
                                <input class="nomor-input" type="text" placeholder="Input Nomer" name="nomor_pegawai" value="{{ old('nomor_pegawai', $pegawai->nomor_pegawai) }}">
                            </div>
                
                            <div class="tanggal-style">
                                <label for="exampleInputEmail">Tanggal Bergabung</label><br>
                                <input class="tanggal-input" type="date" name="tanggal_bergabung" value="{{ old('tanggal_bergabung', $pegawai->tanggal_bergabung) }}">
                            </div>
                
                            <div class="button-position">
                                <button type="submit" class="btn-update">Update</button>
                                <button type="reset" class="btn-reset">Reset</button>
                                <a class="btn-return" href="{{ route('pegawai.index')}}">Return</a>
                            </div>
                </form>

            </div>
        </div>
 
    

</body>
</html>