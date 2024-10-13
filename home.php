<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
 
  padding: 10px;
  padding-left:70px;
}
        .header {
            background-color: #f8f9fa;
            padding: 10px;
            padding-left:220px;
            width:100%;
            text-align: center;
            height:50px;
            padding-top:40px;
            background-color:#5B9BD4;
            border:5px solid #AEABAB;
        }
        .header a {
            margin: 0 15px;
            text-decoration: none;
            color: #000;
            font-weight:600;
        }
        .cart {
            position:absolute;
            padding-left:200px;
           
            top: 15px;
            right: 20px;
            height:50px;
         
           height:85px !important;
        }
        .cartimg{
            padding-top:25px !important;
            background-color:#ffffff !important;
            padding-bottom:25px !important;
            border:5px solid #84B4DE;
           
        }
        .course-grid {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }
        .course {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }
        .course h3 {
            margin: 10px 0;
        }
        .clocknameGrid{
            border:5px solid #84B4DE;
            margin-left:70px;
        }
        .clock {
            text-align: right;
            padding-right:20px;
            margin-top: 20px;
            font-weight:600;
        }
        .name{
            text-align: right;
            padding-right:20px;
            margin-top: 20px;
            font-weight:600;

        }
       .grid-container {
        
  display: grid;
 
}


.scene {
  width: 300px;
  height: 200px;
  border:5px solid #84B4DE;
  margin: 20px;
  perspective: 400px;
  padding-top:20px;
  padding-bottom:30px;
  padding-left:20px;
  padding-right:20px;
}

.box {
  width: 300px;
  height: 200px;
  position: relative;
  transform-style: preserve-3d;
  transform: translateZ(-50px);
  transition: transform 1s;
  
}

.box.show-front  { transform: translateZ( -50px) rotateY(   0deg); }
.box.show-back   { transform: translateZ( -50px) rotateY(-180deg); }
.box.show-right  { transform: translateZ(-150px) rotateY( -90deg); }
.box.show-left   { transform: translateZ(-150px) rotateY(  90deg); }
.box.show-top    { transform: translateZ(-100px) rotateX( -90deg); }
.box.show-bottom { transform: translateZ(-100px) rotateX(  90deg); }


.box__face {
  position: absolute;
  border: 2px solid #ffffff;
  font-size: 40px;
  font-weight: bold;
  color: white;
  text-align: center;
}

.box__face--front,
.box__face--back {
  width: 300px;
  height: 200px;
  line-height:80px;
}

.box__face--right,
.box__face--left {
  width: 100px;
  height: 200px;
  left: 100px;
  line-height: 200px;
}

.box__face--top,
.box__face--bottom {
  width: 300px;
  height: 100px;
  top: 50px;
  line-height: 100px;
}

.box__face--front  { background: hsla(0, 0%, 80%, 0.7); } /* Light Gray */

.box__face--right  { background: hsla(0, 0%, 90%, 0.7); } /* Yellow */
.box__face--back   { background: hsla(0, 0%, 50%, 0.7); } /* Green */
.box__face--left   { background: hsla(0, 0%, 80%, 0.7); } /* Cyan */
.box__face--top   { background: hsla(0, 0%, 30%, 0.7); } /* Blue */
.box__face--bottom { background: hsla(0, 0%, 50%, 0.7); }/* Magenta */


.box__face--front  { transform: rotateY(  0deg) translateZ( 50px); }
.box__face--back   { transform: rotateY(180deg) translateZ( 50px); }

.box__face--right  { transform: rotateY( 90deg) translateZ(150px); }
.box__face--left   { transform: rotateY(-90deg) translateZ(150px); }

.box__face--top    { transform: rotateX( 90deg) translateZ(100px); }
.box__face--bottom { transform: rotateX(-90deg) translateZ(100px); }

label { margin-right: 10px; }

.cwname {
    font-size:20px;
    line-height:30px !important;
    text-align:left;
    margin-left:50px;
    width:200px;
    color: #000000 !important;
   

}

.cwno{
    font-size:14px;
    text-align:left;
    margin-left:50px;
    color: #000000 !important;
    
}
.price{
    margin-top:10px;
    text-align:center;
    font-weight:700;
}


    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function getOrdinalSuffix(day) {
                if (day >= 11 && day <= 13) return 'th';
                switch (day % 10) {
                    case 1: return 'st';
                    case 2: return 'nd';
                    case 3: return 'rd';
                    default: return 'th';
                }
            }

            function showDateTime() {
                const now = new Date();
                const day = now.getDate();
                const dayWithSuffix = `${day}${getOrdinalSuffix(day)}`;

                const weekday = now.toLocaleString('en-GB', { weekday: 'long' });
                const month = now.toLocaleString('en-GB', { month: 'long' });
                const year = now.getFullYear();

                const formattedDate = `${weekday} ${dayWithSuffix} ${month}, ${year}`;
                document.getElementById('clock').textContent = formattedDate;
            }

            showDateTime(); // Call function to display the date
        });
    </script>
  
</head>
<body>

    <div   class="grid-container" >
        <div class="header">
        <a href="#">HOME</a>
        <a href="#">COURSES</a>
        <a href="#">AFFILIATIONS</a>
        <a href="#">HOW TO JOIN</a>
        <a href="#">TESTIMONIALS</a>
    </div>
     
        <div class="cart">
            <img src="https://static.vecteezy.com/system/resources/previews/019/787/018/non_2x/shopping-cart-icon-shopping-basket-on-transparent-background-free-png.png" alt="Cart" width="90" class="cartimg">
        </div>
    </div>
    

    <div class="clocknameGrid">
         <!-- Display Date/Time -->
     <div class="clock">
        <p id="clock"></p>
    </div>

   <div class="name">
   <?php
        if (isset($_POST['visitorName']) && isset($_POST['visitorEmail'])) {
            $name = htmlspecialchars($_POST['visitorName']);
            $email = htmlspecialchars($_POST['visitorEmail']);
            echo "<p>Welcome $name ($email)</p>";
        }
    ?>
    </div>
    </div>

    <div class="grid-container">
  <div class="scene">
    <div class="box">
      <div class="box__face box__face--front">
        <div>
          <div class="cwno">EC0001</div>
          <div class="cwname">Quantitative Analysis in Business (45 H)</div>
        </div>
      </div>
      <div class="box__face box__face--back"></div>
      <div class="box__face box__face--right"></div>
      <div class="box__face box__face--left"></div>
      <div class="box__face box__face--top"></div>
      <div class="box__face box__face--bottom"></div>
    </div>
    <div class="price">Rs. 35,000/-</div>
  </div>

  <div class="scene">
    <div class="box">
      <div class="box__face box__face--front">
        <div>
          <div class="cwno">EC0002</div>
          <div class="cwname">InformationTechnology in Retailing(45 Hours)</div>
        </div>
      </div>
      <div class="box__face box__face--back"></div>
      <div class="box__face box__face--right"></div>
      <div class="box__face box__face--left"></div>
      <div class="box__face box__face--top"></div>
      <div class="box__face box__face--bottom"></div>
    </div>
    <div class="price">Rs. 35,000/-</div>
  </div>

  <div class="scene">
    <div class="box">
      <div class="box__face box__face--front">
        <div>
          <div class="cwno">EC0003</div>
          <div class="cwname">Brand Innovation & Development (30 Hours)</div>
        </div>
      </div>
      <div class="box__face box__face--back"></div>
      <div class="box__face box__face--right"></div>
      <div class="box__face box__face--left"></div>
      <div class="box__face box__face--top"></div>
      <div class="box__face box__face--bottom"></div>
    </div>
    <div class="price">Rs. 25,000/-</div>
  </div>
  <div class="scene">
    <div class="box">
      <div class="box__face box__face--front">
        <div>
          <div class="cwno">EC0004</div>
          <div class="cwname">Packaging &Logistic Management (30 Hours)</div>
        </div>
      </div>
      <div class="box__face box__face--back"></div>
      <div class="box__face box__face--right"></div>
      <div class="box__face box__face--left"></div>
      <div class="box__face box__face--top"></div>
      <div class="box__face box__face--bottom"></div>
    </div>
    <div class="price">Rs. 25,000/-</div>
  </div>
  <div class="scene">
    <div class="box">
      <div class="box__face box__face--front">
        <div>
          <div class="cwno">EC0005</div>
          <div class="cwname">Service Marketing(40 Hours)</div>
        </div>
      </div>
      <div class="box__face box__face--back"></div>
      <div class="box__face box__face--right"></div>
      <div class="box__face box__face--left"></div>
      <div class="box__face box__face--top"></div>
      <div class="box__face box__face--bottom"></div>
    </div>
    <div class="price">Rs. 30,000/-</div>
  </div>
  <div class="scene">
    <div class="box">
      <div class="box__face box__face--front">
        <div>
          <div class="cwno">EC0006</div>
          <div class="cwname"> E-Commerce (45Hours)</div>
        </div>
      </div>
      <div class="box__face box__face--back"></div>
      <div class="box__face box__face--right"></div>
      <div class="box__face box__face--left"></div>
      <div class="box__face box__face--top"></div>
      <div class="box__face box__face--bottom"></div>
    </div>
    <div class="price">Rs. 35,000/-</div>
  </div>

  <!-- Add more scenes as needed -->
</div>

        












   

</body>
</html>
