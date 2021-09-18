<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEquipmentStatesRequest;
use App\Http\Requests\UpdateEquipmentStatesRequest;
use App\Repositories\EquipmentStatesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EquipmentStatesController extends AppBaseController
{
    /** @var  EquipmentStatesRepository */
    private $equipmentStatesRepository;

    public function __construct(EquipmentStatesRepository $equipmentStatesRepo)
    {
        $this->equipmentStatesRepository = $equipmentStatesRepo;
    }

    /**
     * Display a listing of the EquipmentStates.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $equipmentStates = $this->equipmentStatesRepository->all();

        return view('equipment_states.index')
            ->with('equipmentStates', $equipmentStates);
    }

    /**
     * Show the form for creating a new EquipmentStates.
     *
     * @return Response
     */
    public function create()
    {
        return view('equipment_states.create');
    }

    /**
     * Store a newly created EquipmentStates in storage.
     *
     * @param CreateEquipmentStatesRequest $request
     *
     * @return Response
     */
    public function store(CreateEquipmentStatesRequest $request)
    {
        $input = $request->all();

        $equipmentStates = $this->equipmentStatesRepository->create($input);

        Flash::success('Equipment States saved successfully.');

        return redirect(route('equipmentStates.index'));
    }

    /**
     * Display the specified EquipmentStates.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $equipmentStates = $this->equipmentStatesRepository->find($id);

        if (empty($equipmentStates)) {
            Flash::error('Equipment States not found');

            return redirect(route('equipmentStates.index'));
        }

        return view('equipment_states.show')->with('equipmentStates', $equipmentStates);
    }

    /**
     * Show the form for editing the specified EquipmentStates.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $equipmentStates = $this->equipmentStatesRepository->find($id);

        if (empty($equipmentStates)) {
            Flash::error('Equipment States not found');

            return redirect(route('equipmentStates.index'));
        }

        return view('equipment_states.edit')->with('equipmentStates', $equipmentStates);
    }

    /**
     * Update the specified EquipmentStates in storage.
     *
     * @param int $id
     * @param UpdateEquipmentStatesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEquipmentStatesRequest $request)
    {
        $equipmentStates = $this->equipmentStatesRepository->find($id);

        if (empty($equipmentStates)) {
            Flash::error('Equipment States not found');

            return redirect(route('equipmentStates.index'));
        }

        $equipmentStates = $this->equipmentStatesRepository->update($request->all(), $id);

        Flash::success('Equipment States updated successfully.');

        return redirect(route('equipmentStates.index'));
    }

    /**
     * Remove the specified EquipmentStates from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $equipmentStates = $this->equipmentStatesRepository->find($id);

        if (empty($equipmentStates)) {
            Flash::error('Equipment States not found');

            return redirect(route('equipmentStates.index'));
        }

        $this->equipmentStatesRepository->delete($id);

        Flash::success('Equipment States deleted successfully.');

        return redirect(route('equipmentStates.index'));
    }
}
