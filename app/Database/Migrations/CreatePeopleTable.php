<?php

namespace App\Database\Migrations;

use App\Models\Person;
use Tempest\Database\MigratesUp;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;

final class CreatePeopleTable implements MigratesUp
{
    public string $name = '2025-10-26-create_people_table';

    public function up(): QueryStatement
    {
        return CreateTableStatement::forModel(Person::class)
            ->primary()
            ->varchar('username')
            ->varchar('name')
            ->integer('age')
            ->datetime('created_at')
            ->datetime('updated_at');
    }
}