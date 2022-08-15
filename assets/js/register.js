$(document).ready(function(){
  //background slides
  console.log("Document is ready");
  $('#slides').superslides({
    animation: 'fade',
    play: 5000,
    pagination: false
  });
  $("#hideLogin").click(function(){
    console.log("login was pressed");
    $("#loginForm").hide();
    $("#registerForm").show();
  });
  $("#hideRegister").click(function(){
    console.log("register was pressed");
    $("#loginForm").show();
    $("#registerForm").hide();
  });
});
