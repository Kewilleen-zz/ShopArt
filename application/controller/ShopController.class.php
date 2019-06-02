<?php
/**
 * Shop Manager
 */
class ShopController extends Controller
{
	private $category;
	private $product;

	function __construct()
	{
		$this->category = new CategoryManager();
		$this->product = new ProductManager();
	}

	public function index()
	{
		$this->loadTemplate('loja/index');
	}

	public function servidores()
	{
		$args = func_num_args();
		if ($args > 3 && $args < 5) {
			$data = [];
			$server = func_get_arg(0);
			$categoryName = func_get_arg(1);
			$productId = func_get_arg(2);
			$qnt = func_get_arg(3);
			if($this->category->hasCategory($categoryName)) {
			} else {
				$data['error'] = str_replace("{category}", $categoryName, $this->getLanguage()->getTranslation()->CATEGORIES->NOTFOUND);
			}
			$this->loadTemplate("loja/product", $data);
		} else {
			$this->error404();
		}
	}
}