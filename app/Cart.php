<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){ //Detecta si hay un carrito en la sesion
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id){ //Detecta cuando una persona anade al carro
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if($this->items) {
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id]; //Evita que los items se clonen
            }
        }
        $storedItem['qty']++; //Suma por uno cada vez
        $storedItem['price'] = $item->price * $storedItem['qty']; //Suma todo
        $this->items[$id] = $storedItem; //Agarra a id del item y lo guarda
        $this->totalQty++; //Aumenta el numero de productos por 1
        $this->totalPrice += $item->price; 
    }

    public function reduceByOne($id){ //Borra un item
       $this->items[$id]['qty']--; //Empieza a quitar
       $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
       $this->totalQty--; //Quita la cantidad por 1
       $this->totalPrice -= $this->items[$id]['item']['price']; 

       if($this->items[$id]['qty'] <=0){ //Evita que el item se quede alli, diciendo que no tiene nada
          unset($this->items[$id]);
       }
    }

    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['qty']; //Quita la cantidad por 1
        $this->totalPrice -= $this->items[$id]['price']; 
        unset($this->items[$id]);
    }
}
