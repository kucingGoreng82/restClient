<?php
namespace App\Controllers;

use App\Models\AsistenModel;
use CodeIgniter\Controller;

class AsistenController extends BaseController {
    public function index() {
        echo "Controller reached"; // Debugging
        $model = new AsistenModel();
        $data['asisten'] = $model->findAll();
    
        return view('AsistenView', $data);
    }    
}
?>
