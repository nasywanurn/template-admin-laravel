@extends('layouts.admin')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
        <head>
           <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Halaman Edit Daftar Nama Pengarang</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </head>
        <body>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('pengarang.update', $pengarang->id)}}" method="post" accept="">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label for="">Nama Pengarang</label>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" value="{{$pengarang->nama_pengarang}}" class="form-control" name="nama_pengarang" placeholder="Masukkan nama pengarang" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" value="{{$pengarang->email}}" class="form-control" name="email" placeholder="masukan email pengarang" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label for="">Telepon</label>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" value="{{$pengarang->tlp}}" class="form-control" name="tlp" placeholder="masukan no telepon pengarang" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn-btn-danger">Simpan data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </body>
    </html>
@endsection
