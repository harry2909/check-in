<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Success extends Model
{
    use HasFactory;
    use Searchable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'description', 'submission_date', 'user_id'
    ];
}
