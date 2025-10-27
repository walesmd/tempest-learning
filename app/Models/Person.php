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

    public function __construct() {
    }

    public function findById(int $id): ?Person {
        return query(Person::class)->select()->where('id = ?', $id)->first();
    }
}