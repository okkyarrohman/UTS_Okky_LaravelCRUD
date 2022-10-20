@extends('layouts.mainpage')
@section('main-nav')
<style>
    a {
        text-decoration: none;
        font-size: 20px;
        color: black;
    }

    .col-9 {
        color: grey;
    }

    .col-6 {
        color: gray;
    }
</style>

                <div class="card text-center">
                    <div class="card-header">
                    <div class="card-body">
                      <h1 class="card-title">Data Data Sekolah</h1>
                      <p class="card-text">Login diatas untuk melanjutkan sebelum menikmati fitur fitur dibawah ini </p>
                      
                    </div>
                  </div>
                  <br>


                  <div class="container">
                    <div class="row">
                      <div class="col-9" style="text-align: center">
                        <h3>Olah Data Inventaris</h3>
                        <br>
                    </div>
                      <div class="col-4">
                        <img src="olah1.jpg" width="200px" height="200px">
                      </div>
                      <div class="col-6" style="text-align: left">Yang termasuk barang inventaris kelas antara lain; meja dan kursi siswa, meja dan kursi guru, lemari kelas, lambang negara, foto presiden dan wakil presiden, papan tulis dan papan absen.
                    </div>
                  </div>
                  <br>
                  <br>

                  <div class="container-down">
                    <div class="row">
                      <div class="col-9" style="text-align: center">
                        <h3>Rekap Nama Siswa</h3>
                        <br>
                    </div>
                      <div class="col-4">
                        <img src="siswa1.jpg" width="200px" height="200px">
                      </div>
                      <div class="col-6" style="text-align: left">Menurut Sudirman (2003) pengertian siswa adalah orang yang datang ke sekolah untuk memperoleh atau mempelajari beberapa tipe pendidikan. Pada masa ini siswa mengalami berbagai perubahan, baik fisik maupun psikis. Selain itu juga berubah secara kognitif dan mulai mampu berpikir abstrak seperti orang dewasa.
                        </div>
                  </div>

                  
@endsection