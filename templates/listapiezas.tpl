<!--<ul>
  {foreach from=$piezas  item=pieza}
  <li>
      {$pieza['codigo']}
  </li>
  {/foreach}
</ul>-->

<div class="row">
	{foreach from=$piezas  item=pieza}
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>{$pieza['codigo']}</h3>
        <p>{$pieza['id_campania']}</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
   {/foreach}
</div>