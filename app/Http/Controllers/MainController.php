<?php

namespace App\Http\Controllers;

use App\Models\News\News;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class MainController extends Controller
{
    public function welcome()
    {
        $news = News::with('category')
            ->where(['status' => 'draft'])
            ->orderBy('id', 'desc')
            ->paginate(8);
        return view('welcome', [
            'allNews' => $news,
        ]);
    }
}
