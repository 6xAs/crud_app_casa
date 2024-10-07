<x-layout>

    @section('title', 'Listar Produtos')
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

                    {{-- Components com Mensagens aos usuários  --}}
                    <x-message-success />

                    <hr>

                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID:.</th>
                                <th>NOME</th>
                                <th>CATEGORIA</th>
                                <th>QTD.ESTOQUE</th>
                                <th>VALOR</th>
                                <th>EDITAR</th>
                                <th>DELETAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)

                            <tr>
                                <td> {{ $product->id }} </td>
                                <td> {{ $product->nome_produto }} </td>
                                <td> {{ $product->categoria }} </td>
                                <td> {{ $product->qtd_estoque }} </td>
                                <td> R${{ $product->valor_venda }} </td>
                                <td>
                                    <a href=" {{ url('/edit/product/'. $product->id) }} "><button class="btn btn-primary">EDITAR</button></a>
                                </td>
                                <td>
                                    <form action=" {{ route('product.destroy', $product->id) }} " method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" value="DELTAR">DELETAR</button>
                                    </form>
                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
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






