<?php
use function \Tempest\router\uri;
use App\Controllers\PeopleController;

// TODO: Figure out the right way to use uri()
?>

<x-form action="/people/create">
    <x-input name="username" label="Username" />
    <x-input name="name" label="Name" />
    <x-input name="age" label="Age" type="number" />
    <x-submit> Create Person </x-submit>
</x-form>