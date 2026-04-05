<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $reasons = [
            [
                'title' => 'High Quality Prints',
                'description' => 'Studio-quality lighting and professional DSLR cameras ensure your guests look their best.'
            ],
            [
                'title' => 'Custom Props',
                'description' => 'A huge variety of fun, quirky, and themed props tailored for your specific event.'
            ],
            [
                'title' => 'Instant Sharing',
                'description' => 'Share photos instantly via email or QR code direct from the photobooth screen.'
            ]
        ];

        return view('home', compact('reasons')); 
    }

    public function about() {
        return view('about');
    }

    public function services() {
        $packages = [
            [
                'name' => 'Basic Snap',
                'price' => 'Rp 1.500.000',
                'duration' => '/2 hours',
                'features' => [
                    'Unlimited Prints (2x6)',
                    'Standard Backdrop',
                    'Fun Props Set',
                    'Online Gallery'
                ],
                'button_text' => 'Choose Basic',
                'is_popular' => false
            ],
            [
                'name' => 'Premium Joy',
                'price' => 'Rp 2.500.000',
                'duration' => '/4 hours',
                'features' => [
                    'Unlimited Premium Prints (4x6)',
                    'Custom Premium Backdrop',
                    'Themed High-End Props',
                    'Boomerang & GIF Creation',
                    'Scrapbook Station'
                ],
                'button_text' => 'Choose Premium',
                'is_popular' => true
            ],
            [
                'name' => 'Wedding VIP',
                'price' => 'Rp 4.000.000',
                'duration' => '/6 hours',
                'features' => [
                    'Everything in Premium',
                    '360 Video Booth Included',
                    'Custom Photo Template Design',
                    'Instant Social Media Sharing Kiosk',
                    'Idle Time (1 hour free)'
                ],
                'button_text' => 'Choose VIP',
                'is_popular' => false
            ]
        ];

        return view('services', compact('packages'));
    }

    public function contact() {
        return view('contact');
    }
}