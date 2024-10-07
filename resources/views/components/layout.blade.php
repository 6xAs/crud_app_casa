<!DOCTYPE html>
<html lang="pt-br">
    <head>

        {{-- Aqui é o meu Head --}}
        @include('layouts.template.head')

    </head>
    <body>

        {{-- Esse é o topo da minha aplicação --}}
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

            {{-- Aqui é o meu Header --}}
            @include('layouts.template.header')

        </nav>

        {{-- Aqui inicia a minha sidebar --}}
        <div id="layoutSidenav">

            <div id="layoutSidenav_nav">

                {{-- Aqui é a minha sidebar --}}
                @include('layouts.template.sidebar')

            </div>

            <div id="layoutSidenav_content">


                <main>

                    {{-- Aqui é o meu conteúdo principal 😎😎 (Dinâmico) --}}

                    {{ $slot }}

                </main>


                <footer class="py-4 bg-light mt-auto">

                    {{-- Aqui é o meu footer --}}
                    @include('layouts.template.footer')

                </footer>
            </div>


        </div>

        @stack('scripts')

    </body>
</html>
