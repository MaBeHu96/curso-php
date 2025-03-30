<?php

/*
PHP QUERIA DECIR PERSONAL HOME PAGE
PERO AHORA ES PHP HYPERTEXT PREPROSESOR
*/
    $lastName = "Beta";
    $name = "Mateo";  // para las variables se crea con el signo de dolar y de esta manera tambien se llaman 
    //$name = 2;  // las variables se pueden ir cambiando  
    $age = 61;  // se pueden declarar variables de diferentes tipos
    $isDev = true;  // booleano
    $height = (bool) 1.75;  // float o double
    $city = "Bogota";  // string
    $newAge = $age + 1 . '/'; // solo sirve para sumar el operador de suma 
    $ageConcat = $isDev . 1 - 5; // para concatenar se concatena con un punto (.) y se puede concatenar numeros y strings
    //echo $lastName; // para imprimir se utiliza echo
    $isOld = $age < 40;
    //$isOld = !$isDev && $age < 40;
    /*
    SE PUEDEN UTILIZAR OPERADORES LOGICOS COMO 
    AND (&&)
    OR (||)
    NOT (!)
    */
    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg'); // constantes globales con define que se opuede usar en cualquier parte de la aplicacion

    /* 
        ES IMPORTANTE QUE CON LAS CONSTANTES GLOBALES COMO DEFINE SE UTILIZE EN OTRO ARCHOIVO PARA NO VOLVER A LLAMARLAS
        PORQUE ESTO ME GENERARIA UN ERROR 
    
    */

    //var_dump($name);
    //var_dump($age);
    // var_dump($isDev);

    //echo gettype($name);
    //echo gettype($height);
    //echo gettype($isDev);

    // is_string($name);
    // is_float($height);
    // is_bool($isDev);
    $output = "Bienvenido de nuevo " . $name . "</br> Con una altura de "  // script>alert('hola que mas')</script> es importate sanear las entradas y las salidad par evitar script 
    //. $height
    . "😊🛒 </BR>". $newAge;  // no es necesario escribir el codigo de la siguinte manera  (<?php echo "Miguel"? sino que poniendo el 00 ya lo estoy llamando para mostrar en pantalla ) 
/* LOS EMOJIS SE COLOCAN CON LA TECLA WINDOWS Y  PUNTO(.)*/

    const NOMBRE = 'Mateo';   //
    /*
        PARA LAS CONSTANTES SON INMUTABLES Y NO ES NECESARIO COLOCARLE EL SIGNO DE DOLAR 
        SON ESTATICAS Y NO PUEDEN DEPENDER COMO LAS QUE ESTAN EN TIEMPO DE EJECUCIÓN 

    */

/*    if ($isOld) {
        echo "<h2>Eres Viejo, lo siento!</h2>";
    } else if ($isDev){                                               IMPORTANTE TENER EN CUENTA QUE EL  ELSE IF PUEDE ESTAR JUNTO O SEPARADO 
        echo "<h2>NO ERES VIEJO, pero eres dev, jejeje</h2>";
    } else{
        echo "<h2>NO ERES VIEJO</h2>";
    }
*/

/*IMPORTANTE TENER EN CUENTA QUE EL  ELSE IF PUEDE ESTAR JUNTO O SEPARADO
Y ADICIONAL TAMBIEN EXISTE OTRA MANERA QUE SE PUEDE UTILIZAR 
*/
    //TERNARIA PARA LOS IF 
    /*
    $outputAge = $isOld 
    ? "NO ERES VIEJO"                                          //si es true esta es la salida
    : "SI ERES VIEJO";                                         //si es false esta es la salida 
    */
#    $outputAge = match ($age) {
#       0, 1, 2 => "Eres un Bebé, $name 👶",
#       3, 4, 5, 6, 7, 8, 9, 10 => "Eres un Niño, $name 👦",
#       11, 12, 13, 14, 15, 16, 17, 18 => "Eres un adolecente, $name 👨‍🎓",
#       19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 => "Eres un adulto joven, $name 👦",
#       default => "Eres un adulto, $name 👨",
#   }
    // es muy importante entender la sintaxis para que mis respuestas sean mas presisas sin necesidad de utilizar tanto codigo con if 

    /*
      OTRA MANERA DE UTLIZAR EL MATCH ES LA SIGUIENTE   
    */
    $outputAge = match(true){
        $age < 2   => "Eres un bebé, $name 👶",
        $age < 10  => "Eres un niño, $name 👦🚗",
        $age < 18  => "Eres un adolecente, $name 👨‍",
        $age == 18 => "Eres mayor de edad, $name 🍻🍻",
        $age < 40  => "Eres un adulto joven, $name 👨‍🎓👨‍💻🧑",
        $age < 60  => "Eres un adulto viejo, $name  👴",
        default    => "Eres un Abuelo disfruta de tus nietos, $name 🚢🏖💑",

    };


    $bestlanguages = ["PHP", "JavaScript", "Python", 1, 2];  // para crear un array es muy parecido que en otros lenguajes de programacion y se puede utilizar con () o con []
    //$bestlanguages = array("PHP", "JavaScript", "Python", 1, 2)   // es otra manera de escribir un array pero con verrsiones mas antiguas de php 
    $bestlanguages[3] = "Java";                         //puedo acceder a un valor con su indice y de esta manera actualizar el valor 
    $bestlanguages[4] = "C++"; 
    $bestlanguages[] = "TypeScript";

    $person = [
        "name" => "Juan",
        "age" => 30,
        "isDev" => true,
        "lenguages" => ["PHP", "Python", "Java"]
    ];
    $person["name"] = "David";
    $person["lenguages"][] = "JavaScript";

?>
<h3>el mejor lenguaje es: <?= $bestlanguages[2]; ?></h3>
<ul>
    <?php foreach ($bestlanguages as $key => $language) : ?>
        <li><?= $key . " - " . $language ?></li>
    <?php endforeach?>
</ul>

<!--TODO ESTE CODIGO LO COMENTO PARA ENTENDERLO COMO SE USARIA UN 
TERNARIA
falta el tag de php"''" 
        if ($isOld) : ?>
            <h2>Eres Viejo, lo siento!</h2>
         elseif ($isDev) : ?>                                            
            <h2>NO ERES VIEJO, pero eres dev, jejeje</h2>
         else :?>
            <h2>NO ERES VIEJO</h2>
         endif; ?>

 -->
<h2><?= $outputAge ?></h2>


<img src="<?= LOGO_URL?>" alt="PHP Logo" width="200">   
<h1>
    <?= $output ?>
    </br>
    <?=
         $ageConcat;
     ?> 
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>