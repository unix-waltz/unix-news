<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Scope;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $guarded=['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function    ScopeFilter()
    {

    }
    public function user() {
        return $this->belongsTo(User::class);
     }
}
