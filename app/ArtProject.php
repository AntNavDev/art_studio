<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtProject extends Model
{
    protected $table = 'projects';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_url', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User' );
    }
}
