@extends('layouts.app')
@section('navbar3')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Sistem Pendataan Siswa
                        </div>
                        <div class="card-body">
                            @if (Session::has('siswa_created'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('siswa_created') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('siswa.create') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama siswa" />
                                </div>

                                <div class="form-group">
                                    <label for="absen">Absen</label>
                                    <input type="text" name="absen" class="form-control" placeholder="Masukkan No Absen" />
                                </div>

                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <textarea name="kelas" class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Add Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
