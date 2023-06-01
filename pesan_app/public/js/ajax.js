$(document).ready(function (){
 
  setInterval(() => {
    realtimechat();
  }, 5000);
 
  function realtimechat(){
    
    $.ajax({
      
      'url': 'http://192.168.1.102/Home/realtimePesan',
      'data': {from : $('#sender_username').val(),to:$('#getter_username').val()},
      'method': 'post',
      'success': function(data){
        $('#container_pesan').html(data);
      }



      })



  }

});
