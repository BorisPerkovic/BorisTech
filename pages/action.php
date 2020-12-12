<?php
require_once("../php/function.php");
require_once("../php/classBase.php");
$db=new Baza();
$db->connect();
if(isset($_POST['action']))
{   
    $query="SELECT * FROM specification WHERE dislike=0 ";
    if(isset($_POST['brand']) AND isset($_POST['category']))
    {
        $category= $_POST['category'];
        $brand= implode("','", $_POST['brand']);
        $query .="AND category='{$category}' AND products_brand IN('".$brand."')";
    }
    $rez=$db->query($query);
    $output='';
    if($db->num_rows($rez)!=0)
    {
        while($row=$db->fetch_object($rez))
        {
            $output .='
            <div class="col-md-3 mb-1">
                        <div class="card-deck">
                        <div class="card  border-secondary">
                                <img id="product" class="card-img-top" src="../pics/'.$row->specification_id.',v.jpg" alt="Responsive image">
                                <div class="card-body">
                                <h5 class="card-title text-danger">'.$row->price.' RSD</h5>
                                <p>
                                        '.$row->products_brand.'<br>
                                        '.$row->products_model.'<br>
                                </p>
                                <span class="viewMore"><a class="btn btn-warning btn-block " href="pages/productinfo.php?kategorija='.$row->category.'&sifraProizvoda='.$row->specification_id.'">Više&nbsp;&raquo;</a></span>
                                </div>
                        </div>
                        </div>
                </div>
            ';
        }
    }
    else{
        echo "<h3>Ne postoji proizvod za zeljeni filter!!</h3>";
    }
    echo $output;
}
?>