{include file='common/header.tpl'}



<script>

  var disponibilidade = {$disponibilidade|json_encode};
  var username = '{$USERNAME}';
  var escalaoSelecionado = '{$escalaoSelecionado}';
  var equipaEscalao_id;
  var equipaEscaloes = {$equipaEscaloes|json_encode};

  for(var x in equipaEscaloes) {
    
    if(equipaEscaloes[x]['escalao_id'] == escalaoSelecionado){
      equipaEscalao_id = equipaEscaloes[x]['equipaescalao_id'];
    }

  }
</script>

<script src="../../javascript/calendar.js"></script>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div id="datepicker"></div>
    </div>

    <!-- <div>
      <a href="{$BASE_URL}actions/pdf/generatePDF.php" class="btn btn-info" role="button"  target="_blank">Link Button</a>
    </div>
  -->

<!--         <table id="equipas">
      <tbody>
      </tbody>
    </table> -->

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
            <div class="checkbox">
              <label><input type="checkbox" value="">Participar</label>
              <label><input type="checkbox" value="">Organizar</label>
            </div>
            <div id="buttondiv_manha"></div>  
          </form>
        </div>
        <div class="col-sm-6 panel">
          <h4>Tarde (14h30 - 17h30)</h4>
          <ul id="equipas_tarde" class="list-group">
          </ul>
          <form role="form" id="disp_tarde">
            <div class="checkbox">
              <label><input type="checkbox" value="">Participar</label>
              <label><input type="checkbox" value="">Organizar</label>
            </div>
            <div id="buttondiv_tarde"></div> 
          </form>
        </div>
      </div>
      
    </div>

    <!-- <div class="col-sm-3">
      <div class="checkbox">
        <label class="checkbox-inline"><input checked type="checkbox" value="">Manhã</label>
        <label class="checkbox-inline"><input type="checkbox" value="">Organizador</label>
      </div>

      <div class="checkbox">
        <label class="checkbox-inline"><input checked type="checkbox" value="">Tarde</label>
        <label class="checkbox-inline"><input type="checkbox" value="">Organizador</label>
      </div>

      <div id="buttondiv"></div>
    </div> -->

  </div>
</div>





{include file='common/footer.tpl'}