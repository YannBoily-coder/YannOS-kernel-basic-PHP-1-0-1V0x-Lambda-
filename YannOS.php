<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
declare(strict_types=1);

namespace Free\YannO\v\A\V0001;

class YannOsShell
{
    private string $currentDir = "/home/yannos";
    private array $files = [
        "secret.txt" => "Le flag c'est : YannOs{Je_Croie_Pas_Poto_Lol}",
        "man.php" => "RTFM sale noob",
        "trojan.php" => "<?php eval(\$_POST['cmd']); ?>"
    ];

    public function run(string $command): string
    {
        $cmd = trim(strtolower($command));
        $args = explode(" ", $cmd);
        $main = $args[0] ?? '';

        return match ($main) {
            'ls'      => $this->cmdLs($args),
            'pwd'     => "🌌 " . $this->currentDir . "  [YannOS v0.1 - Mode Schizo]",
            'whoami'  => "yannos@darkweb:~$ root (mais en vrai t&rsquo;es personne)",
            'id'      => "uid=1337(yannos) gid=1337(hackeur) groups=1337,666(illuminati)",
            'cat'     => $this->cmdCat($args),
            'echo'    => $this->cmdEcho($args),
            'man'     => $this->cmdMan($args),
            'clear'   => "<script>document.getElementById('output').innerHTML = '';</script>",
            'help'    => "Commandes disponibles : ls, pwd, whoami, id, cat, echo, man, rick (secret)",
            'rick'    => "Never gonna give you up... (mais en vrai j&rsquo;te rickroll pas, trop facile)",
            default   => $this->randomWtfError($cmd)
        };
    }

    private function cmdLs(array $args): string
    {
        $out = "total 666<br>";
        foreach ($this->files as $file => $content) {
            $out .= "drwxr-xr-x  1 yannos  hackeur  4096 Jun 01 01:37 " . $file . "<br>";
        }
        return $out . "<span style='color:#0f0'>. .. .git .yannos_backdoor</span>";
    }

    private function cmdCat(array $args): string
    {
        $file = $args[1] ?? '';
        if (isset($this->files[$file])) {
            return htmlspecialchars($this->files[$file]);
        }
        return "<span style='color:#f00'>cat: " . $file . ": Aucun fichier ou dossier de ce type (ou alors t&rsquo;as pas les droits, noob)</span>";
    }

    private function cmdEcho(array $args): string
    {
        array_shift($args);
        return implode(" ", $args) . "  &larr; YannOS t&rsquo;a entendu poto";
    }

    /*private function cmdMan(array $args): string
    {
        $page = $args[1] ?? 'yannos';
        return match ($page) {
            'php'   => "PHP(1)          YannOS Manual\n\n   ATTENTION : Si tu lis &ccedil;a c&rsquo;est que t&rsquo;es d&eacute;j&agrave; dans la matrice.",
            'ls'    => "LS(1)           Liste les fichiers que je veux bien te montrer.",
            default => "No manual entry for " . $page . "\nEssaie plut&ocirc;t `man php` ou `man life`"
        };
    } */   /* php8
    *private function cmdMan(array $args): string
    {
        return "MAN(" . ($args[1] ?? 'yannos') . ") - Lis la doc dans ta t&ecirc;te, c&rsquo;est mieux.";
    } */
    //php7.4
    private function cmdMan(array $args): string
    {
        $page = $args[1] ?? 'yannos';

        if ($page === 'php') {
            return "PHP(1)          YannOS Manual\n\n   ATTENTION : Si tu lis &ccedil;a c'est que t'es d&eacute;j&agrave; dans la matrice.";
        } elseif ($page === 'ls') {
            return "LS(1)           Liste les fichiers que je veux bien te montrer.";
        } else {
            return "No manual entry for " . $page . "\nEssaie plut&ocirc;t `man php` ou `man life`";
        }
    }

    private function randomWtfError(string $cmd): string
    {
        $errors = [
            "Command not found: $cmd (mais en vrai elle existe, t&rsquo;as juste pas le niveau)",
            "Segmentation fault (core dumped) ... lol non j&rsquo;rigole",
            "Permission denied. T&rsquo;es pas root poto, t&rsquo;es m&ecirc;me pas sudo.",
            "Error 0xYANN0S : Le multivers a bugg&eacute;",
            "404 Command not found in this timeline",
            "kernel panic: YannOS has left the chat",
            "Tu crois vraiment que je vais ex&eacute;cuter &ccedil;a ? 😂"
        ];
        return "<span style='color:#ff0'>" . $errors[array_rand($errors)] . "</span>";
    }
}

// ====================== CONSOLE WEB ======================
$sh = new YannOsShell();
$output = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cmd'])) {
    $output = $sh->run($_POST['cmd']);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>YannOsShell v0.1 - Mode Hackeur</title>
    <style>
        body { background:#000; color:#0f0; font-family: monospace; }
        #terminal { width:100%; height:80vh; overflow:auto; padding:10px; }
        input { background:#111; color:#0f0; border:none; width:100%; font-family:monospace; }
        .prompt { color:#0ff; }
    </style>
</head>
<body>
    <div id="terminal">
        <pre>YannOsShell v0.1 - "Je croie pas poto" edition</pre>
        <pre><?= htmlspecialchars($output) ?></pre>
    </div>

    <form method="post" id="form">
        <span class="prompt">yannos@darkweb:~$ </span>
        <input type="text" name="cmd" id="cmd" autofocus autocomplete="off">
    </form>

    <script>
        document.getElementById('form').onsubmit = function(e) {
            // petit effet console
            const term = document.getElementById('terminal');
            term.innerHTML += `<br><span class="prompt">yannos@darkweb:~$ </span>${document.getElementById('cmd').value}<br>`;
        };
    </script>
</body>
</html>
