## Funcionamiento Laravel
Deben ejecutar
```
php artisan migrate
php artisan db:seed
```
## Para consultar las rutas 
Las rutas se deben establecer en web.php
```
php artisan route:list
```
## Dentro del Controller que requiere estar autenticado deben utilizar la siguiente función
```
public function __construct()
    {
        $this->middleware('auth');
    }
 ```
 ## Consulta de un Modelo del usuario loggeado en el sistema
  ```
  $variable= Nombre_Modelo::where('nombre_del_campo','=',Auth::id())->get();
  ```
