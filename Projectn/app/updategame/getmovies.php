<?php
include "$_SERVER[DOCUMENT_ROOT]/projectn/dbconnect.php";


$selquery="SELECT p.id as 'id',trim(P.productname) as 'pro', MA.actor as 'Actor' FROM product P, movieactor MA WHERE P.pro_type='Movie'AND P.id=MA.mid limit 4" ;
//$selquery="select * from product";
	$reslt=mysqli_query($conn,$selquery);

	$i=0;
	$bigcart=array();
  $game=array();
while($extract =mysqli_fetch_array($reslt,MYSQLI_ASSOC))
{
	$game[$i]=$extract;
  //  $movie['actor']=$extract['actor'];

//	echo $extract['count'];
$i++;


}
//if($bigcart!=null)
echo json_encode( $movie);


 ?>
