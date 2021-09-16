@extends('layouts.app')
@section('title')
    Projek
@endsection
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Projek</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <x-card>
            <x-slot name="header">
                <a  href="{{ route('campaign.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
            </x-slot>

            <form action="" class="d-flex justify-content-between">
                <x-dropdown-table />
                <x-filter-table />
            </form>

            <x-table>
                <x-slot name="thead">
                    <th width="7%">NO</th>
                    <th width="30%">Deskripsi</th>
                    <th>Tanggal Publish</th>
                    <th>Status</th>
                    <th>Author</th>
                    <th width="25%">Aksi</th>
                </x-slot>

            </x-table>

        </x-card>
    </div>
</div>

@endsection

<x-toasts />
@includeIf('includes.datatable')
