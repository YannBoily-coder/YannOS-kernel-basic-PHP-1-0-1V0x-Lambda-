<?php
/*
  * file php is in folder/file = is _test/class.x.ia.php
  *<?php
declare(strict_types=1);

namespace Free\YannO\v\A\V0001;

class YannOsShell {
    ...
}
require_once '_test/class.x.ia.php';

use Free\YannO\v\A\V0001\YannOsShell;

$sh = new YannOsShell();
  *
 *  OldScoolDocOn-Off-End
*
 */
declare(strict_types=1);

namespace Free\YannO\v\A\V0001;

/*class YannOsShell
{
    public function run(mixed $a): string
    {
        return match (true) {

            // Exemple : si $e est un entier
            is_int($e) => "shell:&Lambda;:int:" . $e,

            // Exemple : si $e est un tableau
            is_array($e) => "shell:&Lambda;:array:" . json_encode($e),

            // Exemple : si $e est null
            is_null($e) => "shell:&Lambda;:null",

            // Exemple : si $e est une string
            is_string($e) => "shell:&Lambda;:string:" . $e,

            // Fallback YannOS
            default => "shell:&Lambda;:unknown",
        };
    }
} */ //Php8

//compati
//compatible php 7.4:
class YannOsShell
{
    public function run($e): string
    {
        if (is_null($e)) {
            return "shell:Λ:null";
        } elseif (is_bool($e)) {
            return "shell:Λ:" . ($e ? "oui" : "non");
        } elseif (is_int($e)) {
            return "shell:Λ:int:" . $e;
        } elseif (is_string($e)) {
            return "shell:Λ:string:" . $e;
        } elseif (is_array($e)) {
            return "shell:Λ:array:" . json_encode($e);
        } else {
            return "shell:Λ:unknown";
        }
    }
}

$sh = new YannOsShell();

// Debug YannOS propre
echo "<pre>";
var_dump($sh);
echo "</pre>";

echo "Zobi, la mouche comme le Manouche lol, de Zebda essence ordinaire<br><br>";

echo $sh->run(null) . "<br>";
echo $sh->run(true) . "<br>";
echo $sh->run(42) . "<br>";
echo $sh->run("yo") . "<br>";


