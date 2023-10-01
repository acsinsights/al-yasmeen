<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectImage;


class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'projecttitle',
        'subservice',
        'date',
        'media',
       'gallery',
        'hyperlinks',
    ];

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
