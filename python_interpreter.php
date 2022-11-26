
<?php

$ans="print('>> welcome to python interpreter')";


if(isset($_POST['submit'])){

    @$text1=$_POST['text'];
    @$text=$_POST['text'];
   
    $ans=$text;

    if(empty($_POST['text'])){

    $ans='print("empty !!!!")';

    }

    

}

?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="https://pyscript.net/latest/pyscript.js"></script>
    <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />


    <style>
        textarea{
            overflow: scroll;
        }

    </style>
    
</head>


<body style="display:flex;">

<!-- input -->
<form method="POST">
<textarea  name="text"  style="padding:10px;height:400px;width:400px;font-size:20px;color:green; overflow: scroll;"><?php echo @$text1; ?></textarea>
<input type="submit" style="background-color:red;color:white;font-size:25px;border:none;cursor:pointer;" name="submit" value="Run" >
</form>


<!-- output -->
<div class="box" style="height:400px;width:400px;border:1px solid black;margin-left:30px;padding:10px; overflow: scroll;">

<py-script style="color:blue;font-size:20px;">

<?php echo $ans;?>
                    
</py-script>


</div>




</body>
</html>
