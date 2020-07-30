<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env("APP_NAME")}}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        @livewireStyles
    </head>
    <body>
        <div class="container">
            
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-12 text-center">
                        <a class="blog-header-logo text-dark" href="javascript:;">
                            {{ env("APP_NAME") }}
                        </a>
                    </div>
                </div>
            </header>
        
            <livewire:formulario-de-busca />
                
        </div>
        
        <div class="container-fluid mt-4">
            <footer class="blog-footer">
                <p>Blog template built for 
                    <a href="https://getbootstrap.com/">Bootstrap</a> by 
                    <a href="https://twitter.com/mdo">@mdo</a>.
                </p>
                <p>
                    <a href="#">Voltar ao Topo</a>
                </p>
            </footer>
        </div>
        
        @livewireScripts
        <script src="{{ asset("/js/app.js") }}"></script>
    
    </body>
</html>
