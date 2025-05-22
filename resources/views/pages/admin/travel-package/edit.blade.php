@extends('layouts.admin')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
    </div>

    <div class="card-shadow">
      <div class="card-body">
        <form action="{{ route('travel-package.update', $item->id) }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
            @error('title')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="location" placeholder="Location"
              value="{{ $item->location }}">
            @error('location')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="about">About</label>
            <textarea name="about" id="about" rows="10" class="d-block w-100 form-control">{{ $item->about }}</textarea>
            @error('about')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="featured_event">Featured Event</label>
            <input type="text" class="form-control" name="featured_event" placeholder="Featured Event"
              value="{{ $item->featured_event }}">
            @error('featured_event')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="language">Language</label>
            <input type="text" class="form-control" name="language" placeholder="Language"
              value="{{ $item->language }}">
            @error('language')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="foods">Foods</label>
            <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{ $item->foods }}">
          </div>
          @error('foods')
            <small class="text-danger">{{ $message }}</small>
          @enderror
          <div class="form-group">
            <label for="departure_date">Departure Date</label>
            <input type="date" class="form-control" name="departure_date" placeholder="Departure Date"
              value="{{ $item->departure_date }}">
            @error('departure_date')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" name="duration" placeholder="Duration"
              value="{{ $item->duration }}">
            @error('duration')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" placeholder="Type " value="{{ $item->type }}">
            @error('type')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Price" value="{{ $item->price }}">
            @error('price')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <button class="btn btn-primary btn-block" type="submit">
            Ubah
          </button>
        </form>
      </div>
    </div>
  @endsection
