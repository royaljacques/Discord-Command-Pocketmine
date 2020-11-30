<?php
    
namespace cmd;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;
    
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
use pocketmine\utils\Config;

class main extends PluginBase implements Listener {

	public $config;
      public function onEnable(){
         $this->getLogger()->info("Enable");
		  @mkdir($this->getDataFolder());
		  $this->getServer()->getCommandMap()->register("Discord",new Discord("discord", $this));
          }
        
      public function onDisable(){
          $this->getLogger()->info("disable");
      }
}