<?php
require_once __DIR__ . '/../bootstrap.php';

class ShipLoader
{
    /**
     * @return array of all ships
     */
    public function getShips() {
        $shipsDb = $this->queryForShips();

        $ships = [];

        foreach ($shipsDb as $ship){
            $newShip = new Ship();
            $newShip->setName($ship['name']);
            $newShip->setWeaponPower($ship['weapon_power']);
            $newShip->setSpatiodriveBooster($ship['spatiodrive_booster']);
            $newShip->setStrength($ship['strength']);
            $newShip->setIsUnderRepair(false);

            array_push($ships, $newShip);
        }

        return $ships;
    }

    /**
     * @return array
     */
    private function queryForShips(){
        $bdd = new PDO('mysql:host=localhost;dbname=hbstarship;charset=utf8;port=3306', 'root', '');
        $query = "SELECT * FROM ship";
        $request = $bdd->prepare($query);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }
}