@extends('layouts.app')
@section('navbar3')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Data Inventaris Barang
                        </div>
                        <div class="card-body">
                            @if (Session::has('post_created'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_created') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('post.create') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Nama Barang</label>
                                    <input type="text" name="title" class="form-control" placeholder="Masukkan Nama Barang" />
                                </div>

                                <div class="form-group">
                                    <label for="body">Jumlah</label>
                                    <textarea name="body" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('upload.uploadfile') }}" enctype="multipart/form-data">
                                     @csrf
                                     <div class="form-group">
                                         <label for="file">Pilih File</label>
                                         <input type="file" class="form-control" name="file" id="file"/>
                                     </div>
                                     <br>
                                     <button type="submit" class="btn btn-success">Tambah Data</button>
                                    </form>
                                 </div>

                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
