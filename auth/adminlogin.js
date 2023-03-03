function Login() {
    var username = $("#typeEmailX").val();
    var password = $("#typePasswordX").val();
    $.ajax({
      type: "POST",
      url: "/auth/adminlogin.php",
      data: { username: username, password: password },
      success: function (response) {
        console.log(response);
        if (response == "1") {
          window.location.href = "/dashboard/";
        }
        else if (response == "2") {
          window.location.href = "/admin/"
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
          alert('Invalid Username or Password!!', 'danger')
        }
      }
    });
  }
  
  document.addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
      Login();
    }
  });