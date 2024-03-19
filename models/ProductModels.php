<?php

namespace models;

class ProductModel
{
    protected $connect;
    function __construct(){
        // Подключаемся к базе данных при создании объекта класса ProductModel
        $this->connect=\config\DBConnect::getInstance()->getConnect();
    }
  
    function getProduct($data){

        // Выполняем SQL запрос для получения информации о продукте по его ID, а также его категории
        $query = $this->connect->query("
            SELECT * 
            FROM Products 
            JOIN Categories ON Products.id_category = Categories.id_category
            WHERE Products.ID = $data
        ");
        
        // Инициализируем переменную $answer, которая будет хранить результат запроса
        $answer = array();

        // Проверяем, если есть результаты запроса
        if($query->num_rows) {
            // Если есть, перебираем каждую строку результата и сохраняем ее в массив $answer
            while ($row = $query->fetch_assoc()) {
                $answer = $row;
            }
        }
        // Возвращаем результат запроса
        return $answer;
    }
}
?>