<?php
/*
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);


namespace ProtocolSupport\network;


use pocketmine\network\mcpe\PlayerNetworkSessionAdapter;
use pocketmine\network\mcpe\protocol\LoginPacket;
use pocketmine\network\mcpe\protocol\ProtocolInfo;

class NetworkSessionAdapter extends PlayerNetworkSessionAdapter {

    private const SUPPORTED_PROTOCOLS = [
        407,
        408,
        410
    ];

    public function handleLogin(LoginPacket $packet): bool {
        if(in_array($packet->protocol, self::SUPPORTED_PROTOCOLS)) {
            $packet->protocol = ProtocolInfo::CURRENT_PROTOCOL;
        }

        return parent::handleLogin($packet);
    }

}