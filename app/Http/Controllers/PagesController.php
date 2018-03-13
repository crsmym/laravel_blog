<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    public function getIndex() {
        return view('pages.welcome');
    } 

    public function getAbout() {
        $first = 'yeongmin';
        $last = 'Kang';
        $fullname = $first . ' ' . $last;
        $email = 'crsmymin@naver.com'; 
        $age = '31';

        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        $data['age'] = $age;

        return view('pages.about')->withData($data);
    }

    public function getContact() {
        return view('pages.contact');
    }
}

