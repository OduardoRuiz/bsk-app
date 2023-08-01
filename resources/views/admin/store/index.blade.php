<h1>Index store</h1>
<head>
    @include('layouts.header')
</head>
<body>
    <main>
        <div class="m-3 row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>thumbnail</th>
                        <th>Nome</th>
                        <th>link</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stores as $noticia)
                        <tr>

                            <td>{{ $noticia->id }}</td>
                            <td><img src="{{ $noticia->thumbnail }}" style="max-width: 5rem;" alt="imagem"></td>
                            <td>{{ $noticia->name }}</td>
                            <td>{{ $noticia->link }}</td>
                            <td class="d-flex" style="width: 100%; heigth: 100%">
                                <a href="" class="btn btn-sm btn-warning " style="max-width: 100%">Editar</a>
                                <form method="POST" action="" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onsubmit="return remover()">Apagar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
    </main>

</body>
