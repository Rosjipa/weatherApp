$( document ).ready(function() {
                    var $server;
                    $server = 'http://climaunajma.esy.es';
                    function Lista(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/conecta.php",
                               data: "listaclima",
                               success: function(data) {
                                    $('#listaclima').html(data);
                                }
                           });
                    }

                 Lista();
	             function hora(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/hora.php",
                               data: "horaclima",
                               success: function(data) {
                                    $('#horaclima').html(data);
                                }
                           });
                    }

                 hora();
		             function AgregandoImg(){
                           $.ajax({

                               type: "get",
                               dataType  : 'html',
                               url: $server+"/CambiarFondo.php",
                               data: "CambiarFondo",
                               success: function(data) {
                                    $('#CambiarFondo').html(data);
                                }
                           });
                    }

                 AgregandoImg();

            });
