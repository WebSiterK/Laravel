<!-- resources/views/planet.blade.php -->
 
<h1></h1>

<p>Details about :</p>

@foreach ($planets as $planet)
<ul>
    <li>Name: {{ $planet->name }}</li>
    <li>Description: {{ $planet->description }}</li>
    <li>Size: {{ $planet->size_in_km }} km</li>
</ul>
@endforeach