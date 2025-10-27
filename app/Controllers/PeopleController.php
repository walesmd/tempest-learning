<?php

namespace App\Controllers;

use Tempest\Router\Get;
use Tempest\View\View;

use App\Models\Person;

use function Tempest\view;
use function Tempest\Database\query;


final readonly class PeopleController
{

    #[Get('/people')]
    public function index(): View
    {
        $rows = query(Person::class)->select()->all();
        $people = array_map(fn($row) => new Person($row), $rows);

        return(view('Views/Person/index.view.php', people: $people));
    }
}