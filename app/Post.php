<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable = [
        'user_id','title','body'
    ];  
    
    protected $hidden = [

    ];

    protected $casts = [
        
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
