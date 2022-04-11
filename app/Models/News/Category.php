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
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['category_name'];

    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'category_id', 'id');
    }
}
