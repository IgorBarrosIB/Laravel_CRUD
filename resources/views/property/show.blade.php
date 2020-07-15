@extends('property.master')

@section('contente')

<div class="container my-3">
    <?php
        if(!empty($property)){
            foreach($property as $prop){
                echo"<h2>Título do Imóvel: $prop->title</h2>
                <p>Descrição: $prop->description</p>
                <p>Valor de locação: R$ ".number_format($prop->retal_price, 2, ',', '.')."</p>
                <p>Valor de compra: R$ ".number_format($prop->sale_price, 2, ',', '.')."</p>";
            }
        }
    ?>
</div>
@endsection
