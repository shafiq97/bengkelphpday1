

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>CodePen - User&#39;s info, display data</title>
  
  
  
  
<style>
:root{
  --bg-black:#000;
  --bg-white:#fff;
  --bg-skyblue:#5b91f5;
  --active:#07d100;
  --grey:#e8e8e8;
  --blue:#0a54ff;
}
body{
  background:var(--bg-black);
  font-size:16px;
  font-family:sans-serif;
}
button:hover{
  cursor:pointer;
}
.container{
  background:var(--bg-white);
  min-width:300px;
  width:100%;
  max-width:600px;
  height:100%;
  margin:auto;
  border:5px solid white;
  border-radius:10px;
  padding:10px;
}
.navbar-top{
  width:100%;
  background:transparent;
  font-size:16px;
  padding:10px 0px;
  border-bottom: 1px solid grey;
}
#homebutton{
  background:var(--grey);
  border:2px solid grey;
  border-radius:10px;
  padding:5px 10px;
  outline:none;
}
.info{
  width:100%;
}
.profile-picture-div{
  width:100%;
  text-align:center;
  position:relative;
}
#profile-picture{
  top:10px;
  position:relative;
  width:200px;
  height:200px;
  border-radius:50%;
  border:5px solid var(--active);
}
#editpicture{
  cursor:pointer;
  outline:none;
  background:var(--grey);
  border:2px solid grey;
  border-radius:10px;
  padding:5px 10px;
}
.data{
  width:100%;
  text-align:center;
}
.data input{
  width:100%;
  max-width:300px;
  background:var(--grey);
  padding:10px;
  outline:none;
  border-radius:10px;
}
.footer{
  text-align:center;
}
#savebutton{
  background:var(--blue);
  color:white;
  padding:5px 30px;
  outline:none;
  border-radius:5px;
  font-size:16px;
}
#savebutton:active{
  cursor:wait;
}
.alerts{
  text-align:center;
  padding:20px;
}
#alert{
  display:none;
  background:green;
  color:white;
  padding:10px;
  border-radius:10px;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Profile</title>
</head>
<body>
  <div class="container">
    <div class="navbar-top">
      <button id="homebutton">Home</button>
    </div>
    <div class="info">
      <div class="profile-picture-div">
        <img src="https://expertphotography.b-cdn.net/wp-content/uploads/2020/08/social-media-profile-photos.jpg" id="profile-picture"><br><br>
        <button id="editpicture">Edit picture <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
      </div>
      <br>
      <div class="data">
        <label for="">Name</label><br>
        <input value="Kevin" placeholder="Name..."><br>
          <label for="">Lastname:</label><br>
        <input value="Smith" placeholder="Lastname..."><br>
          <label for="">Date of Birth</label><br>
        <input value="06/05/2002" placeholder="DOB..."><br>
          <label for="">Phone Number:</label><br>
        <input value="+1 555-555-55-55" placeholder="Phone Number..."><br>
        
      </div>
      <br>
      <div class="footer">
        <button id="savebutton" onclick="SaveDataAlert()">Save<br><i class="fa fa-arrow-down"></i></button>
      </div>
      
    </div>
    </div>
  </div>
</body>
</html>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  
      <script id="rendered-js" >
function SaveDataAlert() {
  message = "Data has been Saved ";
  alert(message);
}
//# sourceURL=pen.js
    </script>

  

</body>

</html>
 
