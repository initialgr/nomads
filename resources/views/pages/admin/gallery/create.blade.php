@extends('layouts.admin')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
    </div>

    <div class="card-shadow">
      <div class="card-body">
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="travel_packages_id">Paket</label>
            <select name="travel_packages_id" class="form-control">
              <option value="">Pilih Paket Travel</option>
              @forelse ($travel_packages as $travel_package)
                <option value="{{ $travel_package->id }}">{{ $travel_package->title }}</option>
              @empty
                <option value="">Data Travel Tidak Ada</option>
              @endforelse
            </select>
            @error('travel_packages_id')
              <small class="text-danger">{{ "Data tidak boleh kosong" }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" placeholder="Image">
            <br>
            @error('image')
              <small class="text-danger">{{ "Gambar harus di isi" }}</small>
            @enderror
          </div>

          <button class="btn btn-primary btn-block" type="submit">
            Simpan
          </button>
        </form>
      </div>
    </div>
  @endsection
