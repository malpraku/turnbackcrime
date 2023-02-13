@extends('layouts.app')
@section('main')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            Oops! Looks like you've stumbled upon an error. To learn more, visit the link below.<br><a href="https://www.youtube.com/watch?v=QDia3e12czc">http://bukantemen.vallian/faq.html#error</a>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action='#' method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Judul Laporan</label>
                    <input name="user" type="text" class="form-control" placeholder='Masukkan judul laporan anda...'>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi Laporan</label>
                    <textarea name="task" placeholder='Ceritakan kronologi dan detail lengkap sepengetahuan anda!' class="form-control" id="" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tingkatan Kasus</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih tingkatan lapor...</option>
                            <option value="1">RINGAN</option>
                            <option value="2">SEDANG</option>
                            <option value="3">TINGGI</option>
                        </select>
                </div>

                <button type="submit" class="btn btn-primary">Kirim Laporan</button>
            </form>
        </div>
    </div>
</div>
@endsection