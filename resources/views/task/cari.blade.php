@extends('layouts.app')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">

    <style>
.asukau {
    text-align: center;
}

.asukau img {
    width: 100px;
}
</style>

<script>
    function doshit(){
    x = document.getElementById("nomorlaporan").value;
window.location.replace("/kasus/check/" + x);
}
    </script>
    <div class="card">
        <div class="card-body">
            <div class="asukau">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/Lambang_Polda_Jabar.png/800px-Lambang_Polda_Jabar.png" width="100">
            </div>

                @csrf
                <h3>Cek Status Laporan Anda</h3>
                <div class="mb-3">
                    <label for="" class="form-label">Silahkan masukkan nomor laporan anda.</label>
                    <input type="text" placeholder="Masukkan nomor laporan anda..." id="nomorlaporan" class="form-control">
                </div>

                <button onclick="doshit()" class="btn btn-primary">Cek Status</button>
        </div>
    </div>
</div>
@endsection