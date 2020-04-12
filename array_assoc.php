<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Associative Arrays</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
   

    <?php
        //Declare the Array
        $Test_one = array(
                    "Smith" => 98,
                    "Johnson" => 67,
                    "Fields" => 71,
                    "Laurel" => 68,
                    "Gold" => 91,
                    "Braverman" =>88,
                    "Stone" => 84,
                    "Kiel" => 84
            
                );
         $Test_two = array(
                    "Smith" => 75,
                    "Johnson" => 88,
                    "Fields" => 81,
                    "Laurel" => 63,
                    "Gold" => 67,
                    "Braverman" => 82,
                    "Stone" => 77,
                    "Kiel" => 81
            
                );
      $Test_three = array(
                    "Smith" => 100,
                    "Johnson" => 85,
                    "Fields" => 76,
                    "Laurel" => 71,
                    "Gold" => 63,
                    "Braverman" => 55,
                    "Stone" => 81,
                    "Kiel" => 79
            
                );
      $Test_four = array(
                    "Smith" => 91,
                    "Johnson" => 81,
                    "Fields" => 77,
                    "Laurel" => 70,
                    "Gold" => 90,
                    "Braverman" => 82,
                    "Stone" => 90,
                    "Kiel" => 100
            
                );

          $ex1 = (array_sum($Test_one)/8);
          $ex2 = (array_sum($Test_two)/8);
          $ex3 = (array_sum($Test_three)/8);
          $ex4 = (array_sum($Test_four)/8);



        print("Smith has Scored in test one " . $Test_one["Smith"] . "<br/>");
        echo("<br>");
        print("Jhonson has Scored in test two " . $Test_two["Johnson"] . "<br/>");
        echo("<br>");
        print("Total sum of Test One " . array_sum($Test_one) . "<br/>");
        echo("<br>");
        print("Total sum of Test Two " . array_sum($Test_two) . "<br/>");
        echo("<br>");
        print("Total sum of Test Three " . array_sum($Test_three) . "<br/>");
        echo("<br>");
        print("Total sum of Test Four " . array_sum($Test_four) . "<br/>");
        echo("<br>");
        print("Total  Average of Test One " . $ex1 . "<br/>");
        echo("<br>");
        print("Total  Average of Test Two " . $ex2 . "<br/>");
        echo("<br>");
        print("Total  Average of Test Three " . $ex3 . "<br/>");
        echo("<br>");
        print("Total  Average of Test Four " . $ex4 . "<br/>");
    
        
    ?>
<table style="width:100%">
  <tr>
    <th>Students Name</th>
    <th>Test One</th> 
    <th>Test Two</th>
    <th>Test Three</th>
    <th>Test Four</th>
  </tr>
  <tr>
    <td>Smith</td>
    <td><?php print($Test_one["Smith"]); ?></td>
    <td><?php print($Test_two["Smith"]); ?></td>
    <td><?php print($Test_three["Smith"]); ?></td>
    <td><?php print($Test_four["Smith"]); ?></td>
   
  </tr>
  <tr>
    <td>Johnson</td>
    <td><?php print($Test_one["Johnson"]); ?></td>
    <td><?php print($Test_two["Johnson"]); ?></td>
    <td><?php print($Test_three["Johnson"]); ?></td>
    <td><?php print($Test_four["Johnson"]); ?></td>
   
  </tr>
  <tr>
    <td>Fields</td>
    <td><?php print($Test_one["Fields"]); ?></td>
    <td><?php print($Test_two["Fields"]); ?></td>
    <td><?php print($Test_three["Fields"]); ?></td>
    <td><?php print($Test_four["Fields"]); ?></td>
  </tr>
   <tr>
    <td>Laurel</td>
    <td><?php print($Test_one["Laurel"]); ?></td>
    <td><?php print($Test_two["Laurel"]); ?></td>
    <td><?php print($Test_three["Laurel"]); ?></td>
    <td><?php print($Test_four["Laurel"]); ?></td>
  </tr>
   <tr>
    <td>Gold</td>
    <td><?php print($Test_one["Gold"]); ?></td>
    <td><?php print($Test_two["Gold"]); ?></td>
    <td><?php print($Test_three["Gold"]); ?></td>
    <td><?php print($Test_four["Gold"]); ?></td>
  </tr>
   <tr>
    <td>Braverman</td>
    <td><?php print($Test_one["Braverman"]); ?></td>
    <td><?php print($Test_two["Braverman"]); ?></td>
    <td><?php print($Test_three["Braverman"]); ?></td>
    <td><?php print($Test_four["Braverman"]); ?></td>
  </tr>
   <tr>
    <td>Stone</td>
    <td><?php print($Test_one["Stone"]); ?></td>
    <td><?php print($Test_two["Stone"]); ?></td>
    <td><?php print($Test_three["Stone"]); ?></td>
    <td><?php print($Test_four["Stone"]); ?></td>
  </tr>
   <tr>
    <td>Kiel</td>
    <td><?php print($Test_one["Kiel"]); ?></td>
    <td><?php print($Test_two["Kiel"]); ?></td>
    <td><?php print($Test_three["Kiel"]); ?></td>
    <td><?php print($Test_four["Kiel"]); ?></td>
  </tr>
  <tr>
    <th>Total</th>
    <th><?php print(array_sum($Test_one)); ?></th>
    <th><?php print(array_sum($Test_two)); ?></th>
    <th><?php print(array_sum($Test_three)); ?></th>
    <th><?php print(array_sum($Test_four)); ?></th>
  </tr>
   <tr>
    <th>Average</th>
    <th><?php print($ex1); ?></th>
    <th><?php print($ex2); ?></th>
    <th><?php print($ex3); ?></th>
    <th><?php print($ex4); ?></th>
  </tr>
</table>

</body>
</html>
