<a href="edit_comments.php"> Комментарии </a>
<hr>
<?php
	include '../functions.php';
	 
	if(isset($_POST['add'])){
		$name = strip_tags(trim($_POST['name']));
		$price = strip_tags(trim($_POST['price']));
		$old_price = strip_tags(trim($_POST['old_price']));
		$brand = strip_tags(trim($_POST['brand']));
		$characteristics = strip_tags(trim($_POST['characteristics']));
		$shot_characteristics = strip_tags(trim($_POST['shot_characteristics']));
		$description = strip_tags(trim($_POST['description']));
		$color = strip_tags(trim($_POST['color']));
		$size = strip_tags(trim($_POST['size']));
		$quantity = strip_tags(trim($_POST['quantity']));
		$provider = strip_tags(trim($_POST['provider']));
		$new = $_POST['new'];
		$discont = $_POST['discont'];
		$stock = $_POST['stock'];
		$stock_post = strip_tags(trim($_POST['stock_post']));
		$visible = $_POST['visible'];
		$type = strip_tags(trim($_POST['type']));
		$category = strip_tags(trim($_POST['category']));
		$kind = strip_tags(trim($_POST['kind']));

				$link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
					if (!$link) {
					echo "Ведутся технические работы";
					die();
					}
				

			//connect($cnct);
					$val = "INSERT INTO t_products (id, name, price, old_price, brand, characteristics, shot_characteristics, description, color, size, quantity, provider, new, discont, stock, stock_post, visible, type, category, kind) 
								VALUES ('$id', '$name', '$price', $old_price, '$brand', '$characteristics', '$shot_characteristics', '$description', '$color', '$size', '$quantity', '$provider', '$new', '$discont', '$stock', '$stock_post',
								         '$visible', '$type', '$category', '$kind')";
					mysqli_query($link, $val);
					mysqli_close($link);	
				}

			else {
				echo "Ошибка! Возможно пустые поля.";
			}


?>
<form action="" method="POST">
	<input type="text" name="name" value="Название"> <br /><br />
	<input type="text" name="price" value="цена"> <br />
	<input type="text" name="old_price" value="Старая цена"> <br /><br />
	<label for="brand">Производитель:</label>
	<input type="text" name="brand" id="select_brand" list="brand_list">
	<datalist id="brand_list">
  		<option>Samsung</option>
  		<option>LG</option>
	 	<option>BOSH</option>
		<option>Производитель 3</option>
		<option>Производитель 4</option>
	</datalist>
	<br /><br />
	
	Характеристики:<br /><textarea name="characteristics" rows="12" cols="40"></textarea><br />
	Короткие характеристики:<br /><textarea name="shot_characteristics" rows="4" cols="40"></textarea><br />
	Описание:<br /><textarea name="description" rows="8" cols="40"></textarea><br /><br />
	 <input type="text" name="color" value="Цвет через запятую">
	 <input type="text" name="size" value="Размер">  
	  <br /><br />
	
	<input type="text" name="quantity" value="Количество">
	<input type="text" name="provider" value="Поставщик">
	  <br /><br />
	Новинка:<input type="checkbox" name="new">
	Скидка:<input type="checkbox" name="discont">
	Акция:<input type="checkbox" name="stock">
	<br />
	Описание акции:<br /><textarea name="stock_post" rows="4" cols="40"></textarea><br /><br />
	Тип:
	<input type="text" name="type" id="select_type" list="type_list">
	<datalist id="type_list">
  		<option>Активный отдых и туризм</option>
  		<option>Бытовая техника</option>
	 	<option>Дом, сад и огород</option>
		<option>Косметика</option>
		<option>Одежда и обувь</option>
	</datalist><br /><br />
	Кат.:
	<input type="text" name="category" id="select_category" list="category_list">
	<datalist id="category_list">
  		<option>Одежда для туризма</option>
  		<option>Освещение т</option>
	 	<option>Аксесуары </option>
		<option>Для кухни</option>
		<option>Климатическая техника</option>
		<option>Строительные инструменты</option>
		<option>Система полива</option>
		<option>Наружное освещение</option>	
	</datalist><br /><br />
	Вид:
	<input type="text" name="kind" id="select_kind" list="kind_list">
	<datalist id="kind_list">
  		<option>Ботинки</option>
  		<option>Куртки</option>
  		<option>Штаны</option>
  		<option>Фонари</option>
	 	<option>Рюкзаки</option>
	 	<option>Микроволновки</option>
	 	<option>Блендеры</option>
	 	<option>Мультиварки</option>
		<option>Кондиционеры</option>
		<option>Вентеляторы</option>
		<option>Обогреватели</option>
		<option>Дрели</option>
		<option>Шуруповерты</option>
		<option>Отвертки</option>
		<option>Шланги</option>
		<option>еще что полив</option>
		<option>еще что полив 2</option>
	</datalist><br /><br /><br />


	Опубликовать на странице<input type="checkbox" name="visible"> (по умолчанию добавиться только в базу)<br />
	<input type="submit" name="add" value="Добавить">

</form>