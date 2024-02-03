        function addto_cart() {

            var optionPRO = document.getElementById('package');
            var listID = document.getElementById("service_list");
            var priceID = document.getElementById("service_price");
            var discountID = document.getElementById("discount");
            var totalID = document.getElementById("total");

            var optionVPS = document.getElementById('vps');
            var vpsListID = document.getElementById("vps_list");
            var vpsPriceID = document.getElementById("vps_price");

            let servicePrice = optionPRO.value;
            let vpsPrice = optionVPS.value;
            let result = parseInt(servicePrice) + parseInt(vpsPrice);

            let numf = new Intl.NumberFormat('en-US');
            var sumTotal = numf.format(result);

            totalID.innerHTML = sumTotal;

            if (optionPRO.value == '0') {
                listID.innerHTML = "Nebula Dashboard : ทดลองฟรี";
                priceID.innerHTML = "0.00";
                discountID.innerHTML = "0.00";              
        
                }

            if (optionPRO.value == '999') {
                listID.innerHTML = '<h6>Nebula Dashboard :</h6> <p class="text-muted mb-0"> 1 เดือน (PRO 999)</p>';
                priceID.innerHTML = "3,500";
                discountID.innerHTML = "-2,501";              

            }
            if (optionPRO.value == '2900') {
                listID.innerHTML = '<h6>Nebula Dashboard :</h6> <p class="text-muted mb-0"> 3 เดือน (PRO 2900)</p>';
                priceID.innerHTML = "5,900";
                discountID.innerHTML = "-3,000";
          
            }
            if (optionPRO.value == '6500') {
                listID.innerHTML = '<h6>Nebula Dashboard :</h6> <p class="text-muted mb-0"> 6 เดือน (PRO 6500)</p>';
                priceID.innerHTML = "10,900";
                discountID.innerHTML = "-4400";
            
            }
            if (optionPRO.value == '12000') {
                listID.innerHTML = '<h6>Nebula Dashboard :</h6> <p class="text-muted mb-0"> 12 เดือน (PRO 12000)</p>';
                priceID.innerHTML = "17,900";
                discountID.innerHTML = "-5,900";
          
            }
            if (optionPRO.value == '') {
                listID.innerHTML = 'ไม่มีรายการ';
                priceID.innerHTML = "0.00";
                discountID.innerHTML = "0.00";

            }

            if (optionVPS.value == '350') {
                vpsListID.innerHTML = "VPS Hi-Speed : 1 เดือน ";
                vpsPriceID.innerHTML = "350";

            }
            if (optionVPS.value == '1050') {
                vpsListID.innerHTML = "VPS Hi-Speed : 3 เดือน ";
                vpsPriceID.innerHTML = "1,050";

            }
            if (optionVPS.value == '1999') {
                vpsListID.innerHTML = "VPS Hi-Speed : 6 เดือน ";
                vpsPriceID.innerHTML = "1,999";

            }
            if (optionVPS.value == '3999') {
                vpsListID.innerHTML = "VPS Hi-Speed : 12 เดือน ";
                vpsPriceID.innerHTML = "3,999";

            }
            if (optionVPS.value == '0') {
                vpsListID.innerHTML = "";
                vpsPriceID.innerHTML = "0.00";
            }



        }