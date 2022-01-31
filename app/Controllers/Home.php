<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function html01()
    {
        return view('html01');
    }
    public function html02()
    {
        return view('html02');
    }
    public function html03()
    {
        return view('html03');
    }
    public function html04()
    {
        return view('html04');
    }
    public function html05()
    {
        return view('html05');
    }
    public function Form01()
    {
        return view('html-workshop/Form01');
    }
    public function Form02()
    {
        return view('html-workshop/Form02');
    }
    public function Form03()
    {
        return view('html-workshop/Form03');
    }
    public function Form04()
    {
        return view('html-workshop/Form04');
    }
    public function Form05()
    {
        return view('html-workshop/Form05');
    }
    public function Form06()
    {
        return view('html-workshop/Form06');
    }
    public function css01()
    {
        return view('css-workshop/css01');
    }
    public function css02()
    {
        return view('css-workshop/css02');
    }
    public function css03()
    {
        return view('css-workshop/css03');
    }
    public function php01()
    {
        return view('php01-workshop/php01');
    }
    public function php02()
    {
        return view('php01-workshop/php02');
    }
    public function php03()
    {
        return view('php01-workshop/php03');
    }
    public function php04()
    {
        return view('php01-workshop/php04');
    }
    
}
