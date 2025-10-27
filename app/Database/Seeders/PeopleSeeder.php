<?php

namespace App\Database\Seeders;

use Tempest\Database\DatabaseSeeder;
use App\Models\Person;
use UnitEnum;

use function Tempest\Database\query;

final class PeopleSeeder implements DatabaseSeeder
{
    public function run(null|string|UnitEnum $database): void
    {
        query(Person::class)
        ->insert([
            'username' => 'jdoe',
            'name' => 'John Doe',
            'age' => 30,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ])
        ->onDatabase($database)
        ->execute();
    }
}