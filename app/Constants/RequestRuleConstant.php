<?php

namespace App\Constants;

class RequestRuleConstant
{
    public static function settingTable()
    {
        return [
            'name' => 'required|unique:settings,name,' . request()->route('setting') . 'id',
            'value' => 'required'
        ];
    }

    public static function adminTable()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:admins,email,' . request()->route('admin') . 'id',
            'pangkat' => 'nullable|string',
            'nrp' => 'nullable|integer',
            'password' => 'nullable',
            'department_id' => 'required'
        ];
    }

    public static function pendaftarTable()
    {
        return [
                'tgl_daftar' => 'required|date|date_format:d-m-Y',
                'tahun_id' => 'required|integer',
                'gelombang_id' => 'required|integer',
                'no_pendaftaran' => 'required|unique:pendaftar,no_pendaftaran,' . request()->route('pendaftar') . 'id',
                'jenis' => 'required|string',
                'nama' => 'required|string',
                'gender' => 'required|in:laki-laki,perempuan',
                'agama_id' => 'required|integer',
                'tmp_lhr' => 'required|string',
                'tgl_lhr' => 'required|date|date_format:d-m-Y',
                'alamat' => 'required|string',
                'telp' => 'required|string',
                'pendidikan_akhir' => 'required|string',
                'pendidikan_akhir_tahun' => 'required|string',
                'pendidikan_akhir_jurusan' => 'required|string',
                'pendidikan_akhir_nama' => 'required|string',
                'nilai_rata' => 'required',
                'ortu_nama' => 'required|string',
                'ortu_kerja' => 'required|string',
                'ortu_alamat' => 'required|string',
                'ortu_telp' => 'required|string',
                'jurusan1' => 'required|string',
                'jurusan2' => 'required|string',
                'jurusan_diterima' => 'required|string',
                'rekomendasi_nim' => 'required|string',
                'rekomendasi_nama' => 'required|string',
                'rekomendasi_hp' => 'required|string',
                'status' => 'required|integer'
        ];
    }

    public static function gelombangTable()
    {
        return [
                'tahun_id' => 'required|integer',
                'kode_gelombang' => 'required|unique:gelombang,kode_gelombang,'. request()->route('gelombang') . 'id',
                'gelombang' => 'required|string',
                'tgl_mulai' => 'required|date|date_format:d-m-Y|before:tgl_selesai',
                'tgl_selesai' => 'required|date|date_format:d-m-Y|after:tgl_mulai',
                'test_mulai' => 'required|date|date_format:d-m-Y|after_or_equal:tgl_mulai|before:tgl_selesai',
                'test_selesai' => 'required|date|date_format:d-m-Y|after:test_mulai|before_or_equal:tgl_selesai',
                'wawancara_mulai' => 'required|date|date_format:d-m-Y|after_or_equal:tgl_mulai|before:tgl_selesai',
                'wawancara_selesai' => 'required|date|date_format:d-m-Y|after:wawancara_mulai|before_or_equal:tgl_selesai',
                'her_mulai' => 'required|date|date_format:d-m-Y|after_or_equal:tgl_mulai|before:tgl_selesai',
                'her_selesai' => 'required|date|date_format:d-m-Y|after:her_mulai|before_or_equal:tgl_selesai',
                'almamater_mulai' => 'required|date|date_format:d-m-Y|after_or_equal:tgl_mulai|before:tgl_selesai',
                'almamater_selesai' => 'required|date|date_format:d-m-Y|after:almamater_mulai|before_or_equal:tgl_selesai',
                'pembekalan' => 'required|date|date_format:d-m-Y|before_or_equal:tgl_selesai'
        ];
    }
}
