<ul :foreach="$this->people as $person">
    <li>{{ $person->name }}: {{ $person->age }}</li>
</ul>