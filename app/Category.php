<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Product;

class Category extends Model
{
    use NodeTrait, Sluggable {
        NodeTrait::replicate as replicateNode;
        Sluggable::replicate as replicateSlug;
    }
    public function replicate(array $except = null)
    {
        $instance = $this->replicateNode($except);
        (new SlugService())->slug($instance, true);

        return $instance;
    }
    protected $fillable = ['name', 'slug'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function slide()
    {
        return $this->morphMany(Slide::class, 'linked');

    }
    public function generatePath()
    {
        $this->path = $this->isRoot() ? $this->slug : $this->parent->path . '/' . $this->slug;
        return $this;
    }
}
