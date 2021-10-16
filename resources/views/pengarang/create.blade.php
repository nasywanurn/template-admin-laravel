@extends('layouts.admin')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Tambah data pengarang
                        </div>
                        <div class="card-body">
                            <form action="{{route('pengarang.store')}}" method="post">
                                <div class="form-group">
                                    <label for="">Nama Pengarang</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <input type="text" class="form-control" name="tlp" required>
                                </div>
                                <div class="form-group">
                                   <button type="submit" class="btn-btn-primary btn-block">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </html>
@endsection
