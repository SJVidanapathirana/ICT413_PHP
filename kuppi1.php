<?php
class BankAccount{
    public $accNumber;
    public $accBalance;

    public function Withdraw($amount){
        if ( $this->accBalance>500){
            return $this->accBalance-=$amount;
        }
            echo "you can't withdraw money ". $this->accBalance;
        
         }
    
    public function Deposit($amount){
        $this->accBalance+=$amount;
    }
    public function Balance(){
        return $this->accBalance;
    }
}
$account=new BankAccount();
$account->accNumber=1001;
$account->accBalance=200;

$account->Deposit(200);
$account->Withdraw(20000);

//echo "Accoun Number: ". $account->accNumber." </br> Account Balance: ".$account->Balance();
?>