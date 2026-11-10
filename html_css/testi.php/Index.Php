<!DOCTYPE html>
<html>
  <head>
    <title>Ensimmäinen PHP-sivu</title>
  </head>
  <body>
    <p>Vuorokaudessa on <?php echo 24 * 60 * 60; ?> sekuntia.</p>
    <p>Tänään on <?php echo date("j.n.Y"); ?>.</p>
    <p>Palvelimella on PHP:n versio <?php echo PHP_VERSION; ?>.</p>
    <?php
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>" . $i;
    }
    echo "</ul>";
    ?>
     <?php
    $tervehdys = "Tervetuloa PHP maailmaan ";
    $kerrat = 5;
    $laskuri = 0;

    while ($laskuri < $kerrat) {
        echo $tervehdys;
        $laskuri++;
    }
    ?>
  </body>
</html>