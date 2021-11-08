<? php

 App \ Providers de espacio de nombres ;

utilice  Illuminate \ Support \ Facades \ Broadcast ;
use  Illuminate \ Support \ ServiceProvider ;

class Proveedoresserviciostransmicion  extiende  ServiceProvider
{
     arranque de función  pública ()
    {
        Difusión :: rutas ();

        require  base_path ( 'rutas / canales.php ' );
    }
}
