

<html>
<head>
    <style>
        select{
            width:100%;
            background:white;
            padding:5px;
            border-radius:5px;
            color:#444444;
        }
        input{
            border-radius:5px;
            padding:5px;
        }
        input[type='text'],input[type='number']{
            width:calc(100% - 12px);
        }
        table tr td{
            padding: 3px;
            width: 10px;
        }


    </style>
</head>
<?php
$makers = ["Toyota","BMW","Mercedes"];
$engines = ["gas","diesel","petroleum"];
$toyota=["Corolla", "Camry"];
$bmw=["X5","X1","M1","M5"];
$mercedes=["Benz","cla","c-class","e-class"];
?>
<form action="task23.php" method="post">

   <table border="px" color="black" cellspacing="0px" width="300px">
       <tr>
           <td>Maker</td>
            <td><select name="makers" id="select">
                    <?php
                        foreach ($makers as $maker){?>
                    <option value="<?php echo $maker; ?>"><?php echo $maker; ?></option>
                            <?php
                        }
                    ?>
           </select></td>
       </tr>
       <tr>
           <td>Year</td>
           <td> <select><?php  for($i=2018;$i>=1999;$i--){?>
                   <option value="<?php echo $i ?>"  name="year"><?php echo $i; ?></option>
                   <?php
                   }
                   ?>
       </tr>
       <tr>
       <td>Model</td>
       <td><input type="text" value="Corolla" name="model"></td>
       </tr>
       <tr>
           <td>Engine</td>
           <td><?php foreach ($engines as $engine ){?><input type="radio" name="engine" value=<?php echo $engine?>  checked="checked">
               <?php echo $engine;}?></td>
       </tr>
       <tr>
           <td>Price</td>
           <td><input type="number" name="price"></td>
       </tr>
       <tr>
           <td>Additional</td>
           <td><input type="checkbox" name="tax" value="yes" checked="checked">tax payed<br>
               <input type="checkbox" name="tcheck" value="yes">technical check passsed<br>
               <input type="checkbox" name="invest" value="yes">doesn't require investemt</td>
       </tr>
   </table>
    <input type="submit"/>
</form>
