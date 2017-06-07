$(document).ready(function () {
    $("#but1").click(function () {
        if (!$("input[name='radios']:checked").val()) {
            $("#errortext").show();
            return false;
        }
        else {
            $("#errortext").hide();
            $("#1").hide();
            $("#2").show();
            $('input[name="radios"]').prop('checked', false);
            return false;
        }
    });
    $("#but2").click(function () {
        if (!$("input[name='radios']:checked").val()) {
            $("#errortext").show();
            return false;
        }
        else {
            $("#errortext").hide();
            $("#2").hide();
            $("#3").show();
            $('input[name="radios"]').prop('checked', false);
            return false;
        }
    });
    $("#but3").click(function () {
        if (!$("input[name='radios']:checked").val()) {
            $("#errortext").show();
            return false;
        }
        else {
            $("#errortext").hide();
            $("#3").hide();
            $("#4").show();
            $('input[name="radios"]').prop('checked', false);
            return false;
        }
    });

    //new logic
    $("#but4").click(function () {
        if (!$("input[name='radios']:checked").val()) {
            $("#errortext").show();
            return false;
        }
        else {
            $("#errortext").hide();
            $("#4").hide();
            if ($("#4a").prop("checked")) {
                $("#5").show();
                $("#multiQuestion").show();
                $('input[name="radios"]').prop('checked', false);
            }
            else if ($("#4b").prop("checked")) {
                $("#6").show();
                $("#multiQuestion").show();
                $('input[name="radios"]').prop('checked', false);
            }
            else if ($("#4e").prop("checked")) {
                $("#7").show();
                $("#multiQuestion").show();
                $('input[name="radios"]').prop('checked', false);
            }
            else if ($("#4f").prop("checked")) {
                $("#7").show();
                $("#multiQuestion").show();
                $('input[name="radios"]').prop('checked', false);
            }
            else {
                $("#8").show();
                $('input[name="radios"]').prop('checked', false);
            }
            return false;
        }
    });

    $("#but7").click(function () {
        if (!$("input[name='radios']:checked").val()) {
            $("#errortext").show();
            return false;
        }
        else {
            $("#errortext").hide();
            $("#multiQuestion").hide();
            $("#5").hide();
            $("#6").hide();
            $("#7").hide();
            $("#8").show();
            $('input[name="radios"]').prop('checked', false);
            return false;
        }
    });
    $("#but8").click(function () {
        if (!$("input[name='radios']:checked").val()) {
            $("#errortext").show();
            return false;
        }
        else {
            $("#errortext").hide();
            $("#8").hide();
            $("#9").show();
            $('input[name="radios"]').prop('checked', false);
            return false;
        }
    });
    $("#but9").click(function () {
        if (!$("input[name='radios']:checked").val()) {
            $("#errortext").show();
            return false;
        }
        else {
            $("#errortext").hide();
            $("#9").hide();
            $("#10").show();
            $('input[name="radios"]').prop('checked', false);
            return false;
        }
    });
    $("#but10").click(function () {
        if (!$("input[name='radios']:checked").val()) {
            $("#errortext").show();
            return false;
        }
        else {
            $("#errortext").hide();
            $("#10").hide();
            $("#11").show();
            $('input[name="radios"]').prop('checked', false);
            return false;
        }
    });
    $("#but11").click(function () {
        if (!$("input[name='radios']:checked").val()) {
            $("#errortext").show();
            return false;
        }
        else {
            $("#errortext").hide();
            $("#11").hide();
            $("#intro").hide();
            $("#result").show();
            return false;
        }
    });
});