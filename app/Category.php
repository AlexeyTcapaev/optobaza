<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use NodeTrait,Sluggable {
        NodeTrait::replicate as replicateNode;
        Sluggable::replicate as replicateSlug;
    }
    public function replicate(array $except = null)
    {
        $instance = $this->replicateNode($except);
        (new SlugService())->slug($instance, true);

        return $instance;
    }
    protected $fillable = ['name','slug'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
