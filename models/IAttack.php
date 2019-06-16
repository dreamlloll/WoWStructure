<?php

interface IAttack
{
    public function canAttack();

    public function attack($target);
}