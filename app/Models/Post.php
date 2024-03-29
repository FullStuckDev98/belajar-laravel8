<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'category_id',
    //     'title',
    //     'slug',
    //     'excerpt',
    //     'body',
    // ];

    protected $guarded = ['id'];
    protected $with = ['author', 'category'];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    // public function user(){
    //     return $this->belongsTo(User::class,);
    // }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
