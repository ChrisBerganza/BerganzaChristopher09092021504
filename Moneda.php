<? php

Espacio de nombres  App \ Models ;

use  Illuminate \ Database \ Eloquent \ Model ;

clase  Moneda  extiende  Modelo
{
    protegido  $ tabla = 'criptomoneda' ;
    public  $ timestamps = falso ;
    protegido  $ rellenable = [
        'id' , 'logotipo' , 'nombre' , 'precio' , 'descripcion' , 'lenguaje_id' ,
    ];

    protegido  $ primaryKey = 'id' ;
}
