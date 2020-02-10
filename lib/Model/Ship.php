<?php

class Ship {

    private $id;
    private $name = "";
    private $weaponPower = 0;
    private $spatiodriveBooster = 0;
    private $strength = 0;
    private $isUnderRepair = false;

    public function __construct()
    {
        $this->isUnderRepair = mt_rand(1, 100) < 30;
    }

    //////////////// SETTERS ///////////////////
    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower(int $weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @param int $spatiodriveBooster
     */
    public function setSpatiodriveBooster(int $spatiodriveBooster)
    {
        $this->spatiodriveBooster = $spatiodriveBooster;
    }

    /**
     * @param int $strength
     */
    public function setStrength(int $strength)
    {
        $this->strength = $strength;
    }

    /**
     * @param bool $isUnderRepair
     */
    public function setIsUnderRepair(bool $isUnderRepair)
    {
        $this->isUnderRepair = $isUnderRepair;
    }

    //////////////// GETTERS ///////////////////

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
    return $this->name;
    }

    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    public function getSpatiodriveBooster()
    {
        return $this->spatiodriveBooster;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getNameUppercase()
    {
        return strtoupper($this->name);
    }

    public function getIsUnderRepair()
    {
        return $this->isUnderRepair;
    }

    /**
     * @return bool
     */
    public function isFunctional()
    {
        return !$this->isUnderRepair;
    }

    /**
     * @param bool $useShortFormat
     * @return string
     */
    public function getNameAndSpecs(bool $useShortFormat = false) {

    if ($useShortFormat) {
    return sprintf(
    '%s (F:%s, BS:%s, R:%s)',
    $this->name,
    $this->weaponPower,
    $this->spatiodriveBooster,
    $this->strength);
    }
    else {
    return sprintf(
    'Vaisseau %s: (Force: %s, Booster spatiodrive: %s, Résistance: %s)',
    $this->name,
    $this->weaponPower,
    $this->spatiodriveBooster,
    $this->strength);
    }
    }

    /**
     * @param Ship $ship
     * @return bool
     */
    public function doesThisShipHasMoreStrengthThanMe(Ship $ship)
    {
    return $ship->strength > $this->strength;
    }
}