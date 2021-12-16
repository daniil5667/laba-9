<form action="" method="post">
    <input type="text" name="item1" placeholder="Введите x">
    <input type="text" name="item2" placeholder="Введите количество шагов">
    <input type="submit" name="buttom" value="Ответ">
</form>

<?php
        $x = $_POST['item1'];
        $n = $_POST['item2'];
        $answer = 0;

        for($i = 1; $i <= $n; $i++){
            $inter = ((2 * $i - 1) * ($x**(2 * $i + 1)))/((2 * $i) * (2 * $i + 1));
            $answer += $inter;
        }

        echo $answer;
?>