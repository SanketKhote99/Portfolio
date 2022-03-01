<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" >
</head>
<body class="bg-body text-white font-poppins pb-12">
  <header class="py-6">
      <div class="container flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <div class="text-2xl font-bold">Sanket Khote</div>
        <div class="hidden md:flex space-x-12 text-center">
          <a c href="#" class="text-selected-text">Home</a>
          <a href="#work">My Work</a>
          <a href="#clients">Clients</a>
          <a href="#hire"><button class="px-6 py-1 bg-theme font-bold">Hire Me </button></a>
        </div>
        <div class="md:hidden">
           <a class="fas fa-bars text-white text-xl" href=""></a>
        </div>
      </div>


    </header>
  
  <div class="container mt-16 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
      <div class="flex flex-wrap md:flex-nowrap ">
         <nav class="inline-block lg:mr-24 lg:w-4 fixed left-percentage hidden xl:block">
          <div class="absolute left-50 transform -translate-x-1/2 space-y-6 mt-36 ">
          <a href="#" class="flex items-center nav-dot selected-circle block w-6 h-6 rounded-full border-4 border-nav bg-body">
            <span class=" bg-black px-2 py-1 rounded-md ml-10 opacity-0">Home</span>
          </a>
          <a href="#work" class="flex items-center nav-dot block w-6 h-6 rounded-full border-4 border-nav bg-body">
            <span class=" bg-black px-2 py-1 rounded-md ml-10 opacity-0">Work</span>
          </a>
          <a href="#clients" class="flex items-center nav-dot block w-6 h-6 rounded-full border-4 border-nav bg-body">
            <span class=" bg-black px-2 py-1 rounded-md ml-10 opacity-0">Clients</span>
          </a>
          <a href="#hire" class="flex items-center nav-dot block w-6 h-6 rounded-full border-4 border-nav bg-body">
            <span class=" bg-black px-2 py-1 rounded-md ml-10 opacity-0">Hire</span>
          </a>
          </div>
        </nav>
        <div class="flex flex-wrap lg:ml-20 justify-center md:justify-start max-w-xl mt-0 md:my-32 ">
          <h1 class="font-bold text-5xl md:text-6xl lg:text-6xl text-center md:text-left">Building <br> beautiful web experiences.</h1>
            <button class=" px-8 py-4 bg-theme text-white font-bold mt-12 flex items-center justify-center md:justify-start space-x-3">
            <i class="fas fa-eye"></i>
            <span>My Work.</span>
          </button>
          </div>
        <!-- <img class="w-2/6 mt-12  md:absolute -mt-6 md:mt-0 right-0 -z-1 " src="" alt="Man"> -->
      </div>
    </div>
 
      <div class="container mt-16 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-36 w-full">
        <section class="w-full">
            <h2 id="work" class="secondary-title">My Work</h2>
            <p class="section-paragraph">I've had the pleasure of working with multiple feature 500 companies, designing and importing both frontend and backend </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <img src="https://res.cloudinary.com/practicaldev/image/fetch/s--08RY4_Yg--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/i/1o8inq8110mxvqyls276.png" alt="">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaAbiue4N4AT9STL4p323elKuz6ASeJrspHQ&usqp=CAU" alt="">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxANEWn8FRMaR1PsTaRN_5d1NFqYo4i2659A&usqp=CAU" alt="">            
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9y8K66QbGLrt05jsHcEdzG_uw19CFqnWKcw&usqp=CAU" alt="">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1gkBImEXOELuAmzQg6tnuYeERZLR_clp25w&usqp=CAU" alt="">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNSLBuwFS9f3RunbwovxXQRHx3G8SjV_IoqQ&usqp=CAU" alt="">

              </div>
        </section>
    </div>

     
    <!-- Clients -->
     <div class="container mt-36 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-36 w-full">
        <section class="w-full">
            <h2 id="clients" class="secondary-title">Clients</h2>
            <p class="section-paragraph">I've had the pleasure of working with multiple feature 500 companies, designing and importing both frontend and backend </p>
     
            <!-- Clinet -->
            <div class="space-y-12 my-16">
                <div class="w-full border-nav border-2 p-16 lg:px-32 lg:py-6 lg:space-x-32 flex justify-center lg:justify-start flex-wrap lg:flex-nowrap">
     
                  <!-- Clinet logo -->
                  <div class="flex flex-wrap items-center mb-6 lg:mb-0">
                  <i class="fab fa-github text-7xl"></i>
                  <!-- <svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="72" height="72"><path d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z" fill="#E8EAED"></path><circle cx="12" cy="12" r="3.5" fill="#E8EAED"></circle></svg> -->
                  </div>
                 
                  <!-- Clinet info -->
                  <div class="flex flex-wrap justify-center text-center lg:text-left lg:block">
                      <h3 class="text-white text-3xl font-semibold">Github Clone</h3>
                      <div class="w-full lg:w-auto flex flex-wrap justify-center lg:justify-start gap-3 mt-6 mb-8">
                          <div class="badge">UI/UX</div>
                          <div class="badge">Frontend development</div>
                      </div>
                          <a href="http://sanketkhote.epizy.com/" target="_blank" class="visitweb">Visit Website</a>
                          <p class="section-paragraph">I created GitHub repository page clone using tailwind css and nuxt js </p>
                  </div>
                </div>
                <!-- <div class="w-full border-nav border-2 p-16 lg:px-32 lg:py-6 lg:space-x-32 flex justify-center lg:justify-start flex-wrap lg:flex-nowrap">
                  <div class=" flex flex-wrap items-center mb-6 lg:mb-0">
                      <svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="72" height="72"><path d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z" fill="#E8EAED"></path><circle cx="12" cy="12" r="3.5" fill="#E8EAED"></circle></svg>
                  </div>
                  <div class="flex flex-wrap justify-center text-center lg:text-left lg:block">
                      <h3 class="text-white text-3xl font-semibold">Apple, inc.</h3>
                      <div class="w-full lg:w-auto flex flex-wrap justify-center lg:justify-start gap-3 mt-6 mb-8">
                          <div class="badge">UI/UX</div>
                          <div class="badge">frontend development</div>
                      </div>
                          <p class="section-paragraph">I've had the pleasure of working with multiple fature 500 companies, designing and importing both frontend and backend </p>
                  </div>
                </div>
                <div class="w-full border-nav border-2 p-16 lg:px-32 lg:py-6 lg:space-x-32 flex justify-center lg:justify-start flex-wrap lg:flex-nowrap">
                  <div class="flex flex-wrap items-center mb-6 lg:mb-0">
                      <svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="72" height="72"><path d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z" fill="#E8EAED"></path><circle cx="12" cy="12" r="3.5" fill="#E8EAED"></circle></svg>
                  </div>
                  <div class="flex flex-wrap justify-center text-center lg:text-left lg:block">
                      <h3 class="text-white text-3xl font-semibold">Apple, inc.</h3>
                      <div class="w-full lg:w-auto flex flex-wrap justify-center lg:justify-start gap-3 mt-6 mb-8">
                          <div class="badge">UI/UX</div>
                          <div class="badge">frontend development</div>
                      </div>
                          <p class="section-paragraph">I've had the pleasure of working with multiple fature 500 companies, designing and importing both frontend and backend </p>
                  </div>
                </div> -->
            </div>

             <!-- Clinet -->
             <div class="space-y-12 my-16">
                <div class="w-full border-nav border-2 p-16 lg:px-32 lg:py-6 lg:space-x-32 flex justify-center lg:justify-start flex-wrap lg:flex-nowrap">
     
                  <!-- Clinet logo -->
                  <div class="flex flex-wrap items-center mb-6 lg:mb-0">
                  <i class="fab fa-facebook text-7xl"></i>
                  <!-- <svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="72" height="72"><path d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z" fill="#E8EAED"></path><circle cx="12" cy="12" r="3.5" fill="#E8EAED"></circle></svg> -->
                  </div>
                 
                  <!-- Clinet info -->
                  <div class="flex flex-wrap justify-center text-center lg:text-left lg:block">
                      <h3 class="text-white text-3xl font-semibold">Facebook Clone</h3>
                      <div class="w-full lg:w-auto flex flex-wrap justify-center lg:justify-start gap-3 mt-6 mb-8">
                          <div class="badge">UI/UX</div>
                          <div class="badge">Frontend development</div>
                      </div>
                          <!-- <a href="http://sanketkhote.epizy.com/" target="_blank" class="visitweb">Visit Website</a> -->
                          <p class="section-paragraph">I created Facebook clone in Flutter </p>
                  </div>
                </div>
                <!-- <div class="w-full border-nav border-2 p-16 lg:px-32 lg:py-6 lg:space-x-32 flex justify-center lg:justify-start flex-wrap lg:flex-nowrap">
                  <div class=" flex flex-wrap items-center mb-6 lg:mb-0">
                      <svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="72" height="72"><path d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z" fill="#E8EAED"></path><circle cx="12" cy="12" r="3.5" fill="#E8EAED"></circle></svg>
                  </div>
                  <div class="flex flex-wrap justify-center text-center lg:text-left lg:block">
                      <h3 class="text-white text-3xl font-semibold">Apple, inc.</h3>
                      <div class="w-full lg:w-auto flex flex-wrap justify-center lg:justify-start gap-3 mt-6 mb-8">
                          <div class="badge">UI/UX</div>
                          <div class="badge">frontend development</div>
                      </div>
                          <p class="section-paragraph">I've had the pleasure of working with multiple fature 500 companies, designing and importing both frontend and backend </p>
                  </div>
                </div>
                <div class="w-full border-nav border-2 p-16 lg:px-32 lg:py-6 lg:space-x-32 flex justify-center lg:justify-start flex-wrap lg:flex-nowrap">
                  <div class="flex flex-wrap items-center mb-6 lg:mb-0">
                      <svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="72" height="72"><path d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z" fill="#E8EAED"></path><circle cx="12" cy="12" r="3.5" fill="#E8EAED"></circle></svg>
                  </div>
                  <div class="flex flex-wrap justify-center text-center lg:text-left lg:block">
                      <h3 class="text-white text-3xl font-semibold">Apple, inc.</h3>
                      <div class="w-full lg:w-auto flex flex-wrap justify-center lg:justify-start gap-3 mt-6 mb-8">
                          <div class="badge">UI/UX</div>
                          <div class="badge">frontend development</div>
                      </div>
                          <p class="section-paragraph">I've had the pleasure of working with multiple fature 500 companies, designing and importing both frontend and backend </p>
                  </div>
                </div> -->
            </div>

        </section>
        </div>

        

        <!-- Hire -->
        <div class="container mt-36 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-36 w-full">
           <section class="w-full">
              <h2 id="hire" class="secondary-title">Hire me</h2>
              <p class="section-paragraph">Feel free to to contact me any time, through any method below.</p>
              <div class="w-full grid lg:grid-cols-2 gap-8 lg:gap-32 mt-24">
              
                <form action="{{ route('user.contact') }}" method="post">
                  @csrf
                  <div class="space-y-12">
                    <div>
                        <label for="" class="text-white block mb-6 text-xl font-bold">Name</label>
                        <input type="text" name="name" class="w-full border border-input-border bg-input px-4 py-4 p-16 " required>
                    </div>
                    <div>
                        <label for="" class="text-white block mb-6 text-xl font-bold">Email</label>
                        <input type="email" name="email" class="w-full border border-input-border bg-input px-4 py-4 p-16 " required>
                    </div>
                    <div>
                        <label for="" class="text-white block mb-6 text-xl font-bold">Message</label>
                        <textarea type="text" name="message" class="w-full border border-input-border bg-input px-4 py-4 p-16 " cols="30" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="px-6 py-2 bg-theme text-white font-bold">Send it!</button>
                  </div>
                </form>

                @include('inc.message')

                <div class="mt-12">
                    <!-- Contact info -->
                      <p class="text-secondary">Contact me</p>
                      <a href="tel:+91 97670 46835" class="text-secondary">+91 97670 46835</a>
                      <a href="mailto:sanketkhote43@gmail.com" class="flex flex-wrap text-secondary underline mt-6 ">sanketkhote43@gmail.com</a>

                    <!-- Social -->
                    <div class="flex mt-20 space-x-6">
                        <!-- Twitter -->
                        <a class="fab fa-twitter text-3xl" target="_blank" href="https://twitter.com/sanketkhote99"></a>
                        <!-- Github -->
                        <a class="fab fa-github text-3xl" target="_blank" href="https://github.com/SanketKhote99"></a>
                        <!-- Instgram -->
                        <a class="fab fa-instagram text-3xl" target="_blank" href="https://www.instagram.com/sanket.khote/"></a>
                        <!-- Youtube -->
                        <!-- <a class="fab fa-youtube text-3xl" href="#"></a> -->

                    </div>
                </div>
              </div>
           </section>

        </div>

        <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>