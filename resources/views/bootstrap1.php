<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PWEB Layouting - Soal 9</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Poppins', sans-serif; box-sizing: border-box; margin: 0; padding: 0; }
  </style>
</head>
<body class="h-screen w-full flex flex-col items-center justify-center gap-[3rem]">

  <div class="logo pt-[4rem]">
    <img src="/logocekdong.png" alt="Logo" class="max-w-xs" />
  </div>

  <form class="flex flex-col items-center justify-center">
    <div class="input-container relative w-[250px] mb-[1rem]">
      <i class="fa fa-user absolute left-[10px] top-1/2 transform -translate-y-1/2 text-[gray]"></i>
      <input type="text" placeholder="Username"
             class="w-full py-2 pl-[35px] pr-3 bg-[whitesmoke] border border-[gray] rounded focus:outline-none focus:ring-2 focus:ring-gray-500 placeholder-[#b4b4b4]" />
    </div>

    <div class="input-container relative w-[250px] mb-[3rem]">
      <i class="fa fa-lock absolute left-[10px] top-1/2 transform -translate-y-1/2 text-[gray]"></i>
      <input type="password" placeholder="Password"
             class="w-full py-2 pl-[35px] pr-3 bg-[whitesmoke] border border-[gray] rounded focus:outline-none focus:ring-2 focus:ring-gray-500 placeholder-[#b4b4b4]" />
    </div>

    <button type="submit"
            class="w-[100px] py-2 mb-[1rem] bg-[#343a40] text-white rounded-[50px] hover:bg-gray-800 transition-colors">Login</button>

    <a href="#" class="forgot-password mb-[1rem] text-black no-underline">Forgot Password</a>
    <a href="#" class="login-teknisi text-black underline">Login As Teknisi</a>
  </form>

  <div class="footer mt-auto w-full py-4 bg-[#6c757d] text-center">
    <p class="text-[#f8f9fa]">Don't have an account yet? <a href="#" class="text-white underline">Create New</a></p>
  </div>

</body>
</html>
