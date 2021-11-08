<? php

espacio de nombres  App \ Http \ Controlador ;

use  App \ Models \ Lenguaje ;
use  Illuminate \ Http \ Request ;

class  Lenguajedecontrolador  extiende  Controlador
{
     función  pública createForm () {

        return  view ( 'lenguaje.createLenguaje' );
    }

     función  pública guardar ( Solicitar  $ solicitud ) {

        $ validador = $ esto -> validar ( $ solicitud , [
            'descripcion_leng' => 'obligatorio | único: App \ Models \ Lenguaje, descripcion_lenguaje | string | max: 45' ,
        ]);

        Lenguaje :: crear ([
            'descripcion_lenguaje' => $ validador [ 'descripcion_leng' ]
        ]);

        return  redirect ( '/ lenguaje / read' ) -> with ( 'guardar' , 'ok' );
    }

     función  pública read () {
        $ idioma [ 'lenguajes' ] = Lenguaje :: paginate ( 7 );

        return  view ( 'lenguaje.readLenguaje' , $ idioma );
    }

    pública  función  updateForm ( $ ID ) {
        $ lenguajes = Lenguaje :: findOrFail ( $ id );

        return  view ( 'lenguaje.updateLenguaje' , compact ( 'lenguajes' ));
    }

     editar función  pública ( Solicitar $ solicitud , $ id ) { 
        $ dataLeng = request () -> except (([ '_token' , '_method' ]));
        Lenguaje :: where ( 'id' , '=' , $ id ) -> actualizar ( $ dataLeng );

        return  redirect ( '/ lenguaje / read' ) -> with ( 'editar' , 'ok' );
    }

     función  pública eliminar ( $ id ) {
        Lenguaje :: destrozar ( $ id );

        return  back () -> with ( 'eliminar' , 'ok' );
    }
}
