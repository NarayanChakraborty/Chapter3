<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="assignment.css"/>
</head>
<body>
<h3>Thank YOu! A representative will contact you soon</h3>
<?php
     $fname=$_POST['first_name'];
	 $lname=$_POST['last_name'];
	 echo 'Iformation Submitted for : '.$fname.' '.$lname.'<br><br>';
     $comment=$_POST['comments'];
	 $contact=$_POST['etype'];
	 $no=$_POST['contact'];
	 $reside=$_POST['reside'];
	 if(isset($_POST['s']))
	 $ssc=$_POST['s'];
	 else
	 $ssc=" ";
	 if(isset($_POST['h']))
	 $hsc=$_POST['h'];
	 else
	 $hsc=" ";
	 if(isset($_POST['g']))
	 $graduate=$_POST['g'];
	 else
	 $graduate=" ";
	 echo 'Your '.$contact.' '.'no is : '.$no.'<br>';
	 echo 'And you are interested in living in '.$reside.'<br>';
	 echo 'Your education profile is ';
	 echo $ssc.' ';
	 echo $hsc.' ';
	 echo $graduate;
?>
     <br>
	 <textarea name="comments" cols="30" rows="10"class="textdisabled" disabled="disabled">
	 <?php echo $comment; ?>
	 </textarea>
</body>
</html>