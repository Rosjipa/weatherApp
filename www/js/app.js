$( document ).ready(function() {
                    var $server;
                    $server = 'http://localhost:1280/xampp/weatherApp/www';
                  
                   function Lista(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/conecta1.php",
                               data: "clima",
                               success: function(data) {
                                    $('#clima').html(data);
                                }
                           });
                    }
                 function Hora(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/hora.php",
                               data: "hora",
                               success: function(data) {
                                    $('#hora').html(data);
                                }
                           });
                    }
                 
                 Hora();
                 Lista();

            });

