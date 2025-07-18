<?php
namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'About Us',
            'content' => 'Informasi tentang perusahaan dan tim kami...'
        ];
        return view('about', $data);
    }
}