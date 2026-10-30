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
    $echo = "Tervetuloa Php maailmaan";
    $kerrat = 5;
     $laskuri = 1; 
    echo "<ul>";
    
    while ($laskuri <= $kerrat) {
        echo "<li>" . $tervehdys . " (Kerta " . $laskuri . ")</li>";
        $laskuri++;
    }
     echo "</ul>";
    ?>
  </body>
</html>