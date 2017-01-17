{include file='common/header.tpl'}

<script>

    $("#admin").addClass("active");

</script>


<label for="txtDate">Date :</label>
<input type="date"/>

<div class="container">
    <div>
        <h3>Lista de Meses Desactivados</h3>
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
                <td>{$disabledMonth['month']}</td>
                <td>{$disabledMonth['year']}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>
