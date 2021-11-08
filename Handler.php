<? php

Espacio de nombres  App \ Exceptions ;

use  Illuminate \ Foundation \ Exceptions \ Handler  como  ExceptionHandler ;
utilizar  Throwable ;

class  Handler  extiende  ExceptionHandler
{
    protegido  $ dontReport = [
    ];

    protegido  $ dontFlash = [
        'contraseña' ,
        'contraseña_confirmación' ,
    ];

     informe de función  pública ( excepción Throwable $ ) 
    {
        padre :: informe ( $ excepción );
    }

     representación de función  pública ( $ solicitud , $ excepción Throwable ) 
    {
        return  parent :: render ( $ solicitud , $ excepción );
    }
}
