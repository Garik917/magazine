<?php session_start();?>
<a href="add_goods.php"> Комментарии </a>
<hr>
<?php
$link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
                    if (!$link) {
                    echo "Ведутся технические работы";
                    die();
                    }?>
                    <form action="" method="POST">
                    	<select name ="selected">
  						        <option  value = "SELECT * FROM `t_reviews`">Все</option>
  						        <option  value = "SELECT * FROM `t_reviews` WHERE `hidden`= '1'">Отмеченные</option>
  						        <option  value ="SELECT * FROM `t_reviews` WHERE `hidden`= '0'">Не отмеченные</option>
						        </select>
						        <input type="submit" name="show" value="Показать">
                    </form>

                     <?
                     if(isset($_POST['show'])){
                     	$sel = $_POST['selected'];
                      if ($sel ==="all") {
                        $query = "SELECT* FROM 't_reviews'";
                      }
                      else{
                        $sel= (int) $sel;
                        if (is_integer($sel) {
                          if ($sel===1){
                            $query= "SELECT* FROM 't_reviews' WHERE ";
                          }
                        }
                      }
                $result = mysqli_query($link, "$sel"); 
                mysqli_close($link);
                $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach($reviews as $key=>$val){
                  $_SESSION['id_rev'] = $reviews[$key]['id_rev'];
                  echo "ИД Коммента" . $_SESSION['id_rev'];
            ?>
                   <form action="" method="POST">
            	ID записи: <input type="text" name="id_rev" value="<?echo $reviews[$key]['id_rev'] ;?>" disabled ><br />
            	ID товара: <input type="text" name="id_good" value="<?echo $reviews[$key]['id_good'] ;?>" disabled><br />
            	<input type="text" name="user_name" value="<?echo $reviews[$key]['user_name'] ;?>"><br />
            
            	<textarea name="reviews" rows="4" cols="40"><?echo $reviews[$key]['review'] ;?></textarea><br />
            	<input type="submit" name="save" value="Сохранить">
            	  </form>
                 <?
                //+ проверку чекбокса
        if(isset($_POST['save'])){
                   $link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
                    if (!$link) {
                    echo "Ведутся технические работы";
                    die();
                    }

                   $id_rev = $_SESSION['id_rev'];
                    $name = $_POST['user_name'];
                    $comment = $_POST['reviews'];
                     $value = "UPDATE t_reviews SET user_name = '$name', review='$comment', hidden = '1' WHERE id_rev = '$id_rev'";
                    
                     
                    mysqli_query($link, $value);
                    mysqli_close($link);
                     }  
                                   
                   
        
       

        

    }
        ?>
        <?}?>

              

        