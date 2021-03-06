<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\News\News;
use App\Models\News\Category;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', [
            'newsList' => News::with('category')->orderBy('id', 'desc')->paginate('8'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.news.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsCreate $request)
    {
        $title = $request->input('title');
        $description = $request->input('content');
        $fields = $request->only('category_id', 'title', 'content', 'image');
        Storage::append('NewsFile/News.txt',
            'Title: '. $title . " Description: " . $description . " Date: " . date("Y-m-d H:i:s"));
        $news = News::create($fields);
        if ($news) {
            return redirect()->route('news.index');
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories = Category::all();
        return view('admin.news.edit', [
            'news' => $news,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => ['required']
        ]);

        $fields = $request->only('category_id', 'title', 'content', 'image', 'status');
        $news = $news->fill($fields)->save();
        if ($news) {
            return redirect()->route('news.index');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $status = $news->delete();
        if($status) {
            return response()->json(['ok' => 'ok']);
        }
    }
}
