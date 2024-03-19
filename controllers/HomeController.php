<?php
namespace controllers;
class HomeController {
     public function index() {
        $homeModel= new \models\HomeModel();
$products = $homeModel->getProducts();
$homeView= new \views\HomeView($products);
     }
}
include "./templates/header.html";
$this->catalog();
include "./templates/footer.html";
?>