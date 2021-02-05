<?php

class BankAccount{
    private $balance = 0;

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


$shrey = new BankAccount;
$mark = new BankAccount;

echo $shrey->Deposit(500);
echo $mark->Deposit(250);

echo $shrey->Withdraw(200);
echo $mark->Withdraw(300);

echo $shrey->DisplayBalance()."<br>";
echo $mark->DisplayBalance();

?>