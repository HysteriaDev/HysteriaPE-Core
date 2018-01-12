<?php

namespace Hysteria;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;

class Core extends PluginBase {
    
    const PERM_RANK = C::BOLD . C::RED . "Permission> " . C::RESET . C::GRAY . "You Need A Rank To Access This Command";
    const PERM_STAFF = C::BOLD . C::RED . "Permission> " . C::RESET . C::GRAY . "Only Staff Can Use This Command";
    const USE_IN_GAME = C::BOLD . C::RED . "Command> " . C::RESET . C::GRAY . "Use Command In Game";
    
    public function onEnable() {
        $this->getLogger()->info(C::BOLD . C::RED"Enabled!");
        
    //More To Be Done//
