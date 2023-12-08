<?php
namespace Controller;

use core\Database;
use core\View;

class MainController 
{
	function index(){ View::generate('index.php'); }
    function shop() { View::generate('shop.php'); }
    function faq() { View::generate('faq.php'); }
    function contacts() { View::generate('contacts.php'); }
    function cart() { View::generate('cart.php'); }
    function product() { View::generate('product.php'); }
    
	
}
