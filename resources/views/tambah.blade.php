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

        <h3>Tambah Tugas</h3>

	<a href="/"> Kembali </a>

    <br><br>

    <form action="/tugas/store" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label">Nama Tugas</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-1 col-sm-11 pull-right">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
    </form>

        @include('footer')
    </div>

    </body>
</html>
