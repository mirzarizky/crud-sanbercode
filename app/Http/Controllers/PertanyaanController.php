<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        $all_pertanyaan =  Pertanyaan::get_all();

        return view('pertanyaan.index', compact('all_pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        Pertanyaan::save($data);

        return redirect('pertanyaan');
    }

    public function show($id)
    {
        $pertanyaan = Pertanyaan::get($id);
        $all_jawaban = Jawaban::get($id);

        if ($pertanyaan) {
            return view('pertanyaan.show', compact('pertanyaan', 'all_jawaban'));
        }
    }

    public function edit($id)
    {
        $pertanyaan = Pertanyaan::get($id);

        if ($pertanyaan) {
            return view('pertanyaan.edit', compact('pertanyaan'));
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);

        $editPertanyaan = Pertanyaan::update($id, $data);

        if ($editPertanyaan) {
            return redirect('pertanyaan/'.$id);
        }
    }

    public function destroy($id)
    {
        $deletePertanyaan = Pertanyaan::destroy($id);

        if ($deletePertanyaan) {
            return redirect('pertanyaan');
        }
    }
}
