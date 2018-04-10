<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    @-webkit-keyframes pulsate {
  0% {
    transform: scale(0.75);
  }
  50% {
    transform: scale(1.75);
  }
  100% {
    transform: scale(0.75);
  }
}
@-moz-keyframes pulsate {
  0% {
    transform: scale(0.75);
  }
  50% {
    transform: scale(1.75);
  }
  100% {
    transform: scale(0.75);
  }
}
@-o-keyframes pulsate {
  0% {
    transform: scale(0.75);
  }
  50% {
    transform: scale(1.75);
  }
  100% {
    transform: scale(0.75);
  }
}
@keyframes pulsate {
  0% {
    transform: scale(0.75);
  }
  50% {
    transform: scale(1.75);
  }
  100% {
    transform: scale(0.75);
  }
}
@-webkit-keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@-moz-keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@-o-keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.payment-loader-container {
  margin: 25vh auto 0;
}
.payment-loader-container .payment-loader {
  width: 125px;
  height: 125px;
  margin: 0 auto;
}
.payment-loader-container .payment-loader .payment-circle {
  text-align: center;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 5px solid lightgray;
}
.payment-loader-container .payment-loader .payment-circle .payment-inner-circle {
  position: relative;
  left: -12.5%;
  top: 35%;
  width: 125%;
  height: 25%;
  background-color: white;
  -webkit-animation: rotate 2s infinite linear;
  animation: rotate 2s infinite linear;
}
.payment-loader-container .payment-loader .payment-circle h1 {
  position: relative;
  color: darkgray;
  top: -0.25em;
  font-family: "Raleway";
  -webkit-animation: pulsate 1.25s infinite ease;
  animation: pulsate 1.25s infinite ease;
}

</style>
<body>
        <div class="payment-loader-container">
                <div class="payment-loader">
                  <div class="payment-circle">
                    <div class="payment-inner-circle">
                    </div>
                    <h1>
                      $
                    </h1>
                  </div>
                </div>
              </div>
              <script>setTimeout(function(){location.href="/profile"} , 3000);  </script>
</body>
</html>