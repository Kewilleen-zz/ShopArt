<?php
/**
 * Product object
 */
class Product 
{
	private $id;
	private $name;
	private $description;
	private $currency;
	private $price;
	private $img;
	private $category;
	private $stock;

	function __construct($id, $name, $description = '', $currency = '', $price, $img = '', Category $category, $stock = '')
	{
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->currency = $currency;
		$this->price = $price;
		$this->img = $img;
		$this->category = $category;
		$this->stock = $stock;
	}
}