<?php

use Tempest\Database\Migration;
use Tempest\Database\MigratesUp;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;

final class CreatePeopleTable implements MigratesUp
{
    public string $name = '2025-10-26_create_people_table';

    public function up(): QueryStatement
    {
        return new CreateTableStatement('people')
            ->primary()
            ->varchar('username')
            ->varchar('name')
            ->integer('age')
            ->datetime('created_at')
            ->datetime('updated_at');
    }
}