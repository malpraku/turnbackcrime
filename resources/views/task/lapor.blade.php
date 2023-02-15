@extends('layouts.app')
@section('main')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            Maaf, kami menemukan kendala di sistem kami. Baca kode error dibawah, atau kunjungi link dibawah.<br><a href="https://www.youtube.com/watch?v=QDia3e12czc">http://bukantemen.vallian/faq.html#error</a>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action='{{ url ('/tasks') }}' method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama Pelapor (bila anonim, isi "-")</label>
                    <input name="user" type="text" class="form-control" value="{{ old('task') }}">
                    @error('user')
                        <span class="text-danger">
                            <li>{{ $message }}</li>
                        </span>
                    @enderror
                <div class="mb-3">
                    <label for="" class="form-label">Judul Laporan</label>
                    <input name="task" type="text" class="form-control" placeholder='Masukkan judul laporan anda...'>
                    @error('task')
                    <span class="text-danger">
                        <li>{{ $message }}</li>
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi Laporan</label>
                    <textarea name="level" placeholder='Ceritakan kronologi dan detail lengkap sepengetahuan anda!' class="form-control" id="" rows="3"></textarea>
                    @error('task')
                    <span class="text-danger">
                        <li>{{ $message }}</li>
                    </span>
                @enderror
                </div>
                <!-- 
                <div class="mb-3">
                    <label for="" class="form-label">Tingkatan Kasus</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">RINGAN</option>
                            <option value="2">SEDANG</option>
                            <option value="3">TINGGI</option>
                        </select>
                        @error('level')
                    <span class="text-danger">
                        <li>{{ $message }}</li>
                    </span>
                @enderror
                </div> -->
                

                <button type="submit" class="btn btn-primary">Kirim Laporan</button>
            </form>
        </div>
    </div>
</div>
@endsection