/*
var status = "hide";
function loginshow(){
if(status == "hide"){
  document.getElementById('popup_login').style.visibility="visible"
  status = "visible";
}
else if(status == "visible"){
  document.getElementById('popup_login').style.visibility="hidden";
  status = "hide";
  }
}
*/

function loginsubmit(){
  var username = 'rajatkuthiala';
  var password = 'password';
  var inputusername = document.getElementById('loginForm').elements['username'].value;
  var inputpassword = document.getElementById('loginForm').elements['password'].value;
  var errorMessage = document.getElementById('loginMessage');
  if(username==inputusername && password==inputpassword){
    errorMessage.innerHTML = 'Login Successful';}
  else{
    errorMessage.innerHTML = 'Invalid Credentials';
    }
}
/*
$(function(){
  $('.loginsubmit').on('click',function()){
    var username = 'rajatkuthiala';
    var password = 'password';
    var inputusername = document.getElementById('login').elements['username'].value;
    var inputpassword = document.getElementById('login').elements['password'].value;
    if(username==inputusername && password==inputpassword){
      window.alert("Correct Information");}
    else{
      window.alert("Incorrect Credentials.");
      }
  }
})
*/
/*
* This is the plugin
*/
(function(a){a.createModal=function(b){defaults={title:"",message:"Your Message Goes Here!",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style="max-height: 420px;overflow-y: auto;"':"";html='<div class="modal fade" id="myModal">';html+='<div class="modal-dialog">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);

/*
* Here is how you use it
*/
$(function(){
    $('.view-pdf').on('click',function(){
        var pdf_link = $(this).attr('href');
        var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
        $.createModal({
        title:'Resume',
        message: iframe,
        closeButton:false,
        scrollable:false
        });
        return false;
    });
})




function dologin()
{
 var user=$("#usernameInput").val();
 var pass=$("#passwordInput").val();
 if(user!="" && pass!="")
 {
  $.ajax
  ({
  type:'post',
  url:'login.php',
  data:{
   usernameInput:user,
   passwordInput:pass
  },
  success:function(response) {
    if (response==="Success"){
      location.reload();
    }
    else {
    $('#loginMessage').text(response);
    }
  }
  });
 }
 else
{
 $('#loginMessage').text("Please Type Username and Password");
}

return false;
}

function do_signUp(){

  var user=$("#username_signup").val();
  var pass=$("#password_signup").val();
  var first=$("#firstname_signup").val();
  var last=$("#lastName_signup").val();
  var email=$("#email_signup").val();
  if(user!="" && pass!="")
  {
   $.ajax
   ({
   type:'post',
   url:'signup.php',
   data:{
    username:user,
    pwd:pass,
    first: first,
    last: last,
    email: email
   },
   success:function(response) {
     if(response==="Success"){
     $('#signUpMessage').text("Signup Successful, close this window and login.")
   }
   else {
     $('#signUpMessage').text(response);
   }
   }
   });
  }
  else
 {
  $('#signUpMessage').text("Fill all fields or check password");
 }

 return false;
}

function logout(){

}

function readPDF(){
  var user=$("#usernameInput").val();
  var filename=user+'.pdf';
  {
   $.ajax
   ({
   type:'post',
   url:'viewfile.php',
   data:{
    file:filename,
   },
   success:function(response) {
     window.alert(response);

   }
   });
  }

}


//Login and Signup box
$(window, document, undefined).ready(function() {

  $('.input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  });


$('#tab1').on('click' , function(){
    $('#tab1').addClass('login-shadow');
   $('#tab2').removeClass('signup-shadow');
});

$('#tab2').on('click' , function(){
    $('#tab2').addClass('signup-shadow');
   $('#tab1').removeClass('login-shadow');


});
