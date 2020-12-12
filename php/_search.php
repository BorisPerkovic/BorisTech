<?php
$db=mysqli_connect("localhost", "root", "", "boristech");
if(isset($_POST['query']))
{
    $output="";
    $query="SELECT category, specification_id, products_brand, products_model FROM specification WHERE products_brand LIKE '%".$_POST['query']."%' OR products_model LIKE '%".$_POST['query']."%'";
    $result=mysqli_query($db, $query);
    echo "<ul>";
    if(mysqli_num_rows($result) > 0)
    {
        while($row=mysqli_fetch_array($result))
        {
            echo "<li><a href='productinfo.php?kategorija=".$row['category']."&sifraProizvoda=".$row['specification_id']."'</a><img src='../pics/".$row['specification_id'].",v.jpg'>".$row['products_brand']." ".$row['products_model']."</li>";
        }
    }
    else
    {
        echo "<li>Željeni proizvod ne postoji!!</li>";
    }
    echo "</ul>";
}
?>