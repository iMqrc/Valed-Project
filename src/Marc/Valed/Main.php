<?php

namespace Marc\Valed;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;

use pocketmine\command\Command;

use pocketmine\command\CommandSender;
use pocketmine\event\Listener;

use pocketmine\level\sound\GhastSound;
use pocketmine\level\sound\AnvilBreakSound;
use pocketmine\math\Vector3;

class main extends PluginBase implements Listener {

    public function onEnabled(){
        $this->getLogger()->info("Valed Project is now enabled");
    }
    public function onDisable(){
        $this->getLogger()->info("Valed Project has disabled");
       
    } 
    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

        switch($cmd->getName()){
            case "valed":
               if($sender instanceof Player){
                $this->form($sender);
               } else {
                 $sender->sendMessage("You aren't a human D:");
               }     
                break;
           }
    return true;
      }
  //Part 1  
  public function form(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
            switch($result){
              case 0:
                    $this->one($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
      }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§ePart I - §6Man and his Actions\n\n§l§eChoose the Correct Answer. Good Luck <3 ");
        $form->addButton("§l§aNext",0 , "textures/ui/regeneration_effect");
        $form->sendToPlayer($player);
        return $form;
    }
//this is the main function
    public function one(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
              switch($result){
              case 0:
                    $this->two($player);    
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
  
              case 1:
                    $this->one($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 2:
                    $this->one($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 3:
                    $this->one($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2Man is a substantial union of");
        $form->addButton("§l§fBody and soul");
        $form->addButton("§l§fIntellect and will");
        $form->addButton("§l§fVegetative and sensient");
        $form->addButton("§l§fGrowth and Nutrition");
        $form->sendToPlayer($player);
        return $form;
    }
//this is the main function
    public function two(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
              switch($result){
              case 0:
                    $this->two($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
                      
              break;
  
              case 1:
                    $this->three($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 2:
                    $this->two($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 3:
                    $this->two($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2It is an internal sense which refers to the capacity to construct and reproduce images. ");
        $form->addButton("§l§fCommon Sense");
        $form->addButton("§l§fImagination");
        $form->addButton("§l§fInstinct");
        $form->addButton("§l§fMemory");
        $form->sendToPlayer($player);
        return $form;
    }
     //this is the main function
    public function three(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
             switch($result){
              case 0:
                    $this->formtwo($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
  
              case 1:
                    $this->three($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 2:
                    $this->three($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 3:
                    $this->three($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2One of the great twin powers of the soul which enables man to reason out what he observes, to seek purpose and to put order into his thoughts.");
        $form->addButton("§l§fIntellect");
        $form->addButton("§l§fEmotions");
        $form->addButton("§l§fSenses");
        $form->addButton("§l§fWill");
        $form->sendToPlayer($player);
        return $form;
    }
//Part 2
    public function formtwo(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
            switch($result){
              case 0:
                    $this->four($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
      }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§ePart II - §6Human Dignity\n\n§l§e - Choose the Correct answer! Good Luck <3");
        $form->addButton("§l§aNext",0 , "textures/ui/regeneration_effect");
        $form->sendToPlayer($player);
        return $form;
    }
public function four(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
              switch($result){
              case 0:
                    $this->four($player);    
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
  
              case 1:
                    $this->four($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 2:
                    $this->four($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 3:
                    $this->five($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2The following are violations of human dignity EXCEPT one.");
        $form->addButton("§l§fProstitution");
        $form->addButton("§l§fBullying");
        $form->addButton("§l§fHuman Trafficking");
        $form->addButton("§l§fAlliance to the United Nations");
        $form->sendToPlayer($player);
        return $form;
    }
//this is the main function
    public function five(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
              switch($result){
              case 0:
                    $this-five($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
                      
              break;
  
              case 1:
                    $this->five($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 2:
                    $this->five($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 3:
                    $this->six($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2Suppose you believe and uphold that races should be ranked and accept that one culture is superior to other cultures. Unconsciously you practice which principle?");
        $form->addButton("§l§fInequaltiy");
        $form->addButton("§l§fDiscrimination");
        $form->addButton("§l§fPrejudice");
        $form->addButton("§l§fAll of the Above");
        $form->sendToPlayer($player);
        return $form;
    }
     //this is the main function
    public function six(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
             switch($result){
              case 0:
                    $this->six($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
  
              case 1:
                    $this->six($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 2:
                    $this->formthree($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 3:
                    $this->six($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2A poor girl resides in a community where there is no safe and clean water to drink. If she asks you to clean water to drink, what should be the right word to say?");
        $form->addButton("§l§fWhy don’t you ask water from the barangay officials?");
        $form->addButton("§l§fYou should go to the DSWD and ask for help.");
        $form->addButton("§l§fGive me your empty galloon, and I will fill it up.");
        $form->addButton("§l§fWhy do you stay in a place where there is no clean water?");
        $form->sendToPlayer($player);
        return $form;
    }
//Part 3
    public function formthree(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
            switch($result){
              case 0:
                    $this->seven($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
      }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§ePart III - §6Happines and Purpose\n\n§l§e - Read the list below and identify the kinds of goods each item possesses.");
        $form->addButton("§l§aNext",0 , "textures/ui/regeneration_effect");
        $form->sendToPlayer($player);
        return $form;
    }
//this is the main function
    public function seven(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
              switch($result){
              case 0:
                    $this->eight($player);    
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
  
              case 1:
                    $this->seven($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2Director's List");
        $form->addButton("§l§fNatural Good");
        $form->addButton("§l§fSupernatural Good");
        $form->sendToPlayer($player);
        return $form;
    }
//this is the main function
    public function eight(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
              switch($result){
              case 0:
                    $this->eight($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
                      
              break;
  
              case 1:
                    $this->nine($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2Truth, Excellence, Service ");
        $form->addButton("§l§fNatural Good");
        $form->addButton("§l§fSuper Natural Good");   
        $form->sendToPlayer($player);
        return $form;
    }
     //this is the main function
    public function nine(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
             switch($result){
              case 0:
                    $this->nine($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
  
              case 1:
                    $this->formfour($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2Academic Honesty");
        $form->addButton("§l§fNatural Good");
        $form->addButton("§l§fSuper Natural Good");    
        $form->sendToPlayer($player);
        return $form;
    }
//Part 4
  public function formfour(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
            switch($result){
              case 0:
                    $this->ten($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
      }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§ePart IV - §6Human Acts\n\n§l§e - §l§e- Among the actions given, identify whether it is an Act of Man (AOM) or a Human Act (HA). Choose Act of Man or Human Act.");
        $form->addButton("§l§aNext",0 , "textures/ui/regeneration_effect");
        $form->sendToPlayer($player);
        return $form;
    }
//this is the main function
    public function ten(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
              switch($result){
              case 0:
                    $this->ten($player);    
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
  
              case 1:
                    $this->eleven($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2Seeing");
        $form->addButton("§l§fHuman Acts");
        $form->addButton("§l§fActs of Man");
        $form->sendToPlayer($player);
        return $form;
    }
//this is the main function
    public function eleven(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
              switch($result){
              case 0:
                    $this->twelve($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
                      
              break;
  
              case 1:
                    $this->eleven($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2Walking ");
        $form->addButton("§l§fHuman Acts");
        $form->addButton("§l§fActs of Man");   
        $form->sendToPlayer($player);
        return $form;
    }
     //this is the main function
    public function twelve(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
             switch($result){
              case 0:
                    $this->twelve($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
  
              case 1:
                    $this->formfive($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2Burping");
        $form->addButton("§l§fHuman Acts");
        $form->addButton("§l§fActs of Man");    
        $form->sendToPlayer($player);
        return $form;
    }
  //Part 5
  public function formfive(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
            switch($result){
              case 0:
                    $this->thirteen($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
      }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§ePart V - §6Determinants of the Morality of Human Acts & Habit Formation\n\n§l§eDetermine if it is a Cue, Routine or Reward. Good Luck <3 ");
        $form->addButton("§l§aNext",0 , "textures/ui/regeneration_effect");
        $form->sendToPlayer($player);
        return $form;
    }
//this is the main function
    public function thirteen(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
              switch($result){
              case 0:
                    $this->fourteen($player);    
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
  
              case 1:
                    $this->thirteen($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 2:
                    $this->thirteen($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                              
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2Tiredness");
        $form->addButton("§l§fCue");
        $form->addButton("§l§fRoutine");
        $form->addButton("§l§fReward");
        $form->sendToPlayer($player);
        return $form;
    }
//this is the main function
    public function fourteen(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
              switch($result){
              case 0:
                    $this->fourteen($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
                      
              break;
  
              case 1:
                    $this->fifteen($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 2:
                    $this->fourteen($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                              
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2I sleep");
        $form->addButton("§l§fCue");
        $form->addButton("§l§fRoutine");
        $form->addButton("§l§fReward");
        $form->sendToPlayer($player);
        return $form;
    }
     //this is the main function
    public function fifteen(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }
             switch($result){
              case 0:
                    $this->formsix($player);
                    $player->getLevel()->addSound(new AnvilBreakSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
  
              case 1:
                    $this->fifteen($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              case 2:
                    $this->fifteen($player);
                    $player->getLevel()->addSound(new GhastSound(new Vector3($player->getX(), $player->getY(), $player->getZ())));
              break;
                  
              }
        });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2I have good taste in my mouth");
        $form->addButton("§l§fReward");
        $form->addButton("§l§fCue");
        $form->addButton("§l§fRoutine");
        $form->sendToPlayer($player);
        return $form;
    }
    public function formsix(Player $player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true; 
            }                              
            });
        $form->setTitle("§l§cValues §a& §fEducation");
        $form->setContent("§l§2I'm Kerven Jayoma and this is my project for Values and Education\nI've been working on this project for 3 days, and I'm almost done\n\n§6Features Planned\n\n§r§e- Tell you're score\n- It will output into a file with the player name on it\n- Premission to view the answer key if ur a teacher.\n- Suggest more!");
        $form->addButton("§l§cSubmit");
        $form->sendToPlayer($player);
        return $form;
    }
}
  



