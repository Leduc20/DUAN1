

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./src/img/favicon.png" />
    <title>Rani</title>
    <meta name="description" content="Free open source Tailwind CSS Store template" />
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic" />

    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="./src/font/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet" />

    <style>
        .work-sans {
            font-family: "Work Sans", sans-serif;
        }

        #menu-toggle:checked+#menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
    <div class="container mx-auto bg-slate-50 justify-center flex">
        <div class="box-content bg-slate-50 w-3/4">
            <div class="header bg-white my-5">
                <div class="flex justify-end mb-8">
                    <div class="name mr-20 mt-5">
                        Xin chào ,<span class="font-bold"> <?= $user['name'] ?> </span>
                    </div>
                </div>

                <hr />

                <div class="font-semibold text-xl my-5 mx-10">
                    Hồ sơ cá nhân
                    <span class="ml-5 border-r-2 border-grey-500"></span>
                </div>

                <div class="content box-content bg-slate-50">
                    <div class="grid grid-cols-3 space-x-5 justify-between flex">
                        <div class="left col-span-1 bg-white py-5 border-r-2 border-grey-500 text-center">
                            <div class="flex justify-center">
                                <img class="w-64 h-64" src="<?= UPLOAD_BASE . $user['image'] ?>" alt="image"  />
                            </div>
                            <div class="m-5">
                                
                            </div>
                        </div>
                        <div class="right col-span-2 bg-white px-10 py-8">
                            <div class="content">
                                <h1 class="font-semibold">Thông tin cá nhân</h1>
                            </div>
                            <div class="grid grid-cols-3 mt-5">
                                <div class="col-span-1 leading-10 float-right">
                                    <p>Avartar</p>
                                    <p>Họ Và Tên</p>
                                    <p>Giới Tính</p>
                                    <p>Số Điện Thoại</p>
                                    <p>Địa Chỉ</p>
                                    <p>Email</p>
                                </div>

                                <div class="col-span-1">
                                    <form action="<?= AUTH_BASE . "?profile" ?>" method="POST" enctype="multipart/form-data">
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" name="image" type="file">
                                        <input class="bg-gray-200 rounded pl-2 mt-2" name="name" value="<?= $user['name'] ?>" type="text"
                                            placeholder="" />
                                        <input class="bg-gray-200 rounded pl-2 mt-4" name="gender" value="<?= $user['gender'] ?>" type="text"
                                            placeholder="" />
                                        <input class="bg-gray-200 rounded pl-2 mt-4" name="phone" value="<?= $user['phone'] ?>" type="text"
                                            placeholder="" />
                                        <input class="bg-gray-200 rounded pl-2 mt-4" name="address" value="<?= $user['address'] ?>" type="text"
                                            placeholder="" />
                                        <input class="bg-gray-200 rounded pl-2 mt-4" name="userName" value="<?= $user['userName'] ?>" type="text"
                                            placeholder="" />
                                        <div class="my-4">
                                            <button name="btn_submit"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                Cập nhật tài khoản
                                            </button>
                                        </div>
                                        <div class="my-4">
                                            <a href="<?= SITE_URL ?>">Trở về trang chủ</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>