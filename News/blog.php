<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vishnuayurvedacollege</title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- bootsrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- css -->
    <link rel="stylesheet" href="../assets/css/style-2.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- lordicon -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <!-- lightbox -->
    <link rel="stylesheet" href="../dist/simple-lightbox.css?v2.14.0" />
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
            <a href="../home"><img src="../assets/img/logo/logo-primary.png" alt="" srcset=""></a>
          </div>
          <ul class="menu-list">
            <div class="icon cancel-btn">
              <i class="fas fa-times"></i>
            </div>
            <li><a href="../home">Home</a></li>
            <li><a href="../about">About</a></li>
            <li class="dropdown">
                <a href="#">Academics <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="../academics/director">Director</a></li>
                    <li><a href="../academics/Principal">Principal</a></li>
                    <li><a href="../academics/deputy-superintendent">Deputy Superintendent</a></li>
                    <li><a href="../academics/non-teaching-staff">Non-Teaching staff</a></li>
                    <li><a href="../academics/recognition">Recognition</a></li>
                    <li><a href="../academics/academics-result">Academics Result</a></li>
                    <li><a href="../academics/Student-List">Student List</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Hospital <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <!-- <li><a href="../hospital/faculty">Faculty</a></li> -->
                    <li><a href="../hospital/departments">Departments</a></li>
                    <li><a href="../hospital/hospital-staff">Hospital staff</a></li>
                    <li><a href="../hospital/clinical-materials">Clinical Materials</a></li>
                    <li><a href="../hospital/ipd-attendance">IPD Attendance</a></li>
                    <li><a href="../hospital/opd-attendance">OPD Attendance</a></li>
                    <li><a href="../hospital/hospital-staff-Attendance">Hospital staff Attendance</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Admissions <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="../Admissions/Admission-Notification-2023-2024">Admission Notification 2023-2024</a></li>
                    <li><a href="../Admissions/Provisional-List-of-BAMS-MANAGEMENT-2023-2024">Provisional List of BAMS MANAGEMENT 2023-2024</a></li>
                    <li><a href="../Admissions/BAMS-Management-Application-2023-24">BAMS Management Application 2023-24</a></li>
                    <li><a href="../Admissions/Prospectus">Prospectus</a></li>
                    <li><a href="../Admissions/Rank-List">Rank List</a></li>
                    <li><a href="../Admissions/Accepted-Rejected-List">Accepted / Rejected List</a></li>
                    <li><a href="../Admissions/Joining-Non-Joining-Report-Management-2023-2024">Joining/Non-Joining Report- Management 2023-2024</a></li>
                    <li><a href="../Admissions/Affiliated-University">Affiliated University</a></li>
                    <li><a href="../Admissions/Course-Details">Course Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">College <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="../College/Faculty">Faculty</a></li>
                    <li><a href="../College/Campus">Campus</a></li>
                    <li><a href="../College/Students-union">Students union</a></li>
                    <li><a href="../College/Teaching-Staff-Attendance">Teaching Staff Attendance</a></li>
                    <li><a href="../College/Non-Teaching-Staff-Attendance">Non Teaching Staff Attendance</a></li>
                    <!-- <li><a href="College/Awards-and-Achievements">Awards and Achievements</a></li> -->
                    <li><a href="../College/Students-Attendance">Students Attendance</a></li>
                    <li><a href="../College/Seminar-Attended">Seminar Attended</a></li>
                    <li><a href="../College/Seminar-Conducted">Seminar Conducted</a></li>
                    <li><a href="../College/College-Council">College Council</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="active">news <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="announcement">announcement</a></li>
                    <li><a href="Awards_&_Achievements">awards & Achievements</a></li>
                    <li><a href="Activities">Activities</a></li>
                    <li><a href="blog">Blog</a></li>
                </ul>
            </li>
            <li><a href="../Contact">Contact</a></li>
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
        <p><a href="../home">Home</a> / <a href="blog">Blog</a></p>
    </div>
    <div class="pos-abs-bg"></div>
</div>



<!-- Blog -->
<section class="blog-section pt-5 pb-5">
    <div class="container">
        <div class="row blogs">
        <?php
        include('../dashboard/root/db.php');

              $sql ="SELECT * FROM  blog ORDER BY id DESC";
              $result =$mysqli->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                $imageFilenames = explode(',', $row['image']);
                $firstImage = trim($imageFilenames[0]);
                
                $imagePath = "http://localhost/vishnu-college-12-3-24/dashboard/blog-images/" . $firstImage;
              ?>
          <div class="col-10 col-md-6 col-sm-4 col-lg-3">
            <div class="card">
              <div class="img-div"><img src="<?php echo $imagePath; ?>" alt="vishnuayurvedacollege" class="img w-100 h-100"></div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                <p class="cnt"><?php echo limitWords(strip_tags($row['txt']), 50); ?> </p>
              </div>
              <div class="card-footer d-flex align-items-center">

                <div class="d-flex align-items-center" style="gap: 5px;">
                <div class="profile"><?php echo strtoupper(substr($row['author'], 0, 1)); ?></div>
                <div class="name-date-div">
                  <h6 class="name mb-0"><?php echo $row['author']; ?></h6>
                  <p class="date mb-0"><?php echo $row['date']; ?></p>
                </div>
                </div>
                <button class="blog-btn" onclick="window.location.href='blog/<?php echo $row['url']; ?>'"><lord-icon src="https://cdn.lordicon.com/vduvxizq.json" trigger="hover" target=".blog-btn" style="width:50px;" class="current-color" ></lord-icon></button>

              </div>
            </div>
          </div>
          <?php 
                }
            }
            // Function to limit words in a string
function limitWords($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
            ?>
        </div>
    </div>
</section>
<!-- Blog END -->


<!-- Footer -->
<footer class="text-center text-lg-start text-dark" id="footer">
</footer>
<!-- footer  END -->
<script src="../assets/js/footer.js"></script>
<script src="../assets/js/aos.js"></script>
<script src="../assets/js/script.js"></script>
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
     <script src="../dist/simple-lightbox.js?v2.14.0"></script>
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