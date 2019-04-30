@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Masukkan Data Barang Anda</div>

                <div class="card-body">
                    <form class="form-group" method="post" action="{{ route('item.store') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <label for="name">Nama Barang</label>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1">
                        <br/>
                        <label for="exampleFormControlInput1">Kategori Barang</label>
                        <select class="custom-select" name="categories_id" id="">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <br/>
                        <label for="">Penyebab Kerusakan</label>
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
