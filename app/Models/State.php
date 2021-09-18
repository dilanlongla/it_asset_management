<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class State
 * @package App\Models
 * @version September 18, 2021, 10:45 pm UTC
 *
 * @property string $name
 * @property string $description
 */
class State extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'states';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'max:255'
    ];

    
}
