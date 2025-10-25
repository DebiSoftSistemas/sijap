<?php
//__NM____NM__FUNCTION__NM__//
class Igtech_AmortizaAlemana{
    public  $Monto;
    public  $Tasa;
    public  $Plazo;
    public  $Gracia;
    public  $Tefectiva;
    public  $Nperiodos;
    public  $DiasAmortiza;
    public  $fechaInicio;
    public  $Seguro;
    public  $TotalInteres;
    public  $TotalCapital;
    public  $TotalSeguro;
    public  $TotalCuota;
    public  $resultado;

    public function __construct(
         $_monto,
         $_tasa,
         $_plazo,
         $_gracia,
         $_fecha,
         $_diasamortiza,
         $_seguro
    ) {
        $this->Monto = $_monto;
        $this->DiasAmortiza = $_diasamortiza;
        $this->fechaInicio = $_fecha;
        $this->Plazo = $_plazo;
        $this->Tasa = $_tasa / 100;
        $this->Gracia = $_gracia;
        $this->Seguro = $_seguro / 100;
        $this->Nperiodos = $this->Plazo - $this->Gracia;
    }

    public function TablaResultados(): array
    {
        $monto = $this->Monto;
        $this->TotalInteres = 0;
        $this->TotalCapital = 0;
        $this->TotalSeguro = 0;
        $this->TotalCuota = 0;
        $diferencia = $monto - round($monto / $this->Nperiodos, 2) * $this->Nperiodos;
		
        for ($i = 1; $i <= $this->Plazo; $i++) {
            $seguro = round($monto * $this->Seguro / (360 / $this->DiasAmortiza), 2);
            $interes = round($monto * $this->Tasa / (360 / $this->DiasAmortiza), 2);
			
            if ($this->Gracia > $i - 1) {
                $capital = 0;
            } else {
                $capital = ($i === $this->Plazo) 
                    ? round($this->Monto / $this->Nperiodos, 2) + $diferencia
                    : round($this->Monto / $this->Nperiodos, 2);
            }
			
            $dividendo = $capital + $interes + $seguro;
            $mactual = $monto - $capital;

            $this->resultado[$i - 1] = [
                sprintf("%.2f", $capital),
                sprintf("%.2f", $interes),
                sprintf("%.2f", $seguro),
                sprintf("%.2f", $dividendo),
                sprintf("%.2f", $monto)
            ];

            $monto = $mactual;
        }

        return $this->resultado;
    }
}
?>