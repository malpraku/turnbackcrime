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
            <form action='{{ url ("/tasks/$task->id") }}' method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">User</label>
                    <input name="user" type="text" class="form-control" placeholder='{{$task->user}}' value="{{ old('user'),$task->user }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Task</label>
                    <textarea name="task" placeholder='{{$task->task}}' class="form-control" id="" rows="3">{{ old('task'),$task->task }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection