<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $fillable = ['content'];

	static $test  = 111;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
