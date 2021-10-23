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
<form class="row g-3 needs-validation" method="post" action=" ">
    <div class="col-md-12">
        <label for="validationCustom01" class="form-label">name</label>
        <input type="text" class="form-control" id="name" name = 'name' value="" required>
    </div>
    <div class="col-md-1 ">
       <h4>
           Date:
       </h4>
    </div>
    <div class="col-md-3">
        <select class="form-select" aria-label="Default select example" name = "date">
           <?php
                for($i = 0; $i <31; $i++){
                    ?>
                        <option value="<?php echo $i+1?>"><?php echo $i+1?></option>
                    <?php
                }
           ?>
        </select>
    </div>
    
    <div class="col-md-4">
        <select class="form-select" aria-label="Default select example" name = "month">
        <?php
                for($i = 0; $i <12; $i++){
                    ?>
                        <option value="<?php echo $i+1?>"><?php echo $i+1?></option>
                    <?php
                }
           ?>
         </select>
    </div>

    <div class="col-md-4">
            <select class="form-select" aria-label="Default select example" name = "year">
            <?php
                for($i = 1999; $i <2021; $i++){
                    ?>
                        <option value="<?php echo $i+1?>"><?php echo $i+1?></option>
                    <?php
                }
           ?>
            </select>
    </div>

    <!-- time -->
  <div class="col-md-1 ">
       <h4>
           Time:
       </h4>
    </div>
    <div class="col-md-3">
        <select class="form-select" aria-label="Default select example" name = "hour">
           <?php
                for($i = 0; $i <24; $i++){
                    ?>
                        <option value="<?php echo $i?>"><?php echo $i?></option>
                    <?php
                }
           ?>
        </select>
    </div>
    
    <div class="col-md-4">
        <select class="form-select" aria-label="Default select example"  name = "min">
        <?php
                for($i = 0; $i <60; $i++){
                    ?>
                        <option value="<?php echo $i?>"><?php echo $i?></option>
                    <?php
                }
           ?>
         </select>
    </div>

    <div class="col-md-4">
            <select class="form-select" aria-label="Default select example"  name = "second">
            <?php
                for($i = 0; $i <60; $i++){
                    ?>
                        <option value="<?php echo $i?>"><?php echo $i?></option>
                    <?php
                }
           ?>
            </select>
    </div>
    <!-- time -->
  <div class="col-3">
    <button class="btn btn-primary" name="submit"  type="submit">Submit form</button>
  </div>
  <div class="col-3">
    <button class="btn btn-danger" name="submit"  type="reset">reset</button>
  </div>
  
</form>
<?php
    if(!empty($_POST)){
        echo "Hi: ".$_POST['name'].'<br>';
        echo "You have choose to have an appointment on ".$_POST['hour'].":".$_POST['min'].":".$_POST['second'].":"."  ".$_POST['date']."/".$_POST['month']."/".$_POST['year'];
        echo "<br> More infomation: <br>";
        echo "In 12 hours, the time end date is";
        if($_POST['hour'] >= 12){
            echo $_POST['hour'] - 12;
        }
        else echo $_POST['hour'] - 12;
        echo ":".$_POST['min'].":".$_POST['second'].":"."  ".$_POST['date']."/".$_POST['month']."/".$_POST['year'];
        echo "Thí month is ";
        if($_POST['month'] == 2 && $_POST['year']%4 == 0){
            echo '29 day';
        }
        else if($_POST['month'] == 2){
            echo '28 day';
        }
        else if($_POST['month'] == 4||$_POST['month'] == 6||$_POST['month'] == 9||$_POST['month'] == 11){
            echo ' 30day';
        }
        else echo"31 day";
    }
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>