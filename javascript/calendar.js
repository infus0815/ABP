
var confirmacoes_datas = [];


$(document).ready(function () {

    generatePicker("2016-05-10");
    
});


function generatePicker(date) {

    confirmacoes_datas = getDateArray(confirmacoes);
    $('#datepicker').datepicker(
        {
            dateFormat: "yy-mm-dd",
            beforeShowDay: setStyles,
            onSelect: setEquipas
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

function getDateArray(confirmacoes) {
    var arr = [];

    for (var x in confirmacoes) {
        if($.inArray(confirmacoes[x].confirmacao_data,arr) == -1)
            arr.push(confirmacoes[x].confirmacao_data);
    }

    return arr;
}

function getEquipaData(date) {
    var arr = [];
    for (var x in confirmacoes) {
        if(confirmacoes[x].confirmacao_data == date)
            arr.push(confirmacoes[x].username);
    }

    return arr;

}

function getEquipaNomeData(date) {
    var arr = [];
    for (var x in confirmacoes) {
        if(confirmacoes[x].confirmacao_data == date)
            arr.push(confirmacoes[x].nome);
    }

    return arr;

}

function setEquipas(date,inst) {

    var date1 = new Date(date);

    var fdate = $.datepicker.formatDate("yy-mm-dd",date1);
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
            username: username,
            data: fdate
        },
        function(data){
            confirmacoes = $.parseJSON(data);
            generatePicker(fdate);

        });
}

function removeEquipa(){

    var currentDate = $('#datepicker').datepicker('getDate');
    var fdate = $.datepicker.formatDate("yy-mm-dd",currentDate);


    $.post(BASE_URL + "api/calendar/removeEquipa.php",
        {
            username: username,
            data: fdate
        },
        function(data){
            confirmacoes = $.parseJSON(data);
            generatePicker(fdate);
        });
}

