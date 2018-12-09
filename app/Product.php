<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;
use App\Tag;
use App\Category;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'slug', 'manufacturer', 'article', 'rating', 'category_id', 'recomendated'];
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function slide()
    {
        return $this->morphMany(Slide::class, 'linked');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function remove()
    {
        Storage::delete('public/uploads/' . $this->image);
        $this->delete();
    }
    public static function add($fields)
    {

        if ($fields->has('recomendated')) {
            $fields['recomendated'] = 1;
        } else $fields['recomendated'] = 0;
        $product = self::create($fields->all());
        return $product;
    }
    public function uploadImage($new_image)
    {
        if ($new_image == null) {
            return;
        }
        if ($this->image != null)
            Storage::delete('public/uploads/' . $this->image);
        $filename = str_random(10) . '.' . $new_image->extension();
        $new_image->storeAs('public/uploads', $filename);
        $this->image = $filename;
        $this->save();
    }
}
