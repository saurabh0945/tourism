<?php

$con=mysqli_connect('localhost','root','','travel');

if(isset($_POST['submit']))
{

$name=$_POST['name'];

$email=$_POST['email'];

$feedback=$_POST['feedbk'];

$que="INSERT INTO feedback(id,name,email,feedbk)

VALUES

(0,'$name','$email','$feedback')";

$result=mysqli_query($con,$que);

echo "

<script>

alert('Feedback Submitted Successfully');

window.location='feedback.html';

</script>

";

}

?>