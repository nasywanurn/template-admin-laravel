@extends('layouts.admin')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title></title>
        </head>
        <body>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Data Pengarang
                                <a href="{{route('pengarang.create')}}" class="btn btn-sm btn-primary float-right">Tambah</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pengarang</th>
                                            <th>Email</th>
                                            <th>Telepon</th>
                                            <th>Aksi</th>
                                        </tr>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($pengarang as $data)
                                            <tr>
                                                <td>
                                                    {{$no++}}
                                                </td>
                                                <td>
                                                    {{$data->nama_pengarang}}
                                                </td>
                                                <td>
                                                    {{$data->email}}
                                                </td>
                                                <td>
                                                    {{$data->tlp}}
                                                </td>
                                                <td>
                                                    <button class="btn btn-success">Edit</button>
                                                    <button class="btn btn-warning">Show</button>
                                                    <button class="btn btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
@endsection
