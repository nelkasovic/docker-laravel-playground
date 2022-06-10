<?php

namespace App\Http\Controllers;

use App\Models\DummyLaravelClass;
use Illuminate\Database\Eloquent\Model;

class DummyLaravelController
{
    public function dummy(string $name, int $age): Model
    {
        return DummyLaravelClass::query()
            ->create([
                'name' => $name,
                'age' => $age
            ]);
    }

    public function delete(int $id): bool {
        return DummyLaravelClass::query()
            ->find($id)
            ->delete();
    }
}
