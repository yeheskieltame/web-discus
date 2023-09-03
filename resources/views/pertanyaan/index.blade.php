@extends('layouts.master')

@section('header-1')
  Pertanyaan
@endsection

@section('header-2')
  Daftar Pertanyaan
@endsection

@section('content')

<a href="/pertanyaan/create" class="btn btn-primary btn-sm my-3">Tambah Pertanyaan</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pertanyaan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($pertanyaan as $key => $item)
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$item->judul}}</td>
      <td>
        <form action="/pertanyaan/{{$item->id}}" method="post">
          @csrf
          @method('delete')
          <a href="/jawaban" class="btn btn-warning btn-sm">Jawaban</a>  
          <a href="/pertanyaan/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
          <a href="/pertanyaan/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a> 
          
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
