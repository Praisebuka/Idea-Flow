<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <!-- Container for demo purpose -->
<div>

  <!-- Section: Design Block -->
  <section class="mb-40 background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(
          650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%
        ),
        radial-gradient(
          1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%
        );
      }
      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9);
        backdrop-filter: saturate(200%) blur(25px);
      }
    
    </style>
    
    <script>
      function loginForm(e){
        e.preventDefault()
        let register=document.getElementById('form');
        let login=document.querySelector('#secondform');
      if( register.style.display!="none"){
          register.style.display="none"
          login.style.display="block"
       
        }else{
          register.style.display=""
          login.style.display="none"
        }
      }
    </script>
    <div class="px-6 py-12 lg:py-24 md:px-12 text-center lg:text-left">
      <div class="container mx-auto xl:px-32 text-gray-800">
        <div class="grid lg:grid-cols-2 gap-12 flex items-center">
          <div class="mt-12 lg:mt-0" style="z-index: 10;">
            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12" style="color: hsl(218, 81%, 95%);">Share your Ideas, Solutions<br /><span style="color: hsl(218, 81%, 75%);"> and Problems</span></h1>
            <p class="opacity-70" style="color: hsl(218, 81%, 85%)">
            <li class="list-none" style="color: hsl(218, 81%, 85%)">  You've got ideas and you don't know what to do?</li>
            <li class="list-none" style="color: hsl(218, 81%, 85%)">  Got solutions but don't have the audience?</li>
            <li class="list-none" style="color: hsl(218, 81%, 85%)">   Have problems but don't know how to fix them? </li>
         <span style="color: hsl(218, 81%, 85%)"> Use Idea Flow today to share your solutions, ideas and problems, make the world a better place and keep the flow of solutions limitless.  
          </span></p>
          </div>
          <div class="mb-12 lg:mb-0 relative">
            <div id="radius-shape-1" class="absolute rounded-full shadow-lg"></div>
            <div id="radius-shape-2" class="absolute shadow-lg"></div>
            <div class="block rounded-lg shadow-lg bg-glass px-6 py-12 md:px-12" id="form">
              <form action="/register" method="POST" >
                @csrf
               @if ($errors)
               <ul class=" p-6 m-auto">
               @forelse ($errors->all() as $error)
                   <li class="list-disc text-red-500 text-sm">{{$error}}</li>
               @empty
                   
               @endforelse
              </ul>
               @endif
               <h1 class="text-center text-3xl text-gray-700 font-bold p-6">Join The Idea Network!</h1>
                <div class="grid md:grid-cols-2 md:gap-6">
                  <div class="mb-6">
                    <input name="name" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Name"/>
                  </div>
                  <div class="mb-6">
                    <input type="text" name="username" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Username"/>
                  </div>
                </div>
                <input type="email" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Email address" name="email"/>
                <input type="password" name="password" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Password"/>
                <input type="password" name="password_confirmation" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Confirm Password"/>
               
                <div class="form-check flex justify-center mb-6">
                  <input name="remember" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-indigo-600 checked:border-indigo-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="true" id="flexCheckChecked" checked>
                  <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                    Keep me logged in
                  </label>
                </div>
                <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 mb-6 w-full bg-indigo-700 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">Sign up</button>
                <div class="text-center text-sm">
                Already Registered? <span class="text-indigo-800"><button onclick="loginForm(event)"> Login</button></span>
                </div>
              <div class="flex justify-center">
                 
                </div>
              </form>
             
            </div>

            <div class="block rounded-lg shadow-lg bg-glass px-6 py-12 md:px-12 hidden" id="secondform" >
        
              <form action="/login" method="POST"  >
                @csrf
               @if ($errors)
               <ul class=" p-6 m-auto">
               @forelse ($errors->all() as $error)
                   <li class="list-disc text-red-500 text-sm">{{$error}}</li>
               @empty
                   
               @endforelse
              </ul>
               @endif
               <h1 class="text-center text-3xl text-gray-700 font-bold p-6">Welcome Back!</h1>
              
                <input type="email" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Email address" name="email"/>
                <input type="password" name="password" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Password"/>
              
                <div class="form-check flex justify-center mb-6">
                  <input name="remember" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-indigo-600 checked:border-indigo-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="true" id="flexCheckChecked" checked>
                  <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                    Keep me logged in
                  </label>
                </div>
                <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 mb-6 w-full bg-indigo-700 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">Sign In</button>
                <div class="text-center text-sm">
                Not Registered? <span class="text-indigo-800"><button onclick="loginForm(event)">Register</button></span>
                </div>
              <div class="flex justify-center">
                 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->
</body>
</html>