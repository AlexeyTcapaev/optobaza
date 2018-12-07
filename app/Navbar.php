<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Page;

class Navbar extends Model
{
    protected $fillable = ['page_id'];
    public function page()
    {
        return $this->hasOne(Page::class, 'id', 'page_id');
    }
}
