<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Repositories\FlightRepository;

class FlightController extends Controller
{
    public function __construct(
        protected FlightRepository $flights,
    ) {}

    public function index(Request $request)
    {
        $count = $this->flights->count();
        $flights = $this->flights->getAll();
        return view('flights.index', compact('count', 'flights'));
    }

    public function delete(Request $request, int $id)
    {
        $flight = $this->flights->getById($id);
        $flight->delete();
        return redirect()->route('flights.index');
    }

    public function create()
    {
        return view('flights.create');
    }

    public function edit(Request $request, int $id)
    {
        $flight = $this->flights->getById($id);
        return view('flights.show', compact('flight'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|max:30',
            'number' => 'required|max:10',
            'destination' => 'required|max:30'
        ]);

        if ($request->has('id')) {
            $this->flights->update((int) $request->get('id'), $validated);
        } else {
            $this->flights->create($validated);
        }

        return redirect('/flights');
    }
}
