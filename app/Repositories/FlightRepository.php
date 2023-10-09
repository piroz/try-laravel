<?php

namespace App\Repositories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Collection;

class FlightRepository implements FlightRepositoryInterface
{
    public function __construct(private Flight $flight) {
    }

    public function count(): int
    {
        return $this->flight->all()->count();
    }

    public function getAll(): Collection
    {
        return $this->flight->get();
    }

    public function getById(int $id): Flight
    {
        return $this->flight->findOrFail($id);
    }

    public function create(array $attributes): Flight
    {
        return $this->flight->create($attributes);
    }

    public function update(int $id, array $attributes): Flight
    {
        $flight = $this->getById($id);

        $flight->fill($attributes);
        $flight->save();

        return $flight;
    }
}
