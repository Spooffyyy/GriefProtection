<?php

declare(strict_types=1);

namespace Terpz710\ProtectionPlus;

use pocketmine\plugin\PluginBase;
use ProtectionPlus\Command\ProtectionCommand;

class Main extends PluginBase {

    public function onEnable(): void {
        $this->getServer()->getCommandMap()->register("protection", new ProtectionCommand($this));
    }
}
