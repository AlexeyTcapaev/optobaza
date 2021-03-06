<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Navbar;

class Page extends Model
{
    use Sluggable;

    protected $fillable = ['name', 'content', 'slug'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true
            ]
        ];
    }
    public function nav()
    {
        return $this->hasOne(Navbar::class);
    }
}
