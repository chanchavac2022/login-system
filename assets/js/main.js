$(document).on("submit", "form.js-register", function(event) {
  event.preventDefault();

  var form = $(this);
  var dataObj = {
    email : $("input[type='email']", form).val(),
    password : $("input[type='password']", form).val()
  }
  var error = $(".js-error", form);
  // console.log(data);
  if(dataObj.email.length < 8){
    error.text("Email must be at least 8 characters long").show();
    return false;
  }
  if(dataObj.password.length < 10){
    error.text("Password must be at least 10 characters long").show();
    return false;
  }

  error.hide();

  $.ajax({
    type: 'POST',
    url: 'ajax/register.php',
    data: dataObj,
    dataType: 'json',
    async: true
  })
  .done(function ajaxDone(data){
    console.log(data);
    if (data.redirect !== undefined){
      window.location = data.redirect;
    }
  })
  .fail(function ajaxFailed(e){
    console.log(e);
  })
  .always(function ajaxAlwaysDoThis(data){
    console.log('Always');
  })
  // return false;
	return false;
});