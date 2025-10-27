<?php

namespace App\Models;
use function Tempest\Database\query;

final readonly class Person
{
    public int $id;
    public string $username;
    public string $name;
    public int $age;
    public string $created_at;
    public string $updated_at;

    public array $people;

    public function __construct() {
        // Dummy data for demonstration purposes
        $this->people = [
            1 => new Person(id: 1, username: 'jdoe', name: 'John Doe', age: 30),
            2 => new Person(id: 2, username: 'asmith', name: 'Alice Smith', age: 25),
        ];
    }

    public function findById(int $id): ?Person {
        return query(Person::class)->select()->where('id = ?', $id)->first();
    }
}