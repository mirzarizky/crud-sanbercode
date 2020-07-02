@extends('layouts.master')

@section('content')
<form role="form" action="{{ url('jawaban/'.$pertanyaan->id) }}" method="POST">
    @csrf

    <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan->id }}">
    <!-- textarea -->
    <div class="form-group">
      <label>Tambah Jawaban</label>
      <textarea class="form-control" name="isi" rows="3" placeholder="Isi Jawaban ..."></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<h4>Pertanyaan: {{ $pertanyaan->judul }}</h4>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Isi</th>
        <th>Tanggal Dibuat</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($all_jawaban as $key => $jawaban)
            <tr>
                <td>{{ $key + 1 }}.</td>
                <td>
                    {{ $jawaban->isi }}
                </td>
                <td>{{ $jawaban->tanggal_dibuat }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
