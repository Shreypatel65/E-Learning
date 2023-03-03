function check(){
    rollno = $("#rollno").val();
    if (!rollno){
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
                const alert = (message, type) => {
                    const wrapper = document.createElement('div')
                    wrapper.innerHTML = [
                        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                        `   <div>${message}</div>`,
                        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                        '</div>'
                    ].join('')

                    alertPlaceholder.append(wrapper)
                }
                alert('Fill all the fields', 'danger')
    }
    else if (isNaN(rollno)){
        window.alert("Enter Integer");
    }
    else{

    $.ajax({
        type: "POST",
        url: "rollcheck.php",
        data: { rollno: rollno },
        success: function (response) {
            if (response == "1") {
                window.location.href = "./insert.php";
            }
            else {
                const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
                const alert = (message, type) => {
                    const wrapper = document.createElement('div')
                    wrapper.innerHTML = [
                        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                        `   <div>${message}</div>`,
                        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                        '</div>'
                    ].join('')

                    alertPlaceholder.append(wrapper)
                }
                alert('Something Went Wrong!!', 'danger')
                window.alert(response);
            }
        }
    });
}
$(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert-dismissible").alert('close');
});
}