@extends('layouts.admin')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Status Transaksi {{ $item->title }}</h1>
    </div>

    <div class="card-shadow">
      <div class="card-body">
        <form action="{{ route('transaction.update', $item->id) }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="transaction_status">Status</label>
            <select name="transaction_status" required class="form-control">
              <option value="{{ $item->transaction_status }}">
                Jangan Ubah ({{ $item->transaction_status }})
              </option>
              <option value="IN_CART">In Cart</option>
              <option value="PENDING">Pending</option>
              <option value="SUCCESS">Success</option>
              <option value="CANCEL">Cancel</option>
              <option value="FAILED">Failed</option>
            </select>
          </div>
          <button class="btn btn-primary btn-block" type="submit">
            Ubah
          </button>
        </form>
      </div>
    </div>
  @endsection
