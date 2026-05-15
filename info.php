<?php
include_once('infop.php');

if(isset($_POST['goa'])) {
	$que="SELECT * FROM information WHERE pname='Goa'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['kerala'])) {
	$que="SELECT * FROM information WHERE pname='Kerala'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['mysore'])) {
	$que="SELECT * FROM information WHERE pname='Mysore'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['ladakh'])) {
	$que="SELECT * FROM information WHERE pname='Ladakh'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['agra'])) {
	$que="SELECT * FROM information WHERE pname='Taj Mahal'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['india_gate'])) {
	$que="SELECT * FROM information WHERE pname='India Gate'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['hampi'])) {
	$que="SELECT * FROM information WHERE pname='Hampi'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['rajasthan'])) {
	$que="SELECT * FROM information WHERE pname='Rajasthan'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['manali'])) {
	$que="SELECT * FROM information WHERE pname='Manali'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['srinagar'])) {
	$que="SELECT * FROM information WHERE pname='Srinagar'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['amritsar'])) {
	$que="SELECT * FROM information WHERE pname='Amritsar'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['jogfalls'])) {
	$que="SELECT * FROM information WHERE pname='Jog Falls'";
	$result=mysqli_query($db,$que);
}

if(isset($_POST['search_p'])) {
	$search=$_POST['search_p'];
	$que="SELECT * FROM information WHERE pname='$search'";
	$result=mysqli_query($db,$que);
}
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Place Information</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial;
}

body{
    background: linear-gradient(135deg,#00c9ff,#92fe9d,#f6d365,#fda085);
    min-height:100vh;
    padding:30px;
}

/* REMOVE OLD NAVBAR */

.main,
.search,
.list2{
    display:none;
}

/* MAIN BOX */

.main-box{
    max-width:1300px;
    margin:auto;
    background:white;
    border-radius:25px;
    padding:40px;
    box-shadow:0 8px 25px rgba(0,0,0,0.2);
}

/* HEADING */

.main-title{
    text-align:center;
    font-size:55px;
    margin-bottom:50px;
    color:#6a11cb;
}

/* TOP SECTION */

.top-section{
    display:flex;
    gap:40px;
    align-items:flex-start;
    flex-wrap:wrap;
}

/* LEFT IMAGE */

.left-image{
    flex:1;
    min-width:300px;
}

.left-image img{
    width:100%;
    height:420px;
    object-fit:cover;
    border-radius:25px;
    box-shadow:0 5px 20px rgba(0,0,0,0.3);
}

/* RIGHT CONTENT */

.right-content{
    flex:1;
    min-width:300px;
}

/* PLACE NAME */

.place-name{
    font-size:50px;
    color:#ff4b2b;
    margin-bottom:25px;
    font-weight:bold;
}

/* INFORMATION BOX */

.info-box{
    background:#f5f5f5;
    padding:30px;
    border-radius:20px;
    line-height:1.9;
    font-size:20px;
    text-align:justify;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

/* PACKAGE */

.package{
    margin-top:20px;
    font-size:28px;
    color:red;
    font-weight:bold;
}

/* BUTTON */

.book-btn{
    display:inline-block;
    margin-top:30px;
    padding:14px 30px;
    background:#6a11cb;
    color:white;
    text-decoration:none;
    border-radius:12px;
    font-size:18px;
    transition:0.3s;
}

.book-btn:hover{
    background:#2575fc;
    transform:scale(1.05);
}

/* GALLERY */

.gallery{
    margin-top:50px;
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.gallery img{
    width:100%;
    height:260px;
    object-fit:cover;
    border-radius:20px;
    transition:0.4s;
    box-shadow:0 4px 15px rgba(0,0,0,0.2);
}

.gallery img:hover{
    transform:scale(1.05);
}

/* RESPONSIVE */

@media(max-width:900px){

    .top-section{
        flex-direction:column;
    }

    .gallery{
        grid-template-columns:1fr;
    }

    .main-title{
        font-size:38px;
    }

    .place-name{
        font-size:35px;
    }

    .info-box{
        font-size:17px;
    }
}

</style>

</head>

<body>

<div class="main-box">

<h1 class="main-title">Place Information</h1>

<?php
while($rows=mysqli_fetch_assoc($result))
{
?>

<div class="top-section">

    <!-- LEFT IMAGE -->

    <div class="left-image">
        <img src="<?php echo $rows['pi_main']; ?>">
    </div>

    <!-- RIGHT CONTENT -->

    <div class="right-content">

        <div class="place-name">
            <?php echo $rows['pname']; ?>
        </div>

        <div class="info-box">

            <?php echo $rows['pdescription']; ?>

            <div class="package">
                Package : <?php echo $rows['package']; ?> Rs
            </div>

        </div>

        <a href="booking.html" class="book-btn">
            Book Tour
        </a>

    </div>

</div>

<!-- GALLERY -->

<div class="gallery">

    <img src="<?php echo $rows['pi1']; ?>">

    <img src="<?php echo $rows['pi2']; ?>">

    <img src="<?php echo $rows['pi3']; ?>">

</div>

<?php
}
?>

</div>

</body>
</html>