@extends('property.master')

@section('contente')

<div class="container my-3">
  <h1>Listagem de Produtos</h1>


  <?php
  if(!empty($properties)){
      echo"<table class='table table-striped table-hover'>";
      echo"<thead class='bg-secondary text-white'>
              <th>Título</th>
              <th>Valor de Locação</th>
              <th>Valor de Compra</th>
              <th>Opções</th>
          </thead>";
      foreach($properties as $property){

          $linkReadMode = url('/imoveis/'.$property->name);
          $linkReadEditItem = url('/imoveis/editar/'.$property->name);
          $linkReadRemoveItem = url('/imoveis/remover/'.$property->name);

          echo"<tr>";
              echo"<td>{$property->title}</td>";
              echo"<td>R$ ".number_format($property->retal_price, 2, ',', '.')."</td>";
              echo"<td>R$ ".number_format($property->sale_price, 2, ',', '.')."</td>";
              echo"<td><a href='{$linkReadMode}'>Ver mais</a> | <a href='{$linkReadEditItem}'>Editar</a> | <a href='{$linkReadRemoveItem }'>Remover</a></td>";
          echo"</tr>";
      }
      echo"</table>";
  }
  ?>
</div>
@endsection

