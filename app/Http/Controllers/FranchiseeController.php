<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFranchiseeRequest;
use App\Http\Requests\UpdateFranchiseeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FranchiseeRepository;
use Illuminate\Http\Request;
use Flash;

class FranchiseeController extends AppBaseController
{
    /** @var FranchiseeRepository $franchiseeRepository*/
    private $franchiseeRepository;

    public function __construct(FranchiseeRepository $franchiseeRepo)
    {
        $this->franchiseeRepository = $franchiseeRepo;
    }

    /**
     * Display a listing of the Franchisee.
     */
    public function index(Request $request)
    {
        $franchisees = $this->franchiseeRepository->paginate(10);

        return view('franchisees.index')
            ->with('franchisees', $franchisees);
    }

    /**
     * Show the form for creating a new Franchisee.
     */
    public function create()
    {
        return view('franchisees.create');
    }

    /**
     * Store a newly created Franchisee in storage.
     */
    public function store(CreateFranchiseeRequest $request)
    {
        $input = $request->all();

        $franchisee = $this->franchiseeRepository->create($input);

        Flash::success('Franchisee saved successfully.');

        return redirect(route('franchisees.index'));
    }

    /**
     * Display the specified Franchisee.
     */
    public function show($id)
    {
        $franchisee = $this->franchiseeRepository->find($id);

        if (empty($franchisee)) {
            Flash::error('Franchisee not found');

            return redirect(route('franchisees.index'));
        }

        return view('franchisees.show')->with('franchisee', $franchisee);
    }

    /**
     * Show the form for editing the specified Franchisee.
     */
    public function edit($id)
    {
        $franchisee = $this->franchiseeRepository->find($id);

        if (empty($franchisee)) {
            Flash::error('Franchisee not found');

            return redirect(route('franchisees.index'));
        }

        return view('franchisees.edit')->with('franchisee', $franchisee);
    }

    /**
     * Update the specified Franchisee in storage.
     */
    public function update($id, UpdateFranchiseeRequest $request)
    {
        $franchisee = $this->franchiseeRepository->find($id);

        if (empty($franchisee)) {
            Flash::error('Franchisee not found');

            return redirect(route('franchisees.index'));
        }

        $franchisee = $this->franchiseeRepository->update($request->all(), $id);

        Flash::success('Franchisee updated successfully.');

        return redirect(route('franchisees.index'));
    }

    /**
     * Remove the specified Franchisee from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $franchisee = $this->franchiseeRepository->find($id);

        if (empty($franchisee)) {
            Flash::error('Franchisee not found');

            return redirect(route('franchisees.index'));
        }

        $this->franchiseeRepository->delete($id);

        Flash::success('Franchisee deleted successfully.');

        return redirect(route('franchisees.index'));
    }
}
