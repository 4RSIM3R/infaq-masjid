<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Campaign extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    protected $hidden = ['media'];

    protected $appends = ['thumbnail', 'total_donations_paid', 'progress_percentage', 'total_report'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('thumbnail');
    }

    public function getThumbnailAttribute()
    {
        return $this->getFirstMediaUrl('thumbnail');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function getTotalDonationsPaidAttribute()
    {
        return $this->donations()->where('status', 'paid')->sum('amount');
    }

    public function getTotalReportAttribute()
    {
        return $this->reports()->sum('amount');
    }

    public function getProgressPercentageAttribute()
    {
        $totalDonationsPaid = $this->total_donations_paid;
        return $this->target > 0 ? ($totalDonationsPaid / $this->target) * 100 : 0;
    }
}
