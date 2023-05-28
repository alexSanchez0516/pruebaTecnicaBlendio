## Documentación del Proyecto: Calculadora

Esta documentación describe el proyecto de una calculadora implementada en Laravel. La calculadora ofrece diferentes operaciones matemáticas a través de una API REST.

#### NOTA: 
Por el enunciado ("crear una serie de servicios") se entiende 
que se deba crear un servicio para cada tipo de operación(eso entendí),
asociando su controller, route y commando de Artisan.
Se podría hacer con un solo servicio y que en el controller se llame
al método que recibamos en la url, haciendo uso del 
método "method_exists"

### Arrancar proyecto:
- Php 8.1.2
- Laravel 10.10
- composer install
- php artisan serve
- listado endpoints: php artisan route:list --path=api
- lanzar test: php artisan test


#### Endpoints: 

## Suma

Realiza la operación de suma entre dos operandos.

    URL: /api/add/{operatorA}/{operatorB}
    Método: GET
    Parámetros:
        operatorA: Primer operando numérico.
        operatorB: Segundo operando numérico.
    Respuesta exitosa (código 200):

    json:

    {
        "result": 5
    }

    Respuesta de error (código 400):

    json:

    {
        "error": "Both operands must be numbers."
    }

## Resta

Realiza la operación de resta entre dos operandos.

    URL: /api/subtract/{operatorA}/{operatorB}
    Método: GET
    Parámetros:
        operatorA: Primer operando numérico.
        operatorB: Segundo operando numérico.
    Respuesta exitosa (código 200):

    json: 

    {
    "result": 2
    }

Respuesta de error (código 400):

    json:

    {
      "error": "Both operands must be numbers."
    }

## Multiplicación

Realiza la operación de multiplicación entre dos operandos.

    URL: /api/multiply/{operatorA}/{operatorB}
    Método: GET
    Parámetros:
        operatorA: Primer operando numérico.
        operatorB: Segundo operando numérico.
    Respuesta exitosa (código 200):

    json:

    {
    "result": 12
    }

Respuesta de error (código 400):

    json

    {
      "error": "Both operands must be numbers."
    }

#División

Realiza la operación de división entre dos operandos.

    URL: /api/divide/{operatorA}/{operatorB}
    Método: GET
    Parámetros:
        operatorA: Primer operando numérico.
        operatorB: Segundo operando numérico.
    Respuesta exitosa (código 200):

    json:

    {
        "result": 5
    }

Respuestas de error (código 400):

    json:

    {
      "error": "Both operands must be numbers."
    }


    {
      "error": "Cannot divide by zero."
    }
    

## Servicios

#### AdditionService

Realiza la operación de suma entre dos operandos.

    Método: add($operandA, $operandB)
    Parámetros:
        $operandA: Primer operando numérico.
        $operandB: Segundo operando numérico.
    Retorna: Resultado de la suma.

#### SubtractionService

Realiza la operación de resta entre dos operandos.

    Método: subtract($operandA, $operandB)
    Parámetros:
        $operandA: Primer operando numérico.
        $operandB: Segundo operando numérico.
    Retorna: Resultado de la resta.

#### MultiplicationService

Realiza la operación de multiplicación entre dos operandos.

    Método: multiply($operandA, $operandB)
    Parámetros:
        $operandA: Primer operando numérico.
        $operandB: Segundo operando numérico.
    Retorna: Resultado de la multiplicación.

#### DivisionService

Realiza la operación de división entre dos operandos.

    Método: divide($operandA, $operandB)
    Parámetros:
        $operandA: Primer operando numérico.
        $operandB: Segundo operando numérico.
    Retorna: Resultado de la división.

## Controladores
#### AdditionController

Controlador para la operación de suma.

    Método: add($operatorA, $operatorB)
    Parámetros:
        $operatorA: Primer operando numérico.
        $operatorB: Segundo operando numérico.
    Retorna: Respuesta JSON con el resultado de la suma.

#### SubtractionController

Controlador para la operación de resta.

    Método: subtract($operatorA, $operatorB)
    Parámetros:
        $operatorA: Primer operando numérico.
        $operatorB: Segundo operando numérico.
    Retorna: Respuesta JSON con el resultado de la resta.

#### MultiplicationController

Controlador para la operación de multiplicación.

    Método: multiply($operatorA, $operatorB)
    Parámetros:
        $operatorA: Primer operando numérico.
        $operatorB: Segundo operando numérico.
    Retorna: Respuesta JSON con el resultado de la multiplicación.

#### DivisionController

Controlador para la operación de división.

    Método: divide($operatorA, $operatorB)
    Parámetros:
        $operatorA: Primer operando numérico.
        $operatorB: Segundo operando numérico.
    Retorna: Respuesta JSON con el resultado de la división.

## Pruebas 
(Se han echo pruebas tanto en los controllers como en los services)
###### php artisan test
#### Prueba para la suma

Archivo: AdditionControllerTest.php

    Verifica el resultado de la adición entre dos operandos válidos.
    Verifica la respuesta de error cuando uno de los operandos no es un número.

#### Prueba para la resta

Archivo: SubtractionControllerTest.php

    Verifica el resultado de la sustracción entre dos operandos válidos.
    Verifica la respuesta de error cuando uno de los operandos no es un número.

#### Prueba para la multiplicación

Archivo: MultiplicationControllerTest.php

    Verifica el resultado de la multiplicación entre dos operandos válidos.
    Verifica la respuesta de error cuando uno de los operandos no es un número.

#### Prueba para la división

Archivo: DivisionControllerTest.php

    Verifica el resultado de la división entre dos operandos válidos.
    Verifica la respuesta de error cuando se intenta dividir por cero.
    Verifica la respuesta de error cuando uno de los operandos no es un número.



## Comandos Artisan


#### Comando operations:add

Este comando realiza la operación de suma y devuelve el resultado por consola.
Uso

php artisan operations {operandA} {operandB} add

    {operandA}: Primer operando numérico.
    {operandB}: Segundo operando numérico.

##### Ejemplo


php artisan operations 5 6 add

Salida esperada


Result: 11

#### Comando operations:subtract

Este comando realiza la operación de resta y devuelve el resultado por consola.

Uso

php artisan operations {operandA} {operandB} subtract

    {operandA}: Primer operando numérico.
    {operandB}: Segundo operando numérico.

##### Ejemplo

php artisan operations 10 5 subtract

Salida esperada

Result: 5

#### Comando operations:multiply

Este comando realiza la operación de multiplicación y devuelve el resultado por consola.

Uso


php artisan operations {operandA} {operandB} multiply

    {operandA}: Primer operando numérico.
    {operandB}: Segundo operando numérico.

##### Ejemplo

php artisan operations 3 4 multiply

Salida esperada

Result: 12

#### Comando operations:divide

Este comando realiza la operación de división y devuelve el resultado por consola.

Uso

php artisan operations {operandA} {operandB} divide

    {operandA}: Primer operando numérico.
    {operandB}: Segundo operando numérico.

##### Ejemplo

php artisan operations 10 2 divide

Salida esperada

Result: 5

