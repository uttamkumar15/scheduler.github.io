<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="logo1.png">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>Scheduler</title>

  

</head>
<body>
  <!-- class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"> -->
  <!-- fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24" -->
  <!-- Header Section -->
    <header class="text-gray-600 body-font">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="index.html" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
          <img src="logo12.png"  viewBox="0 0 24 24" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-xl">Schedule Tasker</span>
        </a>
        <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
          <a href="#" class="mr-5 hover:text-gray-900">Home</a>
          <a href="services.html" class="mr-5 hover:text-gray-900">Services</a>
          <a href="contactus.html" class="mr-5 hover:text-gray-900">Contact Us</a>
          <a href="aboutus.html" class="mr-5 hover:text-gray-900">About Us</a>
        </nav>

      </div>
    </header>
<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username, $password);

    if (!$con){
        die("connection to this database failed due to".
        mysqli_connect_error());
    }
    //echo "Sucess Connecting to Db.";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $edu = $_POST['edu'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $punctual = $_POST['punctual'];
    $task1 = $_POST['task1'];
    $task2 = $_POST['task2'];
    $task3 = $_POST['task3'];
    $task4 = $_POST['task4'];
    $task5 = $_POST['task5'];
    $task6 = $_POST['task6'];
    $task7 = $_POST['task7'];
    $task8 = $_POST['task8'];
    $institute = $_POST['institute'];
    $institute_name = $_POST['institute_name'];

    $sql= "INSERT INTO `user_data`.`scheduler` (`firstname`, `lastname`, `gender`, `edu`, `dob`, `email`, `punctual`, `task1`, `task2`, `task3`, `task4`, `task5`, `task6`, `task7`, `task8`, `institute`, `institute_name`, `dt`) VALUES ('$firstname', '$lastname', '$gender', '$edu', '$dob', '$email', '$punctual', '$task1', '$task2', '$task3', '$task4', '$task5', '$task6', '$task7', '$task8', '$institute', '$institute_name', current_timestamp());
    ";


    // Output Area
    if($con->query($sql)== true){
        echo "<br>Form Has been Submitted.<br><br>Your Schedule : - <br><hr><br>";
        $list=array($task1, $task2, $task3, $task4, $task5, $task6,$task7,$task8);
        shuffle($list);
        print "<pre>";
        echo implode('<br><hr><br>',$list);
        print "</pre><br><br>";
  
        }


        if ($punctual==5){
            echo "Your schedule is very bright, you will acheive something with this.";
        }
        elseif ($punctual==4){
            echo "you schedule is ok, you need some inprovement.";
        }
        elseif ($punctual==3) {
            echo "your schedule is ok, you need a lot of improvement.";
            
        }
        elseif ($punctual==2){
          echo "You Need A lot of Improvement.";
        }
        elseif ($punctual==1){
          echo "You Need a Lot of Imporvement, Focus.";
        }
        else {
          echo "You Should take our Pro version for guidance because your schedule is not good.";
        }


    
   // else{echo "ERROR : $sql <br> $con->error";
    //}
    $con->close();


?>  
    <!-- Feature section -->
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4"><b>Features Of Schedule Tasker</b></h1>
          <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Schedule Tasker provides you many features along with the AI which provides you personalize experience.</p>
          <div class="flex mt-6 justify-center">
            <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
          </div>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
          <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
            <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
              <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg> -->
              <svg class="svg-inline--fa fa-check-circle fa-w-16 icon fa-4x" aria-hidden="true" data-prefix="fas" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">AI Powered</h2>
              <p class="leading-relaxed text-base">The task priority set on the basis of the your task and your work all decided by the AI.</p>
              <a href="https://en.wikipedia.org/wiki/Artificial_intelligence" target="_main" class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
          <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
            <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
              <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                <circle cx="6" cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
              </svg> -->
              <svg class="svg-inline--fa fa-bullseye fa-w-16 icon fa-4x" aria-hidden="true" data-prefix="fas" data-icon="bullseye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 72c101.689 0 184 82.295 184 184 0 101.689-82.295 184-184 184-101.689 0-184-82.295-184-184 0-101.689 82.295-184 184-184m0-64C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 184c35.29 0 64 28.71 64 64s-28.71 64-64 64-64-28.71-64-64 28.71-64 64-64m0-64c-70.692 0-128 57.308-128 128s57.308 128 128 128 128-57.308 128-128-57.308-128-128-128z"></path></svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Best in Market</h2>
              <p class="leading-relaxed text-base">Our service is best in the market. We provide you best services in affordable price.</p>
              <a href="https://en.wikipedia.org/wiki/Market" class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
          <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
            <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
              <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg> -->
              <svg class="svg-inline--fa fa-heart fa-w-18 icon fa-4x" aria-hidden="true" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M414.9 24C361.8 24 312 65.7 288 89.3 264 65.7 214.2 24 161.1 24 70.3 24 16 76.9 16 165.5c0 72.6 66.8 133.3 69.2 135.4l187 180.8c8.8 8.5 22.8 8.5 31.6 0l186.7-180.2c2.7-2.7 69.5-63.5 69.5-136C560 76.9 505.7 24 414.9 24z"></path></svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Guaranteed To Work</h2>
              <p class="leading-relaxed text-base">By Using Scheduler your efficiency and productivity will increase day by day.</p>
              <a href="https://en.wikipedia.org/wiki/Guarantee" class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Our Team -->
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
          <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">OUR TEAM</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="p-4 lg:w-1/2">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="aditya.png">
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">Aditya Anand</h2>
                <h3 class="text-gray-500 mb-3">UI Designer</h3>
                <p class="mb-4"></p>
              </div>
            </div>
          </div>
          <div class="p-4 lg:w-1/2">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="kanak.jpg">
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">Kanak Tiwari</h2>
                <h3 class="text-gray-500 mb-3">UI Designer</h3>
                <p class="mb-4"></p>

              </div>
            </div>
          </div>
          <div class="p-4 lg:w-1/2">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="vinay.jpg">
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">Vinay Sati</h2>
                <h3 class="text-gray-500 mb-3">Full Stack Developer</h3>
                <p class="mb-4"></p>

              </div>
            </div>
          </div>
          <div class="p-4 lg:w-1/2">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="profile.jpg">
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">Uttam Kumar</h2>
                <h3 class="text-gray-500 mb-3">Full Stack Developer</h3>
                <p class="mb-4"></p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->

    <footer class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <img src="logo12.png"  class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <span class="ml-3 text-xl"><b>Schedule Tasker</b></span>
          </a>
          <p class="mt-2 text-sm text-gray-500"><i>Be Different</i></p>
        </div>
        <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">OFFICE</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-600 hover:text-gray-800">Ganesh Nagar,Shakarpur</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">East Delhi - 110092</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">India</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CONTACT US</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-600 hover:text-gray-800">aa4931@dseu.ac.in</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">vs2591@dseu.ac.in</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">uk3906@dseu.ac.in</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">+91 9205437865</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">LINKS</h2>
            <nav class="list-none mb-10">
              <li>
                <a href="#" class="text-gray-600 hover:text-gray-800">Home</a>
              </li>
              <li>
                <a href="services.html" class="text-gray-600 hover:text-gray-800">Services</a>
              </li>
              <li>
                <a href="privacypolicy.html" class="text-gray-600 hover:text-gray-800">Privacy Policy</a>
              </li>
              <li>
                <a href="dmca.html" class="text-gray-600 hover:text-gray-800">DMCA</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Follow Us</h2>
            <nav class="list-none mb-10">
              <li>
                <a href="https://www.facebook.com/Delhi-Skill-and-Entrepreneurship-University-101889171744201/" class="text-gray-600 hover:text-gray-800">Facebook</a>
              </li>
              <li>
                <a href="https://www.instagram.com/dseu_official/" class="text-gray-600 hover:text-gray-800">Instagram</a>
              </li>
              <li>
                <a href="https://twitter.com/dseu_official" class="text-gray-600 hover:text-gray-800">Twitter</a>
              </li>
              <li>
                <a  href="https://www.youtube.com/channel/UCI15NHqMRNTjPdzrteFuwgA" class="text-gray-600 hover:text-gray-800">Youtube</a>
              </li>
            </nav>
          </div>
        </div>
      </div>
      <div class="bg-gray-100">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
          <p class="text-gray-500 text-sm text-center sm:text-left">© 2022 Scheduler —
            <a href="https://twitter.com/dseu_official" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@scheduler</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
            <a href="https://www.facebook.com/Delhi-Skill-and-Entrepreneurship-University-101889171744201/" target="_main" class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a href="https://twitter.com/dseu_official" target="_main" class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a href="https://www.instagram.com/dseu_official/" class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a href="https://in.linkedin.com/company/delhi-skill-and-entrepreneurship-university" class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </footer>

</body>
</html>

