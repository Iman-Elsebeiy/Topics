<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Topic;
use App\Traits\Common;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TopicController extends Controller
{

    use Common;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $topics = Topic::with('category')->get();

        return view('admin.topics', compact('topics'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::select('id', 'category_name')->get();
        return view('admin.topic_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',

        ]);

        $data['views'] = isset($request->views);
        $data['trending'] = isset($request->published);
        $data['published'] = isset($request->published);
        $data['image'] = $this->uploadFile($request->image, 'assets/images/topics/');

        Topic::create($data);

        return redirect()->route('topic.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $topic = Topic::with('category')->findOrFail($id);

        return view('admin.topic_show', compact('topic'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $topic = Topic::findOrFail($id);
        $categories = Category::select('id', 'category_name')->get();
        return view('admin.topic_edit', compact('topic', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $topic = Topic::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ]);

        $data['published'] = isset($request->published);
        $data['trending'] = isset($request->trending);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets/images/topics/');
        }

        $topic->update($data);

        return redirect()->route('topic.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        //

        $id = $request->id;
        Topic::where('id', $id)->delete();
        return redirect()->route('topic.index');

    }
}
