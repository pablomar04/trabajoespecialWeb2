{include file="header.tpl"}

    <div class="container-fluid" id="principal">

<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="images/10D8.jpg" alt="">
    </a>
  </div>
    <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="images/10D8.jpg" alt="">
    </a>
  </div>
    <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="images/10D8.jpg" alt="">
    </a>
  </div>
    <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="images/10D8.jpg" alt="">
    </a>
  </div>
</div>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/10D8.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/10D8.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/10D8.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>


      <div class="row">
        <!--<div class="col-sm-3 col-md-2 sidebar">
          
            <ul class="nav nav-sidebar">
              {foreach from=$camp  item=campania}
                <li id="li{$campania['id_campania']}"><a href="#">{$campania['codigo']}</a></li>
              {/foreach}
            </ul>
        </div>-->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
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
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  {foreach from=$piezas  item=pieza}
                  <tr>
                    <a href="" id="{$pieza['id']}">
                    <td>{$pieza['codigo']}</td>
                    <td>{$pieza['descripcion']}</td>
                    {foreach from=$camp item=campania}
                      {if $pieza['fk_id_campania'] eq $campania['id_campania'] }
                        <td>{$campania['codigo']}</td>
                      {/if}
                    {/foreach}
                    <td>{$pieza['cantidad']}</td>
                    <td><a href=""><i class="fa fa-plus-square-o fa-2x" aria-hidden="true"></a></i><a href=""><i class="fa fa-minus-square-o fa-2x" aria-hidden="true"></a></i></td>
                   <td><a href=""><i class="fa fa-info fa-2x" aria-hidden="true"></i></a></td>
                   <td><a href=""><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>
                   </a>
                  </tr>
                  {/foreach}
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

{include file="footer.tpl"}
