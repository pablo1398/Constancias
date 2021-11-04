<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

 
    <link rel="stylesheet" href="/css/fuentes.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/index.css">
    
    <script>

        function recibe(){
			var usuario = $('#usuario').val();
			var contraseña = $('#contraseña').val();
			if (usuario != '' && contraseña != ''){
				$.ajax({
					url : './back/login.php',
					type : 'post',
					dataType : 'text',
					data : 'usuario='+usuario+'&contraseña='+contraseña,
					success : function(res){
						
						if(res > 0){
							alert("Usuario valido");
						}
					}, error: function(){
						alert('Error al conectar al sevidor...');
					}
				});
			}else{
                alert("Introdusca datos");
            }
		}

    </script>
      
</head>
    <body>
        <div class="container-12">
            <div class = "row">
                <div class = "divTitle titulo-header col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        </p>SISTEMA DE CONSTANCIAS DE NO QUEJA MÉDICA</p>
                </div>
                <div class = "divImg col-sm-6 col-md-8 col-lg-9 col-xl-9">
                    <div class="imgPrincipal">
                        <img   src="images/logo_camejal.png">
                    </div>
                </div>
            </div>
        </div>
        
  
    <div class="d-flex flex-row-reverse" style="height: 10%;">
        <div class="p-2 align-self-center"><button class="btnUser">Salir</button></div>
        <div class="p-2 align-self-center"><p>Bienvenido: Usuario </p></div>
        <div class="p-2 align-self-center"><img class="imgUsuar" src="/images/user.png"></div>
       
    </div>

    <div class="container mb-5">
        <div class="recuadro col-sm-8 col-md-6 col-lg-5 col-xl-5">
            <div class="titulo">
                Bienvenido
            </div>
        
            <div class="row text-center py-3 mt-3">
                <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto">
                    <label>USUARIO/CORREO</label>
                  <input id="usuario" type="text" class="form-control" >
                </div>
            </div>

            <div class="row text-center py-3 mt-1">
                <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto">
                    <label>CONTRASEÑA</label>
                    <input id="contraseña" type="text"  class="form-control" >
                </div>
            </div>

            <div class="inicio">
                <button class="btn1" onClick="recibe();">INICIAR SESIÓN</button>
            </div>
            <div class="recuperar">
                <button class="btn2">RECUPERAR CONTRASEÑA</button>
            </div>
        </div>
    </div>



        <div class = "navegacion">
            <a href="uploadDocuments.html">Subir documentos</a><br>
            <a href="iniciarSolicitud.html">Iniciar Solicitud</a><br>
            <a href="form/form.html">Formulario</a><br>
            <a href="historial.html">Historial de solicitudes</a><br>
            <a href="adminQuejas.html">Admin Quejas</a><br>
            <a href="adminDB.html">Admin DB/a><br>
        </div>
        
    </body>
</html>
