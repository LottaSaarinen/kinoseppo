

<?php

function tarkistaTiedot($data) {
    // Lista kielletyistä sanoista.
    $kielletyt_sanat = ['CREATE','DELETE','DROP','TRUNCATE','TRUNC','INSERT','UPDATE','COPY','GRANT','REVOKE','PROCEDURE','FUNCTION','RETURNS','HREF'];

    // Käydään läpi jokainen kenttä ja tarkistetaan ne.
    foreach ($data as $key => $value) {
        foreach ($kielletyt_sanat as $kielletty) {
            if (stripos($value, $kielletty) !==false) {
                return false;
            }
        }
    }
    return true;
}

?>