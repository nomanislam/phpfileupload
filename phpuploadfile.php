


$file_name = $_FILES["photo"]["name"];
$file_type = $_FILES["photo"]["type"];
$file_tmp = $_FILES["photo"]["tmp_name"];
$file_error = $_FILES["photo"]["error"];
$file_size = $_FILES["photo"]["size"];



$ary = explode(".", $file_name);
$extention = $ary[count($ary)-1];

$url = uniqid(rand()).".".$extention;



if(in_array($extention,array("jpg","JPG","png","PNG"))){
	if(is_uploaded_file($_FILES["photo"]["tmp_name"])){
		if(move_uploaded_file($_FILES["photo"]["tmp_name"],"imagesup/".$url)){
			echo "Thsi file is Uploaded";
		}
	}
}else{
	echo "Data Type Dose not Match";
}
	
