<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Multiplication Table</h1>
    <table>
        <?php 
    echo "<tr>";
    echo "<th>&nbsp;</th>";
        // loop to make the top row header
        for($col = 1; $col < 13; $col++) :
            echo "<th>$col</th>";
        endfor;
        echo "</tr>";
    
        // loop to make each row 
        for($col = 1, $row = 1; $row < 13; $row++) :
        echo "<tr>";
        // first cell is a table header
        if($col == 1) {     
            echo "<th>$row</th>";     
        }
        
        // while loop that makes each column within each row
        while($col < 13) :  
            echo "<td>" . $col * $row . "</td>";  
        $col++;
        endwhile;
        $col = 1;    
        endfor;
    
    echo "</tr>";

    ?>
    </table>
</body>

</html>
