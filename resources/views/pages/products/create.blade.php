<x-layout>

    @section('title', 'Cadastrar Produto')
    <x-slot name="title">
        @yield('title')
    </x-slot>

    {{-- Aqui inicia o meu (MAIN) --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4"> @yield('title') </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href=" {{ ('/') }} ">Início</a></li>
            <li class="breadcrumb-item active"> @yield('title')</li>
        </ol>
        <div class="card mb-4">

            {{-- Início Content --}}
            <div class="card-body">

                    {{-- Minha Tabela Dinâmica começa aqui  --}}
                    @if(Session::has('message'))
                        <div role="alert">

                            <h4 style="color: #045c01"><strong>Parabéns!</strong> {!! Session::get('message') !!}</h4>

                        </div>
                    @endif

                    <hr>

                <div class="col-md-12">

                    <form action=" {{ route('product.store') }} " method="POST" class="row g-3" enctype="multipart/form-data" >
                            @csrf
                            <div class="col-md-6">

                                <label for="nome_produto" class="form-label">NOME PRODUTO:</label>
                                <input type="text" class="form-control" name="nome_produto" id="nome_produto" placeholder="Nome do Produto..." required >

                            </div>
                            <div class="col-md-6">

                                <label for="inputState" class="form-label">MARCA:</label>
                                <select name="marca" id="marca" class="form-select">
                                    <option selected>Escolha uma opção...</option>
                                    <option value="Nestle">Nestle</option>
                                    <option value="Cacau Show">Cacau Show</option>
                                    <option value="Garoto">Garoto</option>
                                    <option value="Kibom">Kibom</option>
                                </select>

                            </div>
                            <div class="col-12">

                                <label for="categoria" class="form-label">CATEGORIA:</label>
                                <input type="text" class="form-control" name="categoria" placeholder="Categoria...." id="categoria" required >

                            </div>
                            <div class="col-12">

                                <label for="valor_compra"  class="form-label">VALOR DE COMPRA:</label>
                                <input type="text" class="form-control" name="valor_compra" id="valor_compra" placeholder="R$00,00" required >

                            </div>
                            <div class="col-md-6">

                                <label for="valor_venda"  class="form-label">VALOR DE VENDA:</label>
                                <input type="text" class="form-control" name="valor_venda" id="valor_venda" placeholder="R$00,00" required >

                            </div>
                            <div class="col-md-6">
                                <label for="qtd_estoque" class="form-label">QTD. ESTOQUE:</label>
                                <input type="text" class="form-control" name="qtd_estoque" id="qtd_estoque"  placeholder="Quantidade no Estoque" required >
                            {{-- <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select> --}}
                            </div>


                            <div class="col-12">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">CADASTRAR</button>
                                  </div>

                            </div>
                      </form>
                </div>


            </div>
            {{--// End Content --}}

        </div>

    </div>

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src=" {{ asset('js/scripts.js') }} "></script>

@endpush


</x-layout>

