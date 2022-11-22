@extends('layouts/admin')

@section('title')
  Kategori Menu
@endsection

@section('content')
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if (session()->has('deleted'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('deleted') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="row my-3">
    <div class="col pb-3">
      {{-- <a href="/web-raasaa-admin/type/create" class="btn btn-success">Tambah Kategori</a> --}}
      <div class="col-md-4">
        <button type="button" class="btn bg-gradient-primary btn-block mb-3" data-bs-toggle="modal"
          data-bs-target="#ModalTambah">
          Tambah Kategori
        </button>
      </div>
    </div>
  </div>
  {{-- <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>Menu Spesial</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th> -->
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori Menu</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Menu</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($specials as $special)
              @if ($special->getAttribute('filters_id') == '3')
                <tr>
                  <!-- <td class="align-middle ps-4">
                              <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                            </td> -->
                  <td>
                    <p class="text-xs font-weight-bold mb-0 ps-4">{{ $special->nama }}</p>
                  </td>
                  <td class="align-middle">
                    <span class="badge badge-sm bg-gradient-primary">{{ $special->filters->slug }}</span>
                  </td>
                  <td class="align-middle">
                    <a href="/web-raasaa-admin/type/{{ $special->slug }}/edit" class="btn btn-success">
                      <p class="text-xs font-weight-bold mb-0">Edit</p>
                    </a>
                  </td>
                </tr>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> --}}
  <div class="card mb-4">
    <div class="card-header pb-0">
      <h6>Semua Menu</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th> -->
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori Menu</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Menu</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($types as $type)
              {{-- @if ($type->getAttribute('filters_id') != '3') --}}
              <tr>
                <!-- <td class="align-middle ps-4">
                                <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                              </td> -->
                <td>
                  <p class="text-xs font-weight-bold mb-0 ps-4">{{ $type->nama }}</p>
                </td>
                @switch($type->getAttribute('filters_id'))
                  @case(1)
                    <td class="align-middle">
                      <span class="badge badge-sm bg-gradient-info">{{ $type->filters->slug }}</span>
                    </td>
                  @break

                  @case(2)
                    <td class="align-middle">
                      <span class="badge badge-sm bg-gradient-danger">{{ $type->filters->slug }}</span>
                    </td>
                  @break

                  @default
                    <td class="align-middle">
                      <span class="badge badge-sm bg-gradient-primary">{{ $type->filters->slug }}</span>
                    </td>
                @endswitch
                <td class="align-middle">
                  <a href="/web-raasaa-admin/type/{{ $type->slug }}/edit" class="btn btn-success">
                    <p class="text-xs font-weight-bold mb-0">Edit</p>
                  </a>
                  {{-- <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal" data-url="/web-raasaa-admin/type/update/{{ $type->slug }}" data-nama="{{ $type->nama }}" data-slug="{{ $type->slug }}" data-filter_id="{{ $type->filters->id }}" data-filter_slug="{{ $type->filters->slug }}">
                    <p class="text-xs font-weight-bold mb-0">Update</p>
                  </a> --}}
                  <form action="/web-raasaa-admin/type/{{ $type->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin?')">
                      <p class="text-xs font-weight-bold mb-0">Hapus</p>
                    </button>
                  </form>
                </td>
              </tr>
              {{-- @endif --}}
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  {{-- Modal Tambah --}}
  <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="ModalTambahTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kategori Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{ route('admin.type.store') }}" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Kategori Menu</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                autofocus required value="{{ old('nama') }}">
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Jenis Menu</label>
              <select id="Select" class="form-select @error('filters_id') is-invalid @enderror" id="filters_id"
                required name="filters_id">
                <option value="" hidden>--Pilih Jenis Menu--</option>
                @foreach ($filter as $filter)
                  {{-- @if ($filter->getAttribute('id') != '3') --}}
                  @if (old('filters_id') == $filter->id)
                    <option value="{{ $filter->id }}" selected>{{ $filter->slug }}</option>
                  @else
                    <option value="{{ $filter->id }}">{{ $filter->slug }}</option>
                  @endif
                  {{-- @endif --}}
                @endforeach
              </select>
              @error('filters_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <input type="hidden" id="slug" name="slug" required value="{{ old('slug') }}">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary">Tambah Kategori</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Modal Edit --}}
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-content">

        </div>
    </div>
  </div>

@endsection

@section('js')
  <script>
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');

    nama.addEventListener('change', function() {
      fetch('/web-raasaa-admin/type/checkSlug?nama=' + nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    $('#updateModal').on('shown.bs.modal', function(e) {
        var html = `
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="${$(e.relatedTarget).data('url')}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                        <input type="text" name="nam" value="${$(e.relatedTarget).data('nama')}" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="row mb-3">
                      <label for="filters_id" class="col-sm-2 col-form-label">Jenis</label>
                      <div class="col-sm-10">
                        <select id="Select" class="form-select @error('filters_id') is-invalid @enderror" id="filters_id" required
                          name="filters_id">
                          <option value="" hidden>--Pilih Jenis Menu--</option>
                          @foreach ($filters as $filter)
                            <option value="{{ $filter->id }}">{{ $filter->slug }}</option>
                          @endforeach
                        </select>
                        @error('filters_id')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            `;
        $('#modal-content').html(html);
    });
  </script>
@endsection
