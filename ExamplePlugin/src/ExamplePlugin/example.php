<?php

namespace ExamplePlugin;

use pocketmine\plugin\PluginBase as PlgBase;
use pocketmine\event\Listener as ListN;
use pocketmine\Player;

use pocketmine\item\Item;

use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\event\player\PlayerItemHeldEvent;

class example extends PlgBase implements ListN{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function PlayerDrop(PlayerDropItemEvent $event){
        if($event->givePlayer()->getInventory()->getItemInHand()->getId() == 264){
            $event->setCancelled(true);
        }
    }
    
}

