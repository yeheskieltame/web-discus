@extends('layouts.master')

@section('header-1')
  Kategori
@endsection

@section('header-2')
  Buat Kategori Baru
@endsection

@section('content')

<form method="post" action="/category">
  @csrf
  <div class="form-group mb-3">
    <label>Nama Kategori</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama">
  </div>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="form-group mb-3">
    <label>Deskripsi Kategori</label>
    <textarea name="description" id="" cols="30", rows="10" class="form-control @error('description') is-invalid @enderror" placeholder="Masukkan Biodata"></textarea>
  </div>
  @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
