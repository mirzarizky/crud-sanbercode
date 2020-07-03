@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Pertanyaan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="form" action="{{ url('pertanyaan/'.$pertanyaan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- text input -->
        <div class="form-group">
          <label>Judul</label>
          <input type="text" name="judul" class="form-control" value="{{ $pertanyaan->judul }}" placeholder="Judul Pertanyaan ..." required>
        </div>

        <!-- textarea -->
        <div class="form-group">
          <label>Isi</label>
          <textarea class="form-control" name="isi" rows="3" placeholder="Isi Pertanyaan ..." required>{{ $pertanyaan->isi }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.box-body -->
</div>
@endsection
