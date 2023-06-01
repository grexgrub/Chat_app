$(document).ready(function(){




  $('.more').click(() => {
    if ($('.popup')[0].style.display == 'flex'){
      $('.popup')[0].style.display = 'none'
    } else {
      $('.popup')[0].style.display = 'flex'
    }
  })  



  $('.PPteman').click(function (){
    const data = $(this).data('id');     
    console.log('click')
    $.ajax({
      'url' : 'http://192.168.1.102/Home/friend',
      'data' : {data : data},
      'method' : 'post',
      'dataType' : 'json',
      'success' : function(data){
        console.log(data);
        $('#ppmodalteman').attr("src","http://192.168.1.102/img/avatar/"+ data[0].photoProfile +"");
        $('#exampleModalLabel').html(data[0].name);
      }    
    })
  })
  


  $('#PPMU').change(function (){
    const sampul = document.querySelector('#PPMU');
    const pp = new FileReader();
    console.log(sampul);
    pp.readAsDataURL(sampul.files[0]);
    pp.onload = function(e){
      $('.me').attr('src',e.target.result);
    }
  })





});

