<? php

espacio de nombres  App \ Http \ Controlador ;

use  App \ Models \ Lenguaje ;
use  App \ Models \ Moneda ;
use  Illuminate \ Http \ Request ;
utilice  Illuminate \ Support \ Facades \ DB ;
use  Illuminate \ Support \ Facades \ Storage ;

clase  Controladordemoneda  extiende  Controlador
{
     función  pública createForm () {

        $ lenguaje = Lenguaje :: all ();
        return  view ( 'moneda.createMoneda' , compact ( 'lenguaje' ));
    }

    // Guardar datos Criptomoneda
     función  pública guardar ( Solicitar  $ solicitud )
    {
        $ validación = $ esto -> validar ( $ solicitud , [
            'logotipo' => 'requerida | imagen' ,
            'nombre' => 'obligatorio | único: App \ Models \ Moneda, nombre | string | max: 45' ,
            'precio' => 'obligatorio | numérico' ,
            'descripcion' => 'obligatorio | cadena | max: 200' ,
            'lenguaje' => 'requerido'
        ]);

        if ( $ request -> hasFile ( 'logotipo' )) {
            $ validation [ 'logotipo' ] = $ request -> file ( 'logotipo' ) -> store ( 'logos' , 'public' );
        }

        Moneda :: crear ([
            'logotipo' => $ validación [ 'logotipo' ],
            'nombre' => $ validación [ 'nombre' ],
            'precio' => $ validación [ 'precio' ],
            'descripcion' => $ validation [ 'descripcion' ],
            'lenguaje_id' => $ validación [ 'lenguaje' ]
        ]);

        return  redireccionar ( '/' ) -> with ( 'guardar' , "ok" );
    }
     función  pública read () {
        $ monedas = DB :: mesa ( 'criptomoneda' )
            // Relacion de Lenguaje
            -> unirse ( 'lenguaje_programacion' , 'criptomoneda.lenguaje_id' , '=' , 'lenguaje_programacion.id' )
            -> seleccionar ( 'criptomoneda. *' , 'lenguaje_programacion.descripcion_lenguaje' )
            -> paginar ( 3 );


        return  view ( 'moneda.readMoneda' , compact ( 'monedas' ));
    }

    pública  función  updateForm ( $ ID ) {
        $ moneda = Moneda :: findOrFail ( $ id );
        $ lenguaje = Lenguaje :: all ();

        return  view ( 'moneda.updateMoneda' , compact ( 'moneda' , 'lenguaje' ));
    }
     editar función  pública ( Solicitar $ solicitud , $ id ) { 
        $ dataCoin = request () -> except (([ '_token' , '_method' ]));

        if ( $ request -> hasFile ( 'logotipo' )) {
            $ moneda = Moneda :: findOrFail ( $ id );
            Almacenamiento :: eliminar ( 'public /' . $ Coin -> logotipo );
            $ dataCoin [ 'logotipo' ] = $ solicitud -> archivo ( 'logotipo' ) -> tienda ( 'logotipos' , 'público' );
        }

        Moneda :: donde ( 'id' , '=' , $ id ) -> actualizar ( $ dataCoin );

        return  redireccionar ( '/' ) -> con ( 'editar' , 'ok' );
    }

     función  pública eliminar ( $ id ) {

        $ monedas = Moneda :: findOrFail ( $ id );
        if ( Almacenamiento :: eliminar ( 'público /' . $ monedas -> logotipo )) {
            Moneda :: destruir ( $ id );
        }

        return  back () -> with ( 'eliminar' , 'ok' );
    }

}
