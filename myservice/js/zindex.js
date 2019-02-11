$(document).ready(function(){


var signUpBtn=$('#signUpBtn');
signUp=$('#signUp');
loginForm=$('#loginForm');
introSite=$('#introSite');
signUpBtn.click(function(){
  loginForm.slideUp();
  signUp.slideDown();
  introSite.slideUp();
});



var goToLoginBtn=$('#goToLoginBtn');
goToLoginBtn.click(function(){
  loginForm.slideDown();
  signUp.slideUp();
  introSite.slideDown();
});


var genderWoman=$('#gMW');
var genderMan=$('#gMM');
genderWoman.click(function(){
  genderBgInit();
  $(this).css('background','#64cbf9');
  $(this).css('color','#fff');
});
genderMan.click(function(){
  genderBgInit();
  $(this).css('background','#64cbf9');
  $(this).css('color','#fff');
});
function genderBgInit(){
  genderMan.css('background','#fff')
  genderWoman.css('background','#fff')
  genderMan.css('color','#000')
  genderWoman.css('color','#000')
}
toGoToShort=false;
$(window).resize(function(){
  if(window.innerWidth>=1200)
  {
    loginForm.slideDown();
    signUp.slideDown();
    introSite.slideDown();
    toGoToShort=true
  }else{
    if(toGoToShort==true){
      signUp.slideUp();
    }
  }
})










})
