<? php

 App \ Providers de espacio de nombres ;

use  Illuminate \ Foundation \ Support \ Providers \ ServicioAutenticacion  como  ServiceProvider ;
use  Illuminate \ Support \ Facades \ Gate ;

class  ServicioAutenticacion  extiende  ServiceProvider
{
     $ políticas protegidas = [
        // 'Aplicación \ Modelo' => 'Aplicación \ Políticas \ ModelPolicy',
    ];
     arranque de función  pública ()
    {
        $ this -> registerPolicies ();

        //
    }
}
