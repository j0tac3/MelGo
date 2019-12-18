<form action="{{ url('foo/bar') }}" method="POST">
{{ csrf_field() }}
    <label for="pokeNumber">Numero de la pokedex:</label>
    <input type="number" name="pokeNumber" id="pokeNumber"><br>

    <label for="pokeName">Nombre del pokemon:</label>
    <input type="text" name="pokeName" id="pokeName"><br>

    <label for="pokeDesc">Descripcion del pokemon:</label>
    <input type="text" name="pokeDesc" id="nombre"><br>

    <button type="submit">Enviar</button>
    <button type="reset">Borrar</button>
    <button type="button">Volver</button>
</form>