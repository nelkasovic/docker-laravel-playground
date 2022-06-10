<?php

namespace App\Http\Controllers;

use App\Models\DummyClass;

class DummyController
{
    private DummyClass $dummy;

    public function __construct()
    {
        $this->dummy = new DummyClass();
    }

    public function dummy(string $name, int $age): DummyClass
    {
        return $this->dummy
            ->setName($name)
            ->setAge($age)
            ->save();
    }
}
