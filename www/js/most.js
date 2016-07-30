$( document ).ready(function() {
                    var $server;
                    $server = 'http://localhost:1280/xampp/weatherApp/www/';              
	             function hora(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/hora.php",
                               data: "fecha",
                               success: function(data) {
                                    $('#fecha').html(data);
                                }
                           });
                    }

                   function clima(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/clima.php",
                               data: "climaA",
                               success: function(data) {
                                    $('#climaA').html(data);
                                }
                           });
                    }
                  function climaR(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/climareporte.php",
                               data: "climaR",
                               success: function(data) {
                                    $('#climaR').html(data);
                                }
                           });
                    }
           function clima3(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/climaanterior.php",
                               data: "climaa3",
                               success: function(data) {
                                    $('#climaa3').html(data);
                                }
                           });
                    }
     function clima4(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/conecta1.php",
                               data: "yes",
                               success: function(data) {
                                    $('#yes').html(data);
                                }
                           });
                    }
    function reporte(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/ejemplo3.php",
                               data: "repor",
                               success: function(data) {
                                    $('#repor').html(data);
                                }
                           });
                    }
                 reporte()
                 clima4();
                 climaR();
                 clima3();
                 clima();
                 hora();

            });
