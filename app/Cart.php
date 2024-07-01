<?php

namespace App;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	// thêm
	public function add($item, $id, $qty){
		if ($item->promotion_price == 0) {
			$giohang = ['qty'=>0, 'price' => $item->unit_price, 'item' => $item];
		}
		else {
			$giohang = ['qty'=>0, 'price' => $item->promotion_price, 'item' => $item];
		}
		
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty'] += $qty;

		if ($item->promotion_price == 0) {
			$giohang['price'] = $item->unit_price * $giohang['qty'];
		}
		else {
			$giohang['price'] = $item->promotion_price * $giohang['qty'];
		}

		$this->items[$id] = $giohang;
		$this->totalQty += $qty;

		if ($item->promotion_price == 0) {
			$this->totalPrice += $item->unit_price * $giohang['qty'];
		}
		else {
			$this->totalPrice += $item->promotion_price * $giohang['qty'];
		}
	}

	// giảm 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;

		if ($this->items[$id]['item']['promotion_price'] == 0) {
			$this->items[$id]['price'] -= $this->items[$id]['item']['unit_price'];
		}
		else {
			$this->items[$id]['price'] -= $this->items[$id]['item']['promotion_price'];
		}

		$this->totalQty--;

		if ($this->items[$id]['item']['promotion_price'] == 0) {
			$this->totalPrice -= $this->items[$id]['item']['unit_price'];
		}
		else {
			$this->totalPrice -= $this->items[$id]['item']['promotion_price'];
		}
		
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}

	}

	// xóa sản phẩm
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}

	public function update($item, $id, $qty){
		$price = $item->promotion_price!=0?$item->promotion_price:$item->unit_price;
		$giohang = ['qty'=>0, 'price' => $price, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$qty -= $giohang['qty'];
		$giohang['qty'] += $qty;
		$giohang['price'] = $price * $giohang['qty'];
		$this->items[$id] = $giohang;
		$this->totalQty += $qty;
		$this->totalPrice += $price*$qty;
	}
}
