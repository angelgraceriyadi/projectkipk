<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Supported HTML Form Controls in Bootstrap</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Self-executing function
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>
</head>
<body>
  
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
          height="15"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="link-secondary me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>

      <!-- Notifications -->
      <div class="dropdown">
        <a
          class="link-secondary me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<div class="container">
<div class="m-5">
    <h1 class="border-bottom pb-3 mb-4">Registration Form</h1>
    <form class="needs-validation" action="/examples/actions/confirmation.php" method="post" novalidate>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="firstName">First Name:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="lastName">Last Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="emailAddress">Email Address:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="emailAddress" placeholder="Email Address" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="phoneNumber">Mobile Number:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="phoneNumber" placeholder="Phone Number" required>
            </div>
        </div>        
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Date of Birth:</label>
            <div class="col-sm-3">
                <select class="form-select" required>
                    <option value="">Date</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
            <div class="col-sm-3">
                <select class="form-select" required>
                    <option value="">Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="col-sm-3">
                <select class="form-select">
                    <option>Year</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="postalAddress">Postal Address:</label>
            <div class="col-sm-9">
                <textarea rows="3" class="form-control" id="postalAddress" placeholder="Postal Address" required></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="ZipCode">Zip Code:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="ZipCode" placeholder="Zip Code" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="uploadImage">Upload Image:</label>
            <div class="col-sm-9">
                <input type="file" class="form-control" id="uploadImage">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Gender:</label>
            <div class="col-sm-9 mt-2">
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" id="radioMale">
                    <label class="form-check-label" for="radioMale">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" id="radioFemale">
                    <label class="form-check-label" for="radioFemale">Female</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-9 offset-sm-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkAgree" value="agree">
                    <label class="form-check-label" for="checkAgree">I agree to the <a href="#">Terms and Conditions</a></label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-9 offset-sm-3">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ms-2" value="Reset">
            </div>
        </div>
    </form>
</div>
</div>
</body>
</html>