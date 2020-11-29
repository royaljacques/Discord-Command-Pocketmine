<?php
    
namespace cmd;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;
    
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
    
    class main extends PluginBase implements Listener {

      public function onEnable(){
         $this->getLogger()->info("Enable");
          }
        
      public function onDisable(){
          $this->getLogger()->info("disable");
      }
      
      public function onCommand(CommandSender $sender, Command $cmd, String $Label, Array $args) : bool {
         
       switch($cmd->getName()){
           case "discord":
              $sender->sendMessage("§b» Voicie le serveur discord : §chttps://discord.gg/4WZ7uZep §f! \nBon jeux. §b«");
               
    }
    return true;
      }
    }