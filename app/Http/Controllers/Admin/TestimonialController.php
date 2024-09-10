<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Testimonial;
use App\Traits\Common;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class TestimonialController extends Controller
{

    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $testimonials = Testimonial::get();
        return view('admin.testimonials', compact('testimonials'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.testimonial_create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => 'required|string',
            'content' => 'required|string',

            'image' => 'required|mimes:png,jpg,jpeg|max:2048',

        ]);

        $data['published'] = isset($request->published);
        $data['image'] = $this->uploadFile($request->image, 'assets/images/testimonials/');

        Testimonial::create($data);

        return redirect()->route('testimonial.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $testimonial = Testimonial::findOrFail($id);
        
        return view('admin.edit_testimonial', compact ('testimonial'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $data = $request->validate([
            'name' => 'required|string',
            'content' => 'required|string',

            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',

        ]);

        $data['published'] = isset($request->published);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets/images/testimonials/');
        }

        Testimonial::where('id', $id)->update($data);
          return redirect()->route('testimonial.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        //
        $id = $request->id;
        Testimonial::where('id', $id)->delete();
        return redirect()->route('testimonial.index');

    }
}
