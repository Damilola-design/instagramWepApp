<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/ads5e8WKnuQeMyQkgU49vvz2OdPklpHCSK9k1YEV.jpeg';

        return '/storage/' . $imagePath;
     }

     public function followers()
     {
         return $this->belongsToMany(User::class);
     }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
