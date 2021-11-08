<? php

espacio de nombres  App \ Http \ Middleware ;

utilice  Illuminate \ Cookie \ Middleware \ Encriptarcookies  como  Middleware ;

clase  Encriptarcookies  extiende  Middleware
{
    / **
     * Los nombres de las cookies que no deben estar encriptadas.
     *
     * /
    protegido  $ excepto = [
        //
    ];
}
