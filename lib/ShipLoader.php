<?php
require_once __DIR__ . '/../bootstrap.php';

class ShipLoader
{
    /**
     * @return Ship[]
     */
    public function getShips() {
        $shipsDb = $this->queryForShips();

        $ships = [];

        foreach ($shipsDb as $ship){
            array_push($ships, $this->arrayToShip($ship));
        }

        return $ships;
    }

    /**
     * @return Ship[]
     */
    private function queryForShips(){
        $bdd = new PDO('mysql:host=localhost;dbname=hbstarship;charset=utf8;port=3306', 'root', '');
        $query = "SELECT * FROM ship";
        $request = $bdd->prepare($query);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return Ship
     */
    public function findOneById(int $id){
        $bdd = new PDO('mysql:host=localhost;dbname=hbstarship;charset=utf8;port=3306', 'root', '');
        $query = "SELECT * FROM ship WHERE id = :id";
        $request = $bdd->prepare($query);
        $request->execute([
            ":id" => $id,
        ]);
        $shipArray = $request->fetch(PDO::FETCH_ASSOC);

        // Si aucun ship n'est trouvé en bdd...
        if (!$shipArray) {
            return null;
        }

        return $this->arrayToShip($shipArray);
    }

    /**
     * Transforms array to Ship object
     * @param array $shipArray
     * @return Ship
     */
    public function arrayToShip(array $shipArray){
        $newShip = new Ship();
        $newShip->setId($shipArray['id']);
        $newShip->setName($shipArray['name']);
        $newShip->setWeaponPower($shipArray['weapon_power']);
        $newShip->setSpatiodriveBooster($shipArray['spatiodrive_booster']);
        $newShip->setStrength($shipArray['strength']);
        return $newShip;
    }
}