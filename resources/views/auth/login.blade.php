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

    <div class="card">
        <div class="card-body">
            <div class="asukau">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/Lambang_Polda_Jabar.png/800px-Lambang_Polda_Jabar.png" width="100">
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input placeholder="**********@polda.go.id" name="email" type="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">
                            <li>{{ $message }}</li>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Kata Sandi</label>
                    <input name="password" type="password" class="form-control" value="{{ old('password') }}">
                    @error('password')
                        <span class="text-danger">
                            <li>{{ $message }}</li>
                        </span>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Masuk</button>
                <a href="forgot-password">Lupa password?</a>
            </form>
        </div>
    </div>
</div>
@endsection