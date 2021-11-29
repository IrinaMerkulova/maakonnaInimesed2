<?php

?>
<font size="24">http://merkulova.thkit.ee/maakonnaInimesed/ylesanneKood.php

</font>

    <h2>Ülesanne</h2>
    <ol>
        <li>Kopeeri endale index.php ja functions.php failide sisud</li>
         <li>Loo conf.php faili, kus lisa $connection oma andmetega
            <br>
            $connection = new mysqli('localhost', 'username', 'password', 'basename');
        </li>
        <li>Lähtefailid kasutavad andmebaasis 2 tabelit, veebileht võimaldab andmebaasi lisada, muuta ja kustutada inimeste andmed.
            Samuti võib teha otsingu.  </li>
       
        <li>Põhjalikumalt vaata php-koodi ja loo oma andmebaasi 2 tabelit nii, et kood tööle hakkab!</li>
        <li>Kontrolli, et veebileht võimaldab teha inimeste lisamine, muutmine, kustutamine ja otsingu</li>
        ---------
       <li> Lisa lehele kontroll, et tühja eesnime ei saa lisada tabelisse</li>
        <li> Lisa lehele kontroll, et ei saaks lisada sama maakonda, mis on juba olemas </li>

        ---------
        <li>Tee samasugune leht kasutades (varem tehtud) Kaubad ja Kaubagrupid tabeleid,
        <pre>
        CREATE TABLE kaubagrupid(
            id int PRIMARY KEY AUTO_INCREMENT,
            kaubagrupp varchar(100)
        );
          CREATE TABLE kaubad(
            id int PRIMARY KEY AUTO_INCREMENT,
            kaubanimi varchar(100),
            hind int,
            kaubagrupp_id int,
            FOREIGN KEY (kaubagrupp_id) REFERENCES kaubagrupid(id)
        );
        INSERT INTO kaubagrupid(kaubagrupp) VALUES ('mänguasjad');
        INSERT INTO kaubad(kaubanimi, hind, kaubagrupp_id) VALUES ('auto', 25, 1);
</pre>

            Leht peab võimaldama kaupade  lisamine otsing, muutmine ja kustutamine. Kaubagruppi saab ainult lisada.
        </li>
        <li>Muuda css kujundust</li>
        <li>Kommenteeri php koodi</li>

    </ol>


    <h1>index.php faili sisu</h1>
<?php highlight_file('index.php');?>
<h1>functions.php faili sisu</h1>
<?php highlight_file('functions.php');?>
<h1>style.css faili sisu</h1>
<?php highlight_file('style.css');
