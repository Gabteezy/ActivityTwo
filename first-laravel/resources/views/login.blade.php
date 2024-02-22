<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #Container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  height: 100%;
}

#rays {
  z-index: 2;
  position: relative;
  bottom: -1.5em;
  animation: rays 2s ease-in-out infinite;
}

.form {
  position: relative;
  top: 5em;
  padding: 4%;
  z-index: 3;
  display: flex;
  flex-direction: column;
  border-radius: 0.5rem;
  border: 4px solid #fff;
  background: rgba(0, 255, 240, 0.52);
  box-shadow: 0px 0px 64px 0px #82e1ff inset, 0px 0px 16px #a8fffaa6;
  backdrop-filter: blur(3.5px);
  gap: 1em;
  animation: float 2s ease-in-out infinite;
}

#login-lable {
  text-align: center;
  color: white;
  font-size: 2rem;
  font-weight: 600;
  letter-spacing: 8px;
  text-shadow: 0px 0px 16px rgb(243, 243, 243);
}

.form-content {
  height: 3em;
  padding: 1px 8px;
  color: white;
  text-decoration: none;
  letter-spacing: 1px;
  font-weight: bold;
  border-radius: 6px;
  border: 2px solid #fff;
  background: rgba(139, 255, 247, 0.486);
  box-shadow: 0px 0px 1px 3px #9ee5e3 inset, 0px 4px 4px 0px #181a6040;
  text-shadow: 0px 1px 4px rgb(243, 243, 243);
}

.form-content:focus-visible {
  outline: none;
  text-decoration: none;
  background: rgba(139, 189, 255, 0.59);
  box-shadow: 0px 0px 1px 4px #9ee5e3;
}

.form-content:hover {
  background: rgba(139, 189, 255, 0.59);
}

::placeholder {
  font-weight: 300;
  color: white;
  letter-spacing: 0.1rem;
  text-shadow: 0px 1px 5px rgb(66, 66, 66);
}

.form button {
  cursor: pointer;
  height: 3.5rem;
  padding: 0%;
  color: white;
  font-size: 1.5em;
  letter-spacing: 0.3rem;
  border: 2px solid white;
  background: linear-gradient(144deg, #9c11ffce, #2000eeb6 50%, #15efffbb);
}

.form button:hover {
  position: relative;
  bottom: 4px;
  background: linear-gradient(144deg, #9c11ff, #2000ee 50%, #15fff3);
  box-shadow: 0px 0px 2px 2px #ffffff;
}

@keyframes float {
  0% {
    position: relative;
  }

  50% {
    top: 50px;
  }

  100% {
    position: relative;
  }
}

@keyframes rays {
  0% {
    opacity: 0.6;
  }

  50% {
    opacity: 1;
  }

  100% {
    opacity: 0.6;
  }
}

        body {
            width: 100%;
            background-image: url('bg2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            height: 100%;
        }
        html {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .navbar {
            background-color: transparent !important;
        }
        
        .navbar-brand {
            color: #fff; 
        }
        
        .navbar-nav .nav-link {
            color: #fff; 
        }
        
        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            color: #000; 
        }
       
        .navbar-login-icon {
            color: #fff; 
            margin-left: auto; 
        }
        
        .navbar-nav .nav-link.home {
            color: #fff; 
        }
    </style>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="home">Second Activity Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active home" aria-current="page" href="home">Home</a>
            <a class="nav-link" href="about">About Us</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="service1">Services 1</a></li>
                <li><a class="dropdown-item" href="service2">Services 2</a></li>
                <li><a class="dropdown-item" href="service3">Services 3</a></li>
              </ul>
            </li>
            <a class="nav-link" href="contact">Contact Us</a>
          </div>
          <a class="navbar-login-icon" href="login">
            <i class="bi bi-person"></i>
          </a>
        </div>
      </div>
    </nav>
    
    <div id="Container">
      <form class="form" onsubmit="return validateForm()">
        <div id="login-lable">Login</div>
        <input id="username" class="form-content" type="text" placeholder="UserName" />
        <input id="password" class="form-content" type="password" placeholder="PassWord" />
        <button type="submit">Continue</button>
      </form>

      <div id="rays">
      <svg
      fill="none"
      viewBox="0 0 299 152"
      height="9em"
      width="18em"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        fill="url(#paint0_linear_8_3)"
        d="M149.5 152H133.42L9.53674e-07 4.70132e-06H149.5L299 4.70132e-06L165.58 152H149.5Z"
      ></path>
      <defs>
        <linearGradient
          gradientUnits="userSpaceOnUse"
          y2="12.1981"
          x2="150.12"
          y1="152"
          x1="149.5"
          id="paint0_linear_8_3"
        >
          <stop stop-color="#00E0FF"></stop>
          <stop stop-opacity="0" stop-color="#65EDFF" offset="1"></stop>
        </linearGradient>
      </defs>
    </svg>
      </div>

      <div id="emiter">
      <svg
      fill="none"
      viewBox="0 0 160 61"
      height="61"
      width="160"
      xmlns="http://www.w3.org/2000/svg"
    >
      <g filter="url(#filter0_di_1_38)">
        <path
          fill="#2B2B2B"
          d="M80 27.9997C121.974 27.9997 156 22.4032 156 15.4996L156 40.4998C156 47.4034 121.974 52.9998 80 52.9998C38.0265 52.9998 4.00028 47.4034 4 40.4998V40.4998V15.51C4.0342 22.4089 38.0474 27.9997 80 27.9997Z"
          clip-rule="evenodd"
          fill-rule="evenodd"
        ></path>
      </g>
      <ellipse
        fill="url(#paint0_radial_1_38)"
        ry="4.80773"
        rx="28.3956"
        cy="17.4236"
        cx="80"
      ></ellipse>
      <g filter="url(#filter1_i_1_38)">
        <path
          fill="#323232"
          d="M80 28.0002C121.974 28.0002 156 22.4037 156 15.5001C156 8.59648 121.974 3 80 3C38.0264 3 4 8.59648 4 15.5001C4 22.4037 38.0264 28.0002 80 28.0002ZM80.0001 20.308C96.1438 20.308 109.231 18.1555 109.231 15.5002C109.231 12.845 96.1438 10.6925 80.0001 10.6925C63.8564 10.6925 50.7693 12.845 50.7693 15.5002C50.7693 18.1555 63.8564 20.308 80.0001 20.308Z"
          clip-rule="evenodd"
          fill-rule="evenodd"
        ></path>
      </g>
      <g filter="url(#filter2_di_1_38)">
        <path
          fill="#378BA6"
          d="M106.725 17.4505C108.336 16.8543 109.231 16.1943 109.231 15.4999C109.231 12.8446 96.1438 10.6921 80.0001 10.6921C63.8564 10.6921 50.7693 12.8446 50.7693 15.4999C50.7693 16.1943 51.6645 16.8543 53.2752 17.4504C53.275 17.4414 53.2748 17.4323 53.2748 17.4232C53.2748 14.768 65.2401 12.6155 80.0001 12.6155C94.7601 12.6155 106.725 14.768 106.725 17.4232C106.725 17.4323 106.725 17.4414 106.725 17.4505Z"
          clip-rule="evenodd"
          fill-rule="evenodd"
        ></path>
      </g>
      <defs>
        <filter
          color-interpolation-filters="sRGB"
          filterUnits="userSpaceOnUse"
          height="45.5002"
          width="160"
          y="15.4996"
          x="0"
          id="filter0_di_1_38"
        >
          <feFlood result="BackgroundImageFix" flood-opacity="0"></feFlood>
          <feColorMatrix
            result="hardAlpha"
            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
            type="matrix"
            in="SourceAlpha"
          ></feColorMatrix>
          <feOffset dy="4"></feOffset>
          <feGaussianBlur stdDeviation="2"></feGaussianBlur>
          <feComposite operator="out" in2="hardAlpha"></feComposite>
          <feColorMatrix
            values="0 0 0 0 0.620833 0 0 0 0 0.620833 0 0 0 0 0.620833 0 0 0 0.25 0"
            type="matrix"
          ></feColorMatrix>
          <feBlend
            result="effect1_dropShadow_1_38"
            in2="BackgroundImageFix"
            mode="normal"
          ></feBlend>
          <feBlend
            result="shape"
            in2="effect1_dropShadow_1_38"
            in="SourceGraphic"
            mode="normal"
          ></feBlend>
          <feColorMatrix
            result="hardAlpha"
            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
            type="matrix"
            in="SourceAlpha"
          ></feColorMatrix>
          <feOffset></feOffset>
          <feGaussianBlur stdDeviation="8"></feGaussianBlur>
          <feComposite
            k3="1"
            k2="-1"
            operator="arithmetic"
            in2="hardAlpha"
          ></feComposite>
          <feColorMatrix
            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"
            type="matrix"
          ></feColorMatrix>
          <feBlend
            result="effect2_innerShadow_1_38"
            in2="shape"
            mode="normal"
          ></feBlend>
        </filter>
        <filter
          color-interpolation-filters="sRGB"
          filterUnits="userSpaceOnUse"
          height="25.0002"
          width="152"
          y="3"
          x="4"
          id="filter1_i_1_38"
        >
          <feFlood result="BackgroundImageFix" flood-opacity="0"></feFlood>
          <feBlend
            result="shape"
            in2="BackgroundImageFix"
            in="SourceGraphic"
            mode="normal"
          ></feBlend>
          <feColorMatrix
            result="hardAlpha"
            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
            type="matrix"
            in="SourceAlpha"
          ></feColorMatrix>
          <feMorphology
            result="effect1_innerShadow_1_38"
            in="SourceAlpha"
            operator="erode"
            radius="3"
          ></feMorphology>
          <feOffset></feOffset>
          <feGaussianBlur stdDeviation="6.5"></feGaussianBlur>
          <feComposite
            k3="1"
            k2="-1"
            operator="arithmetic"
            in2="hardAlpha"
          ></feComposite>
          <feColorMatrix
            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"
            type="matrix"
          ></feColorMatrix>
          <feBlend
            result="effect1_innerShadow_1_38"
            in2="shape"
            mode="normal"
          ></feBlend>
        </filter>
        <filter
          color-interpolation-filters="sRGB"
          filterUnits="userSpaceOnUse"
          height="26.7583"
          width="78.4615"
          y="0.692139"
          x="40.7693"
          id="filter2_di_1_38"
        >
          <feFlood result="BackgroundImageFix" flood-opacity="0"></feFlood>
          <feColorMatrix
            result="hardAlpha"
            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
            type="matrix"
            in="SourceAlpha"
          ></feColorMatrix>
          <feMorphology
            result="effect1_dropShadow_1_38"
            in="SourceAlpha"
            operator="dilate"
            radius="2"
          ></feMorphology>
          <feOffset></feOffset>
          <feGaussianBlur stdDeviation="4"></feGaussianBlur>
          <feComposite operator="out" in2="hardAlpha"></feComposite>
          <feColorMatrix
            values="0 0 0 0 0 0 0 0 0 0.941176 0 0 0 0 1 0 0 0 1 0"
            type="matrix"
          ></feColorMatrix>
          <feBlend
            result="effect1_dropShadow_1_38"
            in2="BackgroundImageFix"
            mode="color-dodge"
          ></feBlend>
          <feBlend
            result="shape"
            in2="effect1_dropShadow_1_38"
            in="SourceGraphic"
            mode="normal"
          ></feBlend>
          <feColorMatrix
            result="hardAlpha"
            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
            type="matrix"
            in="SourceAlpha"
          ></feColorMatrix>
          <feMorphology
            result="effect2_innerShadow_1_38"
            in="SourceAlpha"
            operator="erode"
            radius="1"
          ></feMorphology>
          <feOffset></feOffset>
          <feGaussianBlur stdDeviation="2"></feGaussianBlur>
          <feComposite
            k3="1"
            k2="-1"
            operator="arithmetic"
            in2="hardAlpha"
          ></feComposite>
          <feColorMatrix
            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.52 0"
            type="matrix"
          ></feColorMatrix>
          <feBlend
            result="effect2_innerShadow_1_38"
            in2="shape"
            mode="normal"
          ></feBlend>
        </filter>
        <radialGradient
          gradientTransform="translate(80 17.4236) rotate(90) scale(6.25004 36.9143)"
          gradientUnits="userSpaceOnUse"
          r="1"
          cy="0"
          cx="0"
          id="paint0_radial_1_38"
        >
          <stop stop-color="#00FFF0"></stop>
          <stop stop-color="#001AFF" offset="0.901042"></stop>
        </radialGradient>
      </defs>
    </svg>
      </div>
    </div>

    <script>
      function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        var validUsername = "admin";
        var validPassword = "admin";

        if (username === validUsername && password === validPassword) {
          // Successful login
          alert("Login successful!");
          window.location.href = "dashboard";
          return false;
        } else {
          // Failed login
          alert("Invalid username or password. Please try again.");
          return false; 
      }
    }
    </script>
  </body>
</html>