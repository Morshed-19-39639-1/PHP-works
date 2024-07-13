<?php

$time = time();
echo "DATE :".date('d-m-Y' , $time) .'<br>';
echo "BD TIME :". date('h:i:s', $time-28800);#time -second 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Microsoft Logo</title>
    <style>
.logo {
    width:200px;
    height:200px;
     overflow:hidden;
     margin:0 auto;
    position:relative;
}

span {
    position: absolute;
    display: block;
    border-radius: 0%;
    width: 50%;
    height: 50%;
}

.blue {
    top: 0;
    left: 0;
    background-color: #00A4EF;
}

.green {
    top: 0;
    right: 0;
    background-color: #7FBA00;
}

.red {
    bottom: 0;
    left: 0;
    background-color: #FF3B30;
}

.yellow {
    bottom: 0;
    right: 0;
    background-color: #FFB900;
}
/* ################*/
#adidas{
  width:300px;
  height:300px;
  margin:50px auto 0;
}
.cover{
  width:205px;
  height:120px;
  overflow:hidden;
  margin:0 auto;
  position:relative;
}
.shape{
  width: 46px;
  height: 150px;
  background: #111;
  -webkit-transform: rotate(329deg);
  -moz-transform: rotate(329deg);
  -o-transform: rotate(329deg);
  writing-mode: lr-tb;
  position: absolute;
}
.shape.s1{
  top:86px;
  left:36px;
}
.shape.s2{
  top:46px;
  left:82px;
}
.shape.s3{
  top:4px;
  left:129px;
}
body {
        background-color: white;
      }
      #example {
        width: 450px;
        margin: 250px auto;
      }
      h2 {
        text-align: center;
        color: #d9fff9;
        font-size: 80px;
        letter-spacing: 6px;
        font-weight: 300;
        margin: 0;
        line-height: 0;
        animation: glitch1 0.5s infinite;
      }
      h2:nth-child(2) {
        color: #0ef0e1;
        animation: glitch2 1.0s infinite;
      }
      h2:nth-child(3) {
        color: #ff94eb;
        animation: glitch3 1.0s infinite;
      }
      @keyframes glitch1 {
        0% {
          transform: none;
          opacity: 1;
        }
        50% {
          transform: skew(-2deg, 0.6deg);
          opacity: 0.75;
        }
        100% {
          transform: none;
          opacity: 1;
        }
      }
      @keyframes glitch2 {
        0% {
          transform: none;
          opacity: 0.25;
        }
        50% {
          transform: translate(-3px, -1px);
          opacity: 0.5;
        }
        100% {
          transform: none;
          opacity: 0.25;
        }
      }
      @keyframes glitch3 {
        0% {
          transform: none;
          opacity: 0.25;
        }
        50% {
          transform: translate(3px, 1px);
          opacity: 0.5;
        }
        100% {
          transform: none;
          opacity: 0.25;
        }
      }

  

    </style>
</head>
<body>






    <center><h1>Microsoft logo</h1></center>
    <div class="logo">
        <span class="blue"></span>
        <span class="green"></span>
        <span class="red"></span>
        <span class="yellow"></span>
    </div high="70%" width="100%">
    
    <center><marquee behavior="scroll" direction="left" scrollamount="10"><h1>adidas logo</h1></marquee></center>

     <div id="adidas">
        <div class="cover">
        <div class="shape s1"></div>
        <div class="shape s2"></div>
        <div class="shape s3"></div>
        </div>
    </div>
    <div id="example">
        <h2>Morshed</h2>
        <h2>Morshed</h2>
        <h2>Morshed</h2>
    </div>
    

    
</body>
</html>
