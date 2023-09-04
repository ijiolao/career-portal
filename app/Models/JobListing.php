<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class JobListing extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'requirements',
        'location',
        'salary',
        'deadline',
        'schedule',
        'type',
    ];



    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
            'posted' => $this->created_at,
            'deadline' => $this->deadline,
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
