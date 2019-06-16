<?php

class FriendlyNpc extends Npc
{
    public function canAttack()
    {
        if ($this->target->faction !== $this->faction) {

            return true;
        }

        return false;
    }

    public function attack($target)
    {
        $target->onAttacked($this, 100);
    }

    public function isAttackable($character)
    {
        if ($character->faction !== $this->faction) {

            return true;
        }

        return false;
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