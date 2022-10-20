
@extends('layouts.app')
@section('navbar3')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            Tampilan Data <a href="/add-post" class="btn btn-success">Input Data</a>
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_createed'))
                            <div class="alert alert success" role="alert">
                                {{Session::get('post_created') }}
                            </div>
                            @endif
                           <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Barang</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($posts as $tampilan )
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $tampilan->title }}</td>
                                            <td>{{ $tampilan->body }}</td>
                                            <td>
                                            

                                            <a href="/edit-post/{{ $tampilan->id }}" class="btn btn-success">Edit</a>
                                            <a href="/delete/{{ $tampilan->id }}" class="btn btn-danger">Hapus</a>
                                            
                                           
                
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