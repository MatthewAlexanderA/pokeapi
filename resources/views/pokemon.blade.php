<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokemon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background-color: rgb(230, 59, 59)">
    @php
    use App\Http\Libraries\PokeApi;
    @endphp

    <div class="content text-center">
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Pokemon</a>
                <form class="d-flex" role="search" action="{{ route('search') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input class="form-control me-2" type="search" placeholder="Pokemon's Name / Id"
                        aria-label="Pokemon's Name / Pokemon's Id">
                    <button class="btn btn-outline-success" type="submit" name="search">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <div class="row m-5">
        @foreach ($pokemons['results'] as $pokemon)
        <div class="col-sm-3 p-3">
            <a href="{{ route('pokemons.show', $pokemon['name']) }}" style="text-decoration: none;">
                <div class="card" style="background-color: rgb(206, 206, 206)">
                    @php
                    $poke = (new PokeApi)->index('/pokemon/' . $pokemon['name'])->collect();
                    @endphp
                    <img src="{{ $poke['sprites']['front_default'] }}" class="card-img-top"
                        alt="{{ ucwords($pokemon['name']) }}" title="{{ ucwords($pokemon['name']) }}">
                    <div class="card-body" style="background-color: rgb(61, 61, 61)">
                        <h5 class="card-title text-center" style="color: rgb(255, 255, 255)">{{ ucwords($pokemon['name']) }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

        <div class="mt-5 text-center">
            {{-- {{ $pokemons['previous'] }}, {{ $pokemons['next'] }} --}}
            <form action="{{ route('link') }}" method="post" style="display: inline-block;">
                @csrf
                @if ($pokemons['previous'])
                    <input type="hidden" name="link" value="{{ $pokemons['previous'] }}">
                    <button name="previous" type="submit" class="btn btn-secondary" style="text-align: left;"> << Previous</button>
                @else
                    <a href="" class="disabled btn btn-secondary" disabled style="text-align: left;"> << Previous</a>
                @endif
            </form>
            <form action="{{ route('link') }}" method="post" style="display: inline-block;">
                @csrf
                @if ($pokemons['next'])
                    <input type="hidden" name="link" value="{{ $pokemons['next'] }}">
                    <button name="next" type="submit" class="btn btn-secondary" style="text-align: right;">Next >> </button>
                @else
                    <a href="" class="disabled btn btn-secondary" disabled style="text-align: right;">Next >> </a>    
                @endif
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
