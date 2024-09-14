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
    
        // Fetch categories with the latest 3 published topics per category
        $categories = Category::with(['topics' => function ($query) {
            $query->where('published', 1)->latest()->take(3);
        }])->get();
    
        // Fetch the latest 3 published testimonials
        $testimonials = Testimonial::where('published', 1)->latest()->take(3)->get();
    
        // Pass topics, categories, and testimonials to the view
        return view('public.index', compact('topics', 'categories', 'testimonials'));
    }
    

    public function contact()
    {

        return view('public.contact');
    }
    
    
    public function topic_list()
    {
        $popularTopics = Topic::where('published', 1)
        ->orderBy('views', 'desc')
        ->latest()->take(3)->get();

        $topics = Topic::where('published', 1)
        ->where('trending', 1)
        ->latest()->take(2)
        ->get();

        return view('public.topics-listing',compact('popularTopics','topics'));
    }
    
    
    public function topic_details(string $id)
    {

    $topic = Topic::with('category')->findOrFail($id);

    // Check if the user has already viewed this topic during the session
    $sessionKey = 'viewed_topic_' . $topic->id;
    if (!session()->has($sessionKey)) {
        // Increment the views count if the user hasn't viewed it before
        $topic->increment('views');
        
        // Store in session that the user has viewed this topic
        session()->put($sessionKey, true);
    }
        return view('public.topics-detail',compact('topic'));
    }


    public function testimonial()
    {  
        
        $testimonials = Testimonial::where('published', 1)->get();
        return view('public.testimonials',compact('testimonials'));
    }

    
}
