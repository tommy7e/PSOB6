<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Welcome to Our To-Do List Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">To-Do List by Teamistry</a>
        </nav>

    <div class="container">
        <h1>Selamat Datang di website catatan harianmu</h1>
        <a href="/tugas/tambah" class="btn btn-primary"> + klik untuk menambahkan tugas baru</a>

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Nama Tugas</th>
            </tr>
            @foreach($tugas as $t)
            <tr>
                <td>{{ $t->tugas_id }}</td>
                <td>{{ $t->tugas_nama }}</td>
                <td>
                    <a href="/tugas/view/{{ $t->tugas_id }}" class="btn btn-success">View</a>
                    |
                    <a href="/tugas/edit/{{ $t->tugas_id }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/tugas/hapus/{{ $t->tugas_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>

        {{ $tugas->links() }}

        @include('footer')
    </div>

    </body>
</html>
