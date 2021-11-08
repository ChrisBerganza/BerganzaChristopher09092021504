<? php

espacio de nombres  App \ Console ;

use  Illuminate \ Console \ Scheduling \ Schedule ;
use  Illuminate \ Foundation \ Console \ Kernel  como  ConsoleKernel ;

clase  Kernel  extiende  ConsoleKernel
{
    
     $ comandos protegidos = [
        //
    ];

     horario de función  protegida ( horario $ horario ) 
    {
        // $ horario-> comando ('inspirar') -> hora ();
    }

     comandos de función  protegida ()
    {
        $ esto -> cargar (__DIR__. '/ Comandos' );

        require  base_path ( 'rutas / console.php' );
    }
}
