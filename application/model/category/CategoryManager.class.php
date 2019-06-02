<?php
/**
 * Category Manager
 */
class CategoryManager extends Database
{

	function __construct()
	{
		$this->createTable();
	}

	protected function createTable()
	{
		$this->getConnection()->createTable('categories', [
			"id" => "INT NOT NULL PRIMARY KEY",
			"name" => "VARCHAR(32) NOT NULL",
			"description" => "TINYTEXT"
		]);
	}

	public function hasCategory($categoryName)
	{
		return $this->getConnection()->execute("SELECT * FROM `categories` WHERE `name` = :category", [
			':category' => $categoryName]);
	}
}