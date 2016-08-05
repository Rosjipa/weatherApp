$( document ).ready(function() {
                    var $server;
                    $server = 'http://localhost:1280/xampp/weatherApp/www/';
                           function Lista(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/conecta.php",
                               data: "listaclima",
                               success: function(data) {
                                    $('listaclima').html(data);
                                }
                           });
                    }

                 Lista();

            });
