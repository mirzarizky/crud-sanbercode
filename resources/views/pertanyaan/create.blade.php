@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Buat Pertanyaan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="form" action="{{ url('pertanyaan') }}" method="POST">
        @csrf
        <!-- text input -->
        <div class="form-group">
          <label>Judul</label>
          <input type="text" name="judul" class="form-control" placeholder="Judul Pertanyaan ...">
        </div>

        <!-- textarea -->
        <div class="form-group">
          <label>Isi</label>
          <textarea class="form-control" name="isi" rows="3" placeholder="Isi Pertanyaan ..."></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.box-body -->
</div>
@endsection
