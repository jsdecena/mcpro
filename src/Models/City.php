<?php

namespace Jsdecena\MCPro\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function province()
    {
    	return $this->belongsTo('Jsdecena\MCPro\Models\Province');
    }

    public function barangays()
    {
    	return $this->hasMany('Jsdecena\MCPro\Models\Barangay');
    }
}
