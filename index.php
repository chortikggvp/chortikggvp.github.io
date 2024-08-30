<?php
    session_start();
    ini_set('error_reporting', E_ALL);
    ini_set( 'display_errors', 1 );
?>
<?php
include("data.php");
include("index1.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: gray;">
    <script>if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }</script>
</body>
</html>
<?php
    
    if(isset($_POST["E"])){
        $name = $_POST["asd"];
        $password = $_POST["passwd"];
        
        
        if(empty($name)){
            echo"напиши ник <br>";
        }
        elseif(empty($password)){
            echo"напиши пароль","<br>";
        }
        
        else {
            $debug = 0;
            
            foreach (str_split($name) as $char) {
                if ($char == " "){
                    $debug = 1;
                    echo"ты НЕ МОЖЕШЬ ставить пробелы в свой ник... извини... твои данные не были введены в базу данных так что ты можешь переписать по другому (если хочешь) НО БЕЗ ПРОБЕЛОВ";
                };
            };
            if(!$debug){
                $name = filter_input(INPUT_POST, "asd", FILTER_SANITIZE_SPECIAL_CHARS);
                $password = filter_input(INPUT_POST, "passwd", FILTER_SANITIZE_SPECIAL_CHARS);
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username,password,status)
                
                VALUES ('$name','$hash','online')";
                try{
                    mysqli_query($con, $sql);
                    echo"Registration complete go to login and login there lol <br>";
                }
                catch(mysqli_sql_exception){
                    echo"Ой, кажется этот пользователь уже зарегистрирован, зайди на страницу логина и зайди в свой акк (если ты перезагрузил страницу то сайт посчитал что ты зарегался ещё раз если это так проигнорируй это)";
                }
                
                
                
                
                echo isset($_POST["E"]);
            };
            
            
            
            mysqli_close($con); 
        }
        
    }


?>