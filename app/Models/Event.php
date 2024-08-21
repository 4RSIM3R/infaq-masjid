<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    protected $hidden = ['media'];

    protected $appends = ['thumbnail'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('thumbnail');
    }

    public function getThumbnailAttribute()
    {
        return $this->getFirstMediaUrl('thumbnail');
    }
}
