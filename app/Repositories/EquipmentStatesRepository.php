<?php

namespace App\Repositories;

use App\Models\EquipmentStates;
use App\Repositories\BaseRepository;

/**
 * Class EquipmentStatesRepository
 * @package App\Repositories
 * @version September 18, 2021, 10:56 pm UTC
*/

class EquipmentStatesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'state_id',
        'equipment_id',
        'note'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EquipmentStates::class;
    }
}
