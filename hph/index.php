<!-- Проверка на наличие 18 лет -->
<!-- <?php
if (!isset($_POST['age'])) {
  echo 'Ошибка, выберите один из вариантов';
} elseif ($_POST['age'] == 'on') {
  echo 'Добро пожаловать на сайт!';
}
?>

<form method="post" action="">
  <label for="age">Вам уже 18 лет?</label>
  <input type="checkbox" name="age">
  <button type="submit">Проверить</button>
</form> -->


<!-- Выбор пола -->

<!-- <?php
$gender = $_POST['gender'];

if (empty($gender)) {
  echo 'Вы ничего не выбрали';
} elseif ($gender == 'mmm') {
  echo 'Вы выбрали мужской пол';
} elseif ($gender == 'jjj') {
  echo 'Вы выбрали женский пол';
}
?>

<form method="post" action="">
  <label>Мужской пол:</label>
  <input type="radio" name="gender" value="mmm">
  
  <label>Женский пол:</label>
  <input type="radio" name="gender" value="jjj">
  
  <button type="submit">Отправить</button>
</form> -->