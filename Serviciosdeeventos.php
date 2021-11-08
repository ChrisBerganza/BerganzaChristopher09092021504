<? php

 App \ Providers de espacio de nombres ;

use  Illuminate \ Auth \ Events \ Registered ;
use  Illuminate \ Auth \ Listeners \ SendEmailVerificationNotification ;
utilice  Illuminate \ Foundation \ Support \ Providers \ Serviciosdeeventos  como  ServiceProvider ;
use  Illuminate \ Support \ Facades \ Event ;

clase  Serviciosdeeventos  extiende  ServiceProvider
{
    protegido  $ escuchar = [
        Registrado :: clase => [
            SendEmailVerificationNotification :: class,
        ],
    ];
     arranque de función  pública ()
    {
        padre :: arranque ();

        //
    }
}
