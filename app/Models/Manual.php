<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    use HasFactory;
    use HasUlids;

    protected $guarded = [];

    // casts files to array
    protected function casts(): array
    {
        return [
            'files' => 'array',
        ];
    }
}
