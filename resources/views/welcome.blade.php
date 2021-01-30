<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ميثاق الوفاء</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Cairo';
            /*   height: 200px;
            width: 50%;
            background-image: url('w3css.gif');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;*/
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
            /* position: fixed;*/
            position: relative;
            bottom: 5px;
            text-align: center;
        }

        nav {
            padding: 50px;
        }
    </style>
</head>
<header>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </br></br></br></br>
    <!--<p dir="rtl" lang="ar"  style="color:#e0e0e0;font-size:20px;">رَبٍّ زِدْنٍي عِلمًا</p>-->
    <div class="centerM" lang="ar">
        </br>
        <h1> ميثاق<b color='red'> الوفـاء </b> </h1>
        </br>
    </div>
    <div class='center'>
        <h6> للحصول على نسختك من الميثاق، المرجوا ملئ المعلومات الآتية </h6>
    </div>
    <div class="rtl">
        <form method="post" action="mitaki">
            <div class="form-group">
                <label for="validationCustomUsername" direction='rtl' class="col text-right"> الإسم الكـامل </label>
                <input type="text" class="form-control" name='name' id="validationCustomUsername" placeholder="الإسم الكامل" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
            <div class="form-group">
                <label for="validationCustom03" direction='rtl' class="col text-right"> المدينة</label>
                <input type="text" class="form-control" name='city' id="" placeholder="المدينة " required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col text-right">
                </br>
                <button type="submit" class="btn btn-primary">&nbsp &nbsp أحصل على نسختك من الميثــاق &nbsp&nbsp</button>
            </div>
        </form>
    </div>
    </br></br>
    <div class='col text-right'>
        <h4> الجهات المساهمة </h4>
        <BR>
        <table>
            <tr>
                <td>&emsp;<img src="{{asset('images\logomoadara1.png')}}" alt="" height=100 width=100></img></th>
                <td>&emsp;<img src="{{asset('images\orema.png')}}" alt="" height=100 width=130></img></th>
                <td>&emsp;<img src="{{asset('images\SLOGON.png')}}" alt="" height=100 width=180></img></td>
            </tr>
        </table>
    </div>
</body>
</br></br>
<footer>
    <div class='footer'>
        <div class="ml-4 text-center text-sm text-black-500 sm:text-center sm:ml-0"></br></br>
            طلاب مغـاربة ضد التطبيـع <img src="{{asset('images\LOGO.png')}}" alt="" height=30 width=35></img> ـ جميع الحقوق محفوظة <b> ـ 2021
        </div>
    </div>
</footer>

</html>