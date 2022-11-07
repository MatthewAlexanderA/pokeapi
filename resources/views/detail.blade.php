<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ ucwords($pokemons['name']) }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        .none{
            display: none;
        }
        .type{
            color: #fff;
        }
        .grass{
            background-color: #92bf19;
        }
        .grass:hover{
            background-color: #80a717;
        }
        .poison{
            background-color: #be78be;
        }
        .poison:hover{
            background-color: #a567a5;
        }
        .fire{
            background-color: #ff3700;
        }
        .fire:hover{
            background-color: #d82f00;
        }
        .flying{
            background-color: #79bcd7;
        }
        .flying:hover{
            background-color: #6198ad;
        }
        .water{
            background-color: #0094e5;
        }
        .water:hover{
            background-color: #0079bb;
        }
        .bug{
            background-color: #32b432;
        }
        .bug:hover{
            background-color: #268d26;
        }
        .normal{
            background-color: #a0a0a0;
        }
        .normal:hover{
            background-color: #858484;
        }
        .electric{
            background-color: #e4b700;
        }
        .electric:hover{
            background-color: #c29b00;
        }
        .ground{
            background-color: #cca142;
        }
        .ground:hover{
            background-color: #ad8839;
        }
        .fairy{
            background-color: #ff7eb8;
        }
        .fairy:hover{
            background-color: #dd6da0;
        }
        .fighting{
            background-color: #c85500;
        }
        .fighting:hover{
            background-color: #a04300;
        }
        .psychic{
            background-color: #dc78c8;
        }
        .psychic:hover{
            background-color: #ad5f9e;
        }
        .rock{
            background-color: #a07850;
        }
        .rock:hover{
            background-color: #7a5c3d;
        }
        .steel{
            background-color: #96b4dc;
        }
        .steel:hover{
            background-color: #778fad;
        }
        .ice{
            background-color: #00b7ee;
        }
        .ice:hover{
            background-color: #0089b3;
        }
        .ghost{
            background-color: #8c78f0;
        }
        .ghost:hover{
            background-color: #7464c5;
        }
        .dragon{
            background-color: #3c64c8;
        }
        .dragon:hover{
            background-color: #2d4a92;
        }
        .dark{
            background-color: #646464;
            color: #fff;
        }
        .dark:hover{
            background-color: #363636;
            color: #fff;
        }
    </style>
</head>

<body style="background-color: rgb(230, 230, 230)">
    <div class="content text-center mt-3">
        <h1>{{ ucwords($pokemons['name']) }}</h1>
        <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ $pokemons['id'] }}.png" alt="{{ ucwords($pokemons['name']) }}" title="{{ ucwords($pokemons['name']) }}">
        <div class="types">
            @foreach ($pokemons['types'] as $types)
                @foreach ($types['type'] as $type)
                    <div class="type btn @if ($type == 'grass')
                    grass
                    @elseif ($type == 'poison')
                    poison
                    @elseif ($type == 'fire')
                    fire
                    @elseif ($type == 'flying')
                    flying
                    @elseif ($type == 'water')
                    water
                    @elseif ($type == 'bug')
                    bug
                    @elseif ($type == 'normal')
                    normal
                    @elseif ($type == 'electric')
                    electric
                    @elseif ($type == 'ground')
                    ground
                    @elseif ($type == 'fairy')
                    fairy
                    @elseif ($type == 'fighting')
                    fighting
                    @elseif ($type == 'psychic')
                    psychic
                    @elseif ($type == 'rock')
                    rock
                    @elseif ($type == 'steel')
                    steel
                    @elseif ($type == 'ice')
                    ice
                    @elseif ($type == 'ghost')
                    ghost
                    @elseif ($type == 'dragon')
                    dragon
                    @elseif ($type == 'dark')
                    dark
                    @else
                    none
                    @endif">{{ ucwords($type) }}</div> 
                @endforeach
            @endforeach
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Height</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Base EXP</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{ $pokemons }} --}}
                {{-- @foreach ($pokemons as $pokemon) --}}
                <tr>
                    <th scope="row">{{ $pokemons['id'] }}</th>
                    <td>{{ $pokemons['height'] }}</td>
                    <td>{{ $pokemons['weight'] }}</td>
                    <td>{{ $pokemons['base_experience'] }}</td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
    <div style="text-align: left; padding: 10px;"><a href="{{ route('pokemon.show', $pokemons['id'] - 1) }}"> << Previous</a></div>
    <div style="text-align: right; padding: 10px;"><a href="{{ route('pokemon.show', $pokemons['id'] + 1) }}">Next >> </a></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
