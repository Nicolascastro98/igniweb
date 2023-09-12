$(document).ready(function () {
  
    //Ajax Login
    $("#frmLogin").submit(function(e) {

        e.preventDefault(); 
    
        var form = $(this);
        var actionUrl = 'controlador/logica/iniciar_sesion.php';
        
        $.ajax({
            type: "POST",
            url: actionUrl,
            dataType : 'json',
            data: form.serialize(), 
            success: function(data)
            {   console.log(respuesta);
                if (data.respuesta == 'Correcto'){
                  
                        $(document).Toasts('create', {
                          class: 'bg-success',
                          title: 'Correcto',
                          body: 'Ingresando al sistema, espere un momento...'
                        })

                        setTimeout(() => {
                            location.reload(true);
                        }, 1500);
                    
                }else if (data.respuesta == 'Sin registros'){
                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: 'Error',
                        body: 'Usuario y/o contraseña incorrectos'
                      })
                }
                
            }
        });
        

    });

    //Ajax Ediar Usuario
    $("#frmDatoUsuario").submit(function(e) {

        e.preventDefault(); 
    
        var form = $(this);
        var actionUrl = 'controlador/logica/editar_usuario.php';
        
        $.ajax({
            type: "POST",
            url: actionUrl,
            dataType : 'json',
            data: form.serialize(), 
            success: function(data)
            {  
                if (data.respuesta == 'Correcto'){
                   
                        $(document).Toasts('create', {
                          class: 'bg-success',
                          title: 'Correcto',
                          body: 'Usuario Modificado, Actualizando información...'
                        })

                        setTimeout(() => {
                            location.reload(true);
                        }, 1500);
                    
                }else{
                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: 'Error',
                        body: 'El nombre de usario ya existe'
                      })
                }
                
            }
        });
        

    });

    //Ajax Cerrar Sesión
    $('.cerrarSesion').on('click', function(){
        $.ajax({
            type: "POST",
            url: 'controlador/logica/cerrar_sesion.php',
            dataType : 'json',
            data: {cerrar:'cerrar'}, 
            success: function(data)
            {   
                if (data.respuesta == 'Correcto'){
                  
                    location.reload(true);
                    
                }
                
            }
        });
    });


    //Ajax Redireccionar Registro
    $('.btnRedireccionar').on('click', function(){
        
        var url = $('.btnRedireccionar').data('url');
        $.ajax({
            type: "POST",
            url: 'controlador/logica/redireccionar.php',
            dataType : 'json',
            data: {url:url}, 
            success: function(data)
            {   
                if (data.respuesta == 'Correcto'){
                  
                    location.reload(true);
                    
                }
                
            }
        });
    });


        //Ajax Registro
        $("#frmRegistro").submit(function(e) {

            e.preventDefault(); 
        
            var form = $(this);
            var actionUrl = 'controlador/logica/registro.php';
            
            $.ajax({
                type: "POST",
                url: actionUrl,
                dataType : 'json',
                data: form.serialize(), 
                success: function(data)
                {   
                    if (data.respuesta == 'Correcto'){
                      
                            $(document).Toasts('create', {
                              class: 'bg-success',
                              title: 'Correcto',
                              body: 'Usuario registrado, actualizado...'
                            })
    
                            setTimeout(() => {
                                location.reload(true);
                            }, 1500);
                        
                    }else if(data.respuesta == 'Ya existe'){

                        $(document).Toasts('create', {
                            class: 'bg-danger',
                            title: 'Error',
                            body: 'El usario ya se encuentra registrado'
                          })
                    }
                    
                }
            });
            
    
        });


            $('.editar').on('click', function(){
        
                var id = $(this).data('id');
                var uno = $(this).data('uno');
                var dos = $(this).data('dos');
                var estado = $(this).data('estado');
        
                $.ajax({
                    type: "POST",
                    url: 'controlador/logica/actualizar_api.php',
                    dataType : 'json',
                    data: {id:id, uno:uno, dos:dos, estado:estado}, 
                    success: function(data)
                    {   
                        if (data.respuesta == 'Correcto'){
                          
                            location.reload(true);
                            
                        }
                        
                    }
                });
            });

            //Ajax Ediar Usuario
    $("#frmDatosApi").submit(function(e) {

        e.preventDefault(); 
    
        var form = $(this);
        var actionUrl = 'controlador/logica/editar_api.php';
        
        $.ajax({
            type: "POST",
            url: actionUrl,
            dataType : 'json',
            data: form.serialize(), 
            success: function(data)
            {  
                if (data.respuesta == 'Correcto'){
                   
                        $(document).Toasts('create', {
                          class: 'bg-success',
                          title: 'Correcto',
                          body: 'Modificando registros, actualizando...'
                        })

                        setTimeout(() => {
                            location.reload(true);
                        }, 1500);
                    
                }
                
            }
        });
        

    });
        
    
    $('.example1').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
  
  });