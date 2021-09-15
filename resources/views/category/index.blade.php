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
        <x-card>
            <x-slot name="header">
                <a  href="{{ route('category.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
            </x-slot>

            <form action="" class="d-flex justify-content-between">
                <x-dropdown-table />
                <x-filter-table />
            </form>

            <x-table>
                <x-slot name="thead">
                    <th width="7%">NO</th>
                    <th>Nama</th>
                    <th>Jumlah Projek</th>
                    <th width="25%">Aksi</th>
                </x-slot>
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
            </x-table>

            <x-pagination-table :model="$category" />
        </x-card>
    </div>
</div>

@endsection

<x-toasts />
