{include file="header.tpl"}

<h1>Campaña {$pieza[0].codigo_campania}</h1>
<h2>{$pieza[0].titulo}</h2>
<h3>Stock:{$pieza[0].cantidad}</h3>
<div class="row">
	{foreach from=$pieza item=imagen}
	<div class="col-sm-6 col-md-4">
		
			<div class="thumbnail">
				<img src="{$imagen['path']}" alt="">
			</div>
	</div>
	{/foreach}
</div>
{include file="footer.tpl"}