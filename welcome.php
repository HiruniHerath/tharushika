<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <style>
         body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #fffff; /* optional background color */
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border: 2px solid #1976d2;
            padding-bottom: 20px;
            width: 600px;
            background-color: #fff;
        }


/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */

.box{
    background: linear-gradient(90deg, #A7C4E6 0%, #6A93C9 100%);

    width:100%;
    height:80px;
    border:1px solid #1976d2;
    
    
}
.h1{
    margin-left:20px;
    margin-right:20px;
    color:#ffffff;
}
.button{
    width:200px;
    height:50px;
    border:2px solid #84B4DE;
    border-radius:10px;
    background-color:#ffffff;
    font-weight:600px;
}
.input{
    width:400px;
    height:50px;
    border:3px solid #84B4DE;
    margin-left:100px;
}
.form{
    padding-top:20px;
    margin-left:20px;
}

</style>
</head>
<body>

<div class="card">
  
  <div class="container">
  
  <div class="box"><h1 class="h1">Welcome Students, Let us know you</h1> </div>
  <form class="form" action="home.php" method="POST">
        Name: <input class="input" type="text" name="visitorName" required><br><br>
        Email: <input class="input" type="email" name="visitorEmail" required><br><br>
        <button class = "button"type="submit">Proceed</button>
        <button  class = "button" type="reset">Cancel</button>
    </form>
  </div>
</div>


    
   
</body>
</html>
