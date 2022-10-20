@extends('layouts.app')
@section('navbar3')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            Tampilan Data <a href="/add-siswa" class="btn btn-success">Input Data</a>
                        </div>
                        <div class="card-body">
                            @if(Session::has('siswa_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('siswa_deleted')}}
                            </div>
                            @endif
                           <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Absen</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswas as $siswa )
                                        <tr>
                                            <td>{{ $siswa->absen }}</td>
                                            <td>{{ $siswa->nama }}</td>
                                            <td>{{ $siswa->kelas }}</td>
                                            <td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection