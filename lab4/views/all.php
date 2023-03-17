<?php
//pagination
//fl url brmelo next..wlw mwgoda hakhod el val bt3ha  wlw mesh mwgoda htb2a 0
$current_index = isset($_GET["next"]) && is_numeric($_GET["next"])? (int) $_GET["next"] : 0 ;
$next_index = ($current_index + __RECORDS_PER_PAGE__< 16) ? $current_index + __RECORDS_PER_PAGE__ :0; ;
$previous_index = ($current_index - __RECORDS_PER_PAGE__ > 0) ? $current_index - __RECORDS_PER_PAGE__ :0; 
$items = $db->get_all_records_paginated(array () , $current_index);
//ebd2 ml 0 w hat kol records w hirg3 f 2d arr hea l items



?>


<table>

<tr>
    <th>
        Item Id
    </th>

    <th>
        Name
    </th>

    <th>
        Details
    </th>
</tr>



<?php
//this is how i do transfer from all products pg to the one product pg


// $index= $current_index;
foreach ($items as $item){

    echo "<tr><td>". $item["id"]."</td>";
    echo "<td>". $item["product_name"]."</td>";
    echo "<td> <a href ='".$_SERVER["PHP_SELF"]."?id=".$item["id"] ."'> view the item </a> </td> </tr>";
    //lma ados 3la more hitb3t fl url pk value
    // $index ++ ; 
}
?>

</table>

<a href ="<?php echo $_SERVER["PHP_SELF"] . "?next=" .$next_index; ?>" >next >> </a>;
<a href ="<?php echo $_SERVER["PHP_SELF"] . "?next=" .$previous_index; ?>" > << previous </a>;











 

