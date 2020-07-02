<?php

namespace App\Http\Controllers;

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
}
