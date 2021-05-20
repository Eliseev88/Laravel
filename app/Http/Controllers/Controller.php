<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected array $newsList = [
        'News1',
        'News2',
        'News3',
        'News4',
        'News5',
    ];

    protected array $newsCategory = [
      'Sport',
      'Politics',
      'Economy',
      'Finance',
      'Weather',
      'Other',
    ];
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
