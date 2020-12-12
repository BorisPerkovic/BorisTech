<?php
$query="SELECT * FROM specification WHERE category='{$category}' AND specification_id='{$id}'";
$result=$db->query($query);
$row=$db->fetch_object($result);
if($category=="Telefoni")
//if category is cellPhone than show this specification
{
    echo  "<table class='table' border='1'>
                            <tr>
                                <th>Model</th>
                                <td> $row->products_model</td>
                            </tr>
                            <tr>
                                <th>Dimenzije</th>
                                <td> $row->dimension</td>
                            </tr>
                            <tr>
                                <th>Težina</th>
                                <td> $row->weight</td>
                            </tr>
                            <tr>
                                <th>Boja</th>
                                <td> $row->color</td>
                            </tr>
                            <tr>
                                <th>Operativni sistem</th>
                                <td> $row->system</td>
                            </tr>
                            <tr>
                                <th>Procesor</th>
                                <td> $row->procesor</td>
                            </tr>
                            <tr>
                                <th>Kamera</th>
                                <td> $row->camera</td>
                            </tr>
                            <tr>
                                <th>Ekran</th>
                                <td> $row->display</td>
                            </tr> 
                            <tr>
                                <th>Rezolucija</th>
                                <td> $row->resolution</td>
                            </tr>
                            <tr>
                                <th>Interna memorija</th>
                                <td> $row->memory</td>
                            </tr>
                            <tr>
                                <th>Radna memorija</th>
                                <td> $row->ram_memory</td>
                            </tr>
                            <tr>
                                <th>Baterija</th>
                                <td> $row->power</td>
                            </tr>
                            <tr>
                                <th>USB</th>
                                <td> $row->usb</td>
                            </tr>
                            <tr>
                                <th>WiFi</th>
                                <td> $row->wifi</td>
                            </tr>";   
                    echo   "</table>";
}
//end of  cellPhone  specification

elseif($category=="Audio")
//if category is Audio than show this specification
{
    echo  "<table class='table' border='1'>
                            <tr>
                                <th>Model</th>
                                <td> $row->products_model</td>
                            </tr>
                            <tr>
                                <th>Dimenzije</th>
                                <td> $row->dimension</td>
                            </tr>
                            <tr>
                                <th>Težina</th>
                                <td> $row->weight</td>
                            </tr>
                            <tr>
                                <th>Boja</th>
                                <td> $row->color</td>
                            </tr>
                            <tr>
                                <th>Tip sistema</th>
                                <td> $row->system</td>
                            </tr>
                            <tr>
                                <th>Ekran</th>
                                <td> $row->display</td>
                            </tr>
                            <tr>
                                <th>USB</th>
                                <td> $row->usb</td>
                            </tr>
                            <tr>
                                <th>WiFi</th>
                                <td> $row->wifi</td>
                            </tr>
                            <tr>
                                <th>Ostalo</th>
                                <td> $row->other</td>
                            </tr>";   
                    echo   "</table>";
}
//end of claptopsellPhone specification

elseif($category=="Laptopovi")
//if category is laptops than show this specification
{
    echo  "<table class='table' border='1'>
                            <tr>
                                <th>Model</th>
                                <td> $row->products_model</td>
                            </tr>
                            <tr>
                                <th>Dimenzije</th>
                                <td> $row->dimension</td>
                            </tr>
                            <tr>
                                <th>Težina</th>
                                <td> $row->weight</td>
                            </tr>
                            <tr>
                                <th>Boja</th>
                                <td> $row->color</td>
                            </tr>
                            <tr>
                                <th>Operativni sistem</th>
                                <td> $row->system</td>
                            </tr>
                            <tr>
                                <th>Procesor</th>
                                <td> $row->procesor</td>
                            </tr>
                            <tr>
                                <th>Ekran</th>
                                <td> $row->display</td>
                            </tr>
                            <tr>
                                <th>Rezolucija</th>
                                <td> $row->resolution</td>
                            </tr>
                            <tr>
                                <th>Grafička karta</th>
                                <td> $row->chipset</td>
                            </tr>
                            <tr>
                                <th>Interna memorija</th>
                                <td> $row->memory</td>
                            </tr>
                            <tr>
                                <th>Radna memorija</th>
                                <td> $row->ram_memory</td>
                            </tr>
                            <tr>
                                <th>Baterija</th>
                                <td> $row->power</td>
                            </tr>
                            <tr>
                                <th>HDMI</th>
                                <td> $row->hdmi</td>
                            </tr>
                            <tr>
                                <th>USB</th>
                                <td> $row->usb</td>
                            </tr>
                            <tr>
                                <th>WiFi</th>
                                <td> $row->wifi</td>
                            </tr>
                            <tr>
                                <th>Ostalo</th>
                                <td> $row->other</td>
                            </tr>";   
    echo   "</table>";
}
//end laptops  specification

elseif($category=="Foto-Kamere")
//if category is photoCamera than show this specification
{
    echo  "<table class='table' border='1'>
                            <tr>
                                <th>Model</th>
                                <td> $row->products_model</td>
                            </tr>
                            <tr>
                                <th>Dimenzije</th>
                                <td> $row->dimension</td>
                            </tr>
                            <tr>
                                <th>Težina</th>
                                <td> $row->weight</td>
                            </tr>
                            <tr>
                                <th>Boja</th>
                                <td> $row->color</td>
                            </tr>
                            <tr>
                                <th>Kamera</th>
                                <td> $row->camera</td>
                            </tr>
                            <tr>
                                <th>Interna memorija</th>
                                <td> $row->memory</td>
                            </tr>
                            <tr>
                                <th>HDMI</th>
                                <td> $row->hdmi</td>
                            </tr>
                            <tr>
                                <th>USB</th>
                                <td> $row->usb</td>
                            </tr>";   
    echo   "</table>";
}
//end of photoCamera  specification
else{
    //if category is television than show this specification
    echo  "<table class='table' border='1'>
                <tr>
                    <th>Model</th>
                    <td> $row->products_model</td>
                </tr>
                <tr>
                    <th>Dimenzije</th>
                    <td> $row->dimension</td>
                </tr>
                <tr>
                    <th>Težina</th>
                    <td> $row->weight</td>
                </tr>
                <tr>
                    <th>Boja</th>
                    <td> $row->color</td>
                </tr>
                <tr>
                    <th>Operativni sistem</th>
                    <td> $row->system</td>
                </tr>
                <tr>
                    <th>Ekran</th>
                    <td> $row->display</td>
                </tr>
                <tr>
                    <th>Rezolucija</th>
                    <td> $row->resolution</td>
                </tr>
                <tr>
                    <th>Interna memorija</th>
                    <td> $row->memory</td>
                </tr>
                <tr>
                    <th>Baterija</th>
                    <td> $row->power</td>
                </tr>
                <tr>
                    <th>HDMI</th>
                    <td> $row->hdmi</td>
                </tr>
                <tr>
                    <th>USB</th>
                    <td> $row->usb</td>
                </tr>
                <tr>
                    <th>WiFi</th>
                    <td> $row->wifi</td>
                </tr>
                <tr>
                    <th>Ostalo</th>
                    <td> $row->other</td>
                </tr>";   
echo   "</table>";
}
?>