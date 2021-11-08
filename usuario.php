<? php

 Aplicación de espacio de nombres ;

use  Illuminate \ Contracts \ Auth \ MustVerifyEmail ;
use  Illuminate \ Foundation \ Auth \ Usuario  como  autenticable ;
use  Illuminate \ Notifications \ Notifiable ;

class  Usuario  amplía  Authenticatable
{
    uso  Notificable ;

    protegido  $ rellenable = [
        'nombre' , 'correo electrónico' , 'contraseña' ,
    ];
    protegido  $ oculto = [
        'contraseña' , 'recordar_token' ,
    ];

     $ casts protegidos = [
        'email_verified_at' => 'fecha y hora' ,
    ];
}
