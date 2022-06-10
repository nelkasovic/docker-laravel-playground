<?php

namespace App\Models;

/**
 * @property string name
 * @property int age
 */
class DummyClass
{
    private string $name;
    private int $age;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): DummyClass
    {
        $this->name = $name;

        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): DummyClass
    {
        $this->age = $age;

        return $this;
    }

    public function save(): self
    {
        // Daten aufbereiten/empfangen
        // Insert statement
        // Run query
        // Check if saved
        // Return saved record
        return $this;
    }
}
