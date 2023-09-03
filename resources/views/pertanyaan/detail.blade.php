@extends('layouts.master')

@section('header-1')
  Pertanyaan
@endsection

@section('header-2')
  Detail Pertanyaan
@endsection

@section('content')
<img src="{{asset('image/'. $pertanyaanData->image)}}" height="200px" alt="">
<h5 class="text-primary">{{$pertanyaanData->judul}}</h5>
<p class="text-dark">{{$pertanyaanData->konten}}</p>


<a href="/category" class="btn btn-secondary btn-sm">Kembali</a>
<a href="/jawaban" class="btn btn-secondary btn-sm ml-3">Jawaban</a>

@endsection
