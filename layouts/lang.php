<!-- <div class="row" style="float: right; padding-right: 10px;">
    <a id="txtLan" style="color: #19A17A !important;">
        <img src="./API_files/usa.png" style="width: 20px; margin-right: .4rem;">English
    </a>
    <div id="divblock" style="display: none;">
        <div style="border-bottom: 1px #ddd solid; padding: 3px;">
            <a>
                <img src="./API_files/usa.png" style="width: 20px;"> English
            </a>
        </div>
        <div style="padding: 3px;">
            <a>
                <img src="./API_files/china.png" style="width: 20px;"> 中文
            </a>
        </div>
    </div>
</div> -->
<nav class="navbar   " style="z-index: 1;   background-color: #043E35;   box-shadow: none;">
    <div class="container-fluid" style="    position: relative;
    width: 100%;
    display: flex;
    justify-content: flex-end;
    align-items: center;">
        <!-- <a id="menu_navbar" class="navbar-brand" href="#">Navbar</a> -->
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
        <div id="btn_language" onclick="togglelang()" class="btn btn-info">
            EN
        </div>

    </div>

</nav>
<div class="container mt-5">

</div>
<div class="row">
    <!-- <div class="row" style="margin-top: 40px;"> -->
    <img id="blah" class="center" src="./API_files/Banner3.jpg">
</div>


<script>
    var th = {
        btn_language: " ไทย",
        menu_Introduction: "การแนะนำ",
        menu_Version: "เวอร์ชั่น",
        menu_Lotto_Type: "ประเภทหวย",
        menu_Key_Type: "ประเภทคีย์",
        menu_Key_Sub_Type: "ประเภทย่อยของคีย์",
        menu_Seamless_API: "เครือข่าย API",
        menu_Introduction_Seamless_API: "การแนะนำเครือข่าย API",
        menu_Workflow: "ขั้นตอนการทำงาน",
        menu_Setting: "การตั้งค่า",
        menu_login_request: "คำขอเข้าสู่ระบบ",
        menu_Call_Back_Service: "บริการหลังใช้",
        menu_GetUserDetail: "รับรายละเอียดผู้ใช้",
        menu_GetUserBalance: "รับยอดคงเหลือผู้ใช้",
        menu_UserPlaceBet: "ผู้ใช้เดิมพัน",
        menu_UserPlaceBetCancel: "ผู้ใช้ยกเลิกเดิมพัน",
        menu_UserPlacePayout: "ผู้ใช้การจ่ายเงิน",
        menu_UserPlaceReToRunning: "ผู้ใช้ดำเนิการ",
        menu_UserPayReward: "ผู้ใช้รับรางวัล",
        menu_UserPayRewardCancel: "ผู้ใช้ยกเลิกรางวัล",
        menu_Optional_API: "ทางเลือก API",
        menu_memberBetHistories: "ประวัติการเดิมพันของสมาชิก",
        menu_betHistories: "ประวัติการเดิมพัน",
        menu_GetListBetResult: "รับรายการผลการเดิมพัน",
        menu_Setting_Back_Office: "การตั้งค่า Back Office",
        menu_AddHotnumber: "เพิ่มหมายเลขยอดนิยม",
        menu_EditHotnumber: "แก้ไขเลขยอดนิยม",
        menu_DeleteHotnumber: "ลบเลขยอดนิยม",
        menu_AddLimitnumber: "เพิ่มเลขยอดนิยม",
        menu_DeleteLimitnumber: "ลบจำนวนจำกัด",
        menu_SetPlaceout: "กำหนดสถานที่",
        menu_ListPlaceout: "รายชือสถานที่",
        menu_ListHotnumberandLimitnumber: "รายชือหมายเลขยอดนิยม และ เลขจำนวนจำกัด",
        menu_Detail: "รายละเอียด",
        menu_Transferwallet_API: "โอนกระเป๋าสตางค์ API",
        menu_Introduction_Transferwallet_API: "การดำเนินการโอนกระเป๋าสตางค์ API",
        menu_Workflow5: "ขั้นตอนการทำงาน",
        menu_Setting5: "การตั้งค่า",
        menu_login_request5: "คำขอเข้าสู่ระบบ",
        menu_deposit: "เงินฝาก",
        menu_withdrawal: "การถอนตัว",
        menu_Service_Respond_Code :"การบริการรหัสตอบกลับ",
        menu_Member_Authen: "สมาชิกแท้",
        menu_Service_Respone: "การตอบสนองการบริการ",

        index_Introduction: "การแนะนำ",
        index_Askmelotto_Integration_Form: "Askmelotto แบบฟอร์มบูรณาการ",
        Version_Version: "เวอร์ชั่น",
        Lotto_Lotto_Type: "ประเภทหวย",
        Lotto_Key_Type: "ประเภทคีย์",
        Lotto_Key_Sub_Type: "ประเภทย่อยของคีย์",

        Seamless_Seamless_API: "เครือข่าย API",
        Seamless_Introduction_Seamless_API: "การแนะนำเครือข่าย API",
        Seamless_Workflow: "ขั้นตอนการทำงาน",
        Seamless_Setting: "การตั้งค่า",
        Seamless_login_request: "คำขอเข้าสู่ระบบ",
        Seamless_Call_Back_Service: "บริการหลังใช้",
        Seamless_GetUserDetail: "รับรายละเอียดผู้ใช้",
        Seamless_GetUserBalance: "รับยอดคงเหลือผู้ใช้",
        Seamless_UserPlaceBet: "ผู้ใช้เดิมพัน",
        Seamless_UserPlaceBetCancel: "ผู้ใช้ยกเลิกเดิมพัน",
        Seamless_UserPlacePayout: "ผู้ใช้การจ่ายเงิน",
        Seamless_UserPlaceReToRunning: "ผู้ใช้ดำเนิการ",
        Seamless_UserPayReward: "ผู้ใช้รับรางวัล",
        Seamless_UserPayRewardCancel: "ผู้ใช้ยกเลิกรางวัล",
        Seamless_Optional_API: "ทางเลือก API",
        Seamless_memberBetHistories: "ประวัติการเดิมพันของสมาชิก",
        Seamless_betHistories: "ประวัติการเดิมพัน",
        Seamless_GetListBetResult: "รับรายการผลการเดิมพัน",
        Seamless_Setting_Back_Office: "การตั้งค่า Back Office",
        Seamless_AddHotnumber: "เพิ่มหมายเลขยอดนิยม",
        Seamless_EditHotnumber: "แก้ไขเลขยอดนิยม",
        Seamless_DeleteHotnumber: "ลบเลขยอดนิยม",
        Seamless_AddLimitnumber: "เพิ่มเลขยอดนิยม",
        Seamless_DeleteLimitnumber: "ลบจำนวนจำกัด",
        Seamless_SetPlaceout: "กำหนดสถานที่",
        Seamless_ListPlaceout: "รายชือสถานที่",
        Seamless_ListHotnumberandLimitnumber: "รายชือหมายเลขยอดนิยม และ เลขจำนวนจำกัด",
        Seamless_Detail: "รายละเอียด",

        tran_Transferwallet_API: "โอนกระเป๋าสตางค์ API",
        tran_Introduction_Transferwallet_API: "การดำเนินการโอนกระเป๋าสตางค์ API",
        tran_Workflow5: "ขั้นตอนการทำงาน",
        tran_Setting5: "การตั้งค่า",
        tran_login_request5: "คำขอเข้าสู่ระบบ",
        tran_deposit: "เงินฝาก",
        tran_withdrawal: "การถอนตัว",

        ser_Service_Respond_Code :"การบริการรหัสตอบกลับ",
        ser_Member_Authen: "สมาชิกแท้",
        ser_Service_Respone: "การตอบสนองการบริการ",

    };
    var en = {
        btn_language: "EN",
        menu_Introduction: "Introduction",
        menu_Version: "Version",
        menu_Lotto_Type: "Lotto Type",
        menu_Key_Type: "Key Type",
        menu_Key_Sub_Type: "menu Key Sub Type",
        menu_Seamless_API: "Seamless API",
        menu_Introduction_Seamless_API: "Introduction Seamless API",
        menu_Workflow: "Workflow",
        menu_Setting: "Setting",
        menu_login_request: "login request",
        menu_Call_Back_Service: "Call Back Service",
        menu_GetUserDetail: "GetUserDetail",
        menu_GetUserBalance: "GetUserBalance",
        menu_UserPlaceBet: "UserPlaceBet",
        menu_UserPlaceBetCancel: "UserPlaceBetCancel",
        menu_UserPlacePayout: "UserPlacePayout",
        menu_UserPlaceReToRunning: "UserPlaceReToRunning",
        menu_UserPayReward: "UserPayReward",
        menu_UserPayRewardCancel: "UserPayRewardCancel",
        menu_Optional_API: "Optional API",
        menu_memberBetHistories: "memberBetHistories",
        menu_betHistories: "betHistories",
        menu_GetListBetResult: "GetListBetResult",
        menu_Setting_Back_Office: "Setting Back-Office",
        menu_AddHotnumber: "AddHotnumber",
        menu_EditHotnumber: "EditHotnumber",
        menu_DeleteHotnumber: "DeleteHotnumber",
        menu_AddLimitnumber: "AddLimitnumber",
        menu_DeleteLimitnumber: "DeleteLimitnumber",
        menu_SetPlaceout: "SetPlaceout",
        menu_ListPlaceout: "ListPlaceout",
        menu_ListHotnumberandLimitnumber: "ListHotnumberandLimitnumber",
        menu_Detail: "Detail",
        menu_Transferwallet_API: "Transferwallet API",
        menu_Introduction_Transferwallet_API: "Introduction Transferwallet API",
        menu_Workflow5: "Workflow",
        menu_Setting5: "Setting",
        menu_login_request5: "login request",
        menu_deposit: "deposit",
        menu_withdrawal: "withdrawal",
        menu_Service_Respond_Code :"Service Respond Code",
        menu_Member_Authen: "Member Authen",
        menu_Service_Respone: "Service Respone",

        index_Introduction: "Introduction",
        index_Askmelotto_Integration_Form: "Askmelotto Integration Form",
        Version_Version: "Version",
        Lotto_Lotto_Type: "Lotto Type",
        Lotto_Key_Type: "Key Type",
        Lotto_Key_Sub_Type: "menu Key Sub Type",

        Seamless_Seamless_API: "Seamless API",
        Seamless_Introduction_Seamless_API: "Introduction Seamless API",
        Seamless_Workflow: "Workflow",
        Seamless_Setting: "Setting",
        Seamless_login_request: "login request",
        Seamless_Call_Back_Service: "Call Back Service",
        Seamless_GetUserDetail: "GetUserDetail",
        Seamless_GetUserBalance: "GetUserBalance",
        Seamless_UserPlaceBet: "UserPlaceBet",
        Seamless_UserPlaceBetCancel: "UserPlaceBetCancel",
        Seamless_UserPlacePayout: "UserPlacePayout",
        Seamless_UserPlaceReToRunning: "UserPlaceReToRunning",
        Seamless_UserPayReward: "UserPayReward",
        Seamless_UserPayRewardCancel: "UserPayRewardCancel",
        Seamless_Optional_API: "Optional API",
        Seamless_memberBetHistories: "memberBetHistories",
        Seamless_betHistories: "betHistories",
        Seamless_GetListBetResult: "GetListBetResult",
        Seamless_Setting_Back_Office: "Setting Back-Office",
        Seamless_AddHotnumber: "AddHotnumber",
        Seamless_EditHotnumber: "EditHotnumber",
        Seamless_DeleteHotnumber: "DeleteHotnumber",
        Seamless_AddLimitnumber: "AddLimitnumber",
        Seamless_DeleteLimitnumber: "DeleteLimitnumber",
        Seamless_SetPlaceout: "SetPlaceout",
        Seamless_ListPlaceout: "ListPlaceout",
        Seamless_ListHotnumberandLimitnumber: "ListHotnumberandLimitnumber",
        Seamless_Detail: "Detail",

        tran_Transferwallet_API: "Transferwallet API",
        tran_Introduction_Transferwallet_API: "Introduction Transferwallet API",
        tran_Workflow5: "Workflow",
        tran_Setting5: "Setting",
        tran_login_request5: "login request",
        tran_deposit: "deposit",
        tran_withdrawal: "withdrawal",

        ser_Service_Respond_Code :"Service Respond Code",
        ser_Member_Authen: "Member Authen",
        ser_Service_Respone: "Service Respone",
    };

    function renderlang() {
        if (!localStorage.lang) {
            localStorage.setItem("lang", "en");
        } else {
            $("#btn_language").text(settext("btn_language"));
            $("#menu_Introduction").text(settext("menu_Introduction"));
            $("#menu_Version").text(settext("menu_Version"));
            $("#menu_Lotto_Type").text(settext("menu_Lotto_Type"));
            $("#menu_Key_Type").text(settext("menu_Key_Type"));
            $("#menu_Key_Sub_Type").text(settext("menu_Key_Sub_Type"));
            $("#menu_Seamless_API").text(settext("menu_Seamless_API"));
            $("#menu_Introduction_Seamless_API").text(settext("menu_Introduction_Seamless_API"));
            $("#menu_Workflow").text(settext("menu_Workflow"));
            $("#menu_Setting").text(settext("menu_Setting"));
            $("#menu_login_request").text(settext("menu_login_request"));
            $("#menu_Call_Back_Service").text(settext("menu_Call_Back_Service"));
            $("#menu_GetUserDetail").text(settext("menu_GetUserDetail"));
            $("#menu_GetUserBalance").text(settext("menu_GetUserBalance"));
            $("#menu_UserPlaceBet").text(settext("menu_UserPlaceBet"));
            $("#menu_UserPlaceBetCancel").text(settext("menu_UserPlaceBetCancel"));
            $("#menu_UserPlacePayout").text(settext("menu_UserPlacePayout"));
            $("#menu_UserPlaceReToRunning").text(settext("menu_UserPlaceReToRunning"));
            $("#menu_UserPayReward").text(settext("menu_UserPayReward"));
            $("#menu_UserPayRewardCancel").text(settext("menu_UserPayRewardCancel"));
            $("#menu_Optional_API").text(settext("menu_Optional_API"));
            $("#menu_memberBetHistories").text(settext("menu_memberBetHistories"));
            $("#menu_betHistories").text(settext("menu_betHistories"));
            $("#menu_GetListBetResult").text(settext("menu_GetListBetResult"));
            $("#menu_Setting_Back_Office").text(settext("menu_Setting_Back_Office"));
            $("#menu_AddHotnumber").text(settext("menu_AddHotnumber"));
            $("#menu_EditHotnumber").text(settext("menu_EditHotnumber"));
            $("#menu_DeleteHotnumber").text(settext("menu_DeleteHotnumber"));
            $("#menu_AddLimitnumber").text(settext("menu_AddLimitnumber"));
            $("#menu_DeleteLimitnumber").text(settext("menu_DeleteLimitnumber"));
            $("#menu_SetPlaceout").text(settext("menu_SetPlaceout"));
            $("#menu_ListPlaceout").text(settext("menu_ListPlaceout"));
            $("#menu_ListHotnumberandLimitnumber").text(settext("menu_ListHotnumberandLimitnumber"));
            $("#menu_Detail").text(settext("menu_Detail"));
            $("#menu_Transferwallet_API").text(settext("menu_Transferwallet_API"));
            $("#menu_Introduction_Transferwallet_API").text(settext("menu_Introduction_Transferwallet_API"));
            $("#menu_Workflow5").text(settext("menu_Workflow5"));
            $("#menu_Setting5").text(settext("menu_Setting5"));
            $("#menu_login_request5").text(settext("menu_login_request5"));
            $("#menu_deposit").text(settext("menu_deposit"));
            $("#menu_withdrawal").text(settext("menu_withdrawal"));
            $("#menu_Service_Respond_Code").text(settext("menu_Service_Respond_Code"));
            $("#menu_Member_Authen").text(settext("menu_Member_Authen"));
            $("#menu_Service_Respone").text(settext("menu_Service_Respone"));

            $("#index_Introduction").text(settext("index_Introduction"));
            $("#index_Askmelotto_Integration_Form").text(settext("index_Askmelotto_Integration_Form"));
            $("#Version_Version").text(settext("Version_Version"));
            $("#Lotto_Lotto_Type").text(settext("Lotto_Lotto_Type"));
            $("#Lotto_Key_Type").text(settext("Lotto_Key_Type"));
            $("#Lotto_Key_Sub_Type").text(settext("Lotto_Key_Sub_Type"));

            $("#Seamless_Seamless_API").text(settext("Seamless_Seamless_API"));
            $("#Seamless_Introduction_Seamless_API").text(settext("Seamless_Introduction_Seamless_API"));
            $("#Seamless_Workflow").text(settext("Seamless_Workflow"));
            $("#Seamless_Setting").text(settext("Seamless_Setting"));
            $("#Seamless_login_request").text(settext("Seamless_login_request"));
            $("#Seamless_Call_Back_Service").text(settext("Seamless_Call_Back_Service"));
            $("#Seamless_GetUserDetail").text(settext("Seamless_GetUserDetail"));
            $("#Seamless_GetUserBalance").text(settext("Seamless_GetUserBalance"));
            $("#Seamless_UserPlaceBet").text(settext("Seamless_UserPlaceBet"));
            $("#Seamless_UserPlaceBetCancel").text(settext("Seamless_UserPlaceBetCancel"));
            $("#Seamless_UserPlacePayout").text(settext("Seamless_UserPlacePayout"));
            $("#Seamless_UserPlaceReToRunning").text(settext("Seamless_UserPlaceReToRunning"));
            $("#Seamless_UserPayReward").text(settext("Seamless_UserPayReward"));
            $("#Seamless_UserPayRewardCancel").text(settext("Seamless_UserPayRewardCancel"));
            $("#Seamless_Optional_API").text(settext("Seamless_Optional_API"));
            $("#Seamless_memberBetHistories").text(settext("Seamless_memberBetHistories"));
            $("#Seamless_betHistories").text(settext("Seamless_betHistories"));
            $("#Seamless_GetListBetResult").text(settext("Seamless_GetListBetResult"));
            $("#Seamless_Setting_Back_Office").text(settext("Seamless_Setting_Back_Office"));
            $("#Seamless_AddHotnumber").text(settext("Seamless_AddHotnumber"));
            $("#Seamless_EditHotnumber").text(settext("Seamless_EditHotnumber"));
            $("#Seamless_DeleteHotnumber").text(settext("Seamless_DeleteHotnumber"));
            $("#Seamless_AddLimitnumber").text(settext("Seamless_AddLimitnumber"));
            $("#Seamless_DeleteLimitnumber").text(settext("Seamless_DeleteLimitnumber"));
            $("#Seamless_SetPlaceout").text(settext("Seamless_SetPlaceout"));
            $("#Seamless_ListPlaceout").text(settext("Seamless_ListPlaceout"));
            $("#Seamless_ListHotnumberandLimitnumber").text(settext("Seamless_ListHotnumberandLimitnumber"));
            $("#Seamless_Detail").text(settext("Seamless_Detail"));

            $("#tran_Transferwallet_API").text(settext("tran_Transferwallet_API"));
            $("#tran_Introduction_Transferwallet_API").text(settext("tran_Introduction_Transferwallet_API"));
            $("#tran_Workflow5").text(settext("tran_Workflow5"));
            $("#tran_Setting5").text(settext("tran_Setting5"));
            $("#tran_login_request5").text(settext("tran_login_request5"));
            $("#tran_deposit").text(settext("tran_deposit"));
            $("#tran_withdrawal").text(settext("tran_withdrawal"));

            $("#ser_Service_Respond_Code").text(settext("ser_Service_Respond_Code"));
            $("#ser_Member_Authen").text(settext("ser_Member_Authen"));
            $("#ser_Service_Respone").text(settext("ser_Service_Respone"));
        }
    }

    function settext(key) {
        if (localStorage.lang == "en") {
            return en[key];
        } else {
            return th[key];
        }
    }

    function togglelang() {
        if (localStorage.lang == "en") localStorage.setItem("lang", "th");
        else if (localStorage.lang == "th") localStorage.setItem("lang", "en");

        renderlang();
        return "now language: " + localStorage.lang;
    }

    renderlang()
</script>