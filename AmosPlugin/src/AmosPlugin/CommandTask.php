<?php

declare(strict_types=1);

namespace AmosPlugin;

use pocketmine\scheduler\Task;
use pocketmine\Server;

class CommandTask extends Task{

	/** @var Server */
	private $server;

	public function __construct(Server $server){
		$this->server = $server;
	}

	public function onRun(int $currentTick) : void{
		$this->server->broadcastMessage("[AmosPlugin] I've run on tick " . $currentTick);
	}
}