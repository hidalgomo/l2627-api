<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Title extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'title';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = "title_id";
    
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
    protected $hidden = ['title_id', 'is_active'];
    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = ['is_active' => 'boolean'];
    
    /**
     * Get the levels for the title.
     */
    public function titleLevels()
    {
        return $this->hasMany(TitleLevel::class, 'title_id', 'title_id');
    }
}