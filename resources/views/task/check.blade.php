@extends('layouts.app')
@section('main')

    <div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-secondary" style="width: 800px;">
        <div class="d-flex justify-content-between flex-shrink-0 p-3 white  border-bottom">
            <span class="fs-5 fw-semibold">Cek Status</span>
        </div>
        
        <div class="list-group list-group-flush border-bottom scrollarea">
            <div class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">{{ $item->description }}</strong>
                    <small>{{ $item->updated_at }}<br>dilaporkan oleh: user</small>
                </div>
                <div class="col-10 mb-1 small">Judul: {{ $item->title }}</div>
                <div class="col-10 mb-1 small">Status: {{ $item->status }}</div>
                <!-- <div class="group-action">
                    <form action="{{ url("/tasks/$item->id") }}" method="POST">
                    @csrf
                    @method('DELETE')
                        <a href="{{ url ("/tasks/$item->id/edit") }}" class="badge bg-secondary text-white">Update Status</a>
                        <button type="submit" class="badge bg-danger text-white">Kasus Clear</button>
                    </form>
                </div> -->
            </div>
        </div>

        <br>
    </div>
@endsection