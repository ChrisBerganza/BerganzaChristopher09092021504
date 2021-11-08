<? php

espacio de nombres  App \ Http \ Middleware ;

use  App \ Providers \ RouteServiceProvider ;
use  Closure ;
use  Illuminate \ Support \ Facades \ Auth ;

clase  Redirigirautenticado
{
     identificador de función  pública ( $ solicitud , cierre $ siguiente , $ guard = null ) 
    {
        if ( Auth :: guard ( $ guard ) -> check ()) {
            return  redireccionar ( Redirigirautenticado :: HOME );
        }

        return  $ siguiente ( $ solicitud );
    }
}
