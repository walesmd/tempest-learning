<?php

namespace App\Controllers;

use Tempest\Router\Get;
use Tempest\Router\Post;
use Tempest\View\View;
use Tempest\Http\Responses\Redirect;

use App\Models\Person;

use function Tempest\view;


final readonly class PeopleController
{
    public function __construct(private readonly Person $person) {
    }

    public function __invoke() {}

    #[Get('/people')]
    public function index(): View
    {
        $people = $this->person->findAll();

        return(view('Views/Person/index.view.php', people: $people));
    }

    #[Get('/people/{id}')]
    public function show(int $id): View
    {
        $person = $this->person->findById($id);

        return(view('Views/Person/show.view.php', person: $person));
    }

    #[Get('/people/create')]
    public function create(): View
    {
        return(view('Views/Person/create.view.php'));
    }

    #[Post('/people/create')]
    public function createPost(): Redirect
    {
        // TODO: Figure out the right way to use uri()
        return new Redirect('/people');
    }
}