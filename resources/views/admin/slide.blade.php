@extends('layouts/admin')

@section('title')
Slider Menu
@endsection

@section('content')
<div class="container text-center bg-off-white fix mt-5 px-3">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="jenisMakanan">
        <div class="row my-3">
            {{-- <div class="col pb-3">
                <a href="/admin/type/create" class="btn btn-primary">Tambah Kategori</a>
            </div> --}}
            <h3>Slider Menu</h3>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <table class="table table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Slider</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slide as $slide)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $slide->nama }}</td>
                        @if ($slide->getAttribute('display')== 'highlight-display')
                        <td>Display</td>
                        @else
                        <td>Hidden</td>
                        @endif
                        <td>
                            <a href="/web-raasaa-admin/slide/{{ $slide->slug }}/edit" class="btn btn-success">
                                <i class="bi bi-pencil-fill" style="font-size: 1rem;"></i>
                            </a>
                            {{-- <form action="/admin/slider/{{ $slide->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                                    <span class="bi bi-trash-fill" style="font-size: 1rem;"></span>
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection