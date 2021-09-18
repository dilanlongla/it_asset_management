<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EquipmentStates
 * @package App\Models
 * @version September 18, 2021, 10:56 pm UTC
 *
 * @property integer $state_id
 * @property integer $equipment_id
 * @property string $note
 */
class EquipmentStates extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'equipment_states';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'state_id',
        'equipment_id',
        'note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'state_id' => 'integer',
        'equipment_id' => 'integer',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'state_id' => 'required',
        'equipment_id' => 'required',
        'note' => 'max:200'
    ];

    
}
