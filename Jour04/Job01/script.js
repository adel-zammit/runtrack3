$(document).ready(function(){
	$("#button").click(function(){

       $.ajax({
         type: "GET",
         url: "expression.txt",
         error:function(msg){
                  alert( "Error !: ");
                  },
         success:function(data){
                  $("#test").remove();
                  $("#site").append('<p id="test"></p>');
                  $("#test").text(data);
                  
                  }
         });

  });
});