@extends('layouts.master')

@section('header-1')
  Jawaban
@endsection

@section('header-2')
  DPenjelasan Jawaban
@endsection

@section('content')
<h5 class="text-primary">{{$jawabanData->konten}}</h5>
<p class="text-dark">{{$jawabanData->image}}</p>


<a href="/jawaban" class="btn btn-secondary btn-sm">Kembali</a>

@endsection
