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
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
                                            <div class="col-lg-12">

                                                <div class="tab-header card">
                                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#team" role="tab">My Commission</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="team" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-xl-3">

                                                                <div class="card">
                                                                    <div class="card-header contact-user">
                                                                        <img class="img-radius img-40" src="assets/images/<?php echo $fetcRow['M_img_path']; ?>" alt="user">
                                                                        <h5 class="m-l-10"><?php echo $fetcRow['M_name']; ?></h5>
                                                                    </div>   
                                                                </div>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-12 col-sm-12 col-md-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>รายงานค่าคอมมิสชั่น</h5>
                                                                    <span></span>
                                                                </div>
                                                                <div class="card-block">
                                                                    <div class="table-responsive dt-responsive">
                                                                        <div id="dom-jqry_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                                            <div class="row">
                                                                                <div class="col-xs-12 col-sm-12 col-sm-12 col-md-6">
                                                                                    <div class="dataTables_length" id="dom-jqry_length"><label>Show <select name="dom-jqry_length" aria-controls="dom-jqry" class="form-control input-sm">
                                                                                                <option value="10">10</option>
                                                                                                <option value="25">25</option>
                                                                                                <option value="50">50</option>
                                                                                                <option value="100">100</option>
                                                                                            </select> entries</label></div>
                                                                                </div>
                                                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                                                    <div id="dom-jqry_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dom-jqry"></label></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-xs-12 col-sm-12">
                                                                                    <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable" style="width: 100%;" role="grid" aria-describedby="dom-jqry_info">
                                                                                        <thead>
                                                                                            <tr role="row">
                                                                                            <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 74px;">วันที่</th>
                                                                                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 105px;">สมาชิก</th>
                                                                                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 22px;">Group</th>
                                                                                                <th class="sorting_desc" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 164px;" aria-sort="descending">รายการ</th>
                                                                                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">ราคา</th>
                                                                                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">ค่าคอม</th>                                                                                               
                                                                                                <th class="sorting" tabindex="0" aria-controls="dom-jqry" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 47px;">สถานะ</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>


                                                                                           
                                                                                            <tr role="row" class="odd">
                                                                                                <td></td>
                                                                                                <td class=""></td>
                                                                                                <td></td>
                                                                                                <td class="sorting_1"></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                
                                                                                            </tr>
                                                                                            <tr role="row" class="even">
                                                                                                <td></td>
                                                                                                <td class=""></td>
                                                                                                <td></td>
                                                                                                <td class="sorting_1"></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>                                                                                                
                                                                                            </tr>
                                                                                            
                                                                                        </tbody>
                                                                                        <tfoot>
                                                                                            <tr>
                                                                                                <th rowspan="1" colspan="1"></th>
                                                                                                <th rowspan="1" colspan="1"></th>
                                                                                                <th rowspan="1" colspan="1"></th>
                                                                                                <th rowspan="1" colspan="1"></th>
                                                                                                <th rowspan="1" colspan="1"></th>
                                                                                                <th rowspan="1" colspan="1"></th>
                                                                                            </tr>
                                                                                        </tfoot>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-xs-12 col-sm-12 col-md-5">
                                                                                    <div class="dataTables_info" id="dom-jqry_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div>
                                                                                </div>
                                                                                <div class="col-xs-12 col-sm-12 col-md-7">
                                                                                    <div class="dataTables_paginate paging_simple_numbers" id="dom-jqry_paginate">
                                                                                        <ul class="pagination">
                                                                                            <li class="paginate_button page-item previous disabled" id="dom-jqry_previous"><a href="#" aria-controls="dom-jqry" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="dom-jqry" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                                                            <li class="paginate_button page-item "><a href="#" aria-controls="dom-jqry" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                                                            <li class="paginate_button page-item next" id="dom-jqry_next"><a href="#" aria-controls="dom-jqry" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                                                                                        </ul>
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



    <script type="text/javascript" src="assets/js/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>

    <script src="assets/js/mrc.min.js"></script>
    <script src="assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="components/dashboard/data.js"></script>
    <script type="text/javascript" src="assets/js/script.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script>
        function copy_link(element) {

            var copyText = document.getElementById("mylink");

            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
        }
    </script>
</body>

</html>