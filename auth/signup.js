function submitForm() {
  var sname = $("#typeNameX").val();
  var rollno = $("#typeRollX").val();
  var branch = $("#typeBranchX").val();
  var username = $("#typeEmailX").val();
  var password = $("#typePasswordX").val();
  if(!sname || !rollno || !branch || !username || !password){
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
        alert('Fill all fields!!', 'danger')
  }
  pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.{8,})/;
  if(!pattern.test(password)) {
    const alertPlaceholder = document.getElementById('passwordalert')
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
        alert('Password not strong enough!!', 'danger')
  }
  else{
  $.ajax({
    type: "POST",
    url: "signup.php",
    data: { sname: sname, rollno: rollno, branch: branch, username: username, password: password },
    success: function (response) {
      if (response == "1") {
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        const alert = (message,type) => {
          const wrapper = document.createElement('div')
          wrapper.innerHTML = [
            `<div class="alert alert-${type}" role="alert">`,
            `   <div>${message}</div>`,
            '</div>'
          ].join('')

          alertPlaceholder.append(wrapper)
        }
        alert('Registration successful. Click here to go to<br> <a href="/auth/loginpage.php" class="alert-link">Login page</a>','success')
      }
      else if (response == "0") {
        const alertPlaceholder = document.getElementById('rollnoalert')
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
        alert('Roll No already registerd!!', 'danger')
        $(".alert-dismissible").fadeTo(3000, 500).slideUp(500, function(){
          $(".alert-dismissible").alert('close');
        });
      }
      else if (response == "2") {
        const alertPlaceholder = document.getElementById('useralert')
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
        alert('Username is already taken!!', 'danger')
        $(".alert-dismissible").fadeTo(3000, 500).slideUp(500, function(){
          $(".alert-dismissible").alert('close');
        });
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
        alert('Uxpected Error:( Please try again later.', 'danger')
      }
    }
  });
}
$(".alert-dismissible").fadeTo(3000, 500).slideUp(500, function(){
  $(".alert-dismissible").alert('close');
});
}

document.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    submitForm();
  }
});