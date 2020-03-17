<?php

namespace Crow

use pocketmine\command\Command;

use pocketmine\command\CommandSender;

use pocketmine\plugin\PluginBase;

use pocketmine\utils\TextFormat as A;

class Main extends PluginBase

    {

    public function onEnable()

    {

      $this->getLogger()->info("Aktiviert")

    }

    public function onCommand(CommandSender $sender,Command $cmd,string $label,array $args) :bool

    {

      switch($cmd->GetName()){

        case "Heal":

            $sender->sendMessage(A::YELLOW . "Du Hast" . A::AQUA . "$sender->GetName()" . A::YELLOW . "Geheilt");

            $sender->setHealt(20);

         }

      }

  }
