<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Spark Medical</title>
  <script src="https://cdn.jsdelivr.net/npm/sass.js/dist/sass.min.js"></script>
  <link rel="stylesheet" href="{{asset('assets/styles/index.css')}}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body>
  <!-- Section 1 -->
  <div class="section-1">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <div class="container">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="./index.html">
          <img src="{{asset('assets/images/Group-1000001774.png')}}" alt="Brand Logo" width="170" />
        </a>

        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav gap-3">
            <li class="nav-item">
              <a class="nav-link active" id="home" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="about" href="#section-2">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="features" href="#section-4">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="demo" href="#section-5">Request Demo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-success" id="demo" href="{{ env('APP_URL') }}sparklight/login">Login</a>
            </li>          
          </ul>
        </div>
      </div>
    </nav>


    <div class="heading d-flex justify-content-center mt-5">
      <div class="text-1 text-center">
        <span>
          THE SMARTEST WAY TO WRITE YOUR REPORTS
        </span>
      </div>
    </div>

    <div class="heading d-flex justify-content-center">
      <div class="text-2 text-center">
        <span>
          THE FUTURE OF THERAPY IS HERE!
        </span>
      </div>
    </div>


    <div class="section-1-image">
      <img src="{{asset('assets/images/objects.png')}}" />
    </div>
  </div>

  <!-- Section 2 -->
  <div class="section-2" id="section-2">
    <div class="row justify-content-between">
      <div class="col-md-3">
        <div class="heading">
          <div class="icon-1">
            <img src="{{asset('assets/images/Frame 46.png')}}" alt="" />
          </div>
          <div class="text my-4">Write for the NDIS</div>
        </div>
        <div class="details">
          Demystify NDIS! Ensure your reports meet NDIS requirements. Our AI
          engine understands NDIS criteria and terminology.
        </div>
      </div>
      <div class="col-md-3">
        <div class="heading">
          <div class="icon">
            <img src="{{asset('assets/images/Vector.png')}}" alt="" />
          </div>
          <div class="text my-4">Your Portal to AI</div>
        </div>
        <div class="details">
          We provide Therapists a secure gateway to Discover, Access, and
          Deploy AI developments into their daily workflows
        </div>
      </div>
      <div class="col-md-3">
        <div class="heading">
          <div class="icon">
            <img src="{{asset('assets/images/write.png')}}" alt="" />
          </div>
          <div class="text my-4">Write Efficiently</div>
        </div>
        <div class="details">
          Write in 75% less time. Write more efficiently and effectively at
          every stage of Reporting process ( Case Notes, Assessments, Reviews,
          etc)
        </div>
      </div>

    </div>
  </div>

  <!-- Section-3 -->

  <div class="section-3 ">
    <div class="headline ">
      <span>Main Product Features</span>
    </div>
    <div class="row mt-5 fix">
      <div class="col-lg-5">
        <div class="fix-center fix-center-1">
          <div class="backcircle">
          </div>
          <div class="backcircle-2">
          </div>
        </div>
       
      </div>
      <div class="col-lg-7 fix-2">
        <div class="text-3">
          Notes Taking
        </div>
        <div class="text-4 mt-3">
          Scribble : Transforming Notes Taking
        </div>
        <div class="text-5 mt-4 ">
          No more scribbling down notes during participant sessions or trying to recall critical details. Simply
          voice-record your observations and our AI powered feature will transcribe your voice recording to text,
          summarizes the information and highlight actionable item. Step into the future of Therapy notes taking , and
          seamlessly integrate the data into your reports.
        </div>
      </div>
    </div>
    <!-- second future  -->
    <div class="row mt-5 rev">
      <div class="col-lg-7 fix-2 mt-5 mar">
        <div class="text-3">
          Assessments
        </div>
        <div class="text-4 mt-3">
          Access Standardized Assessments
        </div>
        <div class="text-5 mt-3 ">
          A comprehensive library of NDIS-approved standardized assessments. Also includes detailed instructions,
          scoring systems and interpretation guides to aid with decision- making. Use our AI engines to interpret
          results based on scores. Automatically make these results part of your final reports
        </div>
      </div>
      <div class="col-lg-5 mt-5">
        <div class="fix-center"> 
          <div class="backcircle">
          </div>
          <div class="backcircle-3">
          </div>
        </div>
       
      </div>
    </div>
    <!-- third future  -->
    <div class="row mt-5 fix">
      <div class="col-lg-5 mt-5">
        <div class="fix-center">
          <div class="backcircle">
          </div>
          <div class="backcircle-4">
          </div>
        </div>  
      </div>
      <div class="col-lg-7 fix-2 mt-5">
        <div class="text-3">
          Messaging Board
        </div>
        <div class="text-4 mt-3">
          Circle
        </div>
        <div class="text-5 mt-3">
          Therapist's safe space for collaborative conversations and connections. Discuss NDIS participant issues, share
          your insights, and brainstorm solutions in a secure environment that values your privacy. Learn from
          experienced OTs across the countryand level up your expertise. Share your knowledge, ask questions, and
          participate in discussions that matter.
        </div>
      </div>
    </div>
  </div>

  <!-- section 4  -->
  <div class="section-4" id="section-4">
    <div class="headline-2">
      <span> Features </span>
    </div>

    <div class="row mt-5 justify-content-around">
      <div class="col-md-3 mt-3">
        <div class="f-icon-2 d-flex justify-content-center"> <img src="{{asset('assets/images/brain (2).png')}}" alt=""> </div>
        <div class="f-text text-center mt-2"> <span> NDIS Compliance with Ease </span></div>
      </div>
      <div class="col-md-3 mt-3">
        <div class="f-icon d-flex justify-content-center"> <img src="{{asset('assets/images/brain (1).png')}}" alt=""> </div>
        <div class="f-text text-center mt-2"><span>AI-Powered Efficiency and Accuracy</span></div>
      </div>
      <div class="col-md-3 mt-3">
        <div class="f-icon d-flex justify-content-center"> <img src="{{asset('assets/images/tt.png')}}" alt=""> </div>
        <div class="f-text text-center mt-2"><span>Personalized Writing Style</span></div>
      </div>
    </div>


    <div class="row mt-5 justify-content-around">
      <div class="col-md">
        <div class="f-icon d-flex justify-content-center mt-2"> <img src="{{asset('assets/images/report.png')}}" alt=""> </div>
        <div class="f-text text-center mt-2"> <span> Patient Tailored Reports </span></div>
      </div>
      <div class="col-md">
        <div class="f-icon d-flex justify-content-center mt-2"> <img src="{{asset('assets/images/cloud.png')}}" alt=""> </div>
        <div class="f-text text-center mt-2"><span>Cloud-Based</span></div>
      </div>
      <div class="col-md">
        <div class="f-icon d-flex justify-content-center mt-2"> <img src="{{asset('assets/images/summarixation.png')}}" alt="">
        </div>
        <div class="f-text text-center mt-2"><span>Integrated Summarization</span></div>
      </div>
    </div>

    <div class="row mt-5 justify-content-around">
      <div class="col-md">
        <div class="f-icon d-flex justify-content-center mt-2"> <img src="{{asset('assets/images/storage.png')}}" alt=""> </div>
        <div class="f-text text-center mt-2"> <span> Secure Data Storage</span></div>
      </div>
      <div class="col-md">
        <div class="f-icon d-flex justify-content-center mt-2"> <img src="{{asset('assets/images/insight.png')}}" alt=""> </div>
        <div class="f-text text-center mt-2"><span>AI Powered Data Insights</span></div>
      </div>
      <div class="col-md">
        <div class="f-icon d-flex justify-content-center mt-2"> <img src="{{asset('assets/images/learning.png')}}" alt=""> </div>
        <div class="f-text text-center mt-2"><span>Community-Driven Learning</span></div>
      </div>
    </div>
  </div>


  <!-- section-5  -->
  <div class="section-5" id="section-5">
    <div class="demo-heading mb-3">
      <span> Request Demo </span>
    </div>
    <hr>
    <div class="demo-heading-2 mt-4 text-center m-auto" style="width: 60%;">
      <span>Lorem ipsum dolor sit amet consectetur. </span>
    </div>
    <div class="form-section m-auto px-5 mt-md-5">
      @include('admin.partials._msg')
      <form action="{{ route('save_user') }}" method="POST">
        @csrf
        <div class="row ">
          <div class="col-md mt-3">
            <input type="text" name="first_name" {{old('first_name')}} placeholder="First Name" class="form-control">
          </div>
          <div class="col-md mt-3">
            <input type="text" name="last_name" {{old('last_name')}} placeholder="Last Name" class="form-control">
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">

            <input type="email" name="email" {{old('email')}} class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Email">
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md">
            <div class="col-md">
              <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="state">
                  <option value="" disabled>Select State</option>
                  <option value="1" {{ old('state') == '1' ? 'selected' : '' }}>One</option>
                  <option value="2" {{ old('state') == '2' ? 'selected' : '' }}>Two</option>
                  <option value="3" {{ old('state') == '3' ? 'selected' : '' }}>Three</option>
              </select>
            </div>
            <div class="col-md">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="profession">
                    <option value="" disabled>Select Profession</option>
                    <option value="1" {{ old('profession') == '1' ? 'selected' : '' }}>One</option>
                    <option value="2" {{ old('profession') == '2' ? 'selected' : '' }}>Two</option>
                    <option value="3" {{ old('profession') == '3' ? 'selected' : '' }}>Three</option>
                </select>
            </div>          
        </div>
        <div class="row mt-2">
          <div class="col">
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5" placeholder="Type your message here"></textarea>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <button type="submit" class="btns" style="width: 100%;"> Submit </button>
          </div>
        </div>
      </form>
    </div>
  </div>


  <!-- section 6  -->
  <footer>
    <div class="section-6">
      <div class=" m-auto d-flex justify-content-center mt">
        <div class=" d-flex gap-3 mt-3" >
          <div> <img src="{{asset('')}}/assets/images/facebook.png" alt=""> </div>
          <div> <img src="{{asset('')}}/assets/images/twitter.png" alt=""> </div>
          <div> <img src="{{asset('')}}/assets/images/linkedin.png" alt=""> </div>
        </div>
      </div>

      <div class=" mt-2">
        <div class="text-center foot">
          <span> © Copyrights 2023 by sparkmedical </span>
        </div>
      </div>

    </div>
  </footer>

  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>


    <!-- <script>
          function about(){
            document.getElementById("home").classList.remove("active")
            document.getElementById("about").classList.add("active")
            document.getElementById("features").classList.remove("active")
            document.getElementById("demo").classList.remove("active")
          }
    </script> -->
</body>

</html>