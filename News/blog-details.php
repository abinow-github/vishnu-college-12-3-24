<?php
session_start();
include('..//dashboard/root/db.php');
$url = $_GET['url'];

$currentUrl = $_SERVER['REQUEST_URI'];
$pathParts = explode('/', $currentUrl);
// Get the third element (index 2) after splitting the path
$thirdWord = isset($pathParts[3]) ? $pathParts[3] : '';
$category= $thirdWord;
$table = 'blog';

$query = $mysqli->prepare('SELECT * FROM blog WHERE `url`= ?');
$query->bind_param('s', $url);
$query->execute();
$query_result = $query->get_result();

$query_data = $query_result->fetch_assoc();

// Get all URLs from your database based on your logic
$allUrlsQuery = $mysqli->prepare('SELECT url FROM '.$table);
$allUrlsQuery->execute();
$allUrlsResult = $allUrlsQuery->get_result();
$allUrls = [];
while ($row = $allUrlsResult->fetch_assoc()) {
    $allUrls[] = $row['url'];
}

// Find the index of the current URL in the array
$currentUrlIndex = array_search($url, $allUrls);

// Calculate the index of the next URL considering the looping
$nextUrlIndex = ($currentUrlIndex + 1) % count($allUrls);
$prevUrlIndex = ($currentUrlIndex - 1 + count($allUrls)) % count($allUrls);


// Get the next URL
$nextUrl = $allUrls[$nextUrlIndex];
$prevUrl = $allUrls[$prevUrlIndex];

// Store the next URL in the session
$_SESSION['next_url'] = $nextUrl;
$_SESSION['prev_url'] = $prevUrl;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $query_data['meta_title']; ?></title>
    <meta name="description" content="<?php echo $query_data['meta_description']; ?>">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_URL; ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo BASE_URL; ?>/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo BASE_URL; ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- bootsrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style-2.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- lordicon -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <!-- lightbox -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/dist/simple-lightbox.css?v2.14.0" />
</head>
<style>
  ::-webkit-scrollbar {
    border: 1px solid transparent;
}

::-webkit-scrollbar-track {
  border-radius: 0;
  background: #4b996159;
}

::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background: #4b9961;
}
.gallery-section{
    .col-md-4 {
  position: relative;
  padding: 10px;
  transition: 0.4s;
}

.col-md-4::before {
      content: '\f06e'; 
      font-family: 'Font Awesome 5 Free';
      left: 0;
      right: 0;
      margin: auto;
      position: absolute;
      top: 0;
      bottom: 0;
      font-size: 34px; 
      z-index: -1;
      transition: color 0.4s;
      color: white;
      align-items: center;
      display: flex;
      justify-content: center;
}

.col-md-4:hover {
  padding: 0;
  box-shadow: 0px 0px 5px 3px rgb(0 0 0 / 47%);
  transform: translateY(-15px);
}

.col-md-4:hover::before {
  z-index: 1;
  background-color: #4b99617f;
}

}
.gallery-section{
    position: relative;
    z-index: 1;
    a{
        height: 250px;
        overflow: hidden;
        padding: 0;
    }
}
</style>
<body>
    <!--header-->
<header>
    <!-- navbar -->
    <nav class="navbar">
        <div class="content">
          <div class="logo">
            <a href="<?php echo BASE_URL; ?>/home"><img src="<?php echo BASE_URL; ?>/assets/img/logo/logo-primary.png" alt="" srcset=""></a>
          </div>
          <ul class="menu-list">
            <div class="icon cancel-btn">
              <i class="fas fa-times"></i>
            </div>
            <li><a href="<?php echo BASE_URL; ?>/home">Home</a></li>
            <li><a href="<?php echo BASE_URL; ?>/about">About</a></li>
            <li class="dropdown">
                <a href="#">Academics <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL; ?>/academics/director">Director</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/academics/Principal">Principal</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/academics/deputy-superintendent">Deputy Superintendent</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/academics/non-teaching-staff">Non-Teaching staff</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/academics/recognition">Recognition</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/academics/academics-result">Academics Result</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/academics/Student-List">Student List</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Hospital <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <!-- <li><a href="<?php echo BASE_URL; ?>/hospital/faculty">Faculty</a></li> -->
                    <li><a href="<?php echo BASE_URL; ?>/hospital/departments">Departments</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/hospital/hospital-staff">Hospital staff</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/hospital/clinical-materials">Clinical Materials</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/hospital/ipd-attendance">IPD Attendance</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/hospital/opd-attendance">OPD Attendance</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/hospital/hospital-staff-Attendance">Hospital staff Attendance</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Admissions <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL; ?>/Admissions/Admission-Notification-2023-2024">Admission Notification 2023-2024</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/Admissions/Provisional-List-of-BAMS-MANAGEMENT-2023-2024">Provisional List of BAMS MANAGEMENT 2023-2024</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/Admissions/BAMS-Management-Application-2023-24">BAMS Management Application 2023-24</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/Admissions/Prospectus">Prospectus</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/Admissions/Rank-List">Rank List</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/Admissions/Accepted-Rejected-List">Accepted / Rejected List</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/Admissions/Joining-Non-Joining-Report-Management-2023-2024">Joining/Non-Joining Report- Management 2023-2024</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/Admissions/Affiliated-University">Affiliated University</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/Admissions/Course-Details">Course Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">College <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL; ?>/College/Faculty">Faculty</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/College/Campus">Campus</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/College/Students-union">Students union</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/College/Teaching-Staff-Attendance">Teaching Staff Attendance</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/College/Non-Teaching-Staff-Attendance">Non Teaching Staff Attendance</a></li>
                    <!-- <li><a href="College/Awards-and-Achievements">Awards and Achievements</a></li> -->
                    <li><a href="<?php echo BASE_URL; ?>/College/Students-Attendance">Students Attendance</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/College/Seminar-Attended">Seminar Attended</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/College/Seminar-Conducted">Seminar Conducted</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/College/College-Council">College Council</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="active">news <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL; ?>/news/announcement">announcement</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/news/Awards_&_Achievements">awards & Achievements</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/news/Activities">Activities</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/news/blog">Blog</a></li>
                </ul>
            </li>
            <li><a href="<?php echo BASE_URL; ?>/Contact">Contact</a></li>
          </ul>
          <div class="icon menu-btn">
            <i class="fas fa-bars"></i>
          </div>
        </div>
      </nav>
    <!-- navbar END-->

</header>
<!-- header END-->
<!-- banner -->
<div class="banner">
    <div class="title-div col-md-6">
        <h1 class="title">Blog</h1>
        <p><a href="<?php echo BASE_URL; ?>/home">Home</a> / <a href="<?php echo BASE_URL; ?>/news/blog">Blog</a></p>
    </div>
    <div class="pos-abs-bg"></div>
</div>



<!-- Blog -->
<?php 
$imageFilenames = explode(',', $query_data['image']);
$firstImage = trim($imageFilenames[0]);
$baseurl= BASE_URL;
$imagePath = "$baseurl/dashboard/blog-images/" . $firstImage;
?>
<section class="blog-details-section pt-5 pb-5">
    <div class="container">

     <div class="row image-row"><img src="<?php echo $imagePath ?>" alt="" class="blog-image" srcset=""></div>
     <div class="row title-row"><h2 class="title"><?php echo $query_data['title']; ?></h2></div>
     <div class="row author-row"><p class="author mb-0"><?php echo $query_data['author']; ?></p></div>
     <div class="row date-row"><p class="date"><?php echo $query_data['date']; ?></p></div>
     <div class="row content-row">
        <div class="content"><?php echo $query_data['txt']; ?></div>
     </div>
    </div>
</section>
<!-- Blog END -->


<!-- Footer -->
<footer class="text-center text-lg-start text-dark" id="fooer">
<section class="img-part d-flex justify-content-between  text-white" style="background-color: white" >
  <img src="<?php echo BASE_URL; ?>/assets/img/other/footer image.png" alt="" height="60px" srcset="">
</section>
<!-- Section: Links  -->
<section class="">
<div class="container text-center text-md-start mt-5">
<!-- Grid row -->
<div class="row mt-3">
<!-- Grid column -->
<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
 <!-- Content -->
 <div class="img-div">
   <img src="<?php echo BASE_URL; ?>/assets/img/logo/logo-primary.png" class="w-100" alt="">
 </div>
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
 <!-- Links -->
 <h6 class="text-uppercase fw-bold">Menu</h6>
 <hr
     class="mb-4 mt-0 d-inline-block mx-auto"
     style="width: 60px; background-color: #ffffff; height: 2px"
     />
 <p>
   <a href="<?php echo BASE_URL; ?>/home" class="text-dark">Home</a>
 </p>
 <p>
   <a href="<?php echo BASE_URL; ?>/about" class="text-dark">About us</a>
 </p>
 <p>
   <a href="<?php echo BASE_URL; ?>/Contact" class="text-dark">Contact</a>
 </p>
 
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
 <!-- Links -->
 <h6 class="text-uppercase fw-bold">Useful links</h6>
 <hr
     class="mb-4 mt-0 d-inline-block mx-auto"
     style="width: 60px; background-color: #ffffff; height: 2px"
     />
 <p>
   <a href="<?php echo BASE_URL; ?>/academics/director" class="text-dark">Director</a>
 </p>
 <p>
  <a href="<?php echo BASE_URL; ?>/academics/Principal" class="text-dark">Principal</a>
</p>
 <p>
   <a href="<?php echo BASE_URL; ?>/College/Faculty" class="text-dark">Faculty</a>
 </p>
 <p>
   <a href="<?php echo BASE_URL; ?>/hospital/departments" class="text-dark">Departments</a>
 </p>
 <p>
   <a href="<?php echo BASE_URL; ?>/news/Awards_&_Achievements" class="text-dark"> Achievements</a>
 </p>
 <p>
   <a href="<?php echo BASE_URL; ?>/news/announcement" class="text-dark">Announcements</a>
 </p>
 
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
 <!-- Links -->
 <h6 class="text-uppercase fw-bold">Contact</h6>
 <hr
     class="mb-4 mt-0 d-inline-block mx-auto"
     style="width: 60px; background-color: #ffffff; height: 2px"
     />
 <p class="d-flex flex-column"><i class="fas fa-home mr-3" class="d-flex flex-column"></i>Vishnu Ayurveda College Govt. Press PO, Kulappully, Shoranur , Palakkad(dist) , kerala - 679122</p>
 <p onclick="contact(4)" class="d-flex flex-column"><i class="fas fa-envelope mr-3"></i> vishnuayurvedacollege@yahoo.in</p>
 <p onclick="contact(1)" class="d-flex flex-column"><i class="fas fa-phone mr-3"></i>College - 7994030042</p>
 <p onclick="contact(2)" class="d-flex flex-column"><i class="fas fa-print mr-3"></i>Hospital - 8129180045</p>
</div>
<!-- Grid column -->
</div>
<!-- Grid row -->
</div>
</section>
<!-- Section: Links  -->

<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
Powered By
<a class="text-dark" href="https://iberrtech.com/">Ibertechnologies</a>
</div>
</footer>
<!-- footer  END -->
<script src="<?php echo BASE_URL; ?>/assets/js/footer.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/aos.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
    <script>
        const body = document.querySelector("body");
        const navbar = document.querySelector(".navbar");
        const menuBtn = document.querySelector(".menu-btn");
        const cancelBtn = document.querySelector(".cancel-btn");
        menuBtn.onclick = ()=>{
          navbar.classList.add("show");
          menuBtn.classList.add("hide");
          body.classList.add("disabled");
        }
        cancelBtn.onclick = ()=>{
          body.classList.remove("disabled");
          navbar.classList.remove("show");
          menuBtn.classList.remove("hide");
        }
        window.onscroll = ()=>{
          this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
        }
      </script>
     
     <!-- lightbox -->
     <script src="<?php echo BASE_URL; ?>/dist/simple-lightbox.js?v2.14.0"></script>
     <script>
         (function() {
             var $gallery = new SimpleLightbox('.gallery a', {});
         })();
     </script>
     <!-- Code injected by live-server -->
     <script>
         // <![CDATA[  <-- For SVG support
         if ('WebSocket' in window) {
             (function() {
                 function refreshCSS() {
                     var sheets = [].slice.call(document.getElementsByTagName("link"));
                     var head = document.getElementsByTagName("head")[0];
                     for (var i = 0; i < sheets.length; ++i) {
                         var elem = sheets[i];
                         var parent = elem.parentElement || head;
                         parent.removeChild(elem);
                         var rel = elem.rel;
                         if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                             var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                             elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                         }
                         parent.appendChild(elem);
                     }
                 }
                 var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                 var address = protocol + window.location.host + window.location.pathname + '/ws';
                 var socket = new WebSocket(address);
                 socket.onmessage = function(msg) {
                     if (msg.data == 'reload') window.location.reload();
                     else if (msg.data == 'refreshcss') refreshCSS();
                 };
                 if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                     console.log('Live reload enabled.');
                     sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                 }
             })();
         } else {
             console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
         }
         // ]]>
     </script>
</body>
</html>