<div>
    <div class="container" wire:offline>
        <div class="row">
            <div class="alert alert-warning w-100 text-center" role="alert">
                Sem conexão com a internet, verifique antes de continuar.
            </div>
        </div>
    </div>

    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="row">
            
            <div class="col-9">
                <input class="form-control form-control-lg" type="text" wire:loading.attr="readonly"
                    wire:model.lazy="busca" wire:keydown.enter="buscar"
                    wire:offline.attr="disabled" wire:loading.attr="disabled">
            </div>
            <div class="col-3">
                <button type="submit" id="btnBusca" class="btn btn-success w-100 h-100" 
                        wire:click="buscar" wire:offline.attr="disabled" wire:loading.attr="disabled">
                        <i class="fa fa-search"></i> 
                        Buscar
                </button>
            </div>
            
        </div>
    </div>

    <div class="container">

        <div class="container text-center" wire:loading="true">
            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/35771931234507.564a1d2403b3a.gif">
        </div>
        
        <div class="row" wire:loading.remove>
            @if($exibirCabecalhoResposta)
                <h6 class="border-bottom border-gray pb-2 mb-0">Resultados da Busca</h6>
            @endif
            @foreach($lista as $item)
            <div class="col-12">
                <div class="bg-white rounded shadow-sm">
                
                    <div class="media text-muted pt-3">
                        <img src="{{ $item["capa_album_p"] }}" class="img-fluid mr-4">
                    
                        <div class="media-body pb-4 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">{{ $item["nome"]}}</strong>
                                
                                <a class="fav" href="javascript:;" title="Favoritar {{ $item["artista"]}}"
                                            wire:click="$emit('addFav', '{{ $item["id_artista"] }}')">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                            </div>
                            
                            <span class="d-block">{{ $item["artista"]}}</span>

                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Favoritos
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($favoritos as $item)
                    <div class="col-3">           
                        <div class="card">
                            <img class="card-img-top" src="{{ $item['images'][2]['url']}}" 
                                alt="Card image cap" style="max-height:160px" >
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $item["name"]}}</h5>
                                <a href="{{ url("albuns/$item[id]") }}" 
                                            class="btn btn-primary btn-block">
                                    <i class="fa fa-headphones" aria-hidden="true"></i>
                                        Albuns
                                    </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>