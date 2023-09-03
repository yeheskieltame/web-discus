@extends('layouts.master')

@section('header-1')
  Jawaban
@endsection

@section('header-2')
  Daftar Jawaban
@endsection

@section('content')

<a href="/jawaban/tambah" class="btn btn-primary btn-sm my-3">Tambah Jawaban</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">jawaban</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($jawaban as $key => $item)
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$item->judul}}</td>
      <td>
        <form action="/jawaban/{{$item->id}}" method="post">
          @csrf
          @method('delete')
          
          <a href="/jawaban/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
          <a href="/jawaban/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a> 
          <input type="submit" class="btn btn-danger btn-sm" value="Delete">
        </form>
      </td>
    </tr>
    @empty
        <tr>
          <td>Tidak Ada jawaban</td>
        </tr>
    @endforelse

  </tbody>
</table>
@endsection
