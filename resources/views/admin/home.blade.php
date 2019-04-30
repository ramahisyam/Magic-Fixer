@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <nav class="nav flex-column">
            <a class="nav-link active" href="#">Dashboard</a>
            <a class="nav-link disabled" href="#">Transaksi</a>
        </nav>
        <div class="col-md-8">
            @foreach ($items as $item)
                <br>
                <div class="card">
                    <div class="card-header">{{ $item->name }}</div>

                    <div class="card-body">
                        <span>Pemilik : </span>{{ $item->user->name }}
                        <p>{{ $item->created_at->diffForHumans() }}</p>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailModal">Detail</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
