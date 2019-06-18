<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My App</title>

        {{-- Styles --}}
        <link rel="stylesheet" href="/css/app.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">

            @include('layouts.header')
            
            <section class="section">

                <div class="container">   
                    <transition name="fade">       
                        <router-view></router-view>
                    </transition>
                </div>
            </section>
        
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
