<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        $data = [
            "skills" => [
                "HTML and CSS",
                "JS using Node.js / Express.js",
                "PHP using Laravel",
                "Python",
                "Native Level Indonesian & English"
            ],
            "experience" => [
                [
                    "period" => "April - December 2025",
                    "title" => "BEM KEMA Telkom University Purwokerto | Department of Home Affairs Intern",
                    "responsibilities" => [
                        "Communicated with other organization on campus and hear out all their problems and suggestions",
                        "Noted all the suggestions made by the members of organizations and forwarded it to campus authority in charge of campus organizations",
                        "Established relationships with staff of other campus organizations"
                    ]
                ]
            ]
        ];

        // Ubah array ke JSON dan cetak
        return view('profile', $data);
    }
}
