<?php

namespace App\Http\Controllers;


use App\Http\Requests;

use App\Slide;
use App\Post;

class SiteController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('locale');
    }
    /*
     *
     */
    
	public function index()
	{
        $slides = Slide::whereActive(1)
            ->orderBy('priorite', 'asc')
            ->get();
        
        $post = Post::orderBy('id','desc')
            ->first();
                
		return view('site.index',compact('slides','post'));
	}
    
    public function galerie()
	{
		return view('site.galerie');
	}
    
    public function reservation()
	{
		return view('site.reservation');
	}
    public function concept()
	{
		return view('site.concept');
	}
    public function services()
	{
		return view('site.services');
	}
    public function evenements()
	{
		return view('site.evenements');
	}
    public function faq()
	{
		return view('site.faq');
	}
    public function mentionsLegales()
	{
		return view('site.mentions-legales');
	}
    public function planSite()
	{
		return view('site.plan-du-site');
	}
}
