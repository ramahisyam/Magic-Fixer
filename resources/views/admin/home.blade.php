@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($items as $item)
                <br>
                <div class="card">
                    <div class="card-header">{{ $item->name }}</div>

                    <div class="card-body">
                        <span>Pemilik : </span>{{ $item->user->name }}
                        <p>{{ $item->created_at->diffForHumans() }}</p>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#detailModal{{ $item->id }}">Lacak Barang</button>
                    </div>
                </div>
                <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $item->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table>
                                    <tr>
                                        <td>Nama Pemilik : {{ $item->user->name }} </td>
                                    </tr>
                                    <tr>
                                        <td>Kategori : {{ $item->category->name }} </td>
                                    </tr>
                                    <tr>
                                        <td>Keluhan : {{ $item->description }} </td>
                                    </tr>
                                </table>
                                <hr>
                                <form class="form-group" method="post" action="">
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                                    <label for="">Masukkan proses barang</label>
                                    <textarea name="description" class="form-control"></textarea>
                                    <br/>
                                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
