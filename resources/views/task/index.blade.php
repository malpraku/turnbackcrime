@extends('layouts.app')
@section('main')



<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-black" style="width: 600px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 white  border-bottom">
        <span class="fs-5 fw-semibold">Streaming Kamera Kantor</span>
    </div>

    <script>
        window.onload = function() {
            var image = document.getElementById("cctv");
        
            function updateImage() {
                image.src = image.src + "?" + new Date().getTime();
            }
        
            setInterval(updateImage, 1000);
        }
        </script>

    <div onload="updateImage();">
        <img id="cctv" src="http://36.37.72.71/webcapture.jpg?command=snap&channel=1?COUNTER" style="top:0;left:0;height:100%;width:600px"/>
        </div>

</div>
    <div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-black" style="width: 800px;">
        <div class="d-flex justify-content-between flex-shrink-0 p-3 white  border-bottom">
            <span class="fs-5 fw-semibold">Tabel Laporan</span>
            <span class="fs-5 fw-semibold">Total: {{ $data->total() }}</span>
            <a href="{{ url ('/kasus/create') }}" class="btn btn-sm btn-primary">add</a>
        </div>

        @foreach($data as $item)
        <div class="list-group list-group-flush border-bottom scrollarea">
            <div class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">{{ $item->description }}</strong>
                    <small>{{ $item->updated_at }}<br>dilaporkan oleh: user</small>
                </div>
                <div class="col-10 mb-1 small">Judul: {{ $item->title }}</div>
                <div class="col-10 mb-1 small">Status: {{ $item->status }}</div>
                <div class="group-action">
                    <form action="{{ url("/kasus/$item->id") }}" method="POST">
                    @csrf
                    @method('DELETE')
                        <a href="{{ url ("/kasus/$item->id/edit") }}" class="badge bg-secondary text-white">Update Status</a>
                        <button type="submit" class="badge bg-danger text-white">Kasus Clear</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

        <br>
        {{ $data->links('pagination::bootstrap-5') }}
    </div>
@endsection