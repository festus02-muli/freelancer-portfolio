<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function skills(): View
    {
        $skills = [
            'HTML & CSS',
            'JavaScript / TypeScript',
            'React',
            'Node.js',
            'REST & GraphQL APIs',
            'Responsive Design',
            'Git & GitHub',
            'Performance & Accessibility',
        ];

        return view('pages.skills', compact('skills'));
    }

    public function projects(): View
    {
        $projects = [
            [
                'title' => 'Project One',
                'description' => 'A short description of the project, the problem it solved, and the stack used to build it.',
                'url' => '#',
            ],
            [
                'title' => 'Project Two',
                'description' => 'A short description of the project, the problem it solved, and the stack used to build it.',
                'url' => '#',
            ],
            [
                'title' => 'Project Three',
                'description' => 'A short description of the project, the problem it solved, and the stack used to build it.',
                'url' => '#',
            ],
        ];

        return view('pages.projects', compact('projects'));
    }

    public function testimonials(): View
    {
        $testimonials = [
            [
                'quote' => 'Great to work with — clear communication and delivered exactly what we needed, on time.',
                'author' => 'Client Name, Company',
            ],
            [
                'quote' => 'Took our rough idea and turned it into a polished, working product.',
                'author' => 'Client Name, Company',
            ],
        ];

        return view('pages.testimonials', compact('testimonials'));
    }

    public function contact(): View
    {
        $email = 'festus@ngongroad.org';

        return view('pages.contact', compact('email'));
    }
}
