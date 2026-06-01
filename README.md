# YannOS-kernel-basic-PHP-1-0-1V0x-Lambda-
New php kernel to speed up like basic code php a basice code mixAnd Match code like a pgm
<?php/*<!DOCTYPE php-xhtml-basic creator="YannBaille-YB&CB-D-THC">

<html-v-1-0>

<head>
  <title>Hello!</title>
</head>

<body>

::php-v1-0
echo("Hello, World!");
//PHP_Y@2uOS Basic
::START PHP 1-0 YannEtOuTT peudo [Z&eacute;R0*&sup2;]k!6-ZOo1D@y/Y
super class MixRanDomQuantic::
    Try {
        all private $variable;
        all clean create function block[textStr]-[AllStrInBlockCount1Bock//exp: un block de 9 string donne 9block dans 1 block soit 90%]::GroupBy3 block
        return var_dump($e);
    }, catch AllError->VerboseVar[e];
::END






insert after footer::
balise </php-xhtml-basic>


*/
?>

<?php
declare(strict_types=1);

namespace Free\YannO\v\A\V0001;

class YannOsShell
{
    public function run($e): string
    {
        // --- Mode PHP 8+ (match disponible) ---
        if (PHP_VERSION_ID >= 80000) {
            return match (true) {
                is_null($e)      => "shell:&Lambda;:null",
                is_bool($e)      => "shell:&Lambda;:" . ($e ? "oui" : "non"),
                is_int($e)       => "shell:&Lambda;:int:" . $e,
                is_float($e)     => "shell:&Lambda;:float:" . $e,
                is_string($e)    => "shell:&Lambda;:string:" . $e,
                is_array($e)     => "shell:&Lambda;:array:" . json_encode($e),
                is_object($e)    => "shell:&Lambda;:object:" . get_class($e),
                default          => "shell:&Lambda;:unknown",
            };
        }

        // --- Mode PHP 7.4 (fallback sans match) ---
        if (is_null($e)) {
            return "shell:&Lambda;:null";
        } elseif (is_bool($e)) {
            return "shell:&Lambda;:" . ($e ? "oui" : "non");
        } elseif (is_int($e)) {
            return "shell:&Lambda;:int:" . $e;
        } elseif (is_float($e)) {
            return "shell:&Lambda;:float:" . $e;
        } elseif (is_string($e)) {
            return "shell:&Lambda;:string:" . $e;
        } elseif (is_array($e)) {
            return "shell:&Lambda;:array:" . json_encode($e);
        } elseif (is_object($e)) {
            return "shell:&Lambda;:object:" . get_class($e);
        }

        return "shell:&Lambda;:unknown";
    }
}

