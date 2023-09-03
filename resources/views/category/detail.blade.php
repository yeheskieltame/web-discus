@extends('layouts.master')

@section('header-1')
  Kategori
@endsection

@section('header-2')
  Detail Kategori
@endsection

@section('content')
<h5 class="text-primary">{{$categoryData->name}}</h5>
<p class="text-dark">{{$categoryData->desciption}}</p>


<a href="/category" class="btn btn-secondary btn-sm">Kembali</a>

@endsection
