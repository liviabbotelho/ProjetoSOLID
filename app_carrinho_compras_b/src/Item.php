<?php

namespace App;

class Item{
   
   private $descricao;
   private $valor;

   public function __construct(){
      $this->descricao = '';
      $this->valor = 0;
   }

   /*
   public function __construct(string $descricao, float $valor){
      $this->descricao = $descricao;
      $this->valor = $valor;
   }*/
   public function getDecricao(){
      return $this->descricao;
   }
   public function getValor(){
      return $this->valor;
   }
   public function setDescricao(string $descricao){
      $this->descricao = $descricao;
   }
   public function setValor(float $valor){
      $this->valor = $valor;
   }

}