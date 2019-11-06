<?php
	//Тип данных - это описание, определяющее свойства и особенности работы с данными

  /*Скалярные:
	- boolean: true / false
	- integer Z= {-1,2,3.....}
	- float   $f = 0.5, -0.234
	- string набор символов
	
	Смешанные:
	- array
	- object
	
	Специальные
	-  resource
	- null */
	
  $a = 10;
    echo 'это пример строки $a';
    echo '<br>';
    echo "это пример строки $a";
    
    //Строки: экранирование
	echo '<br>';
	echo "Гость заказал \"Всем привет\" ";
	echo '<br>';
	echo 'Гость заказал \"Всем привет\" ';
	
	echo '<br>';
	//Экранирование переменных в строках
   // В 80х и 90х годах
	$a = 80;
	
	$b = 90;
	
	echo "в {$a}х и {$b}х годах";
	
	echo '<br>';
	
	//Операто склеивания

	 $firstName = "Viktor";
	 
	 $lastName = "Zinchenka";
	 
	  $fullName = $firstName .' '. $lastName;
 
	  echo $fullName;
	
	echo '<br>';
	
	 //Тип null
	//Переменная считается null если:
//ей была присвоена константа  null
// если ей еще не было присвоено никакого значения
//она была удалена с помощбю  unset()

//!!!! ПРоверить тип переменной можно с помощью функции gettype()
	unset($a);
 
	echo gettype($a);
	
	echo '<br>';
	
	echo gettype($b);
	
	echo '<br>';
	// Приведение типов
    // Возможные преобразования переменных в такие типы:
//integer, boolean, float, string, array, object, unset(null)

	$a = "5 человек"; //строка
	
	echo $a;
	
	echo '<br>';
	
	$a = (integer) $a;
	
	echo $a;
	
	echo '<br>';
	// НЕявное преобразование

	$a = "5 people"; //string
	
	$b = 10; //integer
	
	$c = $a + $b; // c - integer

	echo $c;
	
	echo '<br>';
	// ТИп array(массив)
    //Массив - это набор данных
	// Каждый элемент массива имеет ключ - свой идентификатор в массиве

// ПРостой массив

	$arr = array('Andrey', 'Boris', 'Vasiliy');
	
	echo $arr;
	
	echo '<br>';
	
	print ($arr[1]);
	echo '<br>';
// Ассоциативный массив
	
	$arr = array('name' => 'Viktor', 'age' => 24, 'gender' => 'male');
	
	echo $arr['name'];
	echo '<br>';
	
	//СОдержимое массивов
    // print и echo - можно использовать для вывода только скалярных элементов массива
	// для вывода содержимого массивов можно использовать print_r($arr) и var_damp($arr)

    print_r($arr);
	echo '<br>';
	
	echo '<pre>';
	print_r($arr);
	echo '<pre>';
	
	
	/// Добавление элементов массива
	
	$array = array('yello', 'black', 'green');
	
	/*$array = [] = 'red';*/
	
	echo '<pre>';
	 var_dump($array);
	 echo '</pre>';
	 
	 unset($array[1]);
	
	echo '<br>';
	
	echo '<pre>';
	print_r($array);
	echo '<pre>';
	
	
  // ПОдсчет количества элементов в массиве
	
	$summ = count($array);
	
	echo $summ;
	
	echo '<br>';
	
	//Многомерные массивы

	$array = [
		array('name' => 'Bob', 'age' => 20),
		array('name' => 'Jack', 'age' => 30)
	];
	
	echo '<br>';
	
	echo '<pre>';
	print_r($array);
	echo '<pre>';
	
	echo '<br>';
	
	echo '<pre>';
	print_r($array[0]);
	echo '<pre>';
	
	echo '<br>';
	
	echo '<pre>';
	print_r($array[0]['name']);
	echo '<pre>';
	
	//Тип resource (ресурс)
	//Это специальная переменная, содеражащая ссылку на внешний ресурс
	