<?php
include_once '..\Model\DbConnection.php';

class SalesAssociateController extends DbConnection
{
    //example where query does not need to pass parameter to fetch data.

    public function GetAllProvinces()
    {
        $stmt = $this->connect()->query("SELECT DISTINCT Province FROM Address");
        $list = array();

        while($row = $stmt->fetch())
        {
            $province = $row['Province'];
            array_push($list, $province);
        }
        return $list;
    }

    //example where the query does need parameters to fetch data.

    public function GetCitiesByProvince($province)
    {
        $stmt = $this->connect()->prepare("SELECT City FROM Address WHERE Province=?");
        $stmt->execute([$province]);

        $list = array();
        if($stmt->rowCount())
        {
            while($row = $stmt->fetch())
            {
                array_push($list,$row['City']);
            }
        }
        return $list;
    }
}

