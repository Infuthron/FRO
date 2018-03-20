<?php
$fruits = array(
    "gomu gomu",
    "bara bara",
    "sube sube",
    "kilo kilo",
    "bomu bomu",
    "hana hana",
    "doru doru",
    "baku baku",
    "mane mane",
    "supa supa",
    "toge toge",
    "ori ori",
    "bane bane",
    "ito ito",
    "noro noro",
    "doa doa",
    "aawa awa",
    "shari shari",
    "beri beri",
    "sabi sabi",
    "yomi yomi",
    "kage kage",
    "horo horo",
    "suke suke",
    "nikyu nikyu no mi",
    "ope ope",
    "mero mero",
    "doku doku",
    "fuwa fuwa",
    "horu horu",
    "choki choki",
    "gura gura",
    "woshu woshu",
    "mato mato",
    "buki buki",
    "guru guru",
    "hobi hobi",
    "bari bari",
    "nui nui",
    "giro giro",
    "ato ato",
    "jake jake",
    "pamu pamu",
    "sui sui",
    "hira hira",
    "ishi ishi",
    "nagi nagi",
    "chiyu chiyu",
    "ushi ushi : bison",
    "hito hito",
    "tori tori : falcon",
    "mogu mogu",
    "inu inu : dachsund",
    "inu inu : jackal",
    "uma uma",
    "neko neko : leopard",
    "inu inu : wolf",
    "ushi ushi : giraffe",
    "hebi hebi : king cobra",
    "hebi hebi : anacond",
    "hito hito : daibutsu",
    "sara sara : Axolotl",
    "mushi mushi : kabutomushi",
    "mushi mushi - suzumebachi",
    "moku moku",
    "suna suna",
    "mera mera",
    "goro goro",
    "hie hie",
    "yami yami",
    "pika pika",
    "magu magu",
    "numa numa",
    "gasu gasu",
    "yuki yuki",
    "beta beta",);

$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($fruits as $name) {
        $fruit = "$name no mi, <br> ";
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $fruit;
            } else {
                $hint .= "$fruit";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>