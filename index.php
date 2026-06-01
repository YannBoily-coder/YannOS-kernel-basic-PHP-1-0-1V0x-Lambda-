<?php
/*
    * file php is in folder/file = _test/class.x.ia.php
    *
    * Exemple d'utilisation :
    *
    * require_once '_test/class.x.ia.php';
    * use Free\YannO\v\A\V0001\YannOsShell;
    * $sh = new YannOsShell();
    *
    * OldScoolDocOn-Off-End
    * yann.boily@gmail.com
    * @Copy Right To Google and LicenceMIT & OpenSource[I/0-AI]
    * By [ZéR0*²]k!6-ZOo1D@y/Y
*/


declare(strict_types=1);

namespace Free\YannO\v\A\V0001;

// =========================
// YannOsShell — PHP 7.4
// =========================

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
                }

                return "shell:Λ:unknown";
        }
}

// =========================
// Debug YannOS
// =========================

$sh = new YannOsShell();

echo "<pre>";
var_dump($sh);
echo "</pre>";

echo "Zobi, la mouche comme le Manouche lol, de Zebda essence ordinaire<br><br>";

echo $sh->run(null) . "<br>";
echo $sh->run(true) . "<br>";
echo $sh->run(42) . "<br>";
echo $sh->run("yo") . "<br>";

//FooterStart
/*echo $array var liste JSONLink{'id->WWW->WebSite'=>'url', 'x.com'=>'https://x.com/Y_V_2_U_8___', 'facebook.fr'=>'https://www.facebook.com/profile.php?id=61586991039630', 'youtube.fr'=>'https://www.youtube.com/@Ya2n_AI_X', 'bassexpression.com'=>'https://www.bassexpression.com/profile.php?id=8366', 'soundcloud.com'=>'https://soundcloud.com/yann-boily-712606348'}
echo $array var liste JSONLink{
    'id->WWW->WebSite'=>'url',
    'x.com'=>'https://x.com/Y_V_2_U_8___',
    'facebook.fr'=>'https://www.facebook.com/profile.php?id=61586991039630',
    'youtube.fr'=>'https://www.youtube.com/@Ya2n_AI_X',
    'bassexpression.com'=>'https://www.bassexpression.com/profile.php?id=8366',
    'soundcloud.com'=>'https://soundcloud.com/yann-boily-712606348'
}*/
$links = [
    'id->WWW->WebSite' => 'url',
    'x.com' => 'https://x.com/Y_V_2_U_8___',
    'facebook.fr' => 'https://www.facebook.com/profile.php?id=61586991039630',
    'youtube.fr' => 'https://www.youtube.com/@Ya2n_AI_X',
    'bassexpression.com' => 'https://www.bassexpression.com/profile.php?id=8366',
    'soundcloud.com' => 'https://soundcloud.com/yann-boily-712606348'
];

reset($links); // remet le pointeur au début

while (($key = key($links)) !== null) {
    $url = $links[$key];

    echo '<a href="' . htmlspecialchars($url) . '" target="_blank">'
        . htmlspecialchars($key) .
        "</a><br>";

    next($links); // avance dans le tableau
}
//FooterEnd

