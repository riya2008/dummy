
$(document).ready(function(){
     $("#page1").click(function(){
       // console.log("page 1 fun run");
         $("#para").load("page1.html");
    });
    $("#page2").click(function(){
          $("#para").load("page2.html");
     });
     $("#page3").click(function(){
        $("#para").load("page3.html?t="+ Math.random()); 
        // math.random is to clear the cache
   });
   $("#page4").click(function(){
    $("#para").load("page4.html");
});
});
