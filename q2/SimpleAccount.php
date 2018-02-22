<?php

class SimpleAccount{ 
     
    public $balance = ""
    
    public function __construct() {
    }

     public function deposit()
     {
      return 'Balance: '. $this->balance;
     }  

     public function withdrawal($amount)
     {
       if (($this->balance)<$amount){ 
          echo 'Not enough money'; 
       } else { 
    
        $this->balance=$this->balance - $amount;
      }
       public function getBalance()
      {
      return 'Balance: '. $this->balance;
      }  
  }
}
