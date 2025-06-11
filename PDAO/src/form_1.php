<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PWD Application Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --nav-bg: #14255A;
      --primary-blue: #14258A;
      --light-gray: #F0F1F5;
      --border-gray: #CED4DA;
      --text-gray: #6C757D;
      --radius: 6px;
      --gap: 1rem;
      --circle-size: 30px;
    }
    * {
      box-sizing: border-box;
    }
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
    }
    .navbar {
      background-color: var(--nav-bg);
    }
    .navbar-brand, .nav-link {
      color: #fff !important;
      font-weight: 600;
    }
    .form-container {
      max-width: 1000px;
      margin: 2rem auto;
      background: #fff;
      border-radius: var(--radius);
      padding: 2rem;
      box-shadow: 0 2px 12px rgba(0,0,0,0.05);
    }
    .form-title {
      text-align: center;
      color: var(--primary-blue);
      font-size: 1.75rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
    }
    .step-indicator {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      align-items: start;             
      position: relative;
      text-align: center;
      gap: 0.8rem;
      margin: 0 calc(var(--circle-size)/2) 2rem;  
    }
    .step-indicator::before {
      content: "";
      position: absolute;
      top: calc(var(--circle-size) / 2);
      left: var(--circle-size);
      right: var(--circle-size);
      border-top: 2px solid var(--border-gray);
      z-index: 0;
    }
    .step {
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-size: 0.85rem;
      text-align: center;
    }
    .step .circle {
      width:  var(--circle-size);
      height: var(--circle-size);
      border-radius: 50%;
      border: 2px solid var(--border-gray);
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--border-gray);
      font-weight: 600;
      margin-bottom: 0.25rem;
    }
    .step.active .circle {
      background-color: var(--primary-blue);
      border-color: var(--primary-blue);
      color: #fff;
    }
    .step .label {
      color: var(--text-gray);
      
    }
    .step.active .label {
      color: var(--primary-blue);
      font-weight: 600;
    }
    label {
      font-weight: 600;
      color: var(--primary-blue);
    }
    .form-control,
    .form-select {
      background-color: var(--light-gray);
      border: 1px solid var(--border-gray);
      border-radius: var(--radius);
      height: calc(1.5em + 0.75rem + 2px);
    }
    .photo-box {
      width: 100%;
      min-height: 160px;
      background: var(--light-gray);
      border: 2px dashed var(--border-gray);
      border-radius: var(--radius);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--text-gray);
      font-weight: 600;
    }
    @media (max-width: 767px) {
      .step-indicator {
        grid-template-columns: repeat(3, 1fr);
      }
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="logo.png" alt="Logo" width="32" height="32" class="me-2">
          Persons with Disabilities Affairs Office
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="form-container">
    <h1 class="form-title">PWD Application Form</h1>

    <!-- Step Indicator -->
<div class="step-indicator">
  <div class="step active">
    <div class="circle">1</div>
    <div class="label">Personal Information</div>
  </div>
  <div class="step">
    <div class="circle">2</div>
    <div class="label">Affiliation</div>
  </div>
  <div class="step">
    <div class="circle">3</div>
    <div class="label">Approval</div>
  </div>
  <div class="step">
    <div class="circle">4</div>
  </div>
  <div class="step">
    <div class="circle">5</div>
  </div>
  <div class="step">
    <div class="circle">6</div>
  </div>
</div>

    <form novalidate>
      <!-- Row 1 -->
      <div class="row g-3 mb-4">
        <div class="col-md-4">
          <label class="d-block">Applicant Type</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="newApplicant" name="applicantType" required>
            <label class="form-check-label" for="newApplicant">New Applicant</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="renewal" name="applicantType">
            <label class="form-check-label" for="renewal">Renewal</label>
          </div>
        </div>
        <div class="col-md-3">
          <label for="pwdNumber">PWD Number</label>
          <input type="text" id="pwdNumber" class="form-control" placeholder="RR-PPMM-BBB-NNNNNNN" required>
        </div>
        <div class="col-md-3">
          <label for="dateApplied">Date Applied</label>
          <input type="date" id="dateApplied" class="form-control" required>
        </div>
        <div class="col-md-2">
          <div class="photo-box">Upload Photo</div>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="row g-3 mb-3">
        <div class="col-md-3">
          <label for="lastName">Last Name</label>
          <input type="text" id="lastName" class="form-control" placeholder="" required>
        </div>
        <div class="col-md-3">
          <label for="firstName">First Name</label>
          <input type="text" id="firstName" class="form-control" required>
        </div>
        <div class="col-md-3">
          <label for="middleName">Middle Name</label>
          <input type="text" id="middleName" class="form-control">
        </div>
        <div class="col-md-3">
          <label for="suffix">Suffix</label>
          <input type="text" id="suffix" class="form-control">
        </div>
      </div>

      <!-- Row 3 -->
      <div class="row g-3 mb-3">
        <div class="col-md-3">
          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" class="form-control" required>
        </div>
        <div class="col-md-3">
          <label for="sex">Sex</label>
          <select id="sex" class="form-select" required>
            <option value="" disabled selected>Please Select</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="civilStatus">Civil Status</label>
          <select id="civilStatus" class="form-select">
            <option value="" disabled selected>Please Select</option>
            <option>Single</option>
            <option>Married</option>
            <option>Widowed</option>
            <option>Separated</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="disabilityType">Type of Disability</label>
          <select id="disabilityType" class="form-select">
            <option value="" disabled selected>Please Select</option>
          </select>
        </div>
      </div>

      <!-- Row 4 -->
      <div class="row g-3 mb-3">
        <div class="col-md-3">
          <label for="cause">Cause of Disability</label>
          <select id="cause" class="form-select">
            <option value="" disabled selected>Please Select</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="houseNo">House No. & Street</label>
          <input type="text" id="houseNo" class="form-control">
        </div>
        <div class="col-md-3">
          <label for="barangay">Barangay</label>
          <input type="text" id="barangay" class="form-control">
        </div>
        <div class="col-md-3">
          <label for="municipality">Municipality</label>
          <input type="text" id="municipality" class="form-control">
        </div>
      </div>

      <!-- Row 5 -->
      <div class="row g-3 mb-3">
        <div class="col-md-3">
          <label for="province">Province</label>
          <input type="text" id="province" class="form-control">
        </div>
        <div class="col-md-3">
          <label for="region">Region</label>
          <input type="text" id="region" class="form-control">
        </div>
        <div class="col-md-3">
          <label for="landline">Landline No.</label>
          <input type="tel" id="landline" class="form-control">
        </div>
        <div class="col-md-3">
          <label for="mobile">Mobile No.</label>
          <input type="tel" id="mobile" class="form-control" required>
        </div>
      </div>

      <!-- Row 6 -->
      <div class="mb-4">
        <label for="email">E-mail Address</label>
        <input type="email" id="email" class="form-control" placeholder="example@domain.com" required>
      </div>

      <div class="text-end">
        <button type="submit" class="btn btn-primary px-4">Next</button>
      </div>
    </form>
  </main>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>