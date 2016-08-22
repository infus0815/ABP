
var confirmacoes_datas = [];


$(document).ready(function () {

    generatePicker(new Date());
    
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
    var equipas_data = getEquipaData(fdate);
    if($.inArray(fdate,confirmacoes_datas) >= 0)
        if($.inArray(username,equipas_data) >= 0) {
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

function getEquipaData(date) {
    var arr = [];
    for (var x in disponibilidade) {
        if(disponibilidade[x].data == date)
            arr.push(disponibilidade[x].username);
    }

    return arr;

}

function getEquipaNomeData(data) {
    var arr = [];
    for (var x in disponibilidade) {
        if(disponibilidade[x].data == data)
            arr.push(disponibilidade[x].nome);
    }

    return arr;

}

function setEquipas(data,inst) {

    var date = new Date(data);

    var fdate = $.datepicker.formatDate("yy-mm-dd",date);
    var equipas_data = getEquipaNomeData(fdate);

    var trs = ""
    for(var x in equipas_data) {
        trs = trs + "<tr><td>" + equipas_data[x] + "</td></tr>";
    }

    $('#equipas > tbody').html(trs);

    setButton(fdate);
}


/*BUTOES*/


var submitButton = '<button type="button" class="btn btn-success" onclick="registaEquipa()">Registar Equipa</button>';
var removeButton = '<button type="button" class="btn btn-danger" onclick="removeEquipa()">Remover Registo</button>';

function setButton(date) {
    if(username != '') {
        var equipas = getEquipaData(date);
        if ($.inArray(username, equipas) >= 0) {
            $('#buttondiv').html(removeButton);
        }
        else{
            $('#buttondiv').html(submitButton);
        }
    }
    else{
        $('#buttondiv').html('');
    }

}

function registaEquipa(){

    var currentDate = $('#datepicker').datepicker('getDate');
    var fdate = $.datepicker.formatDate("yy-mm-dd",currentDate);


    $.post(BASE_URL + "api/calendar/registaEquipa.php",
        {
            equipaEscalao_id: equipaEscalao_id,
            data: fdate,
            escalao_id: escalaoSelecionado
        },
        function(data){
            disponibilidade = $.parseJSON(data);
            generatePicker(fdate);

        });
}

function removeEquipa(){

    var currentDate = $('#datepicker').datepicker('getDate');
    var fdate = $.datepicker.formatDate("yy-mm-dd",currentDate);


    $.post(BASE_URL + "api/calendar/removeEquipa.php",
        {
            equipaEscalao_id: equipaEscalao_id,
            data: fdate,
            escalao_id: escalaoSelecionado
        },
        function(data){
            disponibilidade = $.parseJSON(data);
            generatePicker(fdate);
        });
}

