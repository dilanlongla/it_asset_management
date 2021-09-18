<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Equipment
 * @package App\Models
 * @version September 18, 2021, 10:31 pm UTC
 *
 * @property string $name
 * @property string $mark
 * @property string $model
 * @property string $img
 * @property string $about
 * @property integer $user_id
 */
class Equipment extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'equipment';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'mark',
        'model',
        'img',
        'about',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'mark' => 'string',
        'model' => 'string',
        'img' => 'string',
        'about' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'mark' => 'required'
    ];

    
}
