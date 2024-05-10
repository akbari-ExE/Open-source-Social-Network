<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<style>
    body {
        overflow: hidden;
    }

    .main-content {
        width: 50%;
        height: 40%;
        margin: 10px auto;
        background-color: #fff;
        border: 2px solid #e6e6e6;
        padding: 40px 50px;
    }

    .header {
        border: 0px solid #000;
        margin-bottom: 5px;
    }

    .well {
        background-color: #187FAB;
    }

    #signup{
        width: 60%;
        border-radius: 30px;
    }

    


</style>



<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <center>
                    <h1 style="color: white;">
                        نام سایت ؟؟؟؟
                    </h1>
                </center>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                    <h3 style="text-align: center;"><strong> با نام ثایت ؟؟؟ همراه باشید</strong></h3>
                    <hr>
                </div>
                <div class="l-part">
                    <form action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" name="first_name" class="form-control" placeholder="نام شما " require="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" name="last_name" class="form-control" placeholder="نام خانوادگی شما  " require="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" name="u_pass" class="form-control" placeholder="رمز عبور  " require="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" name="u_email" class="form-control" placeholder="ایمیل شما  " require="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-cheveron-down"></i></span>
                            <select name="u_country" id="" class="form-control" required="required">
                                <option disabled> کشور خود را انتخاب کنید </option>
                                <option> ایران </option>
                                <option> آذربایجان </option>
                                <option> ترکیه </option>
                                <option> فنلاند </option>
                                <option> نپال </option>
                                <option> شیلی </option>
                                <option> آلمان </option>
                                <option> آلبانی </option>
                                <option> ایتالیا </option>
                                <option> مکزیک </option>
                                <option> انگلسان </option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-cheveron-down"></i></span>
                            <select name="u_gender" id="" class="form-control input-md" required="required">
                                <option disabled> Select your gender </option>
                                <option> زن </option>
                                <option> مرد </option>
                                <option> none binery </option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendere"></i></span>
                            <input type="date" name="u_birthday" class="form-control input-md" placeholder="تاریخ تولد شما  " require="required">
                        </div><br>
                        <a style="text-decoration: none; float:right; color : #187FAB;" data-toggle="tooltip" title="signin" href="signin.php">قبلا ثبت نام کرده اید ؟</a><br><br>

                        <center><button id="signup" class="btn btn-info btn-lg" name="sign_up">signup</button></center>
                        <?php
                        // include("insert_user.php");

                        ?>
                    </form>
                </div>
            </div>

        </div>

    </div>

    </div>
</body>

</html>