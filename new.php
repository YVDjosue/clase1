<?php
class CuentaBancaria
{
  private $titular;
  private $saldo;

  public function __construct($titular, $saldoInicial)
  {
    $this->titular = $titular;
    $this->saldo = $saldoInicial;
  }

  public function depositar($cantidad)
  {
    $this->saldo += $cantidad;
  }

  public function retirar($cantidad)
  {
    if ($cantidad <= $this->saldo) {
      $this->saldo -= $cantidad;
    } else {
      echo "Fondos insuficientes para el retiro \n";
    }
  }

  public function consultarSaldo()
  {
    return $this->saldo;
  }
}

$cuentaBancaria = new CuentaBancaria("Josue", 1000);

$cuentaBancaria->depositar(500);
$cuentaBancaria->retirar(200);
$cuentaBancaria->retirar(2000);
echo $cuentaBancaria->consultarSaldo() . "\n";
