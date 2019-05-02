<?php

session_start();

$locale;
$browserLang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);

if ($browserLang == "de") {
    $locale = "de_DE";
}

if (isset($locale)) {
    putenv("LANG=" . $locale);
    setlocale(LC_ALL, $locale);

    // I've named the domain like this to avoid caching problems. 
    // For more info check: https://www.sobstel.org/blog/php-gettext-caching-workaround/
    $domain = "messages-324354";
    bindtextdomain($domain, "Locale");
    bind_textdomain_codeset($domain, "UTF-8");

    textdomain($domain);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP i18n example</title>
</head>
<body>
    <h1><?php echo _("Hello World!"); ?></h1>

    <p>
        <?php echo _("Help to translate this page."); ?>
    </p>
    <p>
        <?php echo _("Just another sentence."); ?>
    </p>
    <p>
        <?php echo _("Subscribe to our channel!"); ?>
    </p>
</body>
</html>