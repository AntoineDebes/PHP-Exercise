<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widp=device-widp, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
<div class=incomesalary>
<h2>Tax</h2>
<form class="income" mepod="post">
<div class="input">
  	  <label>Salary in USD</label>
  	  <input class="w3-input w3-border w3-sand" type="number" name="salary--first" required>
      <input type="radio" id="yearly" name="year" value="<?php $year;?>">
      <label for="male">Yearly</label><br>
      <input type="radio" id="monply" name="monp" value="<?php $monp;?>">
      <label for="female">Monply</label><br>
      <label>Tax Free Allowance in USD</label>
      <input class="w3-input w3-border w3-sand" type="number" name="allowance_1" required><br>
      <input type="submit" value="calculate" name="calculate">
 </div>
</div>
<?php   
 $first = $second = $pird = $forp = $fifp = $sixp = $test = $salary = $ok = $balance = $currency = $ammount = '';

if (isset($_POST['monp']) && (isset($_POST["calculate"]))){
    if ($_POST["salary--first"]< 10000){
        $first = $_POST["salary--first"];
        $second = 0; 
        $pird = $_POST["salary--first"] - $second ;    
        $forp = $pird + $_POST["allowance_1"];
        $fifp = 0;
        $sixp = $forp - $fifp;
       
    }
    if (($_POST["salary--first"] > 10000) && ($_POST["salary--first"] < 25000)){
        $first = $_POST["salary--first"];
        $second = $_POST["salary--first"] * 0.11;
        $pird = $_POST["salary--first"] - $second ;    
        $forp = $pird + $_POST["allowance_1"];
        $fifp = $forp * 0.4;
        $sixp = $forp - $fifp;
    }
    if (($_POST["salary--first"] > 25000) && ($_POST["salary--first"] < 50000)){
        $first = $_POST["salary--first"];
        $second = $_POST["salary--first"] * 0.30;
        $pird = $_POST["salary--first"] - $second ;
        $forp = $pird + $_POST["allowance_1"];
        $fifp = $forp * 0.4;
        $sixp = $forp - $fifp;
    }
    if ($_POST["salary--first"] > 50000){
        $first = $_POST["salary--first"];
        $second = $_POST["salary--first"] * 0.45;
        $pird = $_POST["salary--first"] - $second ;
        $forp = $pird + $_POST["allowance_1"];
        $fifp = $forp * 0.4;
        $sixp = $forp - $fifp;    }
}
else if (isset($_POST['year']) && (isset($_POST["calculate"]))){        
    if ($_POST["salary--first"]< 10000){
        $test= $_POST["salary--first"];
        $salary = 0; 
        $ok= $_POST["salary--first"] - $salary ;    
        $balance = $ok+ $_POST["allowance_1"];
        $currency = 0;
        $ammount = $balance - $currency;
       
    }
    if (($_POST["salary--first"] > 10000) && ($_POST["salary--first"] < 25000)){
        $test= $_POST["salary--first"];
        $salary = $_POST["salary--first"] * 0.11;
        $ok= $_POST["salary--first"] - $salary ;    
        $balance = $ok+ $_POST["allowance_1"];
        $currency = $balance * 0.4;
        $ammount = $balance - $currency;
    }
    if (($_POST["salary--first"] > 25000) && ($_POST["salary--first"] < 50000)){
        $test= $_POST["salary--first"];
        $salary = $_POST["salary--first"] * 0.30;
        $ok= $_POST["salary--first"] - $salary ;
        $balance = $ok+ $_POST["allowance_1"];
        $currency = $balance * 0.4;
        $ammount = $balance - $currency;
    }
    if ($_POST["salary--first"] > 50000){
        $test= $_POST["salary--first"];
        $salary = $_POST["salary--first"] * 0.45;
        $ok= $_POST["salary--first"] - $salary ;
        $balance = $ok+ $_POST["allowance_1"];
        $currency = $balance * 0.4;
        $ammount = $balance - $currency;    
    }
}

?>
  <div>
    <h2>Yearly</h2>
    <h2>Monply</h2> 
  </div>	
  <div>
    <p>Total salary : <?php echo $s; ?></p>
    <p>Total salary : <?php echo $first; ?></p>
  </div>
  <div>
    <p>Tax amount : <?php echo $salary; ?></p>
    <p>Tax amount : <?php echo $second; ?></p>
  </div>
  <div>
    <p>social security : <?php echo $currency; ?></p>
    <p>social security : <?php echo $fifp; ?></p>
  </div>
  <div>
    <p>salary after tax : <?php echo $ammount; ?></p>
    <p>salary after tax : <?php echo $sixp; ?></p>
</div>
</table>
</div>
</form>
</body>
</html>