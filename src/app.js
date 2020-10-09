$(document).ready(function()  {

// chiamata ajax
$.ajax({

  "url": "http://localhost/php-ajax-dischi/src/partials/api.php",
  "method": "GET",
  "success": function(data){
    render(data);
  },
  "error": function(err){
    alert("errore");
  },
});
});
