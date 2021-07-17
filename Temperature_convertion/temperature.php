<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="temperature.css">
</head>
<body>
    <h1>TEMPERATURE CONVERTION</h1>
        <div class="main">
            <div class="left-side">
                <img src="https://www.thoughtco.com/thmb/XF7H1ApfVDCXpBhhJsUKU243dps=/768x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/close-up-of-a-measuring-thermometer-140671149-593ecb495f9b58d58a52563c.jpg">

            </div>
            <div class="right-side">
                <form method="POST">
                <input type="text" name="num" placeholder="enter temperature" class="input1">
                <div class="selection">
                    <label>celc</label>
                    <input type="radio" value="cel" name="units">
                    <label>faren</label>
                    <input type="radio" value="farh" name="units">
                </div>
                <input type="submit" value="convert now" name="submit" class="btn">

                </form>
                <div class="end">
                    <p>
                        <?php
                        if(isset($_POST['submit']))
                        {
                            $num=$_POST['num'];
                            $selection=$_POST['units'];
                            if($selection=="cel")
                            {
                                $result=$num*9/5+32;
                                echo "$num degree celsius is equal to $result degree fahrenheit </br>";
                            }
                            elseif($selection=="farh")
                            {
                                $result=($num-32)*5/9;
                                echo "$num degree fahrenheit is equal to $result degree celsius </br>";
                            }
                        }



                        ?>
                    </p>
                </div>
            </div>
        </div>
    
</body>
</html>