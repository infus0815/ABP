
var confirmacoes_datas = [];


$(document).ready(function () {

    generatePicker(new Date());

    $("#nav_calendar").addClass("active");
    $("#escalao_" + escalaoSelecionado).addClass("active");

});


function generatePicker(date) {

    confirmacoes_datas = getDateArray(disponibilidade);
    $('#datepicker').datepicker(
        {
            dateFormat: "yy-mm-dd",
            beforeShowDay: setStyles,
            onSelect: setEquipas,
            minDate: date
        }
    ).datepicker("setDate",date);

    setEquipas(date);


}

function setStyles(date) {

    var fdate = $.datepicker.formatDate("yy-mm-dd",date);
    var equipas_data = getEquipaDataCSS(fdate);
    if($.inArray(fdate,confirmacoes_datas) >= 0)
        if($.inArray(equipaEscalao_id,equipas_data) >= 0) {
            return [true, "equipa-exists"];
        }
        else
            return [true,"mark-exists"];
    return [true,""];

}

function getDateArray(disponibilidade) {
    var arr = [];

    for (var x in disponibilidade) {
        if($.inArray(disponibilidade[x].data,arr) == -1)
            arr.push(disponibilidade[x].data);
    }

    return arr;
}

function getEquipaData(date, horario) {
    var arr = [];
    for (var x in disponibilidade) {
        if(disponibilidade[x].data == date && disponibilidade[x].horario == horario)
            arr.push(disponibilidade[x].equipaescalao_id);
    }

    return arr;
}


function getEquipaDataCSS(date) {
    var arr = [];
    for (var x in disponibilidade) {
        if(disponibilidade[x].data == date)
            arr.push(disponibilidade[x].equipaescalao_id);
    }

    return arr;
}


function updateEquipasList(data, horario) {

    var equipas_list = [];

    for (var x in disponibilidade) {
        if(disponibilidade[x].data == data && disponibilidade[x].horario == horario)
            equipas_list.push(disponibilidade[x]);
    }

    console.log(equipas_list);

    var equipas_list_html = "";

    if(equipas_list.length == 0)
        equipas_list_html = '<li class="list-group-item"> </li>';

    for(var x in equipas_list) {

        var equipa_nome = equipas_list[x].nome + " " + equipas_list[x].equipaescalao_nome ;
        if(equipas_list[x].organizador)
            equipa_nome += '<span style="color:gray"> (organizador)</span>';


        if(equipaEscalao_id == equipas_list[x].equipaescalao_id)
            equipas_list_html = '<li class="list-group-item"><span style="color:green">' + equipa_nome + "</span></li>" + equipas_list_html;
        else
            equipas_list_html += '<li class="list-group-item">' + equipa_nome + "</li>";
    }

    // <li class="list-group-item">New <span class="badge">12</span></li>

    if(horario == 0)
        $('#equipas_manha').html(equipas_list_html);
    else if(horario == 1)
        $('#equipas_tarde').html(equipas_list_html);

}

function setEquipas(data, inst) {

    var date = new Date(data);
    var fdate = $.datepicker.formatDate("yy-mm-dd", date);
    
    updateEquipasList(fdate, 0);
    updateEquipasList(fdate, 1);

    setButton(fdate);

    $("#disp_manha input:first").prop("checked", false);
    $("#disp_tarde input:first").prop("checked", false);

    $("#disp_manha input:first").click(function() {

      dispEvent($("#disp_manha"));
    });

    $("#disp_tarde input:first").click(function() {

      dispEvent($("#disp_tarde"));
    });

    dispEvent($("#disp_manha"));
    dispEvent($("#disp_tarde"));

    $("#data_evento").html("Disponibilidade (" + fdate + ")");
}


/*BUTOES*/



var submitButton_manha = '<button type="button" class="btn btn-success" onclick="registaEquipa(0)">Registar Equipa</button>';
var removeButton_manha = '<button type="button" class="btn btn-danger" onclick="removeEquipa(0)">Remover Equipa</button>';
var submitButton_tarde = '<button type="button" class="btn btn-success" onclick="registaEquipa(1)">Registar Equipa</button>';
var removeButton_tarde = '<button type="button" class="btn btn-danger" onclick="removeEquipa(1)">Remover Equipa</button>';

function setButton(date) {
    if(username != '') {
        var equipas_manha = getEquipaData(date, 0);
        var equipas_tarde = getEquipaData(date, 1);

        console.log(equipas_manha);
        console.log(equipas_tarde);
        console.log(disponibilidade);


        if ($.inArray(equipaEscalao_id, equipas_manha) >= 0) {
            $('#buttondiv_manha').html(removeButton_manha);
            $('#disp_manha label').hide();
        }
        else{
            $('#buttondiv_manha').html(submitButton_manha);
            $('#disp_manha label').show();
        }

        if ($.inArray(equipaEscalao_id, equipas_tarde) >= 0) {
            $('#buttondiv_tarde').html(removeButton_tarde);
            $('#disp_tarde label').hide();
        }
        else{
            $('#buttondiv_tarde').html(submitButton_tarde);
            $('#disp_tarde label').show();
        }
    }
    else{
        $('#buttondiv_manha').html('');
        $('#buttondiv_tarde').html('');
    }

}

function registaEquipa(horario){

    var currentDate = $('#datepicker').datepicker('getDate');
    var fdate = $.datepicker.formatDate("yy-mm-dd",currentDate);
    var organizador;

    console.log("ola");

    if(horario == 0) {

        organizador = $("#disp_manha input:last").prop("checked")? 1 : 0;

    }
    else if(horario == 1){

        organizador = $("#disp_tarde input:last").prop("checked")? 1 : 0;
    }

    console.log(organizador);


    $.post(BASE_URL + "api/calendar/registaEquipa.php",
        {
            equipaEscalao_id: equipaEscalao_id,
            data: fdate,
            horario: horario,
            organizador: organizador,
            escalao_id: escalaoSelecionado

        },
        function(data){
            disponibilidade = $.parseJSON(data);
            generatePicker(fdate);

        });
}

function removeEquipa(horario){

    var currentDate = $('#datepicker').datepicker('getDate');
    var fdate = $.datepicker.formatDate("yy-mm-dd",currentDate);


    $.post(BASE_URL + "api/calendar/removeEquipa.php",
        {
            equipaEscalao_id: equipaEscalao_id,
            data: fdate,
            horario: horario,
            escalao_id: escalaoSelecionado
        },
        function(data){
            disponibilidade = $.parseJSON(data);
            generatePicker(fdate);
        });
}


//

function dispEvent(disp_selector) {
      if($("input:first", disp_selector).prop("checked")) {
        $("input:last", disp_selector).prop("disabled", false);
        $("div button.btn-success", disp_selector).prop("disabled", false);
      }
      else {
        $("input:last", disp_selector).prop("disabled", true);
        $("div button.btn-success", disp_selector).prop("disabled", true);
      }
}

