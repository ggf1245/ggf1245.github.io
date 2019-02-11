$(document).ready(function(){
  var meContent=$('#meContent');
  var mePostBtn=$('#mePostBtn');
  mePostBtn.click(function(){
    if(meContent.val()==''){
      alert('내용을 입력하세요.');
      meContent.focus();
      return false;
    }
  })
})
