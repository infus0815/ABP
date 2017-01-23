{include file='common/header.tpl'}

<script>

    $("#admin").addClass("active");

    


    $(document).ready(function () {


        var date = new Date();
        var yearslector = $("div #year input:first");
        yearslector.attr("min", date.getFullYear());
        yearslector.attr("value", date.getFullYear());
        yearslector.attr("max", date.getFullYear() + 10);

       





    });


</script>

<div class="container">
    <div>
        <h3>Lista de Meses Bloqueados</h3>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Id da Desactivação</th>
                <th>Mes da Desactivação</th>
                <th>Ano da Desactivação</th>

            </tr>
        </thead>
        <tbody>
            {foreach $disabledMonths as $disabledMonth}
            <tr>
                <td>{$disabledMonth['disabledmonth_id']}</td>
                <td>{$listaMeses[$disabledMonth['month']]}</td>
                <td>{$disabledMonth['year']}</td>
                <td>
                    <span class="pull-right">
                                            <a class="btn btn-xs btn-danger" href="{$BASE_URL}actions/admin/delete_disablemonth.php?disablemonth_id={$disabledMonth['disabledmonth_id']}">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </a>
                    </span>
                <td>
            </tr>
            {/foreach}
        </tbody>
    </table>



    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-8 panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">Bloquear Mês</div>
                    <div class="panel-body">

                        <form action="{$BASE_URL}actions/admin/disablemonth.php" method="get" enctype="multipart/form-data">

                        <div class="row">
                            <div class="form-group col-md-6" >
                              <label for="sel1">Mês:</label>
                                <select class="form-control" id="sel1" name="month">
                                    <option value="0">Janeiro</option>
                                    <option value="1">Fevereiro</option>
                                    <option value="2">Março</option>
                                    <option value="3">Abril</option>
                                    <option value="4">Maio</option>
                                    <option value="5">Junho</option>
                                    <option value="6">Julho</option>
                                    <option value="7">Agosto</option>
                                    <option value="8">Setembro</option>
                                    <option value="9">Outubro</option>
                                    <option value="10">Novembro</option>
                                    <option value="11">Dezembro</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6" id = "year">
                                <label for="sel1">Ano:</label>
                                <input class="form-control" type="number" name="year">
                            </div>

                            </div>

                            <div class="row">

                                <div class="form-group col-md-2">
                                    <button class="btn btn-xs btn-success" type="submit">Confirmar</button>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
</div>







