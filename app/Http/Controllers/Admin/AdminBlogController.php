<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Blog;
use Sunra\PhpSimple\HtmlDomParser;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('admin')->orderBy('id', 'desc')->get();
        $posters = Admin::select('id', 'name')->get();
        return view('admin.blogs.index', compact('blogs', 'posters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blogstatus = $request->has('blogstatus') ? 1 : 0;
        $content = $request->content;

        $dom = \HtmlDomParser::str_get_html($content);

        $images = $dom->find('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/images/" . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $new_img = new \simple_html_dom_node('img');
            $new_img->src = $image_name;

            $img->outertext = $new_img->outertext;
        }

        $content = $dom->save();

        $validatedData = [
            'title' => $request->title,
            'content' => $content,
            'admin_id' => $request->admin_id,
            'blogstatus' => $blogstatus
        ];

        Blog::create($validatedData);
        return redirect()->route('blog.index')->with('success', 'blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $blog = Blog::find($id);
        // return response()->json([
        //     'status' => 200,
        //     'blog'  =>  $blog,
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'destroy';
    }
}
