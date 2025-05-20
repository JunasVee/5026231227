<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Linktree Look-Alike</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }
    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1rem;
    }
    .link-btn {
      width: 100%;
      max-width: 300px;
      margin: 0.5rem 0;
    }
  </style>
</head>
<body>
  <div class="d-flex flex-column align-items-center justify-content-center vh-100">

    <h3>Frontend Links</h3>

    <!-- Links Section -->
    <div class="d-flex flex-column align-items-center mt-4 w-100">
      <a href="/js1" class="btn btn-primary link-btn">js1.php</a>
      <a href="/js2" class="btn btn-secondary link-btn">js2.php</a>
      <a href="/input" class="btn btn-success link-btn">input.php</a>
      <a href="/bootstrap1" class="btn btn-info link-btn">bootstrap1.php</a>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
</body>
</html>
