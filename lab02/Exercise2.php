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
</head>

<body>
<form class="row g-3 needs-validation" method="post" action=" ">
    <div class="col-md-4"> <input type="text" class="form-control" id="name" name = 'name' value="" required>
    </div>
    
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">class</label>
        <input type="text" class="form-control" id="class" name = 'class'  value="" required>
    </div>

    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">university</label>
        <input type="text" class="form-control" name = 'university'  id="university" value="" required>
    </div>

    <div class="col-md-3">
    <label class="heading">hobby </label>
    <div>
        
        <input type="checkbox" name="check_list[]" value="Bóng đá"><label>Bóng đá</label>
        <input type="checkbox" name="check_list[]" value="Bóng chuyền"><label>Bóng chuyền</label>
        <input type="checkbox" name="check_list[]" value="cầu lông"><label>cầu lông</label>
        <input type="checkbox" name="check_list[]" value="Bóng rổ"><label>Bóng rổ</label>
        <input type="checkbox" name="check_list[]" value="khác"><label>khác</label>

    </div>

        
    </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" name = "city" id="validationCustom03" required>
    <div class="invalid-feedback">
    </div>
  </div>
  
  </div>
  
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" name="submit"  type="submit">Submit form</button>
  </div>
  
</form>
<?php
    if(!empty($_POST)){
        echo "Name: ".$_POST['name']."<br>";
        echo "class: ".$_POST['class']."<br>";
        echo "university: ".$_POST['university']."<br>";
        echo 'Sở thích: ';
        foreach($_POST['check_list'] as $hobby){
            echo $hobby. ';';
        }
        echo "<br>city: ".$_POST['city']."<br>";
        // var_dump($_POST);
    }
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>