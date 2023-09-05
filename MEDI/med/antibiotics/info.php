<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@800&family=Arimo&family=Barlow:wght@500&family=Bebas+Neue&family=Dancing+Script&family=Lobster&family=Montserrat:wght@100;400&family=Quicksand:wght@300&family=Roboto:wght@300&family=Tilt+Warp&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="info.css">
    <title>Information</title>
</head>
<script>
    function sumbit(){
        alert ("SubMitted successfully! ")
    }
</script>
<body>
    <div class="main-header p-0">
        <div class="logo">
            <img src="Annotation 2023-07-30 093942.png">
        </div>
    </div>
    <div class="container">
    <form class="form" method="post" action="checkout.php" onsubmit="sumbit()">
    <p class="title">Checkout</p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input">
            <span>Firstname</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input">
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input">
        <span>Active Contact No</span>
    </label>
    <label>
        <input required="" placeholder="" type="password" class="input">
        <span>Address</span>
    </label>
    <button class="submit" value="submit">Submit</button>
    <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
</form>
</div>
</body>
</html>


