<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($pertanyaan_id)
    {
        $all_jawaban = Jawaban::get($pertanyaan_id);
        $pertanyaan = Pertanyaan::get($pertanyaan_id);

        if ($pertanyaan) {
            return view('jawaban.index', compact('all_jawaban', 'pertanyaan'));
        }
    }

    public function store(Request $request, $pertanyaan_id)
    {
        $data = $request->all();
        unset($data['_token']);
        Jawaban::save($data);

        return redirect('/jawaban/'.$pertanyaan_id);
    }
}
