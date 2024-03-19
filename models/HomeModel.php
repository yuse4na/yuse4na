<?php

// Объявление пространства имен models
namespace models;

// Объявление класса HomeModel
class HomeModel
{
    // Объявление защищенного свойства connect
    protected $connect;

    // Конструктор класса
    function __construct(){
        // Присваивание свойству connect экземпляра соединения с базой данных
        $this->connect= \\config\\DBConnect::getInstance()->getConnect();
    }
}
function getProducts() {
    // Выполняем запрос к базе данных для выборки всех записей из таблицы Products
    $query = $this->connect->query("select * from Products");

    // Проверяем, есть ли результаты запроса
    if($query->num_rows) {
        // Инициализируем пустой массив для хранения результатов
        $answer = [];
        
        // Перебираем все строки результата запроса
        while ($row = $query->fetch_assoc()) {
            // Добавляем каждую строку в массив результатов
            $answer[] = $row;
        }
    }

    // Возвращаем массив результатов
    return $answer;
}
?>