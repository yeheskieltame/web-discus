@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title ">
                            Menambah Pertanyaan
                        </h3>
                    </div>
                    <form method="post" action="{{ url('/pertanyaan') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>category</label>
                            <select name="category_id" class="form-control" id="">
                              <option value="">-- Pilih Category --</option>
                              @forelse ($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                              @empty
                                <option value="">Tidak Ada Category</option>
                              @endforelse
                            </select>
                          </div>
                          @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror



                        <div class="card-body">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                                    placeholder="Masukan Judul">
                                @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Konten</label>
                                <textarea id="summernote" name="konten"
                                    class="form-control @error('konten') is-invalid @enderror"
                                    placeholder="Masukan isi konten anda disini"></textarea>
                                @error('konten')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
    </section>
</div>
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote();
    });
</script>
@endsection
