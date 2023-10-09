<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Flight;

interface FlightRepositoryInterface
{
    public function count(): int;
    public function getAll(): Collection;
    public function getById(int $id): Flight;
    public function create(array $attributes): Flight;
    public function update(int $id, array $attributes): Flight;
}
