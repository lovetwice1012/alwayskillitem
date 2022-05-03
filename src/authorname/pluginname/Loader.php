<?php
declare(strict_types=1);

namespace authorname\pluginname;

use pocketmine\plugin\PluginBase;
use pocketmine\event\BlockBreakEvent;
use pocketmine\event\entity\EntitySpawnEvent;
use pocketmine\entity\object\ItemEntity;
final class Loader extends PluginBase{
    protected function onLoad() : void{
        
    }

    protected function onEnable() : void{
        
    }

    protected function onDisable() : void{
        
    }
　　 public function ItemSpawn(EntitySpawnEvent $event){
　　　　　if(!$event->getEntity() instanceof ItemEntity) return;
        $itemEntity = $event->getEntity();
	$itemEntity->kill();
    }
}
