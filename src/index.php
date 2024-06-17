<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão TODO LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
  import {getAuth, createUserWithEmailAndPassword} from "https://www.gstatic.com/firebasejs/10.12.1/firebase-auth.js";

  const firebaseConfig = {
  apiKey: "AIzaSyBLKab62Ezd4i3SKQgaRpwq6r-do4L6Kpk",
  authDomain: "userregisterfireauth.firebaseapp.com",
  projectId: "userregisterfireauth",
  storageBucket: "userregisterfireauth.appspot.com",
  messagingSenderId: "613670999429",
  appId: "1:613670999429:web:4e84e1c085e038560e20ec",
  measurementId: "G-RFY6Q41KSS"
};

  // Initialize Firebase

  window.fbApp = initializeApp(firebaseConfig);
  window.fbAuth = getAuth(window.fbApp);
  console.log(window.fbApp);
  
  const btnRegister = document.getElementById('btnRegister');

  btnRegister.addEventListener('click', async ()=> {
    const email = document.getElementById('email').value; 
    const password = document.getElementById('password').value;
    console.log(email);
    console.log(password);
  
    try{
      const userCredential = await createUserWithEmailAndPassword(fbAuth, email, password);
      console.log(userCredential);
    }
    catch (error){
      console.error(error);
    }

  })
  
</script>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Djair 2024</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <?php 
    //     include_once 'src/main.php'
        ?> 

<label for="email">Email</label><br>
    <input type="email" id="email" name="email"><br>
    
    <label for="password">Password</label><br>
    <input type="password" id="password" name="password"><br>
    
    <button id="btnLogin">Login</button>
    <button id="btnRegister"> Registrar Usuário</button>

    
 

</body>
</html>