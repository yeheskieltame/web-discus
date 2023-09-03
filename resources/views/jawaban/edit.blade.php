@extends('layouts.master')

@section('header-1')
  Jawaban
@endsection

@section('header-2')
  tambahkan jawaban baru
@endsection

@section('content')

<form method="post" action="/jawaban">
  @csrf
  <div class="form-group mb-3">
    <label>jawaban</label>
    <input type="text" name="konten" class="form-control @error('konten') is-invalid @enderror" placeholder="Masukkan jawaban">
  </div>
  @error('konten')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="form-group mb-3">
    <label>penjelasan</label>
    <textarea name="image" id="" cols="30", rows="10" class="form-control @error('image') is-invalid @enderror" placeholder="berikan penjelasan"></textarea>
  </div>
  @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
