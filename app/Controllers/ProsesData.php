<?php

namespace App\Controllers;

class ProsesData extends BaseController
{
    public function proses()
    {
        $nim = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $status = $this->request->getPost('status');

        $data = [
            'nim' => $nim,
            'nama' => $nama,
            'status' => $status,
        ];

        return view('prosesData', $data);
    }
}
