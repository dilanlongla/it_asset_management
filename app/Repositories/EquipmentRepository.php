<?php

namespace App\Repositories;

use App\Models\Equipment;
use App\Repositories\BaseRepository;

/**
 * Class EquipmentRepository
 * @package App\Repositories
 * @version September 18, 2021, 10:31 pm UTC
*/

class EquipmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'mark',
        'model',
        'img',
        'about',
        'user_id'
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
        return Equipment::class;
    }
}
