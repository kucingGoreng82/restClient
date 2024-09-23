<?php 
namespace App\Models;
use CodeIgniter\Model;

class TodolistModel extends Model {
    protected $table = 'todolist';
    protected $allowedFields = ['idKegiatan','kegiatan','status'];

    protected $primaryKey = 'idKegiatan';
}

?>