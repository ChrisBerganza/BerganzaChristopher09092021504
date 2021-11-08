<? php

espacio de nombres  App \ Http \ Controlador ;

use  Illuminate \ Foundation \ Auth \ Access \ AuthorizesRequests ;
use  Illuminate \ Foundation \ Bus \ DispatchesJobs ;
use  Illuminate \ Foundation \ Validation \ ValidatesRequests ;
use  Illuminate \ Routing \ Controlador  como  BaseControlador ;

class  Controlador  extiende  BaseControlador
{
    use  AuthorizesRequests , DispatchesJobs , ValidatesRequests ;
}
