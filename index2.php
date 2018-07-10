

<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        ////UTF8 encoding: àéìôü
       $csv = new SplFileObject('Projet_application_de_candidature.csv', 'r');
       $csv->setFlags(SplFileObject::READ_CSV);
        $csv->setCsvControl(';');
        $num = 0;

        foreach ($csv as $ligne) {
            $tabDate[] = $ligne[1];
            $tabLastName[] = $ligne[3];
            $tabFirstName[] = $ligne[5];
            $tabPhone[] = $ligne[15];
            $tabCareer[]= $ligne[54];
        }
        $tabData = array ('folderCreation' => $tabDate[1],'lastName' => $tabLastName[1],'firstName' =>  $tabFirstName [1], 'phoneNumber'=> $num.=$tabPhone[1],'career' =>$tabCareer[1]);
      
         var_dump ($tabData);
        ?>
    </body>
</html>


