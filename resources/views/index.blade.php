<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" >
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
                <table class="table ">
                    <div class="create-button Verdana">
                        <a href="{{route('pegawai.create')}}" class="create-btn-style">Create</a>
                    </div>
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
                                <td style="height: 40px">
                                    
                                    <form class="action" method="POST" action="{{route('pegawai.delete', $pgw->id)}}" onsubmit="return confirm('Apakah Anda Yakin?');" >
                                        <a href="{{route('pegawai.edit', $pgw->id)}}" class="btn-edit">Edit</a>
                                        
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn-delete">Delete</button>
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
            </div>
        </div>

    </div>


</body>
</html>