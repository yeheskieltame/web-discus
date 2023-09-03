@extends('layouts.master')

@section('header-1')
  Profile
@endsection

@section('header-2')
  Edit Profile
@endsection

@section('content')

<form method="post" action="/profile/{{$profile->id}}">
  @csrf
  @method('put')
  <div class="form-group">
    <label>Nama</label>
    <input type="text" value="{{$profile->user->name}}" class="form-control" disabled>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" value="{{$profile->user->email}}" class="form-control" disabled>
  </div>
  <div class="form-group mb-3">
    <label>Umur</label>
    <input type="text" name="umur" value="{{$profile->umur}}" class="form-control @error('umur') is-invalid @enderror">
  </div>
  @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="form-group mb-3">
    <label>Alamat</label>
    <textarea name="alamat" id="" cols="30", rows="10" class="form-control @error('alamat') is-invalid @enderror">{{$profile->alamat}}</textarea>
  </div>
  @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
