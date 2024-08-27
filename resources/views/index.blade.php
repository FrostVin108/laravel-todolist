<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}" >
    <title>Document</title>
</head>
<body>

<table class="table">
    <a href="{{route('pegawai.create')}}">Create</a>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Nomor Pegawai</th>
            <th scope="col">Tanggal Bergabung</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pegawai as $key => $pgw)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$pgw->nama_pegawai}}</td>
                <td>{{$pgw->nomor_pegawai}}</td>
                <td>{{$pgw->tanggal_bergabung}}</td>
                <td>
                    
                    <form method="POST" action="{{route('pegawai.delete', $pgw->id)}}" onsubmit="return confirm('Apakah Anda Yakin?');" >
                        <a href="{{route('pegawai.edit', $pgw->id)}}">Edit</a>
                        
                        @csrf
                        @method('delete')
                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <div>
                <h1>Data Obat belum Tersedia.</h1>
            </div>
        @endforelse
    </tbody>
</table>

</body>
</html>