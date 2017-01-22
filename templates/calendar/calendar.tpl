{include file='common/header.tpl'}

<script>

  var disponibilidade = {$disponibilidade|json_encode};
  var username = '{$USERNAME}';
  var escalaoSelecionado = '{$escalaoSelecionado}';
  var equipaEscalao_id = {$equipaescalao};
  var equipaEscaloes = {$equipaEscaloes|json_encode};
  var disabledmonths = {$disabledmonths|json_encode};

  // for(var x in equipaEscaloes) {
    
  //   if(equipaEscaloes[x]['escalao_id'] == escalaoSelecionado){
  //     equipaEscalao_id = equipaEscaloes[x]['equipaescalao_id'];
  //   }

  // }
</script>

<script src="../../javascript/calendar.js"></script>

<div class="container">
  <div class="row">
    <div class="col-sm-12" >
      <h2>Agenda para Mini
        {foreach $equipaEscaloes as $equipaEscalao}
        {if $equipaEscalao['equipaescalao_id'] == {$equipaescalao}}

        {$equipaEscalao['nome']} {$equipaEscalao['equipaescalao_nome']}

        {/if}
        {/foreach}
      </h2>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
<!--       <div class="row">
        <h3>Agenda</h3>
      </div> -->
      <div class="row" style="padding-top:20px">
        <div id="datepicker"></div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="row">
        <div class="col-sm-12">
          <h3 id="data_evento"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 panel">
          <h4>Manhã (09h00 - 12h30)</h4>
          <ul id="equipas_manha" class="list-group">
          </ul>
          <form role="form" id="disp_manha">
            {if $USERNAME != "admin"}
            <div class="checkbox">
              <label><input type="checkbox" value="">Participar</label>
              <label><input type="checkbox" value="">Organizar</label>
            </div>

            <div id="buttondiv_manha"></div>
            {/if}
          </form>
        </div>
        <div class="col-sm-6 panel">
          <h4>Tarde (14h30 - 17h30)</h4>
          <ul id="equipas_tarde" class="list-group">
          </ul>
          <form role="form" id="disp_tarde">
            {if $USERNAME != "admin"}
            <div class="checkbox">
              <label><input type="checkbox" value="">Participar</label>
              <label><input type="checkbox" value="">Organizar</label>
            </div>

            <div id="buttondiv_tarde"></div>
            {/if}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>





{include file='common/footer.tpl'}