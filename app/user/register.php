<!DOCTYPE html>
<html lang="en">

<head>
    <title>ลงทะเบียนสมาชิก</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="">
    <meta name="author" content="#">

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
    <link rel="stylesheet" href="assets/multi-step/css/reset.min.css">
    <link rel="stylesheet" href="assets/multi-step/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body id="multi-step">

<?php include_once"Pre-loader.php";?>

<div class="container-fluid">
    <form id="msform" action="save_register" method="POST">

        <ul id="progressbar">
            <li class="active">Account Setup</li>
            <li>MT4 Profiles</li>
            <li>Personal Details</li>
        </ul>

        <fieldset>
            <img class="logo mt-3" src="assets/images/logo-black.png" alt="logo">            
            <h3 class="fs-subtitle">Account Setup</h3>            
            <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required/>
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="phone" id="phone"  placeholder="เบอร์โทร" required/>
            </div>
            <div class="form-group">         
                <input type="password" class="form-control " name="pass" id="pass" placeholder="Password" required/>
            </div>
            <div class="form-group mb-5">
                <input type="password" class="form-control " name="confpass" id="confpass" placeholder="Confirm Password" required/>
            </div>
            <button type="button" name="next" id="next" class="btn btn-primary next" value="Next" disabled>Next</button>
            <input type="text" class="form-control" name="refID" value="<?php if(isset($_GET['ref'])){echo $_GET['ref'];}?>" hidden/>
        </fieldset>

        <fieldset class>
            <img class="logo mt-3" src="assets/images/logo-black.png" alt="logo">         
            <h3 class="fs-subtitle">MT4 Profiles</h3>
            <div class="form-group">
                <input type="text" class="form-control" name="mt4" placeholder="เลขบัญชี MT4" />
            </div>
            <div class="form-group">                
                <select class="form-control" name="mt4_type">
                    <option value="" selected>ประเภทบัญชี</option>
                    <option value="Cent">บัญชี Cent</option>
                    <option value="Micro">บัญชี Micro</option>
                    <option value="Mini">บัญชี Mini</option>
                    <option value="Standard">บัญชี Standard</option> 
                    <option value="Real">บัญชี Real</option>   
                    <option value="PRO">บัญชี PRO</option>                  
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="broker" placeholder="ชื่อโบรกเกอร์" />
            </div>           
            <p class="text-danger mb-5 mt-2">(กดข้ามหากท่านยังไม่มีบัญชีเทรด)</p>
            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous" value="Previous">Previous</button>
            <button type="button" name="next" id="next" class="btn btn-primary next" value="Next">Next</button>
        </fieldset>

        <fieldset>
            <img class="logo mt-3" src="assets/images/logo-black.png" alt="logo">         
            <h3 class="fs-subtitle">Personal Details</h3>
            <div class="form-group">
                <input type="text" class="form-control" name="f_name" placeholder="ชื่อ*" required/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="ls_name" placeholder="นามสกุล*" required/>
            </div>
            <div class="form-group">
            <select class="form-control" name="banker">
                    <option value="" selected>-- เลือกธนาคาร --</option>                                                    
                    <option value="กสิกรไทย">กสิกรไทย</option>                    
                    <option value="กรุงไทย">กรุงไทย</option>
                    <option value="กรุงเทพ">กรุงเทพ</option>
                    <option value="กรุงศรีอยุธยา">กรุงศรีอยุธยา</option>
                    <option value="ไทยพาณิชย์">ไทยพาณิชย์</option>
                    <option value="ทีเอ็มบี">ทีเอ็มบี</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="bank_account" placeholder="เลขบัญชีธนาคาร" />
            </div>
           
            <div class="form-group mb-5">
                <textarea name="address" class="form-control" placeholder="ที่อยู่"></textarea>
            </div>

            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous" value="Previous">Previous</button>
            <button type="submit" name="SaveForm" class="btn btn-primary" value="Submit">Submit</button>
        </fieldset>
    </form>
</div>



    <script type="text/javascript" src="assets/js/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validation/validate.js"></script>
    <script type="text/javascript" src="assets/js/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/feature-detects/css-scrollbars.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="assets/multi-step/js/main.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>

    

    <script type="text/javascript"> 

        $('#pass, #confpass').on('keyup keydown', function () {

            $('#pass, #confpass').html('').css('border-color', 'red'); 
            $("#next").prop("disabled", true);
            
            if ($('#pass').val() == $('#confpass').val()) {
                $('#pass, #confpass').html('').css('border-color', 'green');  
                $("#next").prop("disabled", false);
            }  
                       
        });

    </script>

</body>

</html>