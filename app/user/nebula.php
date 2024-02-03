<?php require_once 'default_func.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Controller - MRC </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="My App Controller">
    <meta name="author" content="#">

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="assets/icon/feather/css/feather.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/j-pro/css/j-pro-modern.css">
</head>

<body>

    <?php include_once "Pre-loader.php"; ?>



    <div id="mrc" class="mrc">
        <div class="mrc-overlay-box"></div>
        <div class="mrc-container navbar-wrapper">

            <?php include_once "top-bar.php"; ?>

            <?php include_once "chat-box.php"; ?>

            <div class="mrc-main-container">
                <div class="mrc-wrapper">
                    <?php include_once "nav-bar.php"; ?>

                    <div class="mrc-content">
                        <div class="mrc-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3>เลือกแพ็คเกจเช่าบริการ</h3>
                                                        <span></span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form action="user_action" method="POST" class="j-pro">
                                                                <div class="j-content">
                                                                    <div class="j-row">
                                                                        <div class="j-unit j-span5">
                                                                            <img src="assets/images/nebula-box.png" width="264px" />
                                                                        </div>
                                                                        <div class="j-unit j-span7">
                                                                            <h4 class="sub-title">Nebula Dashboard</h4>
                                                                            <div class="j-input">                                                                               
                                                                                <select class="selectmenu" id="package" name="package" onchange="addto_cart()" required>
                                                                                <option value=""disabled selected>──── เลือกแพ็คเกจ (โปรโมชั่น) ────</option>  
                                                                                <option value="0">Package : ทดลองใช้งาน / ฟรี</option>               
                                                                                <option value="999">Package : 1 เดือน / 999 บ.</option>                    
                                                                                <option value="2900">Package : 3 เดือน / 2,900 บ.</option>
                                                                                <option value="6500">Package : 6 เดือน / 6,500 บ.</option>
                                                                                <option value="12000">Package : 12 เดือน / 12,000 บ.</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="j-unit j-span5">

                                                                        </div>
                                                                        <div class="j-span7 j-unit">
                                                                            <h4 class="sub-title">VPS Hosting</h4>
                                                                            <div class="j-input">                                                                                
                                                                                <select class="selectmenu" id="vps" name="vps" onchange="addto_cart()">
                                                                                    <option value="0" selected>ไม่รับบริการ</option>
                                                                                    <option value="350">VPS Hi-Speed : 1 เดือน / 350 บ.</option>
                                                                                    <option value="1050">VPS Hi-Speed : 3 เดือน / 1,050 บ.</option>
                                                                                    <option value="1999">VPS Hi-Speed : 6 เดือน / 1,999 บ.</option>
                                                                                    <option value="3999">VPS Hi-Speed : 12 เดือน / 3,999 บ.</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dt-responsive table-responsive">
                                                                        <table id="left-right-fix" class="table nowrap">
                                                                            <thead>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="small" id="service_list">ไม่มีรายการ</td>
                                                                                    <td id="service_price">0</td>                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="small" id="vps_list">---</td>
                                                                                    <td id="vps_price">0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="small">ได้รับส่วนลด :</td>
                                                                                    <td id="discount" class="text-danger small">0</td>
                                                                                </tr>

                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total :</th>
                                                                                    <th id="total" class="text-primary">0.00</th>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>

                                                                </div>

                                                                <div class="j-footer">    
                                                                    <div class="j-row">
                                                                        <div class="span8 mt-2 ml-2">
                                                                            <div class="checkbox-fade fade-in-primary">
                                                                                <label>                                                                                    
                                                                                    <input class="check" type="checkbox" id="check-enable-button">
                                                                                    <span class="cr">
                                                                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                                    </span> 
                                                                                    <span class="small">ฉันยอมรับข้อตกลง  <a href="" type="button" data-toggle="modal" data-target="#ProductPolicy">"อ่านข้อตกลงการใช้บริการ"</a></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="span4 mt-2">
                                                                            <button type="submit" name="btn-confirm" id="enable-button" value="order" class="btn btn-primary" disabled>สั่งซื้อบริการ</button>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </form>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade bd-modal-xl" id="ProductPolicy" tabindex="-1" role="dialog" aria-labelledby="ProductPolicyTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="ProductPolicyTitle">ข้อกำหนดเงื่อนไขการให้บริการ</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">              
                <p>ซึ่งต่อไปในคำอธิบายฉบับนี้จะเรียกผู้ที่ลงทะเบียนว่า “ผู้ใช้บริการ”</p>       
                    <p class="mt-3">
                        บันทึกนี้จัดทำขึ้นเพื่อให้ผู้ใช้บริการได้ทราบและทำความเข้าใจเกี่ยวกับวิธีการใช้เครื่องมือการลงทุนของ “MRC Group” 
                        โดยก่อนตัดสินใจใช้เครื่องมือ Nabula Dashboard ผู้ให้บริการขอแจ้งข้อมูลที่สำคัญ รวมทั้งรายละเอียดของการใช้เครื่องมือ รวมถึงความเสี่ยงและผลกระทบที่อาจเกิดขึ้นจากการใช้เครื่องมือ ดังนี้</p> 
                    <p class="mt-4">
                        1.	ผู้ให้บริการได้นำเสนอข้อมูล รวมทั้งเอกสารให้ความรู้เบื้องต้นของเครื่องมือช่วยการลงทุนแก่ผู้ใช้บริการแล้ว และผู้ใช้บริการได้ทราบและตัดสินใจใช้เครื่องมือ Nebula Dashboard ด้วยความสมัครใจของตนเอง</p> 
                    <p class="mt-2">   
                        2.	เครื่องมือ “Nabula Dashboard” เป็นเพียงตัวช่วยเสริมการตัดสินใจในการลงทุน โดยมีความเสี่ยงในการใช้งานระบบนั้นขึ้นอยู่กับตัวผู้ใช้บริการเอง</p> 
                    <p class="mt-2">
                        3.	ผู้ใช้บริการรับทราบดีถึงความเสี่ยงในการลงทุน และการขึ้นลงของราคาตลาดมีการเปลี่ยนแปลงของราคาซึ่งอาจจะส่งผลต่อการทำกำไรหรือขาดทุน</p> 
                    <p class="mt-2">   
                        4.	ผู้ใช้บริการจะเก็บรักษาข้อมูลของผู้ให้บริการไว้เป็นความลับ ไม่ว่าจะเป็นวิธีการ ขั้นตอน และจะไม่เปิดเผยแก่บุคคลอื่นที่ไม่เกี่ยวข้องก่อนได้รับความยินยอมจากผู้ให้บริการ</p> 
                    <p class="mt-2 mb-3">   
                        5.	ผู้ใช้บริการตกลงยินยอมว่าจะไม่มีการฟ้องร้องหรือเรียกร้องค่าเสียหายใดๆ ไม่ว่าจะเกิดจากเหตุสุดวิสัยหรือเหตุอื่นใดกับผู้ให้บริการ ไม่ว่าจะเป็นการดำเนินคดีในทางแพ่งและทางอาญา รวมถึงค่าใช้จ่ายต่างๆ ที่ได้ใช้จ่ายไปและค่าใช้จ่ายอื่นๆที่เกิดขึ้น</p> 
                        
                </div>     
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                </div>
                
                </div>
            </div>
            </div>

        </div>
    </div>



    <script type="text/javascript" src="assets/js/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/j-pro/js/jquery.j-pro.js"></script>
    <script type="text/javascript" src="assets/j-pro/js/j-forms-additions.min.js"></script>
    <script type="text/javascript" src="assets/j-pro/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="assets/j-pro/js/jquery.ui.min.js"></script>

    <script src="assets/js/mrc.min.js"></script>
    <script src="assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="assets/js/script.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


    <script type="text/javascript" src="assets/js/calculate-cart.js"></script>


</body>

</html>