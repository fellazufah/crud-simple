<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Data Animal</h1>

   <div class="container">
    <a href="/tambahanimal" class="btn btn-primary">Tambah</a>
    <div class="row">
      @if ($message = Session::get('succes'))
      <div class="alert alert-success" role="alert">
       {{ $message }}
      </div>
      @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Warna</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php 
                    $no = "1";
                @endphp
                @foreach ($data as $row )
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->jeniskelamin }}</td>
                    <td>
                      <img src="{{ asset('fotoanimal/'.$row->foto) }}" alt="" style="width: 40px;">
                    </td>
                    <td>{{ $row->foto }}</td>
                    <td><a href="/delete/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                        <a href="/tampilanimal/{{ $row->id }}" class="btn btn-warning">Edit</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>