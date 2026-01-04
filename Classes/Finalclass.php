<?php 
final class Finale{
    private float $total;
    private float $commision ;
    static private float $tax;
    public function operation($budget , $montant_transfere,$state) {
        $this->commision = $montant_transfere * 0.05 ;
        $this->tax = 0.2;
        $this->total = ($montant_transfere + $this->commision) * ($this->tax);

        if ($budget < $this->total) {
            return $state == "Pending" ;
        }
        else {
            return $state == "Completed";
        }
        
    }
}