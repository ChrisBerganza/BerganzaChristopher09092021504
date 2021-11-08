<? php

espacio de nombres  App \ Http \ Middleware ;

use  Illuminate \ Auth \ Middleware \ Authenticate  como  Middleware ;

class  Autenticacion  extiende  Middleware
{
    / **
     * Obtenga la ruta a la que se debe redirigir al usuario cuando no esté autenticado.
     *
     * @param \ Illuminate \ Http \ Request $ request
     * @return string | nulo
     * /
     función  protegida redirectTo ( $ request )
    {
        if (! $ solicitud -> esperaJson ()) {
            return  route ( 'iniciar sesión' );
        }
    }
}
