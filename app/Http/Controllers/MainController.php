<?php

namespace App\Http\Controllers;

use App\Models\News\News;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class MainController extends Controller
{
    public function welcome()
    {
        $model = new News();
        $allNews = $model->getAllNews();
        return view('welcome', [
            'allNews' => $allNews,
        ]);
    }
}
