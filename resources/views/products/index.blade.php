<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Produtos</title>

    <style>
        table th, td {
            border: 1px solid;
        }
    </style>

</head>
<body>
    <div>
        <nav>
            <table>
                <tr>
                    <td> <a href=" {{ url('/home') }} "> <button> Home</button></a> </td>
                    <td> <a href=" {{ url('/product/create') }} "> <button> Cadastrar Produtos</button></a></td>
                    <td> <a href=" {{ url('/products') }} "> <button> Listar Produtos</button></a></td>

                </tr>
            </table>
        </nav>
    </div>
    <h1>Página - Listar Produtos (INDEX) </h1>
    <hr>
    {{-- <form action=" {{ url('store') }} " method="POST" enctype="multipart/form-data">
        <input type="text">
        <input type="submit" class="">
    </form> --}}

    @if(Session::has('message'))
        <div role="alert">

            <h4 style="color: #045c01"><strong>Parabéns!</strong> {!! Session::get('message') !!}</h4>

        </div>
    @endif

    <hr>


    <table>
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
                     <a href=" {{ url('/edit/product/'. $product->id) }} "><button>EDITAR</button></a> |
                </td>
                <td>
                    <form action=" {{ route('product.destroy', $product->id) }} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" value="DELTAR">DELETAR</button>
                    </form>
                </td>


              </tr>

            @endforeach
        </tbody>
    </table>

</body>
</html>
