<div>
    <div class="row mt-5">
        
        <div class="col-12">

            <div class="row">

                <h3 class="col-12 text-center mb-5">{{ $album["name"]}}</h3>

                @foreach($lista_de_musicas as $item)
                    <div class="col-sm-4 mt-3">
                        <div class="card">
                            <div class="card-body text-center">
                            <h5 class="card-title">{{ str_pad($item["track_number"], 2, "0", STR_PAD_LEFT) ." - " . $item["name"]}}</h5>
                            @if(!is_null($item["preview_url"]))
                                <audio controls>
                                    <source src="{{ $item["preview_url"]}}" type="audio/mpeg">
                                Your browser does not support the audio element.
                                </audio>
                                @else
                                <div class="alert alert-info" role="alert">
                                    Preview Não Disponível
                                </div>
                            @endif
                            </div>
                        </div>
                        </div>

                @endforeach

                <a class="col-12 mt-5 mb-5" href="{{ url("/albuns/" . $album["artists"][0]["id"] ) }}">
                    Voltar para {{ $album["artists"][0]["name"]}}
                </a>
            
            </div>

        </div>
        
    </div>
</div>
