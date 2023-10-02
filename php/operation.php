 <?php 
	require_once 'component.php';
	require_once 'db.php';

	$con = createDB();

	//create btn click
	if (isset($_POST['create'])) {
		//echo "create button clicked!";
		createData();
	}

	

	function getData()
	{
		$sql = "select * from customer";
		$result = mysqli_query($GLOBALS['con'],$sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		}
	}

	function createData()
	{
		$customername = checkInputValue("c_name");
		$customerpassword = checkInputValue("c_password");
		$email = checkInputValue("email_id");
		$phone = checkInputValue("phone_no");

		if ($customername && $customerpassword && $email && $phone) {
			$sql = "insert into customer(c_name,c_password,email_id,phone_no) values('$customername',
			'$customerpassword',
			'$email',
		'$phone')";

			if(mysqli_query($GLOBALS['con'],$sql)){
				//echo "record successfully inserted";
				showMsg("bg-success py-3","record successfully inserted.");
			}else{
				showMsg("bg-danger py-3","error while inserting record".mysqli_error($GLOBALS['con']));
			}
		}else{
			//echo "provide data  into textfields.";
			showMsg("bg-danger py-3","provide data into textfields.");

		}
	}

	function checkInputValue($value)
	{
		$text = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
		if(empty($text)){
			return false;
		}else{
			return $text;
		}
	}

	function showMsg($style,$msg)
	{
		$element = "<h6 class='$style'>$msg</h6>";
		echo $element;
	}
 ?> 