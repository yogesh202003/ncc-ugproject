<html>
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Link CSS External file-->
<link rel="stylesheet" href="{{asset('CSS/style.css')}}">
<!--Link JS External file-->
<script type="text/javascript" src="{{asset('css/javascript-file.js')}}"></script>

<!--Link Bootstrap Framework-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!--for link Wow_slider-->
<link rel="stylesheet" type="text/css" href="{{asset('engine1/style.css')}}" />
<script type="text/javascript" src="{{asset('engine1/jquery.js')}}"></script>
    
<!--for link Font_Awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
</head>
	

<body>
<div class="container-fluid bg-white">
  <div class="container text-center p-3">
	  <img src="{{asset('images/skclogo.png')}}" class="rounded-circle float-start" alt="SKC Logo" width="140" height="120">
  	<img src="{{asset('images/NCClogo.png')}}" class="float-end" alt="NCC Logo"  width="100" height="135">
    <h1>Sri Kaliswari College(Autonomous), Sivakasi</h1>
  	<h5>Affiliated with Madurai Kamaraj University</h5>
  	<h6>Re-Accredited with "A" grade (3rd Cycle) by NAAC with CGPA 3.11</h6> 
  </div>
</div>
   

  <div class="container-fluid bg-warning">
  <div><nav class="navbar navbar-expand-sm">
  <!--Home -->
  <div class="dropdown">
    <a href="/">
    <button type="button" class="btn btn-primary btn-sm">
    <i class="fa-solid fa-house"></i> HOME
    </button></a>
  </div>

  <!--About NCC -->
  <div class="dropdown">
    <button type="button" class="btn btn- dropdown-toggle" data-bs-toggle="dropdown">
    <i class="fa-solid fa-eject"></i>   NCC
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="/about">About NCC</a></li>
      <li><a class="dropdown-item" href="/aim">Aim</a></li>
      <li><a class="dropdown-item" href="/motto">Motto</a></li>
      <li><a class="dropdown-item" href="/corevalue">Core Values</a></li>
      <li><a class="dropdown-item" href="/pledge">Pledge</a></li>
      <li><a class="dropdown-item" href="/nccflag">NCC Flag</a></li>
      <li><a class="dropdown-item" href="nccsong">NCC Song</a></li>
    </ul>
  </div>

  <!-- Enrollment-->
  <div class="dropdown">
    <button type="button" class="btn btn- dropdown-toggle" data-bs-toggle="dropdown">
    <i class="fa-solid fa-list-check"></i>  Enrollment
    </button>
    <ul class="dropdown-menu">
            
      <li><a class="dropdown-item" href="{{asset('https://nccauto.gov.in/uploads/settings/162814116795NCC%20OE%20-%2001%20-%20Forms%20by%20Cdts%20-%20Acceptance%20of%20Enrolment.pdf')}}" target="_blank" alt="Acceptance Enrollement form">Acceptance of Enrollment</a></li>
      
      <li><a class="dropdown-item" href="{{asset('https://nccauto.gov.in/uploads/settings/162814116812NCC%20OE%20-%2003%20-%20Forms%20by%20Cdts%20-%20Extension%20of%20Enrolment.pdf')}}" target="_blank">Extension of Enrollment</a></li>
      
      <li><a class="dropdown-item" href="{{asset('https://nccauto.gov.in/uploads/settings/162814116813NCC%20OE%20-%2002%20-%20Forms%20by%20Cdts%20-%20Medical%20Certificate.pdf')}}" target=_blank">Medical Certificate</a></li>
      
      <li><a class="dropdown-item" href="{{asset('https://nccauto.gov.in/uploads/settings/162814116813NCC%20OE%20-%2004%20-%20Forms%20by%20Cdts%20-%20Nomination%20to%20CWS.pdf')}}" target="_blank">Nomination of CWS</a></li>
   	
   		<li><a class="dropdown-item bg-light" href="{{asset('https://nccauto.gov.in/enrolment')}}" target="_blank" alt="Acceptance Enrollement form"> For Direct Enroll</a></li>
   </ul>  
  </div>

  <!--Downloads -->
  <div class="dropdown">
    <button type="button" class="btn btn- dropdown-toggle" data-bs-toggle="dropdown">
    <i class="fa-solid fa-download"></i> Downloads
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{asset('https://cdnbbsr.s3waas.gov.in/s307811dc6c422334ce36a09ff5cd6fe71/uploads/2023/02/2023022296.pdf')}}" target="_blank">SNCCO Book</a></li>
      <li><a class="dropdown-item" href="{{asset('https://cdnbbsr.s3waas.gov.in/s307811dc6c422334ce36a09ff5cd6fe71/uploads/2020/01/2020011529.pdf')}}" target="blank">Red Book</a></li>
      <li><a class="dropdown-item" href="{{asset('https://cbseacademic.nic.in/web_material/CurriculumMain21/Other-Secondary/NCC_Sec_2020-21.pdf')}}" target="_blank"> Syllabus </a></li>
      <li><a class="dropdown-item" href="{{asset('https://nccorissa.org/old/Doc/Ncc-CadetHandbook.pdf')}}" target="_blank">Cadet's Handbook </a></li>
    
    </ul>
  </div>
  
  <!-- Certificate Exams -->
    <div class="dropdown">
    <button type="button" class="btn btn- dropdown-toggle" data-bs-toggle="dropdown">


    <i class="fa-solid fa-graduation-cap"></i>  Certificates Exams
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#"> "B" Certificate </a></li>
      <li><a class="dropdown-item" href="#"> "C" Certificate </a></li>
      <li><a class="dropdown-item" href="#">Model Question Paper</a></li>
      <li><a class="dropdown-item" href="/eligibility">Eligibility</a></li>
      <li>
      <a class="dropdown-item" href="#">
        Question Bank &raquo;
      </a>
      <ul class="dropdown-menu dropdown-submenu">
        <li>
          <a class="dropdown-item" href="#">2023</a>
        </li>
    </ul>
      </li>
    </ul>
    </div>

  
  <!-- Camps-->
  <div class="dropdown">
    <button type="button" class="btn btn- dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-house-flag"></i> Camps
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li>
      <a class="dropdown-item" href="#">
        Centrally Organized Camps &raquo;
      </a>
      <ul class="dropdown-menu dropdown-submenu">
        <li>
          <a class="dropdown-item" href="/camp-rdc">RDC</a>
        </li>
        <li>
          <a class="dropdown-item" href="/camp-tsc">TSC</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">LC &raquo; </a>
          <ul class="dropdown-menu dropdown-submenu">
            <li>
              <a class="dropdown-item" href="/camp-blc">BLC</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">ALC</a>
            </li>
          </ul>
        </li>
        <li>
          <a class="dropdown-item" href="/camp-aac">AAC</a>
        </li>
        <li>
          <a class="dropdown-item" href="/camp-nic">NIC</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">YEP</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">NSC</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">VSC</a>
        </li>
      </ul>
    </li>

  <!--nested 2-->
    <li>
      <a class="dropdown-item" href="#">
        State Organized Camps &raquo;
      </a>
      <ul class="dropdown-menu dropdown-submenu">
        <li>
          <a class="dropdown-item" href="camp-atc">ATC/CATC</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">IUC &raquo; </a>
          <ul class="dropdown-menu dropdown-submenu">
            <li>
              <a class="dropdown-item" href="/camp-blc">RDC</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">TSC</a>
            </li>
          </ul>
        </li>
        <li>
          <a class="dropdown-item" href="#">IGC &raquo; </a>
          <ul class="dropdown-menu dropdown-submenu">
            <li>
              <a class="dropdown-item" href="/camp-blc">RDC</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">TSC</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
  </div>

  
<!-- Events -->
<div class="dropdown">
  <a href="/events">
    <button type="button" class="btn">
    <i class="fa-solid fa-calendar-check"></i>  Events
    </button></a>
  </div>

  <!--Achivements-->
  <div class="dropdown">
  <a href="/achiements">
    <button type="button" class="btn">
    <i class="fa-solid fa-trophy"></i> Achivements
    </button></a>
  </div>

  <!-- SKC-NCC-->
  <div class="dropdown">
    <button type="button" class="btn btn- dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-house-flag"></i> SKC NCC
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="/enrollment"> SKC Enrollement</a></li>  
      <li>
      <a class="dropdown-item" href="#">
        B-Certificates &raquo;
      </a>
      <ul class="dropdown-menu dropdown-submenu">
        <li>
          <a id="adobe-dc-view" class="dropdown-item" href="/bcertipdf#toolbar=0"> 2022-2023 </a>
    </li>
    </ul>
      </li>
      <li>
      <a class="dropdown-item" href="#">
        C-Certificates &raquo;
      </a>
      <ul class="dropdown-menu dropdown-submenu">
        <li>
          <a id="adobe-dc-view" class="dropdown-item" href="/bcertipdf#toolbar=0"> 2022-2023 </a>
        </li>
      </ul>
      </li>
  <!--
  <script> 
   var adobeDCView = new AdobeDC.View({
    clientId: "YOUR_CLIENT_ID_HERE",
    divId: "adobe-dc-view"
});
adobeDCView.previewFile(
    {
        content: { promise: Promise.resolve(blob.arrayBuffer()) },
        metaData: { fileName: "bcertipdf.pdf" }
    },
    {
        embedMode: "FULL_WINDOW",
        defaultViewMode: "FIT_WIDTH",
        showDownloadPDF: false,
        showPrintPDF: false,
        showLeftHandPanel: true,
        showAnnotationTools: false
    });
    </script>
  -->
  </div>
  
  <!-- Contact details-->
  <div class="dropdown">
  <a href="/contact-us">
    <button type="button" class="btn">
    <i class="fa-regular fa-id-badge"></i>  Contact Us
    </button></a>
  </div>

</nav>
</div>
</div>



  
@yield('content')



<!--Footer-->
	<div class="container-fluid bg-white  pt-5 mt-2">
    	<div class="row">
        	<div class="container col-md-4 text-center">
				<img src="{{asset('images/NCClogo.png')}}" alt="NCC Logo"  width="100" height="135">            
            	<h6> This site is about Sri kaliswari college NCC web portal</h6>
            </div>
    
        	<div class="container text-center col-md-4">
				<iframe src="{{asset('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31479.7915777318!2d77.83251186242677!3d9.510992832651912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06cefaaaaaaaab%3A0x7950cd841f0a4567!2sSri%20Kaliswari%20College!5e0!3m2!1sen!2sin!4v1701161107904!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade')}}"></iframe>
            </div>
            
            <div class="container col-md-4 text-center">
            <h4>Contact:</h4>
            <h5>Sri Kaliswari college(autonomous),Sivakasi</h5>
            <div><a><i class="fa-solid fa-phone-volume text-primary"></i> 047-27239923</a></div>
            <div><a><i class="fa-regular fa-envelope"></i> ncc@kaliswaricollege.edu.in</a></div>
            <div><a><i class="fa-solid fa-globe"></i> kaliswaricollegencc.in</a></div>
            </div>
		</div>
	</div>
    
    
<!--copyrights-->	
    <div class="bg-warning m-0 p-2">
          <p class="text-light  m-0 ">Copyrights <i class="fa-regular fa-copyright"></i> All Rights Reserved</p>
    </div>    
</body>
</html>
