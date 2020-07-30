<div>

 

    <div class="jumbotron container">
        <div class="row">
            <div class="col-3">
                <img src="{{ $artista["images"][0]["url"] }}" class="img-responsive w-75"  />
            </div>
            <div class="col-9">
                <h1 class="display-4">{{ $artista["name"] }}</h1>
                <p class="lead">{{ $artista["followers"]["total"] }} Seguidores</p>
                <a class="btn btn-primary btn-lg" href="{{ url('/') }}" role="button">
                    <i class="fa fa-undo"></i>
                    Voltar
                </a>
            </div>
        </div>
        
    </div>

    @foreach($albuns["items"] as $item)
        <div class="media">
            <img src="{{ $item["images"][2]["url"] }}" class="align-self-center mr-3" alt="{{ $item["name"] }}">
            <div class="media-body">
                <a href="{{ url("album/$item[id]")}}">
                    <h5 class="mt-0">{{ $item["name"] }}</h5>
                </a>
                <p>{{ date_format(date_create($item["release_date"]),"d/m/Y") }}</p>
            </div>
        </div>
        <hr class="my-4">
    @endforeach
</div>
