$( document ).ready(function() {
                    var $server;
                    $server = 'http://localhost:8080/weatherApp/www/';
  
                  
                   function Lista(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/conecta.php",
                               data: "hola",
                               success: function(data) {
                                    $('#hola').html(data);
                                }
                           });
                    }

                 Lista();

            });
