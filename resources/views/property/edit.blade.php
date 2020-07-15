@extends('property.master')

@section('contente')
<div class="container my-3">
<h1> Formulário de edição :: Imóveis </h1>

    <?php
        $property = $property[0];
    ?>

    <form action="<?= url('/imoveis/update',['id' => $property->id])?>" method="POST">

        <?= csrf_field();?>
        <?= method_field('PUT');?>

        <div class="form-group">
            <label for="title">Título do imóvel</label>
            <input class="form-control" type="text" name="title" id="title" value="<?= $property->title?>"/>
        </div>

        <div class="form-group">
            <label for="title"></label>
            <textarea class="form-control" type="text" name="description" id="description" cols="30" rows="10" value="<?= $property->description?>">Descrição do Imovel</textarea>
        </div>

        <div class="form-group">
            <label for="title">Preço para alugar</label>
            <input class="form-control" type="text" name="retal_price" id="retal_price" value="<?= $property->retal_price?>"/>
        </div>

        <div class="form-group">
            <label for="title">Preço para comprar</label>
            <input class="form-control" type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price?>"/>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Imóvel</button>
    </form>
</div>
@endsection
