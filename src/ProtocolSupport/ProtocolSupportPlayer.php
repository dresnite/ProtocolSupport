<?php
/*
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);


namespace ProtocolSupport;


use pocketmine\network\SourceInterface;
use pocketmine\Player;
use ProtocolSupport\network\NetworkSessionAdapter;

class ProtocolSupportPlayer extends Player {

    public function __construct(SourceInterface $interface, string $ip, int $port) {
        parent::__construct($interface, $ip, $port);

        $this->sessionAdapter = new NetworkSessionAdapter($this->server, $this);
    }

}