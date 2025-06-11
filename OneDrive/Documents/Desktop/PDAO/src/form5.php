<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PWD Online Application</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    :root {
      --nav-bg: #14255A;
      --primary-blue: #14258A;
      --light-gray: #F0F1F5;
      --border-gray: #CED4DA;
      --text-gray: #6C757D;
      --radius: 6px;
      --circle-size: 30px;
    }

    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
    }

    .form-title {
      text-align: center;
      color: var(--primary-blue);
      font-size: 1.75rem;
      font-weight: 700;
      margin-top: 2rem;
    }

    .step-indicator-wrapper {
      width: 100%;
      display: flex;
      justify-content: center;
      margin: 2rem auto;
      position: relative;
    }

    .step-indicator {
      display: flex;
      justify-content: space-around;
      align-items: center;
      width: 100%;
      max-width: 700px;
      margin: 0 auto;
      position: relative;
    }

    .step:not(:last-child)::after {
      content: "";
      position: absolute;
      top: calc(var(--circle-size) / 2);
      left: 50%;
      width: 100%;
      height: 2px;
      background-color: var(--border-gray);
      z-index: 0;
    }

    .step {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1;
      z-index: 1;
    }

    .step .circle {
      width: var(--circle-size);
      height: var(--circle-size);
      border-radius: 50%;
      border: 2px solid var(--border-gray);
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--border-gray);
      font-weight: 600;
      z-index: 2;
      padding: 0;
      margin: 0;
    }

    .step .label {
      color: var(--text-gray);
      font-size: 0.85rem;
      text-align: center;
      margin-top: 0.4rem;
    }

    .step.active .circle {
      background-color: var(--primary-blue);
      border-color: var(--primary-blue);
      color: #fff;
    }

    .step.active .label {
      color: var(--primary-blue);
      font-weight: 600;
    }

</style>
</head>
<body>
  <?php include __DIR__ . '/../hero/navbar.php'; ?>

 <div class="form-header">
    <h1 class="form-title">PWD Application Form</h1>
    <div class="step-indicator-wrapper">
        <div class="step-indicator">
            <div class="step">
            <div class="circle">1</div>
            <div class="label">Personal Information</div>
        </div>

        <div class="step">
            <div class="circle">2</div>
            <div class="label">Affiliation Section</div>
        </div>
        <div class="step">
          <div class="circle">3</div>
          <div class="label">Approval Section</div>
        </div>
        <div class="step">
          <div class="circle">4</div>
          <div class="label">Upload Documents</div>
        </div>
        <div class="step active">
          <div class="circle">5</div>
          <div class="label">Submission Complete</div>
        </div>
      </div>
    </div>
  </div>

<div class="container my-4">
  <div class="p-5 rounded-3 shadow bg-white" style="max-width: 720px; margin: 0 auto;">
    <h4 class="text-success fw-bold mb-3">Application Submitted Successfully!</h4>  
    <p class="mb-3">
      Thank you for completing the application form and submitting the required documents. Your application is now under review by our office.
    </p>   
    <p class="mb-2 fw-semibold">
      Reference Code: <span class="fw-bold text-dark"></span>
    </p>
    <p class="mb-3">
      Please keep this reference code for your records. You may use it to track the status of your application through our system.
    </p>
    <p class="mb-4">
      A confirmation email has also been sent to your provided email address. For any inquiries or concerns, feel free to contact our office or visit the Persons with Disability Affairs Office (PDAO), Zone 3B, Brgy. Del Carmen, Iligan City, during the designated processing schedule.
    </p>
    <div class="text-end">
      <a href="index.html" class="btn btn-primary px-4">Go back to Homepage</a>
    </div>
  </div>
</div>

  </div>
</div>
