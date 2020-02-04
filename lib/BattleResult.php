<?php
require_once __DIR__ . '/../bootstrap.php';


class BattleResult {
    private $usedSpatiodriveBoosters;
    private $winningShip;
    private $losingShip;


    /**
     * BattleResult constructor.
     * @param bool $usedSpatiodriveBoosters
     * @param Ship $winningShip
     * @param Ship $losingShip
     */
    public function __construct(bool $usedSpatiodriveBoosters, Ship $winningShip, Ship $losingShip)
    {
        $this->usedSpatiodriveBoosters = $usedSpatiodriveBoosters;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return bool Was the Spatiodrive Booster Used?
     */
    public function getUsedSpatiodriveBoosters(){
        return $this->usedSpatiodriveBoosters;
}

    /**
     * @return Ship
     */
    public function getWinningShip(){
        return $this->winningShip;
    }

    /**
     * @return Ship
     */
    public function getLosingShip(){
        return $this->losingShip;
    }
}
