<?php
declare(strict_types=1);

namespace authorname\pluginname;

use pocketmine\plugin\PluginBase;
use pocketmine\event\BlockBreakEvent;
final class Loader extends PluginBase{
    protected function onLoad() : void{
        
    }

    protected function onEnable() : void{
        
    }

    protected function onDisable() : void{
        
    }
    public function onBreak(BlockBreakEvent $event){
        foreach($event->getDrops() as $key => $item){
            $item->kill();    
        }
    }
}
