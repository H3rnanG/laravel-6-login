<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use VanOns\Laraberg\Traits\RendersContent;

class Post extends Model
{
    use RendersContent;

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
