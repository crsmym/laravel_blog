<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('pages.welcome');
    }

    public function getAbout()
    {
        $first = 'yeongmin';
        $last = 'Kang';
        $fullname = $first . ' ' . $last;
        $email = 'crsmymin@naver.com';
        $age = '31';
        
        // profile data
        $profile = [];
        $profile['email'] = $email;
        $profile['fullname'] = $fullname;
        $profile['age'] = $age;

        // words data
        $description = [];
        $description[0] = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda nisi cupiditate tempore, ipsum officia impedit dolorem excepturi! Obcaecati corporis';
        $description[1] = '1234';
        $description[2] = 'hahahaha';
        $description[3] = 'hello~~~!';
        $description[4] = 'hi there!';

        return view('pages.about')->withProfile($profile)->withDescription($description);
    }

    public function getContact()
    {
        return view('pages.contact');
    }
}
