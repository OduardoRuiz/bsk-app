<head>
    @include("layouts.header")
</head>
<h1>Create store</h1>

<div class="m-3">

    <form action="{{ route('create.store') }}" method="post">
        @csrf
       <input type="text" name="name" placeholder="nome" >
       <input type="text" name="thumbnail" placeholder="thumbnail" >
       <input type="text" name="link" placeholder="Link" >

        <button class="btn btn-primary mt-3" type="submit">salvar</button>
    </form>
</div>