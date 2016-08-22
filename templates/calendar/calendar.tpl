{include file='common/header.tpl'}

<script>

  var disponibilidade = {$disponibilidade|json_encode};
  var username = '{$USERNAME}';
  var escalaoSelecionado = '{$escalaoSelecionado}';
  var equipaEscalao_id;
  var equipaEscaloes = {$equipaEscaloes|json_encode};

  for(var x in equipaEscaloes) {
    
    if(equipaEscaloes[x]['escalao_id'] == escalaoSelecionado){
      console.log(equipaEscaloes[x]['escalao_id']);
      equipaEscalao_id = equipaEscaloes[x]['equipaescalao_id'];
    }

  }

  $(document).ready(function(){

    function dispEvent(disp_selector) {
      if($("input:first", disp_selector).prop("checked"))
        $("input:last", disp_selector).prop("disabled", false);
      else
        $("input:last", disp_selector).prop("disabled", true);
    }

    $("#disp_manha input:first").click(function() {

      dispEvent($("#disp_manha"));
    });

    $("#disp_tarde input:first").click(function() {

      dispEvent($("#disp_tarde"));
    });

    dispEvent($("#disp_manha"));
    dispEvent($("#disp_tarde"));

    $("#nav_calendar").addClass("active");
    $("#escalao_{$equipaSelecionada}").addClass("active");

  });


</script>

<script src="../../javascript/calendar.js"></script>

<div class="panel panel-default">
  <div class="panel-heading">
    <ul class="nav nav-pills">
      {foreach $equipaEscaloes as $equipaEscalao}
      <li id="escalao_{$equipaEscalao['escalao_id']}">
        <a href="{$BASE_URL}pages/calendar/calendar.php?escalao_id={$equipaEscalao['escalao_id']}">Mini {$equipaEscalao["nome"]}</a>
      </li>
      {/foreach}
    </ul>
  </div>
  <div class="panel-body">
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
              <h3>Data do torneio</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 panel">
              <h4>Manhã (xxhxx - xxhxx)</h4>
              <div>Equipa1</div>
              <div>Equipa2</div>
              <form role="form">
                <div class="checkbox" id="disp_manha">
                  <label><input type="checkbox" value="">Participar</label>
                  <label><input type="checkbox" value="">Organizar</label>
                </div>
              </form>
            </div>
            <div class="col-sm-6 panel">
              <h4>Tarde (xxhxx - xxhxx)</h4>
              <div>Equipa3</div>
              <div>Equipa4</div>
              <form role="form">
                <div class="checkbox" id="disp_tarde">
                  <label><input type="checkbox" value="">Participar</label>
                  <label><input type="checkbox" value="">Organizar</label>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div id="buttondiv"></div>
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
  </div>
</div>




{include file='common/footer.tpl'}