<?php

abstract class Npc implements IAttack, IAttackable
{
    public $name;
    public $health;
    public $faction;
    public $race;
    public $family;
    public $class;
    public $target;

    abstract public function canAttack();

    abstract public function attack($target);

    abstract public function onAttacked($character, int $damage);

    abstract public function isAttackable($character);
}
