<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Testimonial;
use App\Traits\Common;

class PublicController extends Controller
{

    use Common;

    //
    public function index()
    {
        
     // Fetch the latest 2 published topics
     $topics = Topic::where('published', 1)->latest()->take(2)->get();  
     
     $categories = Category::get();

     // Fetch the latest 3 published testimonials
     $testimonials = Testimonial::where('published', 1)->latest()->take(3)->get();
 
     // Pass both topics and testimonials to the view
     return view('public.index', compact('topics', 'testimonials', 'categories'));
    }

    public function contact()
    {

        return view('public.contact');
    }

    public function category()
    {

    }  
    
    public function topic_list()
    {
        $popularTopics = Topic::where('published', 1)
        ->orderBy('views', 'desc')->latest()->take(3)->get();

        $topics = Topic::where('published', 1)
        ->where('trending', 1)
        ->latest()->take(2)
        ->get();

        return view('public.topics-listing',compact('popularTopics','topics'));
    }
    
    
    public function topic_details(string $id)
    {

        $topic = Topic::with('category')->findOrFail($id);
        return view('public.topics-detail',compact('topic'));
    }


    public function testimonial()
    {  
        
        $testimonials = Testimonial::where('published', 1)->get();
        return view('public.testimonials',compact('testimonials'));
    }

    
}
