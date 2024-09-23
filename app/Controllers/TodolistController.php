<?php 

namespace App\Controllers;

class TodolistController extends BaseController {
    public function index(): string{
        $model = model('TodolistModel');
        $data = [
            'daftarKegiatan' => $model->where('status','aktif')->findAll()
        ];
        return view('todolist_view',$data);
    }

    public function simpanKegiatan(): string {
        helper('form');
        $model = model('TodolistModel');

        $dataForm = $this->request->getPost(['kegiatan']);
        $model->save($dataForm);

        return $this->index();
    }

    public function selesaiKegiatan(): string {
        $uri = $this->request->getUri();
        $idKegiatan = $uri->getSegment(3);

        $model = model('TodolistModel');

        $data = [
            "status" => "selesai"
        ];

        $model->update($idKegiatan, $data);

        return $this->index();
    }
    public function hapusKegiatan(): string {
        $uri = $this->request->getUri();
        $idKegiatan = $uri->getSegment(3);

        $model = model('TodolistModel');
        $model->delete($idKegiatan);

        return $this->index();
    }
}

?>