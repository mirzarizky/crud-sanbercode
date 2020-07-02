<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Jawaban
{
    public static function get_all()
    {
        return DB::table('jawaban')->get();
    }

    public static function save($data)
    {
        $data['tanggal_dibuat']  = now();
        $data['tanggal_diperbaharui'] = now();

        return DB::table('jawaban')->insert($data);
    }

    public static function get($pertanyaan_id)
    {
        return DB::table('jawaban')->where('pertanyaan_id', $pertanyaan_id)->get();
    }
}
