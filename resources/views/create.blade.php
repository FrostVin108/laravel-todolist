<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('pegawai.create') }}">
        @csrf
        @method('post')
            <div class="form-group">
                <label for="exampleInputEmail">Nama Pegawai</label><br>
                <input type="text" placeholder="Input Nama" name="nama_pegawai">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Nomer Pegawai</label><br>
                <input type="text" placeholder="Input Nomer" name="nomor_pegawai">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Tanggal Bergabung</label><br>
                <input type="date" name="tanggal_bergabung">
            </div>

        <button type="submit" class="btn btn-success">Submit</button>
                      
    </form>    
</body>

</html>