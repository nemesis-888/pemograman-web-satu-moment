<?php
namespace App\Controllers;

class Products extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Our Featured Products',
            'products' => [
                [
                    'name' => 'Kids Portrait Photography',
                    'description' => 'Pemotretan anak dengan konsep natural dan ekspresi spontan. Cocok untuk keperluan keluarga, katalog sekolah, atau dokumentasi masa kecil yang berkesan.',
                    'image' => '/product/1.jpeg'
                ],
                [
                    'name' => 'Urban Architecture Photography',
                    'description' => 'Pemotretan arsitektur kota dengan komposisi estetis dan profesional. Cocok untuk katalog properti, dokumentasi pembangunan, atau kebutuhan branding real estate.',
                    'image' => '/product/2.jpeg'
                ],
                [
                    'name' => 'Mood & Conceptual Photography',
                    'description' => 'Menangkap ekspresi emosional dan suasana hati dalam frame visual yang kuat. Cocok untuk editorial, seni fotografi, dan branding penuh makna.',
                    'image' => '/product/3.jpeg'
                ],
                [
                    'name' => 'Expressive Portrait Photography',
                    'description' => 'Potret ekspresif dengan fokus pada detail wajah dan ekspresi yang kuat. Cocok untuk keperluan artistik, portofolio pribadi, atau editorial yang mendalam.',
                    'image' => '/product/4.jpeg'
                ]
            ]
        ];
        return view('products', $data);
    }
}
