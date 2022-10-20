@extends('layouts.app')
@section('navbar3')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Edit Data Inventaris Barang
                        </div>
                        <div class="card-body">
                            @if (Session::has('post_created'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_created') }}
                                </div>
                            @endif
                            <form method="POST" action="/update-post/{{ $post->id }}">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Nama Barang</label>
                                    <input type="text" name="title" class="form-control" value="{{ $post->title }}" />
                                </div>

                                <div class="form-group">
                                    <label for="body">Jumlah</label>
                                    <textarea name="body" class="form-control" rows="3">{{ $post->body }}</textarea>
                                </div>


                                <div class="card-body">
                                    <form method="POST" action="{{ route('upload.uploadfile') }}" enctype="multipart/form-data">
                                     @csrf
                                     <div class="form-group">
                                         <label for="file">Upload File</label>
                                         <input type="file" class="form-control" name="file" id="file"/>
                                     </div>
                                     <br>
                                     <button type="submit" class="btn btn-success">Update Data</button>
                                    </form>


                                    <a href="/post" class="btn btn-primary">Menu Data</a>
                                 </div>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
