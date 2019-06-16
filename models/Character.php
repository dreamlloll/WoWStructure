<?php

class Character implements IAttack, IAttackable
{
    public $name;
    public $health;
    public $professions;
    public $race;
    public $class;
    public $items;
    public $account;

    public function __construct()
    {
        //
    }

    public function enterWorld()
    {

    }

    public function getAbilities()
    {
        return array_merge($this->race->abilities, $this->class->abilities);
    }

    public function canAttack()
    {
        return true;
    }

    public function attack($target)
    {
        //TODO: Calculate damage
        $target->onAttacked($this, 100);
    }

    public function isAttackable($character)
    {
        return true;
    }

    public function onAttacked($character, int $damage)
    {
        if ($this->isAttackable($character)) {

            $this->health -= $damage;

            if ($this->health < 0){

                $this->health = 0;
            }

            return true;
        }

        return false;
    }

    public function isDead()
    {
        return $this->health === 0;
    }
}
