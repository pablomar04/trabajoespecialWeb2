$(document).ready(function(){

$("#home").click(function(){
      $.ajax({
        type:"GET",
        cache:false,
        url:"index.php?action=home",
        datatype:"html",
        success:function(data){
          
          $('#contenedor').html(data);

        },
        error: function(){
          $('#contenedor').html("<p>Sin conexión. Intente más tarde.</p>");
        }
    });
      event.preventDefault();
});

$("#stock").click(function(){
      $.ajax({
        type:"GET",
        cache:false,
        url:"index.php?action=stock",
        datatype:"html",
        success:function(data){
          
          $('#contenedor').html(data);

        },
        error: function(){
          $('#contenedor').html("<p>Sin conexión. Intente más tarde.</p>");
        }
    });
      event.preventDefault();
});



});