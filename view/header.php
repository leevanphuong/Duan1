<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="all">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

    <!-- header -->
    <div class="bg-red-500">
        <div>
            <div class="container mx-auto flex justify-between">
                <div>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
                <div class="flex">
                    <a href="#" class="fa fa-rss"></a>
                    <marquee class="w-[420px] text-white" behavior="" direction="">Chào mừng quý khách đã đến với Fbook
                        . Chúng tôi rất vui khi phục vụ các bạn đoc !</marquee>
                </div>
                <div class="flex">
                    <div class="flex ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 mt-1">
                            <path class="text-white" stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <p class="text-white mx-2">19000.100.0</p>
                    </div>
                    <div class="flex ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path class="text-white" stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <p class="text-white ml-2">fbook@gmail@gmail.com.vn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" flex">
        <div class="container mx-auto flex justify-between ">
            <div class="mt-3">
                <div class="bg-blue-800 shadow-lg rounded-md mx-3">
                    <form action="">
                        <input class="w-[250px] text-sm bg-blue-800 mx-1 my-1 border-none" type="text"
                            placeholder="Tìm kiếm sách">
                        <button type="submit"><i class="fa fa-search text-white bg-blue-800"></i></button>
                    </form>
                </div>
            </div>
            <div class="mr-[200px]">
                <img class="w-[160px] h-[60px] object-cover" src="./img/6bf3c149feae38f061bf.jpg" alt="">
            </div>
            <div class="flex justify-between my-2 mt-3">
                <!-- like -->
                <div class="mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path class=" " stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
                <!-- login_sign -->
                <div class=" flex">
                    <div class="dropdown mx-3">
                        <a class="text-black" href="" role="button" data-toggle="dropdown" aria-expanded="false"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path class="" stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </a>
                        <div class="dropdown-menu">
                            <button class="dropdown-item"
                                onclick="document.getElementById('id01').style.display='block'" class="text-base ">Đăng
                                Nhập</button>
                            <button class="dropdown-item"
                                onclick="document.getElementById('id02').style.display='block'" class="text-base ">Đăng
                                ký</button>

                        </div>
                    </div>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path class="" stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- đănng nhập -->
    <div id="id01" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="anh">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="./img/avatar2.png" alt="Avatar" class="avatar">
            </div>
            <br>
            <div class="container">
                <label for="uname"><b>Email</b></label>
                <input class="a" type="email" placeholder="Enter Email" name="email" required>

                <label for="uname"><b>Username</b></label>
                <input class="a" type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input class="a" type="password" placeholder="Enter Password" name="psw" required>

                <button class="b" type="submit">Login</button>
                <label class="flex">
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <div class="" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

    <!-- đăng ký -->
    <div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'" class="close"
            title="Close Modal">&times;</span>
        <form class="modal-content" action="">
            <div class="container">
                <h2 class="text-2xl">Sign Up</h2>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input class="c" type="email" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input class="c" type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input class="c" type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix grid grid-cols-2 gap-6 ">
                    <button class="c" type="button" onclick="document.getElementById('id02').style.display='none'"
                        class="cancelbtn">Cancel</button>
                    <button class="a" type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </div>