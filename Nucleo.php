<? php

espacio de nombres  App \ Http ;

use  Illuminate \ Foundation \ Http \ Nucleo  como  HttpNucleo ;

clase Nucleo  extiende  HttpKernel
{
    protegido  $ middleware = [
        \ App \ Http \ Middleware \ Procedimientosdeconfianza :: clase,
        \ Tarta de frutas \ Cors \ HandleCors :: clase,
        \ App \ Http \ Middleware \ Modomantenimiento :: clase,
        \ Illuminate \ Foundation \ Http \ Middleware \ ValidatePostSize :: clase,
        \ App \ Http \ Middleware \ TrimStrings :: clase,
        \ Illuminate \ Foundation \ Http \ Middleware \ ConvertEmptyStringsToNull :: clase,
    ];

    protected  $ middlewareGroups = [
        'web' => [
            \ App \ Http \ Middleware \ Encriptarcookies :: clase,
            \ Illuminate \ Cookie \ Middleware \ AddQueuedCookiesToResponse :: clase,
            \ Illuminate \ Session \ Middleware \ StartSession :: clase,
            // \ Illuminate \ Session \ Middleware \ AuthenticateSession :: clase,
            \ Illuminate \ View \ Middleware \ ShareErrorsFromSession :: clase,
            \ App \ Http \ Middleware \ Verificaciondetoken :: clase,
            \ Illuminate \ Routing \ Middleware \ SubstituteBindings :: clase,
        ],

        'api' => [
            'acelerador: 60,1' ,
            \ Illuminate \ Routing \ Middleware \ SubstituteBindings :: clase,
        ],
    ];

    protegido  $ routeMiddleware = [
        'auth' => \ App \ Http \ Middleware \ Authenticate :: clase,
        'auth.basic' => \ Illuminate \ Auth \ Middleware \ AuthenticateWithBasicAuth :: clase,
        'bindings' => \ Illuminate \ Routing \ Middleware \ SubstituteBindings :: class,
        'cache.headers' => \ Illuminate \ Http \ Middleware \ SetCacheHeaders :: clase,
        'can' => \ Illuminate \ Auth \ Middleware \ Authorize :: class,
        'invitado' => \ App \ Http \ Middleware \ RedirectIfAuthenticated :: class,
        'password.confirm' => \ Illuminate \ Auth \ Middleware \ RequirePassword :: clase,
        'firmado' => \ Illuminate \ Routing \ Middleware \ ValidateSignature :: clase,
        'throttle' => \ Illuminate \ Routing \ Middleware \ ThrottleRequests :: clase,
        'verificado' => \ Illuminate \ Auth \ Middleware \ AsegúreseEmailIsVerified :: clase,
    ];
}
