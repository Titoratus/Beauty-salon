<?php include("db.php"); if(isset($_POST["enroll"])){ ?>
<?php
  $o_id = $_POST["enroll"];
  $query = mysqli_query($con, "SELECT * FROM options WHERE o_id='$o_id'");
  $service_name = mysqli_fetch_array($query);
?>
<div class="l-container">
<h1 id="enroll-title" class="section-title">Запись</h1>
<div class="enroll-info">
  <h2 class="enroll__title" data-service="<?php echo $service_name["service"] ?>"><?php echo $service_name["service"]; ?></h2>
  <p class="enroll__opt" data-option="<?php echo $service_name["o_name"]; ?>"><?php echo $service_name["o_name"]; ?></p>
  <p class="enroll__price" data-price="<?php echo $service_name["price"]; ?>"><?php echo $service_name["price"]; ?> руб.</p><br>
  <p class="enroll__date" data-date=""></p>
  <p class="enroll__time" data-time=""></p>
  <div class="enroll enroll_disabled">Записаться</div>
</div>
<?php
  // Вычисляем число дней в текущем месяце
  $dayofmonth = date('t');
  // Счётчик для дней месяца
  $day_count = 1;

  // 1. Первая неделя
  $num = 0;
  for($i = 0; $i < 7; $i++)
  {
    // Вычисляем номер дня недели для числа
    $dayofweek = date('w',
                      mktime(0, 0, 0, date('m'), $day_count, date('Y')));
    $main_date = date('m').date('y');
    // Приводим к числа к формату 1 - понедельник, ..., 6 - суббота
    $dayofweek = $dayofweek - 1;
    if($dayofweek == -1) $dayofweek = 6;

    if($dayofweek == $i)
    {
      // Если дни недели совпадают,
      // заполняем массив $week
      // числами месяца
      $week[$num][$i] = $day_count;
      $day_count++;
    }
    else
    {
      $week[$num][$i] = "";
    }
  }

  // 2. Последующие недели месяца
  while(true)
  {
    $num++;
    for($i = 0; $i < 7; $i++)
    {
      $week[$num][$i] = $day_count;
      $day_count++;
      // Если достигли конца месяца - выходим
      // из цикла
      if($day_count > $dayofmonth) break;
    }
    // Если достигли конца месяца - выходим
    // из цикла
    if($day_count > $dayofmonth) break;
  }

  // 3. Выводим содержимое массива $week
  // в виде календаря
  // Выводим таблицу
  $dates = array();
  $query = mysqli_query($con, "SELECT num FROM weekends");
  while($row = mysqli_fetch_array($query)){
    $dates[$row["num"]] = 1;
  }

  echo "<table class='select-month'>";
  for($i = 0; $i < count($week); $i++)
  {
    echo "<tr>";
    for($j = 0; $j < 7; $j++)
    {
      if(!empty($week[$i][$j]))
      {
        // Если имеем дело с субботой и воскресенья
        // подсвечиваем их
        if($j == 5 || $j == 6) 
             echo "<td class='busy'>".$week[$i][$j]."</td>";
        else { $curr_date = $week[$i][$j].$main_date; if(!isset($dates[$curr_date])) { echo "<td class='free' data-date='$curr_date'>".$week[$i][$j]."</td>"; } else { echo "<td class='busy'>".$week[$i][$j]."</td>"; }}
      }
      else echo "<td>&nbsp;</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>
<div class="time-blocks">
</div>
<?php
//Конец ЕСЛИ enroll
}


//Если выбрали время и нажали "Записаться"
if(isset($_POST["service"])){
?>
  <div class="record-wrap">
    <h1 class="section-title">Запись</h1>
    <div class="enroll-info">
      <h2 class="enroll__title" data-service="<?php echo $_POST["service"]; ?>"><?php echo $_POST["service"]; ?></h2>
      <p class="enroll__opt" data-option="<?php echo $_POST["option"]; ?>"><?php echo $_POST["option"]; ?></p>
      <p class="enroll__price"><?php echo $_POST["price"]; ?> руб.</p><br>
      <p class="enroll__date" data-date="<?php echo $_POST["date"]; ?>"><?php if (strlen($_POST["date"]) == 5) { $date = substr_replace($_POST["date"], ".", 1, 0); $date = substr_replace($date, ".", 4, 0); } else { $date = substr_replace($_POST["date"], ".", 2, 0); $date = substr_replace($date, ".", 5, 0); } echo $date; ?></p>
      <p class="enroll__time" data-time="<?php echo $_POST["time"]; ?>">в <?php echo substr_replace($_POST["time"], ":", 2, 0); ?></p>    
    </div>
    <h2>Укажите ваши данные</h2>
    <form action="" id="record" method="POST">
      <label class="c-label" for="record__name">Имя</label>
      <input type="text" name="record__name" class="c-input" id="record__name">
      <label class="c-label" for="record__email">Email</label>
      <input type="text" name="record__email" class="c-input" id="record__email">
      <label class="c-label" for="record__phone">Телефон</label>
      <input type="text" name="record__phone" class="c-input" id="record__phone"> 
      <input type="text" value="Записаться" class="c-input-save enroll_end">   
    </form>
  </div>
<?php
}

//Окончательная запись
if(isset($_POST["record__name"])){
  $name = $_POST["record__name"];
  $phone = $_POST["record__phone"];
  $email = $_POST["record__email"];
  $serv = $_POST["c_service"];
  $opt = $_POST["c_opt"];
  $date = $_POST["c_date"];
  $time = $_POST["c_time"];
  $query = mysqli_query($con, "INSERT INTO records (`name`, `phone`, `email`, `service`, `opt`, `date`, `time`) VALUES ('$name', '$phone', '$email', '$serv', '$opt', '$date', '$time')") or die("Не удалось записаться!");
}

if(isset($_POST["selected_day"])){
  $day = $_POST["selected_day"];
?>
<div class="time-block">
  <h2 class="time__title">Утром</h2>
  <div class="sel-time <?php echo mysqli_num_rows(mysqli_query($con, "SELECT * FROM records WHERE date='$day' AND time='1100'")) != 0 ? "sel-time_disable" : "" ?>" data-time="1100">11:00</div>
  <div class="sel-time <?php echo mysqli_num_rows(mysqli_query($con, "SELECT * FROM records WHERE date='$day' AND time='1130'")) != 0 ? "sel-time_disable" : "" ?>" data-time="1130">11:30</div>
</div>
<div class="time-block">
  <h2 class="time__title">Днём</h2>
  <?php $h = 11; for($i=1; $i<=10; $i++){ if($i % 2 == 0) { $min = "30"; } else { $h++; $min = "00"; } $time = $h.$min; ?>
    <div class="sel-time <?php echo mysqli_num_rows(mysqli_query($con, "SELECT * FROM records WHERE date='$day' AND time='$time'")) != 0 ? "sel-time_disable" : "" ?>" data-time="<?php echo $h.$min; ?>"><?php echo $h.":".$min; ?></div>
  <?php } ?>
</div>
<div class="time-block">
  <h2 class="time__title">Вечером</h2>
  <?php $h = 16; for($i=1; $i<=9; $i++){ if($i % 2 == 0) { $min = "30"; } else { $h++; $min = "00"; } $time = $h.$min; ?>
    <div class="sel-time <?php echo mysqli_num_rows(mysqli_query($con, "SELECT * FROM records WHERE date='$day' AND time='$time'")) != 0 ? "sel-time_disable" : "" ?>" data-time="<?php echo $h.$min; ?>"><?php echo $h.":".$min; ?></div>
  <?php } ?>
</div>
</div>
<?php  
}
?>
