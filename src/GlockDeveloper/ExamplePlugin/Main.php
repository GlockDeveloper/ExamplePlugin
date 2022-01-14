<?php

namespace GlockDeveloper\ExamplePlugin;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
 
 public function onEnable(): void {
  $this->getLogger()->info("Plugin Enable");
 }
 
 public function onDisable(): void {
  $this->getLogger()->info("Plugin Disable");
 }
 
}