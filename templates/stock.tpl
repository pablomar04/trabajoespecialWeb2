<h1 class="page-header">Listado de piezas</h1>

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Codigo</th>
        <th>Descripcion</th>
        <th>Campaña</th>
        <th>Cantidad</th>
        <th></th>

      </tr>
    </thead>
    <tbody>
        {foreach from=$piezas  item=pieza}
        <tr>
          <td>{$pieza['codigo_pieza']}</td>
          <td>{$pieza['descripcion']}</td>
          <td>{$pieza['codigo_campania']}</td>
          <td>{$pieza['cantidad']}</td>
          <td><a href="index.php?action=ver_pieza&id_pieza={$pieza['id']}"><i class="fa fa-info fa-2x" aria-hidden="true"></i></a></td>               
        </tr>
        {/foreach}
    </tbody>
  </table>
</div>