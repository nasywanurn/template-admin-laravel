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
                            <h1>Halaman Daftar Buku</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

        </head>
        <body>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                 {{-- menampilkan data pengarang dan data buku --}}
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
                        @foreach ($buku as $data)
                            Nama Pengarang Buku : {{ $data->pengarang->nama_pengarang }} <br>
                            Email Pengarang : {{ $data->pengarang->email }} <br>
                            Nama Buku : {{ $data->nama_buku }} <br>
                            @if ($data->jumlah_halaman > 1)
                            Jumlah Halaman : {{ $data->jumlah_halaman }} <br>
                            @else
                            jumlah halaman buku : <b>belum mempunya halaman</b>
                            @endif
                            Translate Buku : {{ $data->translate_judul_buku ?? 'Belum ada translate'}} <br>
                            <hr>
                        @endforeach
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

                    </div>
                    <!-- /.card-footer-->
                </div>

                <!-- Default box -->
                {{-- menampilkan data pengarang dan daftar buku --}}
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
                        Daftar pengarang
                        @foreach ($pengarang as $data)
                            Nama Pengarang Buku : {{ $data->nama_pengarang }} <br>
                            Email Pengarang : {{ $data->email }} <br>
                            Tlp Pengarang : {{ $data->tlp }} <br>

                            <b> Daftar buku</b><br>
                            @foreach ($data->book as $item)
                                Nama Buku : {{ $item->nama_buku }} <br>
                                @if ($item->jumlah_halaman > 1)
                                    Jumlah Halaman : {{ $item->jumlah_halaman }} <br>
                                @else
                                    jumlah halaman buku : <b>belum mempunyai halaman</b>
                                @endif
                                    Translate Judul Buku : {{ $item->translate_judul_buku ?? 'Belum ada translate'}} <br>
                            @endforeach
                        @endforeach
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </body>
    </html>
@endsection
