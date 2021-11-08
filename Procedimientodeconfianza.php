<? php

espacio de nombres  App \ Http \ Middleware ;

utilice  Fideloper \ Proxy \ Procedimientodeconfianza  como  Middleware ;
use  Illuminate \ Http \ Request ;

clase  Procedimientodeconfianza  extiende  Middleware
{
     $ encabezados protegidos = Solicitud :: HEADER_X_FORWARDED_ALL ;
}
