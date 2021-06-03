<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Collection;
use PhpParser\Node\Expr\Cast\Object_;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function getAllCategories(): \Illuminate\Support\Collection
    {
        return DB::table($this->table)
            ->select(['id', 'category_name'])
            ->get();
    }

    public function getCategory(int $id): object
    {
        return DB::table($this->table)
            ->select(['id', 'category'])
            ->where(['id' => $id])
            ->first();
    }
}
