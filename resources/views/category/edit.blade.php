@extends('layouts.app')
@section('title')
    Edit Category
@endsection
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('put')

                <div class="card-body">
                    <div class="form-group row">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-dark">Reset</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('js')

@endpush
