<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset = "UTF-8">
        <style>
        table
        {border:1px solid black;
            width: 200px;
            height: 210px;
            background-color: beige;
        }
       td, th {
            align-content: center;
            text-align: center;
        }
    </style>
</head>
<body>
<h3>Игнатова А.И.</h3>
<form action='' method='post'>
     <table align="center">
         <tr> <td> <input type="number" step="any" name="number1" class="numbers" placeholder="Первое число" width="300" align="center"></td></tr>
         <tr>
            <td>
            <select class="operations" name="operation" >
            <option value='plus'>+</option>
            <option value='minus'>-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            </select>
            </td>
         </tr>
         <tr>
             <td>
             <input type="number" step="any" name="number2" class="numbers" placeholder="Второе число" width="300" align="center">
             </td>
         </tr>
         <tr><td>
                 <input class="submit_form" type="submit" name="submit" value="Получить ответ"  width="300" align="center"></td></tr>
         <?php
         ini_set('display_errors', 0);
         ini_set('display_startup_errors', 0);
         error_reporting(0);
         if(isset($_POST['submit'])){
             $number1 = $_POST['number1'];
             $number2 = $_POST['number2'];
             $operation = $_POST['operation'];
             $_POST['number1']=43;
             if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
                 $result = 'Не все поля заполнены';
             }
             else {
                 switch($operation){
                     case 'plus':
                         $result = $number1 + $number2;
                         break;
                     case 'minus':
                         $result = $number1 - $number2;
                         break;
                     case 'multiply':
                         $result = $number1 * $number2;
                         break;
                     case 'divide':
                         if( $number2 == '0')
                             $result = "На ноль делить нельзя!";
                         else
                             $result = $number1 / $number2;
                         break;
                 }

             }
         }
         ?>

         <tr align='center'><td>
                 <input class='submit_form' readonly='readonly' value='<?php echo $result ?>'></td></tr>
     </table>
</form>
</body>
</html>


