// Marks Insert
function one() {
    rollno1 = $("#rollno1").val();
    t1fsd = $("#t1fsd").val();
    t1py = $("#t1py").val();
    t1de = $("#t1de").val();
    t1maths = $("#t1maths").val();
    t1etc = $("#t1etc").val();
    $.ajax({
        type: "POST",
        url: "upload1.php",
        data: { rollno1: rollno1, t1fsd: t1fsd, t1py: t1py, t1de: t1de, t1maths: t1maths, t1etc: t1etc },
        success: function (response) {
            if (response == "1") {
                window.alert("Update Successful");
            }
            else if(response == "2"){
                window.alert("Insert Successful");
            }
            else {
                window.alert("Something went wrong!!");
            }
        }
    });
}

function two() {
    rollno2 =   $("#rollno2").val();
    t2fsd =     $("#t2fsd").val();
    t2py =  $("#t2py").val();
    t2de =  $("#t2de").val();
    t2maths =   $("#t2maths").val();
    t2etc =     $("#t2etc").val();
    $.ajax({
        type: "POST",
        url: "upload2.php",
        data: { rollno2: rollno2, t2fsd: t2fsd, t2py: t2py, t2de: t2de, t2maths: t2maths, t2etc: t2etc },
        success: function (response) {
            if (response == "1") {
                window.alert("Update Successful");
            }
            else if(response == "2"){
                window.alert("Insert Successful");
            }
            else {
                window.alert("Something went wrong!!");
            }
        }
    });
}

function three() {
    rollno3 = $("#rollno3").val();
    t3fsd = $("#t3fsd").val();
    t3py = $("#t3py").val();
    t3de = $("#t3de").val();
    t3maths = $("#t3maths").val();
    t3etc = $("#t3etc").val();
    $.ajax({
        type: "POST",
        url: "upload3.php",
        data: { rollno3: rollno3, t3fsd: t3fsd, t3py: t3py, t3de: t3de, t3maths: t3maths, t3etc: t3etc },
        success: function (response) {
            if (response == "1") {
                window.alert("Update Successful");
            }
            else if(response == "2"){
                window.alert("Insert Successful");
            }
            else {
                window.alert("Something went wrong!!");
            }
        }
    });
}

function four() {
    rollno4 = $("#rollno4").val();
    t4fsd = $("#t4fsd").val();
    t4py = $("#t4py").val();
    t4de = $("#t4de").val();
    t4maths = $("#t4maths").val();
    t4etc = $("#t4etc").val();
    $.ajax({
        type: "POST",
        url: "upload4.php",
        data: { rollno4: rollno4, t4fsd: t4fsd, t4py: t4py, t4de: t4de, t4maths: t4maths, t4etc: t4etc },
        success: function (response) {
            if (response == "1") {
                window.alert("Update Successful");
            }
            else if(response == "2"){
                window.alert("Insert Successful");
            }
            else {
                window.alert("Something went wrong!!");
            }
        }
    });
    $(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-dismissible").alert('close');
    });
}