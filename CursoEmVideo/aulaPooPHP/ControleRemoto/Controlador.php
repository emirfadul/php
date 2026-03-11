<?php
interface Controlador
{
  public function ligar();
  public function desligar();
  public function aumentarVolume();
  public function diminuirVolume();
  public function abrirMenu();
  public function fecharMenu();
  public function play();
  public function pause();
  public function ligarMudo();
  public function desligarMudo();
}
