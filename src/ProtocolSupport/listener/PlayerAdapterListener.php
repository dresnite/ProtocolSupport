<?php
/*
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);


namespace ProtocolSupport\listener;


use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCreationEvent;
use ProtocolSupport\ProtocolSupportPlayer;

class PlayerAdapterListener implements Listener {

    /**
     * @param PlayerCreationEvent $event
     * @priority LOWEST
     */
    public function onCreation(PlayerCreationEvent $event): void {
        $event->setPlayerClass(ProtocolSupportPlayer::class);
    }

}