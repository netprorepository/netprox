<?php
$where="url='".$_GET['tid']."' ";  
$product_detail=$objComm->findRecord('products',$where);


$where="id='".$product_detail[0]['category_id']."' ";  
$brand=$objComm->findRecord('category',$where);


$where="id='".$product_detail[0]['subcategory_id']."' ";  
$subcategory=$objComm->findRecord('sub_category',$where);

?>

<div class="container mt23">
  <div class="row">
    <div class="main-content">
      
      <div class="col-md-12 m0 p0">
      <div class="breadcrumb">
       <ul>
        <li><a href="<?=BASE_URL?>"><i class="fa fa-home"></i></a></li>
        <li><i class="fa fa-angle-right"></i></li>
        <li><a href="<?=BASE_URL.'products/'.$brand[0]['url'].'/'?>"><?=$brand[0]['category_name']?></a></li>
        <li><i class="fa fa-angle-right"></i></li>
		<li><a href="<?=BASE_URL.'products/'.$brand[0]['url'].'/'.$subcategory[0]['url'].'/'?>"><?=$subcategory[0]['sub_category']?></a></li>
        <li><i class="fa fa-angle-right"></i></li>		
        <li><a href="<?=BASE_URL.'product/'.$brand[0]['url'].'/'.$product_detail[0]['url'].'/'?>" class="active"><strong><?=$product_detail[0]['name']?></strong></a></li>
       </ul>
      </div>
      
      
        <div class="center-block mb40 full">
          
	
          <div class="col-md-4 col-xs-12">
			<div class="bzoom_wrap">
        <ul id="bzoom" class="check_img">
            <li>
               
               <img src="<?=$product_detail[0]['images']?>" data-largeimg="<?=$product_detail[0]['images']?>" class="bzoom_thumb_image" />
               
               <img src="<?=$product_detail[0]['images']?>" data-largeimg="<?=$product_detail[0]['images']?>" class="bzoom_big_image" />
               
      
            </li>
            
             <li>
               
               <img src="<?=$product_detail[0]['images2']?>" data-largeimg="<?=$product_detail[0]['images2']?>" class="bzoom_thumb_image" />
               
               <img src="<?=$product_detail[0]['images2']?>" data-largeimg="<?=$product_detail[0]['images2']?>" class="bzoom_big_image" />
               
      
            </li>
            
             <li>
               
               <img src="<?=$product_detail[0]['images3']?>" data-largeimg="<?=$product_detail[0]['images3']?>" class="bzoom_thumb_image" />
               
               <img src="<?=$product_detail[0]['images3']?>" data-largeimg="<?=$product_detail[0]['images3']?>" class="bzoom_big_image" />
               
      
            </li>
            
             <li>
               
               <img src="<?=$product_detail[0]['images4']?>" data-largeimg="<?=$product_detail[0]['images4']?>" class="bzoom_thumb_image" />
               
               <img src="<?=$product_detail[0]['images4']?>" data-largeimg="<?=$product_detail[0]['images4']?>" class="bzoom_big_image" />
               
      
            </li>
            
             <li>
               
               <img src="<?=$product_detail[0]['images5']?>" data-largeimg="<?=$product_detail[0]['images5']?>" class="bzoom_thumb_image" />
               
               <img src="<?=$product_detail[0]['images5']?>" data-largeimg="<?=$product_detail[0]['images5']?>" class="bzoom_big_image" />
               
      
            </li>
            
             <li>
               
               <img src="<?=$product_detail[0]['images6']?>" data-largeimg="<?=$product_detail[0]['images6']?>" class="bzoom_thumb_image" />
               
               <img src="<?=$product_detail[0]['images6']?>" data-largeimg="<?=$product_detail[0]['images6']?>" class="bzoom_big_image" />
               
      
            </li>
            
             <li>
               
               <img src="<?=$product_detail[0]['images7']?>" data-largeimg="<?=$product_detail[0]['images7']?>" class="bzoom_thumb_image" />
               
               <img src="<?=$product_detail[0]['images7']?>" data-largeimg="<?=$product_detail[0]['images7']?>" class="bzoom_big_image" />
               
      
            </li>
            
           
            
           
           
        </ul>
    </div>
          
		  </div>
          <div class="col-md-8 col-xs-12 details">
           <h2><?=$product_detail[0]['name']?></h2>
           <p><?=$product_detail[0]['box_contents']?></p>
           <div class="d-1">
           <?php
		    if(isset($_POST['checkpincode']))
				{
					//$pincode=$_POST['pincode'];
					$pincode= mysql_real_escape_string($_POST['pincode']);
					$check_for_pincode = mysql_query("SELECT id FROM picode WHERE pincode='$pincode' and cod='yes'");
					if(mysql_num_rows($check_for_pincode))

						{
							$msg=  "COD is Available";
													}
						else
						{
							$msg= "COD is Not Available";
						
					}
				
				}
		   ?>
           <form method="post">
           <div class="quan grey-gr1">
             <div class="col-md-3 q1"><i class="fa fa-map-marker"></i> Check Availability : </div>
             <div class="col-md-6 q2"><input id="" class="form-control input-sm" placeholder="Enter your pincode" name="pincode" required></div>
             <div class="col-md-3 q3"><input class="btn btn-sm btn-primary" type="submit" value="Search" id="addressSearch" name="checkpincode"></div>
             <div style="color:#fff; text-align:center;"><?php echo $msg; ?></div>
            </div>
            </form>
            <div class="clearfix"></div>
            <div class="quan">
             <label>Quantity</label>
			 <input type="text" class="form-control input-sm" id="quantity" value='1' autocomplete="off">
             <!--<select class="col-md-12" id="quantity">
              <option>1</option>
              <option>2</option>
              <option>3</option>
             </select>-->
            </div>
            <div class="clearfix"></div>
            <div class="d-2">
             <div class="pull-left col-md-6 text-left text">Color : <?=$product_detail[0]['color']?></div>
             <div class="pull-right col-md-6 text-right text">Brand : <?=$product_detail[0]['brand']?></div>
            </div>
            <div class="clearfix"></div>
            <div class="d-3">
             <div class="pull-left col-md-6 text price">
			 
			 <?=CURRENCY?> <?=$product_detail[0]['price']?> 
             <span class="discount"><?=CURRENCY?> <?=$product_detail[0]['discount_price']?></span></div>
             <div class="pull-right col-md-6 text">
             <?php if($product_detail[0]['status']==Active)
			 {
			 ?>
             <a href="javascript:void(0)" id="confirm" class="btn btn-sm btn-primary red-gr" onclick="return add_to_cart('<?=$product_detail[0]['id']?>','<?=$product_detail[0]['name']?>','<?=$product_detail[0]['price']?>',document.getElementById('quantity').value,'<?=$product_detail[0]['images']?>','<?=$product_detail[0]['code']?>')">Add To Cart</a>
             <?php } else { ?> <a href="#" id="productId1" class="btn btn-sm btn-primary red-gr">Out Of Stock</a> <? } ?>
             </div>
            </div>
            
             <div class="clearfix"></div>
            <div class="d-4">
			<?php if(isset($_SESSION['user_email'])){ ?>
             <div class="col-md-6"><a href="javascript:void(0)" onclick="return add_to_wishlist('<?=$product_detail[0]['id']?>')" ><i class="fa fa-heart"></i> Add To Wishlist</a></div>
			 
			 <?php } else { ?>
			 <div class="col-md-6"><a href="<?=BASE_URL.'my-account/login-signup/'?>"><i class="fa fa-heart"></i> Add To Wishlist</a></div>
			 <?php } ?>
             <div class="col-md-6"><a href="javascript:void(0)" onclick="return addToCompare('<?=$product_detail[0]['id']?>')"><i class="fa fa-exchange"></i> Add To Compare</a></div>
            </div>
           </div>
           <div class="clearfix"></div>
           <div class="col-md-4 matty">Finish : <?php echo $product_detail[0]['finish']; ?></div>
           <div class="col-md-8 del1">Delivery in <?php echo $product_detail[0]['delivery_time']; ?> Business Days</div>
          </div>
          <div class="col-md-9 col-xs-12 tabs-bor">
   
        <!-- tabs -->
        <div class="tabbable">
          <ul class="nav nav-tabs grey-gr1">
            <li class="active"><a href="#one" data-toggle="tab">Product Description</a></li>
            <li><a href="#two" data-toggle="tab">Details</a></li>
            <li><a href="#three" data-toggle="tab">Reviews<i class="fa fa-weixin"></i></a></li>
          </ul>
          <div class="tab-content ">
            <div class="tab-pane active" id="one">
            <?=$product_detail[0]['description']?>
           
			
            </div>
            <div class="tab-pane" id="two">
            <div class="table-responsive">
    <table class="table tab-23">
        
        <tbody>
            <tr class="first odd">
                <th class="label">Product Name</th>
                <td class="data last"><?php if($product_detail[0]['name']=="") { echo "-----";} else{ echo $product_detail[0]['name'];} ?></td>
            </tr>
            <!--<tr class="first odd">
                <th class="label"> Product Code(Sku)	</th>
                <td class="data last"><?php if($product_detail[0]['code']=="") { echo "-----";} else {echo $product_detail[0]['code'];} ?></td>
            </tr>-->
            <tr class="first odd">
                <th class="label">Compatible</th>
                <td class="data last"><?php if($product_detail[0]['compatiable']=="") { echo "-----";} else { echo $product_detail[0]['compatiable']; }?></td>
            </tr>
            <tr class="first odd">
                <th class="label">Material</th>
                <td class="data last"><?php if($product_detail[0]['material']=="") {echo "-----";} else {echo $product_detail[0]['material'];}?></td>
            </tr>
             <tr class="first odd">
                <th class="label">Color</th>
                <td class="data last"><?php if($product_detail[0]['color']=="") { echo "-----";} else { echo $product_detail[0]['color'];} ?></td>
            </tr>
            <tr class="first odd">
                <th class="label">Type</th>
                <td class="data last"><?php if($product_detail[0]['product_type']=="") { echo "-----";} else { echo $product_detail[0]['product_type'];} ?></td>
            </tr>
            <tr class="first odd">
                <th class="label">Suitable Device</th>
                <td class="data last"><?php if($product_detail[0]['suitable_device']=="") { echo "-----"; } else { echo $product_detail[0]['suitable_device'];}?></td>
            </tr>
            <tr class="first odd">
                <th class="label">Delivery Time</th>
                <td class="data last"><?php if($product_detail[0]['delivery_time']=="") { echo "-----";} else { echo $product_detail[0]['delivery_time']; }?></td>
            </tr>
            <tr class="first odd">
                <th class="label">Quantity</th>
                <td class="data last"><?php if($product_detail[0]['quantity']=="") { echo "-----";} else { echo $product_detail[0]['quantity']; } ?></td>
            </tr>
            <tr class="first odd">
                <th class="label">Item Condition</th>
                
                <td class="data last"><?php if($product_detail[0]['itemcondition_id']=="") { echo "-----";} else { echo $product_detail[0]['itemcondition_id'];}?><br /><?php //echo $itemRow['itemcondition_description']; ?></td>
            </tr>
         
        </tbody>
    </table>
</div></div>
            <div class="tab-pane re-1" id="three">
            <ul class="re-2">
             <li><?php count_review($product_detail[0]['id']) ?> Reviews</li>
             <li><?php rating($product_detail[0]['id']); ?></li>
           </ul>
           <div class="clearfix"></div>

		   
<?php

$table='rating';
$where="produtid='".$product_detail[0]['id']."' ";
$query=mysql_query("SELECT * FROM $table where ".$where." ") or die(mysql_error()); 



$where="produtid='".$product_detail[0]['id']."' and status='Active' ";  
$reviews=$objComm->findRecord('rating',$where);
for($i=0;$i<count($reviews);$i++){
?>
		   
            <div class="re-5">
            <div class="col-md-10 p0">
             <h5><?=$reviews[$i]['title']?> <strong>( <?=$reviews[$i]['name']?>)</strong></h5>
             <p><?=$reviews[$i]['title']?> </p>
             <div class="rate">
              <span><input type="hidden" class="rating" value="<?=$reviews[$i]['rateing']?>"/></span>
              <cite>Date : <?=$reviews[$i]['date']?></cite>
             </div>
             
            </div>
            
            <div class="col-md-2 use-1"><i class="fa fa-user"></i></div>
            </div>
           
 <?php } ?>          
            
            <div class="clearfix"></div>
			
			
            <form  id="submitratingform" action="<?=BASE_URL?>ajaxreturn/rating.php" method="POST">
			<span id="ratingmsg"> </span>
            <div class="center-block re-3">
            <h4><i class="fa fa-comments"></i> Write Your Review</h4>
			<input type="hidden" name="produtid" value="<?=$product_detail[0]['id']?>" />
             <div class="rating"><input type="hidden" class="rating" name="rateing" value="3"/></div>
			 <div class="in"><input type="text" class="form-control" name="name"  placeholder="Enter Name"></div>
			 <div class="in"><input type="text" class="form-control" name="email"  placeholder="Enter Email"></div>
             <div class="in"><input type="text" class="form-control" name="title" placeholder="Write your review title here"></div>
             <div class="in"><textarea class="form-control" name="review" placeholder="Your Review Here"></textarea></div>
             <div class="in"><input class="btn btn-sm btn-primary red-gr" type="submit" value="Submit Your Review" id="submitrating" ></div>
           </div>
		   </form>
		   
		   
		   
            </div>
           </div>
        </div>
        <!-- /tabs -->

          </div>
          <div class="col-md-3 tabbable side-inn p0 pre-scrollable">
         <div class="title2">Featured Products</div>
<?php
$where="category_id='".$product_detail[0]['category_id']."' ORDER BY RAND() LIMIT 7 ";  
$feturedProduct=$objComm->findRecord('products',$where);
for($i=0;$i<count($feturedProduct);$i++){
?>
           <figcaption class="col-md-12 col-xs-6">
            <figure><img src="<?=$feturedProduct[$i]['images']?>" class=" img-responsive img-thumbnail" /></figure>
            <h3><a href="<?=BASE_URL.'product/'.$_GET['sid'].'/'.$feturedProduct[$i]['url'].'/'?>"><?=$feturedProduct[$i]['name']?></a></h3>
            <div class="price2">
             <div class="pull-left p-1"><?=CURRENCY?> <?=$feturedProduct[$i]['price']?></div>
             <div class="pull-right p-2"><?=CURRENCY?> <?=$feturedProduct[$i]['discount_price']?></div>
            </div>
           </figcaption>
 <?php } ?>          
           
           
          </div>
          
          
        </div>
        
      </div>
      
      <!-- why brain freezer --> 
      
    </div>
  </div>
</div>

<script>
  
function add_to_wishlist(productid)
{
var xmlhttp;
if (productid=="")
  {
  document.getElementById("message").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	window.location.href = "<?=BASE_URL.'my-account/my-wishlist/'?>";
    
    }
  }
xmlhttp.open("GET","<?=BASE_URL?>ajaxreturn/add-to-wishlist.php?productid="+productid,true);
xmlhttp.send();
}
  
</script>



<script>
$(document).ready(function()
{
jQuery(".check_img li").each(function(){
 var img_path = jQuery(this).find("img").attr("src");
 if(img_path==""||img_path==undefined){
  jQuery(this).hide();
 }
});
$("#submitrating").click(function()
{

	$("#submitratingform").submit(function(e)
	{
		
		$("#ratingmsg").html("<img src='<?=BASE_URL.'/images/'?>loading.gif'/>");
		var postData = $(this).serializeArray();
		var formURL = $(this).attr("action");
		$.ajax(
		{
			url		: formURL,
			type	: "POST",
			data	: postData,
			success	:function(data, textStatus, jqXHR) 
			{			
			$("#ratingmsg").html('<pre><code class="prettyprint">'+data+'</code></pre>');				

			},
			error: function(jqXHR, textStatus, errorThrown) 
			{
				$("#ratingmsg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
			}
		});
	    e.preventDefault();	//STOP default action
	    e.unbind();
	});
	
});
})
</script>