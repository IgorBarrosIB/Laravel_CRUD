@extends('property.master')

@section('contente')
<div class="container my-3">

  <h1> Formulário de cadastro :: Imóveis </h1>

  <form action="<?= url('/imoveis/store')?>" method="POST">

    <?= csrf_field();?>
    <div class="form-group">
        <label for="title">Título do imóvel</label>
        <input type="text" name="title" id="title" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="title">Descrição</label>
        <textarea type="text" name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="title">Preço para alugar</label>
        <input type="text" name="retal_price" id="retal_price" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="title">Preço para comprar</label>
        <input type="text" name="sale_price" id="sale_price" class="form-control"/>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar Imóvel</button>
  </form>
</div>
@endsection
