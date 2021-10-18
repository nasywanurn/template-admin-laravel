@extends('layouts.admin')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Tambah pengarang Buku
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-body">
                            <form action="{{route('pengarang.store')}}" method="post" accept="">
                                @csrf

                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <label for="">Nama Pengarang</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" value="{{old('nama_pengarang')}}" name="nama_pengarang" placeholder="Masukkan nama pengarang">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="masukan email pengarang">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <label for="">Telepon</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" value="{{old('tlp')}}" name="tlp" placeholder="masukan no telepon pengarang">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn-btn-danger">Simpan data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </html>
@endsection
