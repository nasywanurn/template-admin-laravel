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
                            <h1>Halaman Edit Daftar Buku</h1>
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
                        <div class="col-lg-12">
                            <label for="">
                                Nama Pengarang :
                            </label>
                            {{$pengarang->nama_pengarang}}
                            <br>

                            <label for="">
                                Email Pengarang :
                            </label>
                            {{$pengarang->email}}
                            <br>

                            <label for="">
                                Nomor Telepon Pengarang :
                            </label>
                            {{$pengarang->tlp}}
                            <br>

                        </div>
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
