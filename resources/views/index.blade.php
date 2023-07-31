<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <title>Bayside Kings</title>

    <style>
        /* Estilos para os itens da loja */
        .store-item {
            transition: transform 0.5s, color 0.5s;
            /* Define a transição para a propriedade 'transform' */
        }

        /* Estilos para quando o mouse estiver sobre o item */
        .store-item:hover {
            transform: scale(1.1);
            /* Aumenta o tamanho do item para 110% (crescer um pouco) */
            color: #44C9F8;
            /* Mudamos a cor do texto para 'red' quando o mouse estiver sobre o item */

        }
    </style>
</head>

<body class="">
    <section>
        @foreach ($scheduleData as $schedule)
        <div class="d-flex mt-3 border border-warning justify-content-center m-5" style="width: 100% height: 10rem">
            <span class="card-title h6 mt-4" style="">{{ $schedule->local }} </span> 
            <p class="card-title h6 mt-4" style="">{{ $schedule->city }} </p>
            <span class="card-title h6 mt-4" style="">{{ $schedule->concert_date }} </span>
            <a class="btn btn-sm btn-primary m-3" href="{{ $schedule->linkTickets }}">Ingressos Aqui </a>
        </div>
        </div>
    @endforeach
    </section>
    <section>
        <div class="m-5">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/1ixRGSR7pOSWqLTtbjL62p?utm_source=generator&theme=0" width="100%" height="450"
             frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

        </div>
    </section>
    <section class="container text-center">
        <h3>Lista de Itens</h3>
        <div class="row mt-3 m-5">
            @foreach ($storeData as $store)
            <div class="col-11 col-md-6 col-lg-4 d-flex mt-3 justify-content-center">
                <a class="text-decoration-none justify-content-center" href="{{ $store->link }}" target="_blank">
                    <div class="card border-0 store-item text-center" style="width: 14rem;">
                        <img class="card-img-top img-fluid d-block" src="{{ $store->thumbnail }}" style="height: 11rem" alt="bayside kings">
                        <div class="card-body p-1">
                            <p class="card-title h6" style="">{{ $store->name }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

</body>

</html>
