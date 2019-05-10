@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $item->name }}</div>

                <div class="card-body">
                    <form class="form-group" method="post" action="">
                        @csrf
                        <br/>
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
</div>
@endsection
