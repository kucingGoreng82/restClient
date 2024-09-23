<?php
namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model {
    protected $table = 'asisten';
    protected $primaryKey = 'NIM';
    protected $allowedFields = ['NIM', 'NAMA', 'PRAKTIKUM', 'IPK'];
    protected $returnType = 'object';
}
?>
