<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getAllNews()
    {
        return DB::table($this->table)
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->select('news.id', 'news.title', 'news.content', 'news.created_at', 'categories.category_name')
            ->where('news.status', '=', 'draft')
            ->get();
    }

    public function getNews(int $id): object
    {
        return DB::table($this->table)
            ->select(['title', 'content'])
            ->where(['id' => $id])
            ->first();
    }

    public function getCategoryNews(string $name): array
    {
        return DB::table($this->table)
            ->join('categories', 'news.category_id', "=", 'categories.id')
            ->select(['news.id', 'news.title', 'news.content', 'categories.category_name'])
            ->where(['categories.category_name' => $name])
            ->get()->toArray();
    }
}
