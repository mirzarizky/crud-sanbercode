@extends('layouts.master')

@section('content')
<a href="{{ url('pertanyaan/create')}}" class="btn btn-flat btn-primary mb-4">Buat Pertanyaan</a>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tanggal Dibuat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($all_pertanyaan as $key => $pertanyaan)
            <tr>
                <td>{{ $key + 1 }}.</td>
                <td>{{ $pertanyaan->judul }}</td>
                <td>
                    {{ $pertanyaan->isi }}
                </td>
                <td>{{ $pertanyaan->tanggal_dibuat }}</td>
                <td>
                    <a href="{{ url('jawaban/'.$pertanyaan->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                    <a href="{{ url('jawaban/'.$pertanyaan->id) }}" class="btn btn-warning"><i class="fa fa-pen"></i></a>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
