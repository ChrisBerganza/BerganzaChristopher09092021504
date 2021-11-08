<? php

Espacio de nombres  App \ Models ;

use  Illuminate \ Database \ Eloquent \ Model ;

clase  Lenguaje  extiende  Modelo
{
    protegido  $ tabla = 'lenguaje_programacion' ;
    public  $ timestamps = falso ;
    protegido  $ rellenable = [
        'id' , 'descripcion_lenguaje'
    ];

    protegido  $ primaryKey = 'id' ;
}
