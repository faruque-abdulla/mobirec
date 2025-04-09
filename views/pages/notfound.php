<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Page Not Found</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary: #3498db;
      --primary-dark: #2980b9;
      --accent: #e74c3c;
      --dark: #2c3e50;
      --light: #ecf0f1;
      --gray: #95a5a6;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: var(--light);
      color: var(--dark);
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      position: relative;
    }

    .shape {
      position: absolute;
      z-index: -1;
      opacity: 0.05;
    }

    .shape-1 {
      width: 400px;
      height: 400px;
      border-radius: 50%;
      background: var(--primary);
      top: -200px;
      left: -100px;
    }

    .shape-2 {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: var(--accent);
      bottom: -150px;
      right: -50px;
    }

    .container {
      max-width: 800px;
      text-align: center;
      padding: 2rem;
      animation: fadeIn 0.8s ease-in-out;
    }

    .error-code {
      font-size: 12rem;
      font-weight: 800;
      color: var(--primary);
      margin-bottom: 1rem;
      line-height: 1;
      position: relative;
      text-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .error-code:after {
      content: "404";
      position: absolute;
      left: 5px;
      top: 5px;
      color: var(--accent);
      opacity: 0.1;
      z-index: -1;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: var(--dark);
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      color: var(--gray);
      max-width: 600px;
      line-height: 1.6;
    }

    .buttons {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .btn {
      padding: 0.8rem 1.5rem;
      font-size: 1rem;
      text-decoration: none;
      border-radius: 6px;
      transition: all 0.3s ease;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .btn-primary {
      background-color: var(--primary);
      color: white;
      box-shadow: 0 4px 10px rgba(52, 152, 219, 0.3);
    }

    .btn-primary:hover {
      background-color: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(52, 152, 219, 0.4);
    }

    .btn-outline {
      border: 2px solid var(--gray);
      color: var(--dark);
    }

    .btn-outline:hover {
      background-color: var(--dark);
      color: white;
      border-color: var(--dark);
      transform: translateY(-2px);
    }

    footer {
      position: absolute;
      bottom: 1rem;
      text-align: center;
      color: var(--gray);
      font-size: 0.9rem;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      .error-code {
        font-size: 8rem;
      }

      h1 {
        font-size: 2rem;
      }

      p {
        font-size: 1rem;
      }

      .container {
        padding: 1rem;
      }
    }
  </style>
</head>

<body>
  <div class="shape shape-1"></div>
  <div class="shape shape-2"></div>

  <div class="container">
    <div class="error-code">404</div>
    <h1>Page Not Found!</h1>
    <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>

    <div class="buttons">
      <a href="index.php?page=home" class="btn btn-primary">
        <i class="fas fa-home"></i> Back to Home
      </a>
      <a href="javascript:history.back()" class="btn btn-outline">
        <i class="fas fa-arrow-left"></i> Go Back
      </a>
    </div>
  </div>

  <footer>
    &copy; <?php echo date('Y'); ?> Mobirec | All Rights Reserved
  </footer>


</body>

</html>