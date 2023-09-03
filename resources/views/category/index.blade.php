@extends('layouts.master')

@section('header-1')
  Kategori
@endsection

@section('header-2')
  Daftar Kategori
@endsection

@section('content')

<a href="/category/create" class="btn btn-primary btn-sm my-3">Tambah Kategori</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kategori</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($category as $key => $item)
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$item->name}}</td>
      <td>
        <form action="/category/{{$item->id}}" method="post">
          @csrf
          @method('delete')
          <a href="/category/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
          <a href="/category/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>  
          <input type="submit" class="btn btn-danger btn-sm" value="Delete">
        </form>
      </td>
    </tr>
    @empty
        <tr>
          <td>Tidak Ada Data</td>
        </tr>
    @endforelse

  </tbody>
</table>
@endsection
