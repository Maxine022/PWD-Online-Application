<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["full_name"];
    $contactNumber = $_POST["contact_number"];
    $birthdate = $_POST["birthdate"];
    $sex = $_POST["sex"];
    $designation = $_POST["designation"];
    $salaryGrade = $_POST["salary_grade"];
    $address = $_POST["address"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $justification = $_POST["justification"];
    $remarks = $_POST["remarks"];

    $success = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Job Order Employee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
    }
    .sidebar {
      width: 220px;
      background-color: #2c3e50;
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      padding-top: 1rem;
      color: #fff;
    }
    .sidebar .logo {
      text-align: center;
      font-weight: bold;
      font-size: 20px;
      padding: 10px 0;
    }
    .sidebar .profile {
      text-align: center;
      font-size: 14px;
      margin-bottom: 1rem;
      color: #dcdcdc;
    }
    .sidebar .nav-link {
      color: #dcdcdc;
      padding: 10px 20px;
      display: block;
      text-decoration: none;
    }
    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
      background-color: #1abc9c;
      color: #fff;
      border-radius: 5px;
    }
    .main {
      margin-left: 220px;
      padding: 2rem;
      background-color: #f8f9fa;
      min-height: 100vh;
    }
    .breadcrumb-custom {
      font-size: 14px;
    }
    .breadcrumb-link {
      color: #6c757d;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .breadcrumb-link:hover {
      color: #0d6efd;
    }
    .form-section {
      background: #fff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .btn-cancel {
      background-color: #fff;
      border: 1px solid #ced4da;
      color: #000;
    }
    .btn-cancel:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
  <div class="logo">ICWS</div>
  <div class="profile">
    <img src="https://via.placeholder.com/60" class="rounded-circle mb-2" alt="Profile"><br>
    John Ryan Dela Cruz
  </div>
  <a href="#" class="nav-link">Dashboard</a>
  <a href="#" class="nav-link">Profile</a>
  <a href="#" class="nav-link">Personnel</a>
  <a href="#" class="nav-link ms-3">Regular</a>
  <a href="#" class="nav-link active ms-3">Job Order</a>
  <a href="#" class="nav-link ms-3">Contract of Service</a>
  <a href="#" class="nav-link ms-3">Intern</a>
  <a href="#" class="nav-link">Logout</a>
</div>

<!-- Main Content -->
<div class="main">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <div class="fw-bold fs-5">Updatet Job Order Employee Information</div>
    <div class="breadcrumb-custom text-end">
      <a href="#" class="breadcrumb-link">Home</a>
      <span class="mx-1">/</span>
      <a href="#" class="breadcrumb-link">Manage</a>
      <span class="mx-1">/</span>
      <span class="text-dark">Update JO Information</span>
    </div>
  </div>

  <?php if (!empty($success)): ?>
    <div class="alert alert-success">Employee details have been successfully updated!</div>
  <?php endif; ?>

  <div class="form-section">
    <form method="POST" action="">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" name="full_name" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Contact Number</label>
          <input type="text" class="form-control" name="contact_number">
        </div>
        <div class="col-md-6">
          <label class="form-label">Birthdate</label>
          <input type="date" class="form-control" name="birthdate">
        </div>
        <div class="col-md-6">
          <label class="form-label">Sex</label>
          <select name="sex" class="form-select">
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Designation</label>
          <select name="designation" class="form-select">
            <option value="">Enter Designation</option>
            <option value="Clerk">Clerk</option>
            <option value="Support Staff">Support Staff</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Salary Grade</label>
          <input type="text" class="form-control" name="salary_grade">
        </div>
        <div class="col-12">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" name="address">
        </div>
        <div class="col-md-6">
          <label class="form-label">Date</label>
          <input type="date" class="form-control" name="date">
        </div>
        <div class="col-md-6">
          <label class="form-label">Time</label>
          <input type="time" class="form-control" name="time">
        </div>
        <div class="col-12">
          <label class="form-label">Justification of Activity</label>
          <textarea class="form-control" name="justification" rows="2"></textarea>
        </div>
        <div class="col-12">
          <label class="form-label">Remarks</label>
          <textarea class="form-control" name="remarks" rows="2"></textarea>
        </div>
      </div>
      <div class="mt-4 d-flex gap-2">
        <button type="submit" class="btn btn-success px-4">Save Changes</button>
        <button type="button" onclick="history.back()" class="btn btn-cancel px-4">Cancel</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>