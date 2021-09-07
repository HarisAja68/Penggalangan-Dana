@extends('layouts.app')
@section('title')
    Category
@endsection
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Category</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a  href="{{ route('category.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
            </div>
            <div class="card-body">
                <form action="" class="d-flex justify-content-between">
                        <x-dropdown-table />
                        <x-filter-table />
                </form>

                <table class="table table-striped table-bordered">
                    <thead>
                        <th width="7%">NO</th>
                        <th>Nama</th>
                        <th>Jumlah Projek</th>
                        <th width="25%">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($category as $key => $item)
                        <tr>
                            <td>
                                <x-number-table :key="$key" :model="$category" />
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>0</td>
                            <td class="d-flex">
                                <a href="{{ route('category.edit', $item->id) }}" class="btn btn-info"><i class="fa fa-edit"> Edit</i></a>
                                <form action="{{ route('category.destroy', $item->id )}}" method="post" class="mx-2">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Yakin ingin mengalus data ?')"><i class="fa fa-trash-alt"> hapus</i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="float-right mt-2">
                    {{ $category->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<x-toasts />
@endpush
