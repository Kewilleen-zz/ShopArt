<?php
/**
 * Product Manager 
 */
class ProductManager extends Database
{

	function __construct()
	{
		$this->createTable();
	}

	protected function createTable()
	{
		$this->getConnection()->createTable('products', [
			"id" => "INT NOT NULL PRIMARY KEY",
			"name" => "VARCHAR(32) NOT NULL",
			"description" => "TINYTEXT",
			"currency" => "VARCHAR(3)",
			"price" => "DECIMAL(12,2) NOT NULL",
			"img" => "VARCHAR(32)",
			"categoryId" => "INT NOT NULL",
			"stock" => "INT NOT NULL, FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`)"
		]);
	}

	public function hasProductId($id)
	{
		return $this->getConnection()->execute("SELECT * FROM `products` WHERE `id` = :id", [
			':id' => $id]);
	}
}