



<form action="registraData.php" method="post" enctype="multipart/form-data">

  
  <input type ="file" name="photo">
  
  <input type="submit" value="Submit">
  
  
  
  </form> 
  
  
  
  
  
 <?php
 
 $type = explode(".", $_FILES["photo"]["name"]);
 $type = $type [count($type)-1];
 $url = "./imagesup/".uniqid(rand()).".".$type;
 
	
 if(in_array($type,array("JPG","jpg","PNG","png"))){
	 if(is_uploaded_file($_FILES["photo"]["tmp_name"])){
		 if(move_uploaded_file($_FILES["photo"]["tmp_name"], $url))
			 echo "successful Upload";
	 }
 }else{
	 echo "Something is Worng";
 }


 
 ?>
  
