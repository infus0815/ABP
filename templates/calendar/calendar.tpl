{include file='common/header.tpl'}


<div id="datepicker"></div>

<script>
    var disponibilidade = {$disponibilidade|json_encode};
    var username = '{$USERNAME}';
</script>

<table id="equipas">
    <tbody>
    </tbody>

</table>

<script src="../../javascript/calendar.js"></script>

<div id="buttondiv">

</div>

<div class="checkbox">
  <label class="checkbox-inline"><input checked type="checkbox" value="">Manhã</label>
  <label class="checkbox-inline"><input type="checkbox" value="">Organizador</label>
</div>

<div class="checkbox">
  <label class="checkbox-inline"><input checked type="checkbox" value="">Tarde</label>
  <label class="checkbox-inline"><input type="checkbox" value="">Organizador</label>
</div>


<div>
    <a href="{$BASE_URL}actions/pdf/generatePDF.php" class="btn btn-info" role="button"  target="_blank">Link Button</a>
</div>


{include file='common/footer.tpl'}