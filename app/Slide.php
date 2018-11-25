<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slide extends Model
{
    protected $fillable = ['image','linked_id','linked_type'];

    public function linked()
    {
        return $this->morphTo();
    }
    public static function add($fields)
    {
        $linked = explode(",", $fields->linked);
        $fields['linked_id'] = $linked[0];
        $fields['linked_type'] = $linked[1];
        $slide = self::create($fields->all());
        return $slide;
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
