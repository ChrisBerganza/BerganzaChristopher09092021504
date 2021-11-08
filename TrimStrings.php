<? php

espacio de nombres  App \ Http \ Middleware ;

use  Illuminate \ Foundation \ Http \ Middleware \ TrimStrings  como  Middleware ;

clase  TrimStrings  extiende  Middleware
{
    protegido  $ excepto = [
        'contraseña' ,
        'contraseña_confirmación' ,
    ];
}
