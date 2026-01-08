<?php 
final class Finaleclass{
    private float $total;
    private float $commision;
    private static float $tax;

    public function operation($budget, $montant_transfere) {
        $this->commision = $montant_transfere * 0.05 ;
        self::$tax = 0.2;
        $this->total = ($montant_transfere + $this->commision) * ($this->tax);
        $result =$budget - ($this->total);
        if ($result<0) {
            return false;
        }
        else {
            return $result ;
        }
        
    }
}