<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\GenreModel;
class Genre extends BaseController
{
     public function __construct() {

    }
    public function register()
    {
        return view('auth/genre');   
    }
    public function save()
    {
        

        $validation = \Config\Services::validation();
         $rules = [
            'nom'   => 'required|alpha_space|min_length[3]|max_length[50]',
         ];
         if (!$this->validate($rules)) {
            return view('auth/genre', [
                'validation' => $this->validator
            ]);
        }
        $genreModel = new GenreModel();
        $data = [
            'nom' => ucfirst(strtolower($this->request->getPost('nom')))
        ];
        $genreModel->save($data);
        session()->setFlashdata('success', 'Genre ajouté avec succès');
        return redirect()->to(base_url('/auth/register'));
    }
 
}