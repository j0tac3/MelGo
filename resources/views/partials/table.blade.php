<table class = "table table-dark">
    <caption>Tabla Pokèmons</caption>
    <thead>
        <tr>
            <th scope="col">Pokedex</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Altura</th>
            <th scope="col">Peso</th>
            <th scope="col">PreEvolucion</th>
            <th scope="col">Evolucion</th>
            <th scope="col">Imagen</th>
            <th scope="col">Activo en Go</th>
            <th scope="col">Activo Shiny</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pokemons as $pokemon)
            <tr>
                <th>{{ $pokemon->pokeNumber }}</th>
                <td>{{ $pokemon->pokeName }}</td>
                <td>{{ $pokemon->pokeDesc }}</td>
                <td>{{ $pokemon->pokeHeight }}</td>
                <td>{{ $pokemon->pokeWeight }}</td>
                <td>{{ $pokemon->preEvolution }}</td>
                <td>{{ $pokemon->evolution }}</td>
                <td>{{ $pokemon->image }}</td>
                <td>{{ $pokemon->activeGo }}</td>
                <td>{{ $pokemon->activeGoShiny }}</td>
            </tr>
        @endforeach
    </tbody>
</table>