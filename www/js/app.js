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
                   function imagen(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/grafico.php",
                               data: "imge",
                               success: function(data) {
                                    $('#imge').html(data);
                                }
                           });
                    }
                     function comparar1(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/comparar.php",
                               data: "compara",
                               success: function(data) {
                                    $('#compara').html(data);
                                }
                           });
                    }
                comparar1()
                imagen();
                Hora();
                Lista();

            });

