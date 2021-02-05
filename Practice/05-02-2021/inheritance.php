<?php

class BankAccount{
    private $balance = 0;
    public $type = "";

    public function SetType($type){
        $this->type = $type;
    }
    public function DisplayBalance(){
        return "Balance: ".$this->balance;
    }

    public function Withdraw($amt){
        if($this->balance < $amt){
            echo "Not enough Balance<br>";
        }
        else{
            $this->balance = $this->balance - $amt;
            echo $amt." has been withdraw from your account<br>";
        }
    }

    public function Deposit($amt){
        $this->balance = $this->balance + $amt;
        echo $amt." has been deposited to your account<br>";
    }
}

class SavingsAccount extends BankAccount{
   
}


$shrey = new BankAccount;
$shrey_saving = new SavingsAccount;

$shrey->SetType('Current');
$shrey_saving->SetType('Savings');

echo $shrey->Deposit(500);
echo $shrey_saving->Deposit(250);

echo $shrey->Withdraw(200);
echo $shrey_saving->Withdraw(300);

echo $shrey->DisplayBalance() ." in ". $shrey->type ."<br>";
echo $shrey_saving->DisplayBalance() ." in ". $shrey_saving->type;

?>