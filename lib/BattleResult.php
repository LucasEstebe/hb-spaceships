<?php
require_once __DIR__ . '/../bootstrap.php';

class BattleResult {
    private $usedSpatiodriveBoosters;
    private $winningShip;
    private $losingShip;

    public function __construct(bool $usedSpatiodriveBoosters, Ship $winningShip, Ship $losingShip)
    {
        $this->usedSpatiodriveBoosters = $usedSpatiodriveBoosters;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }
    public function getUsedSpatiodriveBoosters(){
        return $this->usedSpatiodriveBoosters;
}
    public function getWinningShip(){
        return $this->winningShip;
    }
    public function getLosingShip(){
        return $this->losingShip;
    }
}
