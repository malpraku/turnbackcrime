@extends('layouts.app')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">

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
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">
                            <li>{{ $message }}</li>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" value="{{ old('password') }}">
                    @error('password')
                        <span class="text-danger">
                            <li>{{ $message }}</li>
                        </span>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="forgot-password">Forgot password?</a>
            </form>
        </div>
    </div>
</div>
@endsection