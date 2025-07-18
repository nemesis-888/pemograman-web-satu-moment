<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Satu Moment',
            'about_content' => 'Abadikan setiap moment dengan jasa yang profesional',
            'products' => $this->getFeaturedProducts(),
            'testimonials' => $this->getTestimonials(),
            'sections' => [
                'home' => [
                    'title' => 'Welcome to Satu Moment',
                    'subtitle' => 'Capture Your Precious Moments'
                ],
                'about' => [
                    'title' => 'About Us'
                ],
                'products' => [
                    'title' => 'Our Featured Products'
                ],
                'testimonials' => [
                    'title' => 'What Our Clients Say'
                ]
            ]
        ];
        return view('home', $data);
    }

    private function getFeaturedProducts()
    {
        return [
            [
                'name' => 'Kids Portrait Photography',
                'image' => 'kids-portrait.jpg',
                'description' => 'Pemotretan anak dengan konsep natural dan ekspresi spontan. Cocok untuk keperluan keluarga, katalog sekolah, atau dokumentasi masa kecil yang berkesan.'
            ],
            [
                'name' => 'Urban Architecture Photography',
                'image' => 'architecture.jpg',
                'description' => 'Pemotretan arsitektur kota dengan komposisi estetis dan profesional. Cocok untuk katalog properti, dokumentasi pembangunan, atau kebutuhan branding real estate.'
            ],
            [
                'name' => 'Mood & Conceptual Photography',
                'image' => 'conceptual.jpg',
                'description' => 'Menangkap ekspresi emosional dan suasana hati dalam frame visual yang kuat. Cocok untuk editorial, seni fotografi, dan branding penuh makna.'
            ]
        ];
    }

    private function getTestimonials()
    {
        return [
            [
                'name' => 'Budi Santoso',
                'comment' => 'Hasil foto anak kami sangat natural dan indah!',
                'rating' => 5,
                'avatar' => 'client1.jpg'
            ],
            [
                'name' => 'Anita Wijaya',
                'comment' => 'Pelayanan profesional dan hasil foto properti kami memukau.',
                'rating' => 4,
                'avatar' => 'client2.jpg'
            ],
            [
                'name' => 'David Kurniawan',
                'comment' => 'Konsep fotonya unik dan penuh makna, sangat recommended!',
                'rating' => 5,
                'avatar' => 'client3.jpg'
            ]
        ];
    }

    // Untuk single-page navigation
    public function section($section)
    {
        return $this->index(); // Tetap gunakan view yang sama
    }
}