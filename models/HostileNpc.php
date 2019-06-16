<?php


class HostileNpc extends Npc implements IAttack, IAttackable
{
    public function canAttack()
    {
        return true;
    }

    public function attack($target)
    {
        $target->onAttacked($this, 100);
    }

    public function isAttackable($character)
    {
        return true;
    }

    public function onAttacked($character, int $damage)
    {
        if($this->isAttackable($character)){

            $this->health -= $damage;
            return true;
        }

        return false;
    }
}