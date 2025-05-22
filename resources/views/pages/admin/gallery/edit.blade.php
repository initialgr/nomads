@extends('layouts.admin')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Gambar Travel {{ $item->title }}</h1>
    </div>

    <div class="card-shadow">
      <div class="card-body">
        <form action="{{ route('gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="travel_packages_id">Paket</label>
            <select name="travel_packages_id" class="form-control">
              <option value="{{ $item->travel_packages_id }}">{{ $item->travel_package->title }}</option>
            </select>
            @error('travel_packages_id')
              <small class="text-danger">{{ 'Data tidak boleh kosong' }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            {{-- Image Preview --}}
            @if ($item->image)
              <div class="mb-2">
                <img src="{{ Storage::url($item->image) }}" alt="Preview Image" style="max-height: 150px;"
                  class="img-thumbnail">
              </div>
            @endif

            {{-- File Input --}}
            <input type="file" name="image" class="form-control-file">

            @error('image')
              <small class="text-danger">{{ 'Gambarnya ga di ganti?' }}</small>
            @enderror
          </div>
          <button class="btn btn-primary btn-block" type="submit">
            Ubah
          </button>
        </form>
      </div>
    </div>
  @endsection
