<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'projecttitle',
        'subservice',
        'date',
        'media',
        'hyperlinks',
    ];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
