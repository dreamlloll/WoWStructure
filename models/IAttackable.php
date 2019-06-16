<?php

interface IAttackable
{
    public function isAttackable($character);

    public function onAttacked($character, int $damage);
}