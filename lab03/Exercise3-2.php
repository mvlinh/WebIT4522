<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            height: 700px;
            width: 700px;
        }
    </style>
</head>

<body>
    <div class="input-group">
        <span class="input-group-text">radians to degrees</span>
        <input type="text" id = "radians"  class="form-control">
        <input type="text" id = "degrees" class="form-control">
    </div>

    <!-- DateTimeFunction.php  -->
    <h2>DateTime</h2>
        <hr>
    <form class="row g-3 needs-validation" method="post" action=" ">
        <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name = 'name1' value="" required placeholder="taloy">
        </div>
        <div class="col-md-6">
        <label for="validationCustom01" class="form-label">DoB</label>
            <input type="date" class="form-control" id="name" name = 'DoB1' value="" required placeholder="dd/mm/yyyy">
        </div>
            <!-- people 2 -->
        <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name = 'name2' value="" required placeholder="smit">
        </div>
        <div class="col-md-6">
        <label for="validationCustom01" class="form-label">DoB</label>
            <input type="date" class="form-control" id="name" name = 'DoB2' value="" required placeholder="dd/mm/yyyy">
        </div>
            
  <div class="col-12">
    <button class="btn btn-primary" name="submit"  type="submit">Submit form</button>
    <button class="btn btn-danger" name="reset"  type="reset">Reset</button>
  </div>
  
</form>
        <?php
            if(!empty($_POST)){
                $date1=date_create($_POST['DoB1']);
                $date2=date_create($_POST['DoB2']);
                echo "Hi:  ".$_POST['name1']."  Birthdays:  ";
                echo date_format($date1,"l, Y/m/d");
                echo "<br><br>";
                echo "Hi:  ".$_POST['name2']."  Birthdays:  ";
                echo date_format($date2,"l, Y/m/d");
                
                echo "<br><br>";
                $first_date = strtotime($_POST['DoB1']);
                $second_date = strtotime($_POST['DoB2']);
                $datediff = abs($first_date - $second_date);
                echo "Số Ngày Lệnh Nhau là ";
                echo floor($datediff / (60*60*24));
                echo "<br><br>";
                echo "Hi  :".$_POST['name1']."Old: ";
                $today = date('Y-m-d');
                $timestamp = strtotime($today);
                $old1 = abs($timestamp - $first_date);
                echo floor($old1 / (60*60*24*365));
                
                echo "<br><br>";
                echo "Hi  :".$_POST['name2']."Old: ";
                $today = date('Y-m-d');
                $timestamp = strtotime($today);
                $old1 = abs($timestamp - $second_date);
                echo floor($old1 / (60*60*24*365));
 
            }

        ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#radians").on('keyup',function(){
            $("#degrees").val($("#radians").val()*(180/Math.PI));
        });
        $("#degrees").on('keyup',function(){
            $("#radians").val($("#degrees").val()*(Math.PI/180));
        });
});
</script>
</html>