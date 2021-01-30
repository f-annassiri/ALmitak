<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>من نحن </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <style>
        body {
            font-family: 'Cairo';
            height: 200px;
            width: 50%;
            background-image: url('w3css.gif');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        .rtl {
            direction: rtl;
        }

        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: center;

        }

        .centerM {
            text-align: center;
            border: 3px solid green;
            padding: 10px;
            margin: auto;
            width: 50%;
        }

        #left {
            position: absolute;
            left: 100px;
            color: black;
        }

        #right {
            position: absolute;
            right: 50px;
        }

        .footer {
            position: relative;
            bottom: 10px;
            text-align: center;
        }

        p {
            text-align: justify;
            padding-left: 35px;
            line-height: 2em;
        }
    </style>
</head>
<header>
    </br>
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
        <div class="container">
            </br></br>
            <div class="collapse navbar-collapse justify-content-end">
                <!--    ميثاق الوفاء -->
                <div id='left'>
                    <span><b> {{ __('ميثاق الوفـاء') }} </b></span>
                </diV>
                <!--  لوغو المبادرة -->
                <div id='right'>
                    <ul class="navbar-nav">
                        <!--  لوغو المبادرة -->
                        <li class="nav-item">
                            <span><a class="navbar-brand" href="/">
                                    <img src="{{asset('images\SLOGON.png')}}" width="70" height="40" alt="">&nbsp
                                </a></span>
                        </li>
                        <!--  من نحن  -->
                        <li class="nav-item">
                            <span><a class="navbar-brand" href="AboutUs"> &nbsp {{ __('من نحن ؟ ') }} &nbsp</a><span>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                        </li>
                    </ul>
                </diV>
            </div>
        </div>
    </nav>

</header>

<body class="container">
    </br></br>
    <!--<p dir="rtl" lang="ar"  style="color:#e0e0e0;font-size:20px;">رَبٍّ زِدْنٍي عِلمًا</p>-->
    <div class="col text-right" lang="ar">
        </br></br>
        <div class='col text-right'>
            <table>
                <tr>
                    <td>
                        <h4> من نحن ؟ </h4></br>
                        <p>طلاب مغاربة مؤمنون بشرعية قضية الصحراء المغربية، وأحقية الشعب الفلسطيني في أرضه المشروعة، رافضون لكل مخططات التخريب والتجزئة.<br /> نؤكد من خلال هذه العريضة موقفنا الداعم لقضية الصحراء المغربية ووحدة الوطن الترابية. ونعبر عن رفضنا تطبيع العلاقات مع الكيان الصهيوني الغاصب.</p>
                        <!--<p> طلبة مغاربة  يبذلون الغالي و النفيس لمحاربة التطبيع و اجترار الحق الفلسطيني من قبل المحتل الغاشم </p>
                        <p> طلبة مغاربة  يبذلون الغالي و النفيس لمحاربة التطبيع و اجترار الحق الفلسطيني من قبل المحتل الغاشم </p>
                        <p> طلبة مغاربة  يبذلون الغالي و النفيس لمحاربة التطبيع و اجترار الحق الفلسطيني من قبل المحتل الغاشم </p>
                       -->
                        <p></br>
                        <H6> للتواصل معنا : </H6>
                        </p>
                        &nbsp<a href="#" class="fa fa-facebook"></a>
                        &nbsp<a href="#" class="fa fa-twitter"></a>
                        &nbsp<a href="#" class="fa fa-google"></a>
                        &nbsp<a href="#" class="fa fa-youtube"></a>
                        &nbsp<a href="#" class="fa fa-instagram"></a>
                        &nbsp<a href="#" class="fa fa-whatsapp"></a>
                        &nbsp<a href="#" class="fa fa-pinterest"></a>
                        &nbsp <a href="#" class="fa fa-snapchat-ghost"></a>
                    </td>
                    <td>&nbsp<img src="{{asset('images\TALABA.jpg')}}" alt="" border=3 height=400 width=600></img></th>
                </tr>
            </table>
        </div>
        </br>
    </div>

</body>
<footer>
    <div class='footer'>
        <div class="ml-4 text-center text-sm text-black-500 sm:text-center sm:ml-0"></br></br>
            طلاب مغـاربة ضد التطبيـع <img src="{{asset('images\LOGO.png')}}" alt="" height=30 width=35></img> ـ جميع الحقوق محفوظة <b> ـ 2021
                </br></br>
        </div>
    </div>
</footer>


</html>