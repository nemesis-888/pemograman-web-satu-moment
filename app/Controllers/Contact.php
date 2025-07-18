<?php
namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Contact Us',
            'validation' => \Config\Services::validation()
        ];
        return view('contact', $data);
    }

    public function send()
    {
        // Validasi dan proses form contact
        // ... (sama seperti sebelumnya)
    }
}