<?php
include_once '..\Controllers\SalesAssociateController.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta>
    <title></title>
</head>
    <body>
        <h1>Sale Associate</h1>
        <p>---------------</p>

        <h1>Provinces</h1>
        <?php
            $object = new SalesAssociateController();
            $provinces =  $object->GetAllProvinces();

            foreach ($provinces as $province)
            {
                print_r($province.", ");
            }
        ?>

        <br>
        <h1>Cities of QC</h1>
        <?php
            $object = new SalesAssociateController();
            $selectProvince = "QC";
            $cities =  $object->GetCitiesByProvince($selectProvince);

            //print_r("Show me the provinces available: ");

            foreach ($cities as $city)
            {
                print_r($city.", ");
            }
        ?>
    </body>
</html>