<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Concerns\HasUuids;

class TitleLevel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'title_level';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = "title_level_id";
    
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    
    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';
    
    /**
     * The attributes that should be hidden for arrays.
     */
    protected $hidden = ['title_level_id', 'title_id', 'is_active'];
    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = ['is_active' => 'boolean'];
    
    /**
     * Get the title that owns the level.
     */
    public function title()
    {
        return $this->belongsTo(Title::class, 'title_id', 'title_id');
    }
}