<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Pertanyaan
{
    public static function get_all()
    {
        return DB::table('pertanyaan')->get();
    }

    public static function get($id)
    {
        return DB::table('pertanyaan')->where('id', $id)->first();
    }

    public static function save($data)
    {
        $data['tanggal_dibuat']  = now();
        $data['tanggal_diperbaharui'] = now();

        return DB::table('pertanyaan')->insert($data);
    }
}
