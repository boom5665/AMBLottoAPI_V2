<?php include 'layouts/header.php'; ?>
<div class="wrapper container">
    <?php include 'layouts/nav.php'; ?>
    <main class="" style="padding-left: 15rem; transition: all 0.3s ease-in-out 0s;">
        <?php include 'layouts/lang.php'; ?>
        <div class="body-content">

            <style>
                .txtHead {
                    color: #7F0055;
                }

                .d-non {
                    display: none;
                }

                svg:hover {
                    fill: gray;
                }
            </style>
            <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
                <h1><b style="color: #19A17A !important;" set-lan="text:4. Seamless API">4. <span style="padding-left: 3px;" id="Seamless_Seamless_API"> Seamless API</span></b></h1>
                <div class="pb-3"></div>
                <div class="col-12" id="tabOne">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.1 Introduction Seamless API">4.1
                            <span style="padding-left: 3px;" id="Seamless_Introduction_Seamless_API">Introduction Seamless API</span></b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:4.1 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ในส่วนนี้จะแสดงรายละเอียดของการใช้งานระบบ Seamless เพื่อไปใช้ในระบบคู่ธุรกิจภายนอก</label>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabTwo">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.2 Workflow">4.2 <span style="padding-left: 3px;" id="Seamless_Workflow">Workflow</span></b>
                    </lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:4.2 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ข้อมูลเบื้องต้นแสดงการทำงานในการเรียกใช้ API ของระบบคู่ธุรกิจ เพื่อให้ระบบสามารถเรียกใช้ API ได้ภายใต้เงื่อนไขได้อย่างถูกต้อง</label>
                    </div>
                    <div class="col-12">
                        <img src="./API_files/SeamlessFlow1.png" style="width: 80%; margin-left: 10%;">
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabThree">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.3 Setting">4.3 <span style="padding-left: 3px;" id="Seamless_Setting">Setting</span></b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:0. *">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            *หากคุณมีบัญชีหลัก โปรดสร้างบัญชีตัวแทน API ภายใต้บัญชีหลักของคุณและเข้าสู่ระบบด้วยบัญชีตัวแทน API ที่สร้างขึ้นก่อน แล้วทำตามขั้นตอนการตั้งค่า ดังนี้
                        </label>
                        <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.เข้าสู่ระบบ</label>
                        <div class="col-12">
                            <img src="./API_files/Login001.png" style="width: 30%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            2.คลิกเมนูบัญชีและเลือกเมนูโปรไฟล์</label>
                        <div class="col-12">
                            <img src="./API_files/Account002.png" style="width: 80%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label id="tabZero" set-lan="html:4. Define">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.กำหนดข้อมูล API ต่อไปนี้</label>
                        <div class="col-12">
                            <label set-lan="html:4.1 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.1 คุณสามารถเพิ่มที่อยู่ IP ได้โดยกรอกข้อมูลที่ Callback Url</label>
                        </div>
                        <div class="col-12">
                            <label set-lan="html:4.2 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.2 คุณสามารถคลิกปุ่ม “บันทึก” เพื่อบันทึกข้อมูล</label>
                        </div>
                        <div class="col-12">
                            <img src="./API_files/3.png" style="width: 80%; margin-left: 10%;">
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabFour">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.4 login request">4.4 <span style="padding-left: 3px;" id="Seamless_login_request">Login
                                request</span></b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>

                                https://dev-api.amblotto.net/apiRoute/member/loginRequest
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable1">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="txtCenter bRight">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">System generate key ID after crate Agent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-four_req').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                    <div class="copy-clipboard" style=" position: absolute;width: 20px;top: 20%;right: 0;cursor:pointer">
                                        <svg  style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-four_req').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                    </div>
                                        <code id="3_4A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"comptestseamless"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"18791944ec1a15e649c390d1403c5d6bc888a0d63602116c8f8b1725975e7c2eb832b2509f00eaf11f35bfbf810637e0"</span>,
    <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Type" class="bRight txtCenter">Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from Askmelotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">tkUuid</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Can use only 1 time. limit to 24 hours from generate time.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">url</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Askmelotto link but don't show web header</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">urlFullPage</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Askmelotto link fullpage</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61001</td>
                                        <td>Invalid UserAgent or ApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61003</td>
                                        <td>request error Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61004</td>
                                        <td>request error callback url requst error destination error</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71001</td>
                                        <td>missing filed 'agentUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71002</td>
                                        <td>missing filed 'playerUsername'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71004</td>
                                        <td>missing filed 'agentApiKey'.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71005</td>
                                        <td>playerUsername must be between 4 and 24 characters long.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">71006</td>
                                        <td>username must not contain any special characters and can only contain letters a-z and numbers 0-9.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Reponse </b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-four_res').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 10%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-four_res').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="3_4B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"data"</span>: { 
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"67239355aa8af3f4a6678e31cc3eb83a1612322fc2bf6b8f268b1660f1f37e"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"member1@comptestseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"member1"</span>,
        <span class="hljs-attr">"tkUuid"</span>: <span class="hljs-string">"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg"</span>,
        <span class="hljs-attr">"url"</span>: <span class="hljs-string">"https://dev-askmelotto.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&header=off"</span>,
        <span class="hljs-attr">"urlFullPage"</span>: <span class="hljs-string">"https://dev-askmelotto.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&header=on"</span>
    },
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"Success"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:** Optional">** Optional for direct/re-direct link.</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label set-lan="html:You can add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            คุณสามารถเพิ่มค่าพารามิเตอร์ต่อท้ายในลิงค์ (&lottotype=) เพื่อเปลี่ยนเส้นทางให้ผู้เล่นไปยังหน้าแทง Askmelotto ประเภทนั้นๆ</label>
                    </div>
                    <div class="col-8">
                        <!-- <a href="https://service-api.prettygaming.asia/img/zip/game_icons.rar" style="float: right;"
                            class="Point" download=""><i class="fa fa-download" aria-hidden="true"></i>
                            <label class="Point">&nbsp;Download Icon</label></a> -->
                    </div>
                    <div class="form-group col-3"></div>
                    <div class="form-group col-2"></div>
                    <div class="form-group col-6">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th class="bRight txtCenter" style="width: 200px;">Name</th>
                                        <th class="bRight txtCenter" style="width: 210px;">Value of parameter</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtMid">หวยไทย</td>
                                        <td class="bRight txtCenter txtMid">thailotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยลาว(แทงแบบไทย)</td>
                                        <td class="bRight txtCenter txtMid">laoslotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย</td>
                                        <td class="bRight txtCenter txtMid">hanoylotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย(วีไอพี)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottovip</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวย ธกส.</td>
                                        <td class="bRight txtCenter txtMid">baaclotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวย ออมสิน</td>
                                        <td class="bRight txtCenter txtMid">gsblotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยปิงปอง</td>
                                        <td class="bRight txtCenter txtMid">pingponglotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยลาว(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">laoslotto_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยยี่กี</td>
                                        <td class="bRight txtCenter txtMid">yeekeelotto</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยมาเลย์</td>
                                        <td class="bRight txtCenter txtMid">malaylotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">hanoylotto_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอยวีไอพี(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottovip_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอยพิเศษ(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottospecial_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยมาเลย์(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">malaylotto_set</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย(พิเศษ)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottospecial</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นเกาหลี</td>
                                        <td class="bRight txtCenter txtMid">stockkorea</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นจีน</td>
                                        <td class="bRight txtCenter txtMid">stockchina</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นดาวโจนส์</td>
                                        <td class="bRight txtCenter txtMid">stockdowjones</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นไต้หวัน</td>
                                        <td class="bRight txtCenter txtMid">stocktaiwan</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นอังกฤษ</td>
                                        <td class="bRight txtCenter txtMid">stockengland</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นอินเดีย</td>
                                        <td class="bRight txtCenter txtMid">stockindia</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นฮั่งเส็ง</td>
                                        <td class="bRight txtCenter txtMid">stockhangseng</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นอียิปต์</td>
                                        <td class="bRight txtCenter txtMid">stockegypt</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นนิเคอิ</td>
                                        <td class="bRight txtCenter txtMid">stocknikkei</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นสิงค์โปร</td>
                                        <td class="bRight txtCenter txtMid">stocksingapore</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นไทย</td>
                                        <td class="bRight txtCenter txtMid">stockthai</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นเยอรมัน</td>
                                        <td class="bRight txtCenter txtMid">stockgerman</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นรัสเซีย</td>
                                        <td class="bRight txtCenter txtMid">stockrussia</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Game direct link</b></lable>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.8rem;word-break:break-all">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">thailotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=thailotto</label></label>
                                </div>
                            </div>
                            <!-- <label class="txtHead">thailotto
                                :&nbsp;</label><label>https://test-front.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&amp;</label><label
                                class="txtHead">header=off&amp;lottotype=thailotto</label> -->
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=laoslotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylottovip</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">baaclotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=baaclotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">gsblotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=gsblotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">pingponglotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=pingponglotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=laoslotto_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">yeekeelotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=yeekeelotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=malaylotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylotto_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylottovip_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylottospecial_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=malaylotto_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylottospecial</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockkorea
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockkorea</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockchina
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockchina</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockdowjones
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockdowjones</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocktaiwan
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stocktaiwan</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockengland
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockengland</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockindia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockindia</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockhangseng
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockhangseng</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockegypt
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockegypt</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocknikkei
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stocknikkei</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocksingapore
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stocksingapore</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockthai
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockthai</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockgerman
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockgerman</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockrussia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockrussia</label></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Language</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            หมายเหตุ : กรุณาใช้รหัสตรงตามตัวอย่าง</label>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-2"></div>
                    <div class="form-group col-6">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th class="bRight txtCenter" style="width: 200px;">Language</th>
                                        <th class="txtCenter" style="width: 210px;">Value of parameter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtMid">English</td>
                                        <td class="txtCenter txtMid">EN</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Thai</td>
                                        <td class="txtCenter txtMid">TH</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.87rem;word-break:break-all;">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">English
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&amp;lotto=thailotto&<label class="txtHead" style="margin-bottom:0px">lang=en</label></label>
                                </div>
                            </div>
                            <!-- <label class="txtHead">English
                                :&nbsp;</label><label>English : https://test-front.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&header=off&amp;</label><label
                                class="txtHead">lottotype=thailotto&lang=EN</label> -->
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">Thai
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&amp;lotto=laoslotto&<label class="txtHead" style="margin-bottom:0px">lang=th</label></label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <label class="txtHead">Chinese Mandarin
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=CNM</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Chinese Cantonese
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=CNC</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Korean
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=KOR</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">Vietnam
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                class="txtHead">lang=VT</label>
                        </div> -->
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Signout re-direct optional link:</b></lable>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.681rem;word-break:break-all;margin-left:0">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">thailotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=thailotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                            <!-- <label class="txtHead">Baccarat
                                :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;url=</label><label
                                class="txtHead">input your link here(full link with https://)</label> -->
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=laoslotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylottovip&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">baaclotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=baaclotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">gsblotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=gsblotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">pingponglotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=pingponglotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=laoslotto_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">yeekeelotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=yeekeelotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=malaylotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylotto_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylottovip_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylottospecial_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=malaylotto_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylottospecial&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockkorea
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockkorea&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockchina
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockchina&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockdowjones
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockdowjones&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocktaiwan
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stocktaiwan&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockengland
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockengland&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockindia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockindia&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockhangseng
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockhangseng&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockegypt
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockegypt&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocknikkei
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stocknikkei&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocksingapore
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stocksingapore&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockthai
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockthai&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockgerman
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockgerman&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockrussia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockrussia&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabFive">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5 Call Back Service">4.5 <span style="padding-left: 3px;" id="Seamless_Call_Back_Service">Call Back Service</span>
                        </b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="col-12">
                    <label set-lan="html:*Please keep">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        *โปรดเก็บข้อมูล ”Call Back Service” <b style="color: red;">ทั้งหมดไว้เป็นความลับ</b>.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>
                </div>
                <lable><b style="color: #19A17A !important;"></b></lable>
                <div class="pb-5"></div>
                <div class="col-12" id="tabSix" style="margin-left: 10px;">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5.1 GetUserBalance">4.5.1
                            <span style="padding-left: 3px;" id="Seamless_GetUserDetail">GetUserDetail</span></b>
                    </lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:When a player">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            เมื่อผู้เล่นเข้าสู่หน้าแรกหรือหน้าอื่นๆ ของระบบ Askmelotto ระบบจะส่งคำขอเพื่อรับยอดเงินคงเหลือของผู้เล่นจริง</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"GetUserDetail"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-five-one_req').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <!-- <pre class="myInput"> -->
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 15%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-five-one_req').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"GetUserDetail"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testa0aagentthbmb01"</span>,
        <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"comptestseamless"</span>
    }
}<!-- <button style="float:right" id="button">Copy</button> --></code></pre>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Response Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">username</td>
                                        <td class="bRight">String</td>
                                        <td>Username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">phone</td>
                                        <td class="bRight">Number</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">email</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">line</td>
                                        <td class="bRight">String</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rate</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response rate</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Code">Response Code</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Type" class="bRight txtCenter">Description
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td class="bRight">Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td class="bRight">Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td class="bRight">Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Response Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-five-one_res').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 0.2%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-five-one_res').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-string">0</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"username"</span>: <span class="hljs-string">"testa0aagentthbmb01"</span>,
        <span class="hljs-attr">"phone"</span>: <span class="hljs-string">"0xxxxxxxx"</span>,
        <span class="hljs-attr">"email"</span>: <span class="hljs-string">"xxxx@gmail.com"</span>,
        <span class="hljs-attr">"line"</span>: <span class="hljs-string">"lineX"</span>,
        <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"THB"</span>,
        <span class="hljs-attr">"rate"</span>: {   
            <span class="hljs-attr">"baaclotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">10</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"gsblotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"laoslotto_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1000</span>
                }
            },
            <span class="hljs-attr">"laoslotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">12</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">225</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">500</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">5000</span>
                }
            },
            <span class="hljs-attr">"hanoylotto_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1000</span>
                }
            },
            <span class="hljs-attr">"hanoylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">500</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                }
            },
            <span class="hljs-attr">"hanoylottospecial"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">200000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">20000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"hanoylottospecial_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1000</span>
                }
            },
            <span class="hljs-attr">"hanoylottovip"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                },  
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">500</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                }
            },
            <span class="hljs-attr">"hanoylottovip_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1000</span>
                }
            },
            <span class="hljs-attr">"malaylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">500</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                }
            },
            <span class="hljs-attr">"malaylotto_set"</span>: {
                <span class="hljs-attr">"back2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"front2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">15</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">40</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">350</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">600</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1000</span>
                }
            },
            <span class="hljs-attr">"pingponglotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">12</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">130</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">225</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">800</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">5000</span>
                },
                <span class="hljs-attr">"top5"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">500</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25000</span>
                },
                <span class="hljs-attr">"top6"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">500</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">50000</span>
                }
            },
            <span class="hljs-attr">"stock"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"thailotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">4</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"bottom3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">225</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">12</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">225</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">3</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">500</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">5000</span>
                },
                <span class="hljs-attr">"top5"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">500</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">25000</span>
                },
                <span class="hljs-attr">"top6"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">500</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">50000</span>
                }
            },
            <span class="hljs-attr">"yeekeelotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">1</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">150</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">90</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">900</span>
                }
            },
            <span class="hljs-attr">"zodiaclotto"</span>: {
                <span class="hljs-attr">"ball1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                },  
                <span class="hljs-attr">"ball2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                },  
                <span class="hljs-attr">"ball3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">10000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                },    
                <span class="hljs-attr">"ball4"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">5000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                },
                <span class="hljs-attr">"color"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-string">0</span>,
                    <span class="hljs-attr">"max"</span>: <span class="hljs-string">1000</span>,
                    <span class="hljs-attr">"min"</span>: <span class="hljs-string">1</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-string">0</span>
                }
            }
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabSixs" style="margin-left: 10px;">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5.1 GetUserBalance">4.5.2
                            <span style="padding-left: 3px;" id="Seamless_GetUserBalance">GetUserBalance</span></b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:When a player">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            เมื่อผู้เล่นเข้าสู่หน้าแรกหรือหน้าอื่นๆ ของระบบ Askmelotto ระบบจะส่งคำขอเพื่อรับยอดเงินคงเหลือของผู้เล่นจริง</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Fixed value"GetUserBalance"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from Askmelotto system.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-five-two_req').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 12%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-five-two_req').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"GetUserBalance"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"21f7d4c971036eea30d1db483d01f131faada79fa94d52560c9f2c2b56a6f8877b66ae2c624f89442c938db064d8179f"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"testa0alottoviptest2@comptestseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testa0alottoviptest2"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">balance</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Total balance.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #19A17A !important;">Example Service
                                            Respond Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>

                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"balance"</span>: <span class="hljs-number">880</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabSeven">
                    <lable><b style="color: #19A17A !important;" set-lan="text:4.5.2 UserPlaceBet">4.5.3
                            <span style="padding-left: 3px;" id="Seamless_UserPlaceBet">UserPlaceBet</span></b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:When a player places">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            เมื่อผู้เล่นวางเดิมพัน ระบบ Askmelotto จะส่งคำขอ UserPlaceBet ไปยังระบบของคู่ธุรกิจ คำขอจะหมดเวลาหลังจาก 10 วินาทีและจะส่ง PlaceBetCancel</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable352">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Fixed value"UserPlaceBet"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from Askmelotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Type of lotto.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">government</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">If government = true is lottoset, If government = false is lotto.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Draw agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Bet Detail.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of api(Askmelotto).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Identity of bet data.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet number record key.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Status of bet data(Pending, True, False, Cancel).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td class="bRight">Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Success (Payment สำเร็จ), Pending (รอผล), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-five-three_req').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 2.5%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-five-three_req').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="352A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlaceBet"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"281199a5837d34ce72dcc86c0e14bc26b9362d63b0f49173a3b977d0dfe2adfd"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"testa0aagentthbmb01@comptestseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testa0aagentthbmb01"</span>,
        <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"39781"</span>,
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"yeekeelotto"</span>,
        <span class="hljs-attr">"government"</span>: <span class="hljs-string">false</span>,
        <span class="hljs-attr">"drawId"</span>: <span class="hljs-number">36160</span>,
        <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-number">-49.00000000000001</span>,
        <span class="hljs-attr">"drawName"</span>: <span class="hljs-number">"Yeekee Lotto"</span>,
        <span class="hljs-attr">"drawExpire"</span>: <span class="hljs-number">"2023-10-03 15:14:00"</span>,
        <span class="hljs-attr">"txtList"</span>: [
            {
                <span class="hljs-attr">"agentPt"</span>: <span class="hljs-number">"0"</span>,
                <span class="hljs-attr">"apiPt"</span>: <span class="hljs-number">"100"</span>,
                <span class="hljs-attr">"betKey"</span>: <span class="hljs-number">"Mzk3ODEtMQ=="</span>,
                <span class="hljs-attr">"betId"</span>: <span class="hljs-number">"1"</span>,
                <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"top2"</span>,
                <span class="hljs-attr">"betNumber"</span>: <span class="hljs-number">"12"</span>,
                <span class="hljs-attr">"betStatus"</span>: <span class="hljs-number">"pending"</span>,
                <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">5</span>,
                <span class="hljs-attr">"betTotal"</span>: <span class="hljs-number">4.95</span>,
                <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-number">0.05</span>,
                <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">90</span>,
                <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-number">" "</span>,
                <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
            },
            {
                <span class="hljs-attr">"agentPt"</span>: <span class="hljs-number">"0"</span>,
                <span class="hljs-attr">"apiPt"</span>: <span class="hljs-number">"100"</span>,
                <span class="hljs-attr">"betKey"</span>: <span class="hljs-number">"Mzk3ODEtMQ=="</span>,
                <span class="hljs-attr">"betId"</span>: <span class="hljs-number">"2"</span>,
                <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"bottom2"</span>,
                <span class="hljs-attr">"betNumber"</span>: <span class="hljs-number">"12"</span>,
                <span class="hljs-attr">"betStatus"</span>: <span class="hljs-number">"pending"</span>,
                <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">5</span>,
                <span class="hljs-attr">"betTotal"</span>: <span class="hljs-number">5</span>,
                <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">90</span>,
                <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-number">" "</span>,
                <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
            }
        ],
        <span class="hljs-attr">"status"</span>: <span class="hljs-number">"pending"</span>,
        <span class="hljs-attr">"createDate"</span>: <span class="hljs-number">"2023-10-03 15:12:25"</span>,
        <span class="hljs-attr">"ip"</span>: <span class="hljs-number">"8.213.194.49"</span>,
        <span class="hljs-attr">"currency"</span>: <span class="hljs-number">"thb"</span>,
        <span class="hljs-attr">"DrawOpen"</span>: <span class="hljs-number">"2023-10-03 05:00:00"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911001</td>
                                        <td>Insufficient balance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911002</td>
                                        <td>Account is Suspend.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911004</td>
                                        <td>Session expired.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911005</td>
                                        <td>Bet failed. Please try again.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911006</td>
                                        <td>The game is under maintenance.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911007</td>
                                        <td>You are not allowed to play this game.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911010</td>
                                        <td>Account is locked.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Service Respond Code">Example Service Respond Code</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="352B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabEight">
                    <lable><b style="color: #19A17A !important;">4.5.4 <span style="padding-left: 3px;" id="Seamless_UserPlaceBetCancel">UserPlaceBetCancel</span></b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:when previous PlaceBet">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            1. ใช้ยกเลิกเมื่อ UserPlaceBet เกิดข้อผิดพลาด หรือ Time Out <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. ใช้ยกเลิกกรณีที่ผู้เล่นต้องการยกเลิก <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1 กรณียกเลิกทั้งตั๋ว Status ของตั๋วจะเป็น "Cancel" ซึ่งรายละเอียดในการเดิมพันแต่ละรายการ ทุกรายการของตั๋วนั้นจะมี "betStatus" เป็น "Cancel"<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2 กรณียกเลิกทีละเลข
                            Status ของตั๋วจะเป็นสถานะของตั๋วนั้น ซึ่งรายละเอียดในการเดิมพันของรายการที่ต้องการยกเลิกจะมี "betStatus" เป็น "Cancel"

                        </label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable352">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Fixed value"UserPlaceBetCancel"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from Askmelotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Type of lotto.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">government</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">If government = true is lottoset, If government = false is lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Draw agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Bet Detail.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of api(Askmelotto).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet number record key.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Identity of bet data.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Status of bet data(Cancel).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td class="bRight">Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Success Pending (รอผล), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-five-four_req').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 4%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-five-four_req').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="353A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlaceBetCancel"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"4e4fbb4539fb0b7bd1d6b01a7f218cc0c311466f40bade45189b24a3efa3e6ba5ef2d47ee85eb2cffa48379b4fa017c6"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"testa0alottoviptestcarl@comptestseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testa0alottoviptestcarl"</span>,
        <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">53000</span>,
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"thailotto"</span>,
        <span class="hljs-attr">"government"</span>: <span class="hljs-string">false</span>,
        <span class="hljs-attr">"drawId"</span>: <span class="hljs-number">44170</span>,
        <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-number">-10000</span>
        <span class="hljs-attr">"txtList"</span>: [
            {
                <span class="hljs-attr">"agentPt"</span>: <span class="hljs-number">"95"</span>,
                <span class="hljs-attr">"apiPt"</span>: <span class="hljs-string">"5"</span>,
                <span class="hljs-attr">"betKey"</span>: <span class="hljs-number">"NTMwMDAtMQ=="</span>,
                <span class="hljs-attr">"betId"</span>: <span class="hljs-string">"1"</span>,
                <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"bottom2"</span>,
                <span class="hljs-attr">"betNumber"</span>: <span class="hljs-number">"10"</span>,
                <span class="hljs-attr">"betStatus"</span>: <span class="hljs-number">"pending"</span>,
                <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">10000</span>,
                <span class="hljs-attr">"betTotal"</span>: <span class="hljs-string">10000</span>,
                <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">90</span>,
                <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-number">""</span>,
                <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
            }
        ],
        <span class="hljs-attr">"status"</span>: <span class="hljs-string">"cancel"</span>,
        <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2023-11-11 15:16:44"</span>,
        <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"thb"</span>,
        <span class="hljs-attr">"DrawOpen"</span>: <span class="hljs-string">"2023-11-09 01:00:00"</span>,
        <span class="hljs-attr">"drawExpire"</span>: <span class="hljs-string">"2023-11-19 15:25:00"</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51101</td>
                                        <td>Duplicate Transaction (no return).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51102</td>
                                        <td>Transaction not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Service Respond Code">Example Service Respond Code</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="353B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabNine">
                    <lable><b style="color: #19A17A !important;">4.5.5 <span style="padding-left: 3px;" id="Seamless_UserPlacePayout">UserPlacePayout</span></b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:This interface will">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ถ้ามีการออกผลรางวัล ระบบ Askmelotto จะส่งคำขอ UserPlacePayout เมื่อมีการออกผลรางวัล</label>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable352">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Fixed value"UserPlacePayout"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object respone.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from Askmelotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Type of lotto.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">government</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">If government = true is lottoset, If government = false is lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Draw agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalPayOutAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">totalPayOutAmt equals 0 when a player loses.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Bet Detail.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of api(Askmelotto).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet id of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet number record key.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Status of bet data(Pending, True, False, Cancel).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Rate payout when member win.(*recheck and update for lottoset.)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">payOutAmt</td>
                                        <td class="bRight">Payout amount of this reccord.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td class="bRight">Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Success (Payment สำเร็จ), Pending (รอผล), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">result</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">resultlink</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Link for show game reslut of this drawId.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i> (กรณีไม่ถูกรางวัล)
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-five-five_lose_req').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 2%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-five-five_lose_req').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="354A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlacePayout"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"281199a5837d34ce72dcc86c0e14bc26b9362d63b0f49173a3b977d0dfe2adfd"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"testa0aagentthbmb01@comptestseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testa0aagentthbmb01"</span>,
        <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"751811"</span>,
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"stockgerman"</span>,
        <span class="hljs-attr">"government"</span>: <span class="hljs-string">false</span>,
        <span class="hljs-attr">"drawId"</span>: <span class="hljs-string">47600</span>,
        <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-string"> -9.9</span>,
        <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-string"> 900</span>,
        <span class="hljs-attr">"txtList"</span>: [
            {
                <span class="hljs-attr">"agentPt"</span>: <span class="hljs-string">"95"</span>,
                <span class="hljs-attr">"apiPt"</span>: <span class="hljs-string">"5"</span>,
                <span class="hljs-attr">"betKey"</span>: <span class="hljs-string">"NzUxODExLTI="</span>,
                <span class="hljs-attr">"betId"</span>: <span class="hljs-string">"1"</span>,
                <span class="hljs-attr">"betType"</span>: <span class="hljs-string">"bottom2"</span>,
                <span class="hljs-attr">"betNumber"</span>: <span class="hljs-string">"87"</span>,
                <span class="hljs-attr">"betStatus"</span>: <span class="hljs-string">"false"</span>,
                <span class="hljs-attr">"betAmt"</span>: <span class="hljs-string">9.9</span>,
                <span class="hljs-attr">"betTotal"</span>: <span class="hljs-string">10</span>,
                <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-string">1</span>,
                <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-string">90</span>,
                <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-string">0</span>,
                <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-string">0</span>,
                <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-string">""</span>,
                <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-string">0</span>
            }
        ],
        <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Success"</span>,
        <span class="hljs-attr">"result"</span>: {
            <span class="hljs-attr">"bottom1"</span>: [
                <span class="hljs-string">"7"</span>,
                <span class="hljs-string">"8"</span>
            ],
            <span class="hljs-attr">"bottom2"</span>: [
                <span class="hljs-string">"78"</span>
            ],
            <span class="hljs-attr">"row2"</span>: [
                <span class="hljs-string">"77"</span>,
                <span class="hljs-string">"78"</span>,
                <span class="hljs-string">"87"</span>
            ],
            <span class="hljs-attr">"row3"</span>: [
                <span class="hljs-string">"456"</span>,
                <span class="hljs-string">"465"</span>,
                <span class="hljs-string">"546"</span>,
                <span class="hljs-string">"564"</span>,
                <span class="hljs-string">"645"</span>,
                <span class="hljs-string">"654"</span>
            ],
            <span class="hljs-attr">"top1"</span>: [
                <span class="hljs-string">"4"</span>,
                <span class="hljs-string">"5"</span>,
                <span class="hljs-string">"6"</span>
            ],
            <span class="hljs-attr">"top2"</span>: [
                <span class="hljs-string">"56"</span>
            ],
            <span class="hljs-attr">"top3"</span>: [
                <span class="hljs-string">"456"</span>
            ]
        },
        <span class="hljs-attr">"resultlink"</span>: <span class="hljs-string">""</span>,
        <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2023-10-02 20:41:54"</span>,
        <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"thb"</span>

    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i> (กรณีถูกรางวัล)
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-five-five_win_req').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 2%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-five-five_win_req').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="354A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlacePayout"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"281199a5837d34ce72dcc86c0e14bc26b9362d63b0f49173a3b977d0dfe2adfd"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"testa0aagentthbmb01@comptestseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testa0aagentthbmb01"</span>,
        <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">"751812"</span>,
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"stockgerman"</span>,
        <span class="hljs-attr">"government"</span>: <span class="hljs-string">false</span>,
        <span class="hljs-attr">"drawId"</span>: <span class="hljs-string">47600</span>,
        <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-string"> -9.9</span>,
        <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-string"> 900</span>,
        <span class="hljs-attr">"txtList"</span>: [
            {
                <span class="hljs-attr">"agentPt"</span>: <span class="hljs-string">"95"</span>,
                <span class="hljs-attr">"apiPt"</span>: <span class="hljs-string">"5"</span>,
                <span class="hljs-attr">"betKey"</span>: <span class="hljs-string">"NzUxODExLTE="</span>,
                <span class="hljs-attr">"betId"</span>: <span class="hljs-string">"1"</span>,
                <span class="hljs-attr">"betType"</span>: <span class="hljs-string">"bottom2"</span>,
                <span class="hljs-attr">"betNumber"</span>: <span class="hljs-string">"78"</span>,
                <span class="hljs-attr">"betStatus"</span>: <span class="hljs-string">"true"</span>,
                <span class="hljs-attr">"betAmt"</span>: <span class="hljs-string">9.9</span>,
                <span class="hljs-attr">"betTotal"</span>: <span class="hljs-string">10</span>,
                <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-string">1</span>,
                <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-string">90</span>,
                <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-string">0</span>,
                <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-string">0</span>,
                <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-string">"bottom2"</span>,
                <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-string">900</span>
            }
        ],
        <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Success"</span>,
        <span class="hljs-attr">"result"</span>: {
            <span class="hljs-attr">"bottom1"</span>: [
                <span class="hljs-string">"7"</span>,
                <span class="hljs-string">"8"</span>
            ],
            <span class="hljs-attr">"bottom2"</span>: [
                <span class="hljs-string">"78"</span>
            ],
            <span class="hljs-attr">"row2"</span>: [
                <span class="hljs-string">"77"</span>,
                <span class="hljs-string">"78"</span>,
                <span class="hljs-string">"87"</span>
            ],
            <span class="hljs-attr">"row3"</span>: [
                <span class="hljs-string">"456"</span>,
                <span class="hljs-string">"465"</span>,
                <span class="hljs-string">"546"</span>,
                <span class="hljs-string">"564"</span>,
                <span class="hljs-string">"645"</span>,
                <span class="hljs-string">"654"</span>
            ],
            <span class="hljs-attr">"top1"</span>: [
                <span class="hljs-string">"4"</span>,
                <span class="hljs-string">"5"</span>,
                <span class="hljs-string">"6"</span>
            ],
            <span class="hljs-attr">"top2"</span>: [
                <span class="hljs-string">"56"</span>
            ],
            <span class="hljs-attr">"top3"</span>: [
                <span class="hljs-string">"456"</span>
            ]
        },
        <span class="hljs-attr">"resultlink"</span>: <span class="hljs-string">""</span>,
        <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2023-10-02 20:41:54"</span>,
        <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"thb"</span>

    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51101</td>
                                        <td>Duplicate Transaction (no return).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Service Respond Code">Example Service Respond Code</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>

                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="354B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tab15">
                    <lable><b style="color: #19A17A !important;">4.5.6 <span style="padding-left: 3px;" id="Seamless_UserPlaceReToRunning">UserPlaceReToRunning</span></b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <!-- <div class="form-group col-12">
                        <label
                            set-lan="html:356">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            When a player places a bet, the Pretty Gaming system sends a request UserPayTips to the
                            partner's system. The request will be timed out after 4 seconds and PlaceBetCancel will
                            be sent.</label>
                    </div> -->
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable356A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">service</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Fixed value"UserPlaceReToRunning"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td class="bRight">Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player Id from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerApiUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from Askmelotto system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">playerUsername</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Player username from partner system.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">ticketId</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet group record from one submit.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">type</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Type of lotto.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">government</td>
                                        <td class="bRight">Boolean</td>
                                        <td class="bRight">If government = true is lottoset, If government = false is lotto.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">drawId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Draw agent id.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">totalBetAmt</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">txtList</td>
                                        <td class="bRight">arrayobject</td>
                                        <td class="bRight">Bet Detail.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">apiPt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Position tracking (%) of api(Askmelotto).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betKey</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number record key.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betId</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet id of bet position.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betType</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">User bet type = top6,top5,top4,top3,top2,top1,row4,row3,row2,bottom3,bottom2,bottom1</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betNumber</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet number.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betStatus</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Status of bet data(Pending, True, False, Cancel).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betAmt</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Bet amount =betTotal-betDiscount</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betTotal</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">User bet total amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">betDiscount</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Discount bet amount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payOutRate</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Rate payout when member win.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevel</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">If 0=rate payout normal, If =1, 2, 3, 4 rate discount.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">rateLevelAmount</td>
                                        <td class="bRight">float</td>
                                        <td class="bRight">Amount of rate follow by rateLevel.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">status</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Success (Payment สำเร็จ), Pending (รอผล), Cancel(ยกเลิก).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">createDate</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">The date the bet was placed. format(YYYY-MM-DD HH:mm:ss)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-five-six_req').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 4%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-five-six_req').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="356A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"service"</span>: <span class="hljs-string">"UserPlaceReToRunning"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"playerApiId"</span>: <span class="hljs-string">"281199a5837d34ce72dcc86c0e14bc26b9362d63b0f49173a3b977d0dfe2adfd"</span>,
        <span class="hljs-attr">"playerApiUsername"</span>: <span class="hljs-string">"testa0aagentthbmb01@comptestseamless"</span>,
        <span class="hljs-attr">"playerUsername"</span>: <span class="hljs-string">"testa0aagentthbmb01"</span>,
        <span class="hljs-attr">"ticketId"</span>: <span class="hljs-string">40864</span>,
        <span class="hljs-attr">"type"</span>: <span class="hljs-string">"pingponglotto6"</span>,
        <span class="hljs-attr">"government"</span>: <span class="hljs-string">false</span>,
        <span class="hljs-attr">"drawId"</span>: <span class="hljs-number">37187</span>,
        <span class="hljs-attr">"totalBetAmt"</span>: <span class="hljs-number">1243</span>,
        <span class="hljs-attr">"txtList"</span>: [
            {
                <span class="hljs-attr">"agentPt"</span>: <span class="hljs-string">"95"</span>,
                <span class="hljs-attr">"apiPt"</span>: <span class="hljs-number">"5"</span>,
                <span class="hljs-attr">"betKey"</span>: <span class="hljs-string">"NDA4NjQtMQ=="</span>,
                <span class="hljs-attr">"betId"</span>: <span class="hljs-number">"1"</span>,
                <span class="hljs-attr">"betType"</span>: <span class="hljs-number">"top6"</span>,
                <span class="hljs-attr">"betNumber"</span>: <span class="hljs-string">"789000"</span>,
                <span class="hljs-attr">"betStatus"</span>: <span class="hljs-number">"pending"</span>,
                <span class="hljs-attr">"betAmt"</span>: <span class="hljs-number">733</span>,
                <span class="hljs-attr">"betTotal"</span>: <span class="hljs-number">733</span>,
                <span class="hljs-attr">"betDiscount"</span>: <span class="hljs-string">0</span>,
                <span class="hljs-attr">"payOutRate"</span>: <span class="hljs-number">50000</span>,
                <span class="hljs-attr">"rateLevel"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"rateLevelAmount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"betResultKey"</span>: <span class="hljs-number">""</span>,
                <span class="hljs-attr">"payOutAmt"</span>: <span class="hljs-number">0</span>
            }
        ],
        <span class="hljs-attr">"status"</span>: <span class="hljs-string">"pending"</span>,
        <span class="hljs-attr">"createDate"</span>: <span class="hljs-string">"2023-10-07 17:18:42"</span>,
        <span class="hljs-attr">"DrawOpen"</span>: <span class="hljs-string">"2023-10-07 17:00:00"</span>,
        <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"thb"</span>,
        <span class="hljs-attr">"drawExpire"</span>: <span class="hljs-string">"2023-10-07 17:30:00"</span>,
        <span class="hljs-attr">"totalPayOutAmt"</span>: <span class="hljs-string">0</span>
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable356B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable356C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">51101</td>
                                        <td>Duplicate Transaction (no return).</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911008</td>
                                        <td>Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">911009</td>
                                        <td>Bad parameters.</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Service Respond Code">Example Service Respond Code</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>

                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="356B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>



                <div class="pb-5"></div>

                <div class="col-12" id="tab47">
                    <lable><b style="color: #19A17A !important;">4.7 <span style="padding-left: 3px;" id="Seamless_ListPlaceout">ListPlaceout</span></b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://dev-api.amblotto.net/apiRoute/api/ListPlaceout
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                        <!--<button onclick="copyContent(document.getElementById('transfer_tabfive-four_req').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button>-->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 20%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-six-four_seven_req').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"buildexcompany"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"504947f655f822e2f8f414bbc1a34ba763c7570ef638135f30b5696c899f806901e163f59f3a86d0c8cd"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">dataenable</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response dataenable.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">datahotplaceout</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response datahotplaceout.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">datapayout</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response datapayout.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">dataplaceout</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response dataplaceout.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">baaclotto(lotto type)</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response lottotype.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">bottom1(subtype)</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response subtype.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">enable</td>
                                        <td class="bRight">String</td>
                                        <td>Enable true and false.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">amount</td>
                                        <td class="bRight">float</td>
                                        <td>Amount of hot placeout.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">discount</td>
                                        <td class="bRight">float</td>
                                        <td>Discount of payout</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">payout</td>
                                        <td class="bRight">Number</td>
                                        <td>Payout rate normal.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">levellist</td>
                                        <td class="bRight">Number</td>
                                        <td>levellist of payout</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Error Request body is not an object</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Service Respond Code">Example Service Respond Code</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>

                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"dataenable"</span>: {
        <span class="hljs-attr">"baaclotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">"true"</span>
        },
        <span class="hljs-attr">"gsblotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">"true"</span>
        },
        <span class="hljs-attr">"hanoylotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">"true"</span>
        },
        <span class="hljs-attr">"hanoylottospecial"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">"true"</span>
        },
        <span class="hljs-attr">"hanoylottovip"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">"false"</span>
        },
        <span class="hljs-attr">"laoslotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">"true"</span>
        },
        <span class="hljs-attr">"malaylotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">"true"</span>
        },
        <span class="hljs-attr">"pingponglotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">"true"</span>
        },
        <span class="hljs-attr">"stock"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">"true"</span>
        },
        <span class="hljs-attr">"thailotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">"true"</span>
        },
        <span class="hljs-attr">"yeekeelotto"</span>: {
            <span class="hljs-attr">"enable"</span>: <span class="hljs-number">"true"</span>
        }
    },
    <span class="hljs-attr">"datahotplaceout"</span>: {
        <span class="hljs-attr">"baaclotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            }
        },
        <span class="hljs-attr">"gsblotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">10</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">10</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">10</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">10</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">100</span>
            }
        },
        <span class="hljs-attr">"hanoylotto"</span>: {
            <span class="hljs-attr">"hanoylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">2</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">100</span>
                }
            }
        },
        <span class="hljs-attr">"hanoylottospecial"</span>: {
            <span class="hljs-attr">"hanoylottospecial"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                }
            },
            <span class="hljs-attr">"hanoylottospecial"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-number">null</span>
            }
        },
        <span class="hljs-attr">"hanoylottovip"</span>: {
            <span class="hljs-attr">"hanoylottovip"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">10</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">10</span>
                }
            },
            <span class="hljs-attr">"hanoylottovip_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-number">null</span>
            }
        },
        <span class="hljs-attr">"hanoylottovip"</span>: {
            <span class="hljs-attr">"hanoylottovip"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row4"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top4"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">800</span>
                }
            },
            <span class="hljs-attr">"laoslotto_set"</span>: <span class="hljs-number">null</span>
        },
        <span class="hljs-attr">"malaylotto"</span>: {
            <span class="hljs-attr">"malaylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">2</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">2</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">2</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">2</span>
                }
            },
            <span class="hljs-attr">"malaylotto_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-number">null</span>
            }
        },
        <span class="hljs-attr">"pingponglotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">500</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top5"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top6"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5000</span>
            }
        },
        <span class="hljs-attr">"stock"</span>: {
            <span class="hljs-attr">"malaylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">50</span>
                }
            },
            <span class="hljs-attr">"malaylotto_set"</span>: {
                <span class="hljs-attr">"lottoset"</span>: <span class="hljs-number">null</span>
            }
        },
        <span class="hljs-attr">"thailotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"bottom3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"row4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">500</span>
            },
            <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top5"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
            },
            <span class="hljs-attr">"top6"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">500</span>
            }
        },
        <span class="hljs-attr">"yeekeelotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">0</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"amount"</span>: <span class="hljs-number">50</span>
                }
            }
        },
    },
    <span class="hljs-attr">"datapayout"</span>: {
        <span class="hljs-attr">"baaclotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
                },
                <span class="hljs-attr">"bottom2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
                },
                <span class="hljs-attr">"row3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">166.6</span>
                },
                <span class="hljs-attr">"top1"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
                },
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
                }
            }
        },
        <span class="hljs-attr">"gsblotto"</span>: { 
             <span class="hljs-attr">"bottom1"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
            },
             <span class="hljs-attr">"bottom2"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
             <span class="hljs-attr">"row3"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">166.6</span>
            },
             <span class="hljs-attr">"top1"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
            },
             <span class="hljs-attr">"top2"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
             <span class="hljs-attr">"top3"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: 1000</span>
            }
        },
         <span class="hljs-attr">"hanoylotto"</span>: {
         <span class="hljs-attr">"bottom1"</span>: {
         <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
         <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2
            },
             <span class="hljs-attr">"bottom2"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
             <span class="hljs-attr">"row3"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">166.6</span>
            },
             <span class="hljs-attr">"top1"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
            },
             <span class="hljs-attr">"top2"</span>: {
             <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
             <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
            }
        },
        <span class="hljs-attr">"hanoylotto_set"</span>: {
        <span class="hljs-attr">"back2"</span>: {
        <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
        <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"front2"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 166.6</span>
            },
            <span class="hljs-attr">"row4"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">416.6</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
            },
            <span class="hljs-attr">"top4"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 10000</span>
            }
        },
        <span class="hljs-attr">"hanoylottospecial"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">166.6</span>
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
            }
        },
        <span class="hljs-attr">"hanoylottospecial_set"</span>: {
        <span class="hljs-attr">"back2"</span>: {
        <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"front2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 166.6</span>
            },
            <span class="hljs-attr">"row4"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">416.6</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
            },
           <span class="hljs-attr"> "top4"</span>: {
           <span class="hljs-attr"> "discount"<span class="hljs-number">0</span>,
           <span class="hljs-attr"> "payout"</span>: 10000</span>
            }
        },
        <span class="hljs-attr">"hanoylottovip"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 166.6</span>
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 3.2</span>
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 900</span>
            }
        },
        <span class="hljs-attr">"hanoylottovip_set"</span>: {
        <span class="hljs-attr">"back2"</span>: {
        <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 100</span>
            },
            <span class="hljs-attr">"front2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 100</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 166.6</span>
            },
            <span class="hljs-attr">"row4"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 416.6</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
            },
            <span class="hljs-attr">"top4"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">9000</span>
            }
        },
        <span class="hljs-attr">"laoslotto_thai"</span>: {
        <span class="hljs-attr">"back2"</span>: {
        <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 100</span>
            },
            <span class="hljs-attr">"front2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 100</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 166.6</span>
            },
            <span class="hljs-attr">"row4"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">416.6</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
            },
            <span class="hljs-attr">"top4"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">10000</span>
            }
        },
        <span class="hljs-attr">"malaylotto"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">166.6</span>
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
            }
        },
        <span class="hljs-attr">"malaylotto_set"</span>: {
        <span class="hljs-attr">"back2"</span>: {
        <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"front2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 100</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">166.6</span>
            },
            <span class="hljs-attr">"row4"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 416.6</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
            },
            <span class="hljs-attr">"top4"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 10000</span>
            }
        },
        <span class="hljs-attr">"pingponglotto"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"row2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">16.6</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">166.6</span>
            },
            <span class="hljs-attr">"row4"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">416.6</span>
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 3.2</span>
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
            },
            <span class="hljs-attr">"top4"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">5000</span>
            },
            <span class="hljs-attr">"top5"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">25000</span>
            },
            <span class="hljs-attr">"top6"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 50000</span>
            }
        },
        <span class="hljs-attr">"stock"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>,</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">166.6</span>
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">100</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">1000</span>
            }
        },
        <span class="hljs-attr">"thailotto"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 4.2</span>
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
            <span class="hljs-attr">"bottom3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">225</span>
            },
            <span class="hljs-attr">"row2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">12</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
            },
            <span class="hljs-attr">"row4"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">225</span>
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
            },
            <span class="hljs-attr">"top4"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">5000</span>
            },
            <span class="hljs-attr">"top5"</span>: {
            <span class="hljs-attr">"discount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">25000</span>
            },
            <span class="hljs-attr">"top6"</span>: {
            <span class="hljs-attr">"discount"</span>: 10</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">50000</span>
            }
        },
        <span class="hljs-attr">"yeekeelotto"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"discount"</span>: <span class="hljs-number">10</span>,
        <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">10</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 90</span>
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">10</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">10</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 3.2</span>
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">10</span>,
            <span class="hljs-attr">"payout"</span>:<span class="hljs-number"> 90</span>
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">10</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">900</span>
            }
        }
    },
    <span class="hljs-attr">"dataplaceout"</span>: {
    <span class="hljs-attr">"baaclotto"</span>: {
    <span class="hljs-attr">"bottom1"</span>: {
    <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
    <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            }
        },
        <span class="hljs-attr">"gsblotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            }
        },
        <span class="hljs-attr">"hanoylotto"</span>: {
        <span class="hljs-attr">"hanoylotto"</span>: {
                <span class="hljs-attr">"bottom1"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">5000</span>,
                <span class="hljs-attr">"levellist"</span>: []
                }
            },
            <span class="hljs-attr">"hanoylotto_set"</span>: {
            <span class="hljs-attr">"lottoset"</span>: {
            <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1000</span>,
            <span class="hljs-attr">"levellist"</span>: []
                }
            }
        },
        <span class="hljs-attr">"hanoylottospecial"</span>: {
        <span class="hljs-attr">"hanoylottospecial"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                }
            },
            <span class="hljs-attr">"hanoylottospecial_set"</span>: {
            <span class="hljs-attr">"lottoset"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
                }
            }
        },
        <span class="hljs-attr">"hanoylottovip"</span>: {
        <span class="hljs-attr">"hanoylottovip"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"levellist"</span>: [
        <span class="hljs-attr">3.2</span>
                    ]
                },
                <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: [
                <span class="hljs-attr">80</span>
                    ]
                },
                <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: [
                <span class="hljs-attr">116.6</span>
                    ]
                },
                <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: [
                <span class="hljs-attr">2.2</span>
                    ]
                },
                <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: [
                <span class="hljs-attr">70</span>
                    ]
                },
                <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: [
                <span class="hljs-attr">800</span>
                    ]
                }
            },
            <span class="hljs-attr">"hanoylottovip_set"</span>: {
            <span class="hljs-attr">"lottoset"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
                }
            }
        },
        <span class="hljs-attr">"laoslotto"</span>: {
        <span class="hljs-attr">"laoslotto"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"row2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"row4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">200</span>,
                <span class="hljs-attr">"levellist"</span>: []
                }
            },
            <span class="hljs-attr">"laoslotto_set"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"row2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"row4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top4"</span>: {
                <span class="hljs-attr">"amount"</span>: <span class="hljs-number">200</span>,
                <span class="hljs-attr">"levellist"</span>: []
                }
            }
        },
        <span class="hljs-attr">"malaylotto"</span>: {
        <span class="hljs-attr">"malaylotto"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                },
                <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
                <span class="hljs-attr">"levellist"</span>: []
                }
            },
            <span class="hljs-attr">"malaylotto_set"</span>: {
            <span class="hljs-attr">"lottoset"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
                }
            }
        },
        <span class="hljs-attr">"pingponglotto"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row2"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row4"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top4"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top5"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top6"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            }
        },
        <span class="hljs-attr">"stock"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: []
            }
        },
        <span class="hljs-attr">"thailotto"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1000</span>,
        <span class="hljs-attr">"levellist"</span>: [
        <span class="hljs-attr">3.1</span>,
        <span class="hljs-attr">2</span>
                ]
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"amount"</span>:<span class="hljs-number"> 1000</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">70</span>,
            <span class="hljs-attr">50</span>
                ]
            },
            <span class="hljs-attr">"bottom3"</span>: {
            <span class="hljs-attr">"amount"</span>:<span class="hljs-number"> 1000</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">155</span>,
            <span class="hljs-attr">145</span>
                ]
            },
            <span class="hljs-attr">"row2"</span>: {
            <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1000</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">10</span>,
            <span class="hljs-attr">8</span>
                ]
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1000</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">80</span>,
            <span class="hljs-attr">70</span>
                ]
            },
            <span class="hljs-attr">"row4"</span>: {
            <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1000</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">155</span>,
            <span class="hljs-attr">145</span>
                ]
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"amount"</span>:<span class="hljs-number"> 1000</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">2.1,</span>
            <span class="hljs-attr">1</span>
                ]
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1000</span>,</span>
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">70</span>,</span>
            <span class="hljs-attr">50</span>
                ]
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1000</span>,</span>
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">550</span>,</span>
            <span class="hljs-attr">450</span>
                ]
            },
            <span class="hljs-attr">"top4"</span>: {
            <span class="hljs-attr">"amount"</span>: <span class="hljs-number">1000</span>,</span>
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">3500</span>,</span>
            <span class="hljs-attr">3000</span>
                ]
            },
            <span class="hljs-attr">"top5"</span>: {
            <span class="hljs-attr">"amount"</span>:<span class="hljs-number"> 1000</span>,</span>
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">10000</span>,
            <span class="hljs-attr">5000</span>
                ]
            },
            <span class="hljs-attr">"top6"</span>: {
            <span class="hljs-attr">"amount"</span>:<span class="hljs-number"> 1000</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">30000</span>,
            <span class="hljs-attr">25000</span>,
            <span class="hljs-attr">20000</span>,
            <span class="hljs-attr">15000</span>
                ]
            }
        },
        <span class="hljs-attr">"yeekeelotto"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
        <span class="hljs-attr">"levellist"</span>: [
        <span class="hljs-attr">3.2</span>
                ]
            },
            <span class="hljs-attr">"bottom2"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">80</span>,
            <span class="hljs-attr">70</span>
                ]
            },
            <span class="hljs-attr">"row3"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">140</span>,
            <span class="hljs-attr">130</span>
                ]
            },
            <span class="hljs-attr">"top1"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">2.2</span>
                ]
            },
            <span class="hljs-attr">"top2"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">80</span>,
            <span class="hljs-attr">70</span>
                ]
            },
            <span class="hljs-attr">"top3"</span>: {
            <span class="hljs-attr">"amount"<span class="hljs-number">0</span>,
            <span class="hljs-attr">"levellist"</span>: [
            <span class="hljs-attr">890</span>,
            <span class="hljs-attr">880</span>
                ]
            }
        }
    }
}
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab48">
                    <lable><b style="color: #19A17A !important;">4.8 <span style="padding-left: 3px;" id="Seamless_ListHotnumberandLimitnumber">ListHotnumberandLimitnumber</span></b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://dev-api.amblotto.net/apiRoute/api/ListHotnumberandLimitnumber
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">services</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"DeleteLimitnumber"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limitnumber</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response limitnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">lottotype(thailotto)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of lotto type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">subtype(top3)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of sub type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">number</td>
                                        <td class="bRight">String</td>
                                        <td>This number of add hotnumber.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-six-four_eight_req').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 8%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-six-four_eight_req').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"superadmincash"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8"</span>,
    <span class="hljs-attr">"services"</span>: <span class="hljs-string">"DeleteLimitnumber"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"limitnumber"</span>: {
            <span class="hljs-attr">"thailotto"</span>: {
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"number"</span>: <span class="hljs-string">"567"</span>
                }
            }
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Delete LimitNumber Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentUsername</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid Services</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Services Not Found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Error Request body is not an object</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid keydata</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lottotype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid subtype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid type number</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Service Respond Code">Example Service Respond Code</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>

                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"hotnumber":</span> {
        <span class="hljs-attr">"thailotto":</span> [
                {
                    <span class="hljs-attr">"agentid"</span>: <span class="hljs-number">19</span>,
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number"> 100</span>,
                    <span class="hljs-attr">"hotnumid"</span>: <span class="hljs-number">787</span>,
                    <span class="hljs-attr">"number"</span>: <span class="hljs-number">"000000"</span>,
                    <span class="hljs-attr">"subtype"</span>: <span class="hljs-number">"top6"</span>,
                    <span class="hljs-attr">"superadmin"</span>: <span class="hljs-number">18</span>
                }
            ]
        },
        <span class="hljs-attr">"limitnumber"</span>: {
        <span class="hljs-attr">"thailotto"</span>: [
                {
                    <span class="hljs-attr">"agentid"</span>: <span class="hljs-number">19</span>,
                    <span class="hljs-attr">"amount"</span>:<span class="hljs-number">0</span>,
                    <span class="hljs-attr">"hotnumid"</span>: <span class="hljs-number">206</span>,
                    <span class="hljs-attr">"number"</span>: <span class="hljs-number">"123456"</span>,
                    <span class="hljs-attr">"subtype"</span>: <span class="hljs-number">"top6"</span>,
                    <span class="hljs-attr">"superadmin"</span>: <span class="hljs-number">18</span>
                }
            ]
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab49">
                    <lable><b style="color: #19A17A !important;">4.9 <span style="padding-left: 3px;" id="Seamless_Detail">Detail</span></b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                                https://dev-api.amblotto.net/apiRoute/api/detail
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410A">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">agentUsername</td>
                                        <td class="bRight">String</td>
                                        <td>Agent account , Account length is restricted to 36 chars at most.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">agentApiKey</td>
                                        <td class="bRight">String</td>
                                        <td>System generate key ID after crate Agent.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">services</td>
                                        <td class="bRight">String</td>
                                        <td>Fixed value"DeleteLimitnumber"</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">limitnumber</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response limitnumber.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">lottotype(thailotto)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of lotto type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">subtype(top3)</td>
                                        <td class="bRight">Object</td>
                                        <td>Key of sub type.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">number</td>
                                        <td class="bRight">String</td>
                                        <td>This number of add hotnumber.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Request Body">Example Request Body</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>
                                        <!-- <button onclick="copyContent(document.getElementById('seamless_tabfour-six-four_nine_req').innerHTML)" class="btn btn-info waves-effect waves-light">Copy to clipboard</button> -->
                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre >
                                        <div class="copy-clipboard" style="position: absolute;width: 20px;top: 8%;right: 0;cursor:pointer">
                                            <svg style="position: absolute;width: 20px;left: -100%;" onclick="copyContent(document.getElementById('seamless_tabfour-six-four_nine_req').innerHTML)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Copy to Clipboard</title><path d="M18 6v-6h-18v18h6v6h18v-18h-6zm-12 10h-4v-14h14v4h-10v10zm16 6h-14v-14h14v14z"></path></svg>
                                        </div>
                                        <code id="410A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"agentUsername"</span>: <span class="hljs-string">"superadmincash"</span>,
    <span class="hljs-attr">"agentApiKey"</span>: <span class="hljs-string">"345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8"</span>,
    <span class="hljs-attr">"services"</span>: <span class="hljs-string">"DeleteLimitnumber"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"limitnumber"</span>: {
            <span class="hljs-attr">"thailotto"</span>: {
                <span class="hljs-attr">"top3"</span>: {
                    <span class="hljs-attr">"number"</span>: <span class="hljs-string">"567"</span>
                }
            }
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410B">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td>Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #19A17A !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable410C">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>Delete LimitNumber Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentUsername</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid agentApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Invalid Services</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Services Not Found</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>Error Request body is not an object</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid keydata</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid lottotype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid subtype</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1054</td>
                                        <td>invalid type number</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">2041</td>
                                        <td>Invalid ApiKey or UserAgent</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point">
                                        <b style="color: #19A17A  !important;" set-lan="text:Example Service Respond Code">Example Service Respond Code</b>
                                        <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i>

                                    </lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="410B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">"0"</span>,
    <span class="hljs-attr">"data"</span>: {
        <span class="hljs-attr">"rate"</span>: {
        <span class="hljs-attr">"baaclotto"</span>: {
        <span class="hljs-attr">"bottom1"</span>: {
        <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
        <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
        <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
        <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>,
                },
                <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>,
                },
                <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>,
                },
                <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>,
                },
                <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                }
            },
            <span class="hljs-attr">"gsblotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
            <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
            <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>,
                },
                <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>,
                },
                <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>,
                },
                <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>,
                },
                <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                }
            },
            <span class="hljs-attr">"hanoylotto"</span>: {
            <span class="hljs-attr">"bottom1"</span>: {
            <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
            <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
            <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"payout"</span>: <span class="hljs-number">4.2</span>,
                },
                <span class="hljs-attr">"bottom2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>,
                },
                <span class="hljs-attr">"row3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">150</span>,
                },
                <span class="hljs-attr">"top1"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">200000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">3.2</span>
                },
                <span class="hljs-attr">"top2"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">20000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>,
                },
                <span class="hljs-attr">"top3"</span>: {
                <span class="hljs-attr">"discount"</span>: <span class="hljs-number">0</span>,
                <span class="hljs-attr">"max"</span>: <span class="hljs-number">5000</span>,
                <span class="hljs-attr">"min"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"payout"</span>: <span class="hljs-number">90</span>
                }
            },
        }
    }
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-toolbar mb-12">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='lottotype.php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='transferwallet.php'">
                            <lan set-lan="html:Next">Next</lan>
                        </button>
                    </div>
                </div>
                <!-- </div> -->

            </div>
    </main>
</div>

<?php include 'layouts/footer.php'; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#manu4 , #manu4 > a").addClass("active");
        $("#manu4 > div").css("display", "block");

        $(this).on("click", ".koh-faq-question", function() {
            $(this).parent().find(".koh-faq-answer").slideToggle();
            $(this).find(".fa").toggleClass('active');
        });

        var URL = window.location.href;
        URL = URL.substring(URL.lastIndexOf('#') + 1);

        var page = 4;
        var link = url_link(page, URL);
        $("#" + link + " , #" + link + " > a").addClass("active");

        function copyFunction() {
            // const copyText = document.querySelector("#button > *").textContent;
            // const textArea = document.createElement('textarea');
            // textArea.textContent = copyText;
            // document.body.append(textArea);
            // textArea.select();
            // document.execCommand("copy");
            const copyText = document.querySelectorAll("#button ~ *")
            console.log(copyText);
        }

        document.getElementById('button').addEventListener('click', copyFunction);
    });
</script>

<!-- Json All Page Seamless -->
<div id="seamless_tabfour-four_req" class="d-non">
    {
    "agentUsername": "comptestseamless",
    "agentApiKey": "18791944ec1a15e649c390d1403c5d6bc888a0d63602116c8f8b1725975e7c2eb832b2509f00eaf11f35bfbf810637e0",
    "playerUsername": "member1"
    }
</div>
<div id="seamless_tabfour-four_res" class="d-non">
    {
    "code": 0,
    "data": {
    "playerApiId": "67239355aa8af3f4a6678e31cc3eb83a1612322fc2bf6b8f268b1660f1f37e",
    "playerApiUsername": "member1@comptestseamless",
    "playerUsername": "member1",
    "tkUuid": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg",
    "url": "https://dev-askmelotto.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&header=off",
    "urlFullPage": "https://dev-askmelotto.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&header=on"
    },
    "mgs": "Success"
    }
</div>
<div id="seamless_tabfour-five-one_req" class="d-non">
    {
    "service": "GetUserDetail",
    "data": {
    "playerUsername": "testa0aagentthbmb01",
    "agentUsername": "comptestseamless"
    }
    }
</div>
<div id="seamless_tabfour-five-one_res" class="d-non">
    {
    "code": 0,
    "data": {
    "username": "testa0aagentthbmb01",
    "phone": "0xxxxxxxx",
    "email": "xxxx@gmail.com",
    "line": "lineX",
    "currency": "THB",
    "rate": {
    "baaclotto": {
    "bottom1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 4
    },
    "bottom2": {
    "discount": 10,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "row3": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 150
    },
    "top1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 3
    },
    "top2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "top3": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 900
    }
    },
    "gsblotto": {
    "bottom1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 4
    },
    "bottom2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "row3": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 150
    },
    "top1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 3.2
    },
    "top2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "top3": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 900
    }
    },
    "laoslotto_set": {
    "back2": {
    "discount": 1,
    "max": 600,
    "min": 1,
    "payout": 15
    },
    "front2": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 15
    },
    "row3": {
    "discount": 1,
    "max": 600,
    "min": 1,
    "payout": 25
    },
    "row4": {
    "discount": 1,
    "max": 600,
    "min": 1,
    "payout": 40
    },
    "top3": {
    "discount": 1,
    "max": 600,
    "min": 1,
    "payout": 350
    },
    "top4": {
    "discount": 1,
    "max": 600,
    "min": 1,
    "payout": 1000
    }
    },
    "laoslotto": {
    "bottom1": {
    "discount": 1,
    "max": 10000,
    "min": 1,
    "payout": 4
    },
    "bottom2": {
    "discount": 1,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "row2": {
    "discount": 1,
    "max": 10000,
    "min": 1,
    "payout": 12
    },
    "row3": {
    "discount": 1,
    "max": 5000,
    "min": 1,
    "payout": 150
    },
    "row4": {
    "discount": 1,
    "max": 1000,
    "min": 1,
    "payout": 225
    },
    "top1": {
    "discount": 1,
    "max": 10000,
    "min": 1,
    "payout": 3
    },
    "top2": {
    "discount": 1,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "top3": {
    "discount": 1,
    "max": 1000,
    "min": 1,
    "payout": 900
    },
    "top4": {
    "discount": 1,
    "max": 500,
    "min": 1,
    "payout": 5000
    }
    },
    "hanoylotto_set": {
    "back2": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 15
    },
    "front2": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 15
    },
    "row3": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 25
    },
    "row4": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 40
    },
    "top3": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 350
    },
    "top4": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 1000
    }
    },
    "hanoylotto": {
    "bottom1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 4
    },
    "bottom2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "row2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 0
    },
    "row3": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 150
    },
    "row4": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 0
    },
    "top1": {
    "discount": 0,
    "max": 200000,
    "min": 1,
    "payout": 3.2
    },
    "top2": {
    "discount": 0,
    "max": 20000,
    "min": 1,
    "payout": 90
    },
    "top3": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 900
    },
    "top4": {
    "discount": 0,
    "max": 500,
    "min": 1,
    "payout": 0
    }
    },
    "hanoylottospecial": {
    "bottom1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 4
    },
    "bottom2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "bottom2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "row3": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 0
    },
    "top1": {
    "discount": 0,
    "max": 200000,
    "min": 1,
    "payout": 3.2
    },
    "top2": {
    "discount": 0,
    "max": 20000,
    "min": 1,
    "payout": 90
    },
    "top3": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 900
    }
    },
    "hanoylottospecial_set": {
    "back2": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 15
    },
    "front2": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 15
    },
    "row3": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 25
    },
    "row4": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 40
    },
    "top3": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 350
    },
    "top4": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 1000
    }
    },
    "hanoylottovip": {
    "bottom1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 4
    },
    "bottom2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "row2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 0
    },
    "row3": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 150
    },
    "row4": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 0
    },
    "top1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 3
    },
    "top2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "top3": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 900
    },
    "top4": {
    "discount": 0,
    "max": 500,
    "min": 1,
    "payout": 0
    }
    },
    "hanoylottovip_set": {
    "back2": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 15
    },
    "front2": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 15
    },
    "row3": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 25
    },
    "row4": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 40
    },
    "top3": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 350
    },
    "top4": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 1000
    }
    },
    "malaylotto": {
    "bottom1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 4
    },
    "bottom2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "row2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 0
    },
    "row3": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 150
    },
    "row4": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 0
    },
    "top1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 3
    },
    "top2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "top3": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 900
    },
    "top4": {
    "discount": 0,
    "max": 500,
    "min": 1,
    "payout": 0
    }
    },
    "malaylotto_set": {
    "back2": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 15
    },
    "front2": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 15
    },
    "row3": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 25
    },
    "row4": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 40
    },
    "top3": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 350
    },
    "top4": {
    "discount": 0,
    "max": 600,
    "min": 1,
    "payout": 1000
    }
    },
    "pingponglotto": {
    "bottom1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 4
    },
    "bottom2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "row2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 12
    },
    "row3": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 130
    },
    "row4": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 225
    },
    "top1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 3
    },
    "top2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "top3": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 800
    },
    "top4": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 5000
    },
    "top5": {
    "discount": 0,
    "max": 500,
    "min": 1,
    "payout": 25000
    },
    "top6": {
    "discount": 0,
    "max": 500,
    "min": 1,
    "payout": 50000
    }
    },
    "stock": {
    "bottom1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 4
    },
    "bottom2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "row3": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 150
    },
    "top1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 3
    },
    "top2": {
    "discount": 1,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "top3": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 900
    }
    },
    "thailotto": {
    "bottom1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 4
    },
    "bottom2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "bottom3": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 225
    },
    "row2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 12
    },
    "row3": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 150
    },
    "row4": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 225
    },
    "top1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 3
    },
    "top2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "top3": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 900
    },
    "top4": {
    "discount": 0,
    "max": 500,
    "min": 1,
    "payout": 5000
    },
    "top5": {
    "discount": 0,
    "max": 500,
    "min": 1,
    "payout": 25000
    },
    "top6": {
    "discount": 0,
    "max": 500,
    "min": 1,
    "payout": 50000
    }
    },
    "yeekeelotto": {
    "bottom1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 1
    },
    "bottom2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "row3": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 150
    },
    "top1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 2
    },
    "top2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 90
    },
    "top3": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 900
    }
    },
    "zodiaclotto": {
    "ball1": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 0
    },
    "ball2": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 0
    },
    "ball3": {
    "discount": 0,
    "max": 10000,
    "min": 1,
    "payout": 0
    },
    "ball4": {
    "discount": 0,
    "max": 5000,
    "min": 1,
    "payout": 0
    },
    "color": {
    "discount": 0,
    "max": 1000,
    "min": 1,
    "payout": 0
    }
    }
    }
    }
    }
</div>
<div id="seamless_tabfour-five-two_req" class="d-non">
    {
    "service": "GetUserBalance",
    "data": {
    "playerApiId": "21f7d4c971036eea30d1db483d01f131faada79fa94d52560c9f2c2b56a6f8877b66ae2c624f89442c938db064d8179f",
    "playerApiUsername": "testa0alottoviptest2@comptestseamless",
    "playerUsername": "testa0alottoviptest2"
    }
    }
</div>
<div id="seamless_tabfour-five-three_req" class="d-non">
    {
    "service": "UserPlaceBet",
    "data": {
    "playerApiId": "281199a5837d34ce72dcc86c0e14bc26b9362d63b0f49173a3b977d0dfe2adfd",
    "playerApiUsername": "testa0aagentthbmb01@comptestseamless",
    "playerUsername": "testa0aagentthbmb01",
    "ticketId": "39781",
    "type": "yeekeelotto",
    "government": false,
    "drawId": 36160,
    "totalBetAmt": -49.00000000000001,
    "drawName": "Yeekee Lotto",
    "drawExpire": "2023-10-03 15:14:00",
    "txtList": [
    {
    "agentPt": "0",
    "apiPt": "100",
    "betKey": "Mzk3ODEtMQ==",
    "betId": "1",
    "betType": "top2",
    "betNumber": "12",
    "betStatus": "pending",
    "betAmt": 5,
    "betTotal": 4.95,
    "betDiscount": 0.05,
    "payOutRate": 90,
    "rateLevel": 0,
    "rateLevelAmount": 0,
    "betResultKey": " ",
    "payOutAmt": 0
    },
    {
    "agentPt": "0",
    "apiPt": "100",
    "betKey": "Mzk3ODEtMQ==",
    "betId": "2",
    "betType": "bottom2",
    "betNumber": "12",
    "betStatus": "pending",
    "betAmt": 5,
    "betTotal": 5,
    "betDiscount": 0,
    "payOutRate": 90,
    "rateLevel": 0,
    "rateLevelAmount": 0,
    "betResultKey": " ",
    "payOutAmt": 0
    }
    ],
    "status": "pending",
    "createDate": "2023-10-03 15:12:25",
    "ip": "8.213.194.49",
    "currency": "thb",
    "DrawOpen": "2023-10-03 05:00:00"
    }
    }
</div>
<div id="seamless_tabfour-five-four_req" class="d-non">
    {
    "service": "UserPlaceBetCancel",
    "data": {
    "playerApiId": "4e4fbb4539fb0b7bd1d6b01a7f218cc0c311466f40bade45189b24a3efa3e6ba5ef2d47ee85eb2cffa48379b4fa017c6",
    "playerApiUsername": "testa0alottoviptestcarl@comptestseamless",
    "playerUsername": "testa0alottoviptestcarl",
    "ticketId": 53000,
    "type": "thailotto",
    "government": false,
    "drawId": 44170,
    "totalBetAmt": -10000
    "txtList": [
    {
    "agentPt": "95",
    "apiPt": "5",
    "betKey": "NTMwMDAtMQ==",
    "betId": "1",
    "betType": "bottom2",
    "betNumber": "10",
    "betStatus": "pending",
    "betAmt": 10000,
    "betTotal": 10000,
    "betDiscount": 0,
    "payOutRate": 90,
    "rateLevel": 0,
    "rateLevelAmount": 0,
    "betResultKey": "",
    "payOutAmt": 0
    }
    ],
    "status": "cancel",
    "createDate": "2023-11-11 15:16:44",
    "currency": "thb",
    "DrawOpen": "2023-11-09 01:00:00",
    "drawExpire": "2023-11-19 15:25:00"
    }
    }
</div>
<div id="seamless_tabfour-five-five_lose_req" class="d-non">
    {
    "service": "UserPlacePayout",
    "data": {
    "playerApiId": "281199a5837d34ce72dcc86c0e14bc26b9362d63b0f49173a3b977d0dfe2adfd",
    "playerApiUsername": "testa0aagentthbmb01@comptestseamless",
    "playerUsername": "testa0aagentthbmb01",
    "ticketId": "751811",
    "type": "stockgerman",
    "government": false,
    "drawId": 47600,
    "totalBetAmt": -9.9,
    "totalPayOutAmt": 900,
    "txtList": [
    {
    "agentPt": "95",
    "apiPt": "5",
    "betKey": "NzUxODExLTI=",
    "betId": "1",
    "betType": "bottom2",
    "betNumber": "87",
    "betStatus": "false",
    "betAmt": 9.9,
    "betTotal": 10,
    "betDiscount": 1,
    "payOutRate": 90,
    "rateLevel": 0,
    "rateLevelAmount": 0,
    "betResultKey": "",
    "payOutAmt": 0
    }
    ],
    "status": "Success",
    "result": {
    "bottom1": [
    "7",
    "8"
    ],
    "bottom2": [
    "78"
    ],
    "row2": [
    "77",
    "78",
    "87"
    ],
    "row3": [
    "456",
    "465",
    "546",
    "564",
    "645",
    "654"
    ],
    "top1": [
    "4",
    "5",
    "6"
    ],
    "top2": [
    "56"
    ],
    "top3": [
    "456"
    ]
    },
    "resultlink": "",
    "createDate": "2023-10-02 20:41:54",
    "currency": "thb"

    }
    }
</div>
<div id="seamless_tabfour-five-five_win_req" class="d-non">
    {
    "service": "UserPlacePayout",
    "data": {
    "playerApiId": "281199a5837d34ce72dcc86c0e14bc26b9362d63b0f49173a3b977d0dfe2adfd",
    "playerApiUsername": "testa0aagentthbmb01@comptestseamless",
    "playerUsername": "testa0aagentthbmb01",
    "ticketId": "751812",
    "type": "stockgerman",
    "government": false,
    "drawId": 47600,
    "totalBetAmt": -9.9,
    "totalPayOutAmt": 900,
    "txtList": [
    {
    "agentPt": "95",
    "apiPt": "5",
    "betKey": "NzUxODExLTE=",
    "betId": "1",
    "betType": "bottom2",
    "betNumber": "78",
    "betStatus": "true",
    "betAmt": 9.9,
    "betTotal": 10,
    "betDiscount": 1,
    "payOutRate": 90,
    "rateLevel": 0,
    "rateLevelAmount": 0,
    "betResultKey": "bottom2",
    "payOutAmt": 900
    }
    ],
    "status": "Success",
    "result": {
    "bottom1": [
    "7",
    "8"
    ],
    "bottom2": [
    "78"
    ],
    "row2": [
    "77",
    "78",
    "87"
    ],
    "row3": [
    "456",
    "465",
    "546",
    "564",
    "645",
    "654"
    ],
    "top1": [
    "4",
    "5",
    "6"
    ],
    "top2": [
    "56"
    ],
    "top3": [
    "456"
    ]
    },
    "resultlink": "",
    "createDate": "2023-10-02 20:41:54",
    "currency": "thb"

    }
    }
</div>
<div id="seamless_tabfour-five-six_req" class="d-non">
    {
    "service": "UserPlaceReToRunning",
    "data": {
    "playerApiId": "281199a5837d34ce72dcc86c0e14bc26b9362d63b0f49173a3b977d0dfe2adfd",
    "playerApiUsername": "testa0aagentthbmb01@comptestseamless",
    "playerUsername": "testa0aagentthbmb01",
    "ticketId": 40864,
    "type": "pingponglotto6",
    "government": false,
    "drawId": 37187,
    "totalBetAmt": 1243,
    "txtList": [
    {
    "agentPt": "95",
    "apiPt": "5",
    "betKey": "NDA4NjQtMQ==",
    "betId": "1",
    "betType": "top6",
    "betNumber": "789000",
    "betStatus": "pending",
    "betAmt": 733,
    "betTotal": 733,
    "betDiscount": 0,
    "payOutRate": 50000,
    "rateLevel": 0,
    "rateLevelAmount": 0,
    "betResultKey": "",
    "payOutAmt": 0
    }
    ],
    "status": "pending",
    "createDate": "2023-10-07 17:18:42",
    "DrawOpen": "2023-10-07 17:00:00",
    "currency": "thb",
    "drawExpire": "2023-10-07 17:30:00",
    "totalPayOutAmt": 0
    }
    }
</div>

<!-- start -->
<div id="seamless_tabfour-five-seven_req" class="d-non">
    {
    "service": "UserPayReward",
    "data": {
    "playerApiId": "5eae90e32f7df02c92fde32d",
    "playerApiUsername": "startseamlessmember@startapiseamless",
    "playerUsername": "member1",
    "rewardId": "1004718",
    "type": "Reward",
    "drawId": 12312,
    "lottotype": "yeekeelotto",
    "round": 11,
    "totalPayOutAmt": 400,
    "status": "Success",
    "createDate": "2020-05-03 20:36:13",
    "requestDate": "2020-05-03 20:36:13"
    }
    }
</div>
<div id="seamless_tabfour-five-eight_req" class="d-non">
    {
    "service": "UserPayRewardCancel",
    "data": {
    "playerApiId": "5eae90e32f7df02c92fde32d",
    "playerApiUsername": "startseamlessmember@startapiseamless",
    "playerUsername": "member1",
    "rewardId": "1004718",
    "type": "Reward",
    "drawId": 12312,
    "lottotype": "yeekeelotto",
    "round": 11,
    "totalPayOutAmt": 400,
    "status": "Cancel",
    "createDate": "2020-05-03 20:36:13",
    "requestDate": "2020-05-03 20:36:13"
    }
    }
</div>
<div id="seamless_tabfour-six-one_req" class="d-non">
    {
    "agentUsername": "compseamless",
    "agentApiKey": "e5ecb1f7d639dff2e3bcc05948726a8e7cafa0a75a07117b9562c4b7bc67c665a409cec17f9dfa02",
    "playerUsername": "member1",
    "startDate": "2021-07-10 15:04:05",
    "endDate": "2021-07-20 15:04:05",
    "page": 1,
    "limit": 1
    }
</div>
<div id="seamless_tabfour-six-two_req" class="d-non">
    {
    "agentUsername": "compseamless",
    "agentApiKey": "e5ecb1f7d639dff2e3bcc05948726a8e7cafa0a75a07117b9562c4b7bc67c665a409cec17f9dfa02",
    "startDate": "2021-07-10 15:04:05",
    "endDate": "2021-07-20 15:04:05",
    "page": 1,
    "limit": 1
    }
</div>
<div id="seamless_tabfour-six-three_req" class="d-non">
    {
    "agentUsername": "agentapi",
    "agentApiKey": "18c089a2e49dfc1776b6abc2ea3ee909d43b10bc37dfd7195a7265da82f8b4a983a1ebf3",
    "playerUsername": "stockrussia",
    "startDate": "2021-07-20 15:04:05",
    "endDate": "2021-07-20 15:04:05"
    }
</div>
<div id="seamless_tabfour-six-four_one_req" class="d-non">
    {
    "agentUsername": "superadmincash1",
    "agentApiKey": "345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8",
    "services": "AddHotnumber",
    "data": {
    "hotnumber": {
    "thailotto": {
    "top3": {
    "number": "123",
    "amount": 100
    }
    }
    }
    }
    }
</div>
<div id="seamless_tabfour-six-four_two_req" class="d-non">
    {
    "agentUsername": "superadmincash",
    "agentApiKey": "345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8",
    "services": "EditHotnumber",
    "data": {
    "hotnumber": {
    "thailotto": {
    "top3": {
    "number": "123",
    "amount": 1000
    }
    }
    }
    }
    }
</div>
<div id="seamless_tabfour-six-four_three_req" class="d-non">
    {
    "agentUsername": "superadmincash",
    "agentApiKey": "345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8",
    "services": "DeleteHotnumber",
    "data": {
    "hotnumber": {
    "thailotto": {
    "top3": {
    "number": "123"
    }
    }
    }
    }
    }
</div>
<div id="seamless_tabfour-six-four_four_req" class="d-non">
    {
    "agentUsername": "superadmincash",
    "agentApiKey": "345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8",
    "services": "AddLimitnumber",
    "data": {
    "limitnumber": {
    "thailotto": {
    "top3": {
    "number": "999"
    }
    }
    }
    }
    }
</div>
<div id="seamless_tabfour-six-four_five_req" class="d-non">
    {
    "agentUsername": "superadmincash",
    "agentApiKey": "345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8",
    "services": "DeleteLimitnumber",
    "data": {
    "limitnumber": {
    "thailotto": {
    "top3": {
    "number": "567"
    }
    }
    }
    }
    }
</div>
<div id="seamless_tabfour-six-four_six_left_req" class="d-non">
    {
    "agentUsername": "testcompany",
    "agentApiKey": "504947f655f822e2f8f414bbc1a34ba763c7570ef638135f30b5696c899f806901e163f59f3a86d0c8cd",
    "services": "SetPlaceOut",
    "data": {
    "enable_hotplaceout": true,
    "placeout": {
    "laoslotto": {
    "laoslotto": {
    "top4": {
    "amount": 200
    },
    "row4": {
    "amount": 1
    },
    "top3": {
    "amount": 0
    },
    "row3": {
    "amount": 0
    },
    "top2": {
    "amount": 0
    },
    "bottom2": {
    "amount": 0
    },
    "row2": {
    "amount": 0
    },
    "top1": {
    "amount": 0
    },
    "bottom1": {
    "amount": 0
    }
    },
    "laoslotto_set": {
    "lottoset": {
    "amount": 500
    }
    }
    }
    },
    "hotplaceout": {
    "laoslotto": {
    "laoslotto": {
    "top4": {
    "amount": 800
    },
    "row4": {
    "amount": 800
    },
    "top3": {
    "amount": 800
    },
    "row3": {
    "amount": 800
    },
    "top2": {
    "amount": 800
    },
    "bottom2": {
    "amount": 800
    },
    "row2": {
    "amount": 800
    },
    "top1": {
    "amount": 800
    },
    "bottom1": {
    "amount": 800
    }
    },
    "laoslotto_set": {
    "amount": 500
    }
    }
    }
    }
    }
</div>
<div id="seamless_tabfour-six-four_six_left_req" class="d-non">
    {
    "agentUsername": "buildexcompany",
    "agentApiKey": "504947f655f822e2f8f414bbc1a34ba763c7570ef638135f30b5696c899f806901e163f59f3a86d0c8cd",
    "services": "SetPlaceOut",
    "data": {
    "enable_hotplaceout": false,
    "placeout": {
    "stock": {
    "top3": {
    "amount": 10
    },
    "row3": {
    "amount": 10
    },
    "top2": {
    "amount": 10
    },
    "bottom2": {
    "amount": 10
    },
    "top1": {
    "amount": 10
    },
    "bottom1": {
    "amount": 10
    },
    }
    },
    "hotplaceout": {
    "stock": {
    "top3": {
    "amount": 50
    },
    "row3": {
    "amount": 20
    },
    "top2": {
    "amount": 20
    },
    "bottom2": {
    "amount": 20
    },
    "top1": {
    "amount": 20
    },
    "bottom1": {
    "amount": 20.5
    }
    }
    }
    }
    }
</div>

<!-- USE -->
<div id="seamless_tabfour-six-four_seven_req" class="d-non">
    {
    "agentUsername": "buildexcompany",
    "agentApiKey": "504947f655f822e2f8f414bbc1a34ba763c7570ef638135f30b5696c899f806901e163f59f3a86d0c8cd"
    }
</div>
<div id="seamless_tabfour-six-four_eight_req" class="d-non">
    {
    "agentUsername": "superadmincash",
    "agentApiKey": "345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8",
    "services": "DeleteLimitnumber",
    "data": {
    "limitnumber": {
    "thailotto": {
    "top3": {
    "number": "567"
    }
    }
    }
    }
    }
</div>
<div id="seamless_tabfour-six-four_nine_req" class="d-non">
    {
    "agentUsername": "superadmincash",
    "agentApiKey": "345afccac1c08a4f8e37fbf1ac4f6e2a63e298062482c3f5192a63f3f8",
    "services": "DeleteLimitnumber",
    "data": {
    "limitnumber": {
    "thailotto": {
    "top3": {
    "number": "567"
    }
    }
    }
    }
    }
</div>
<script>
    //   let text = document.getElementById('myText').innerHTML;
    const copyContent = async (text) => {
        try {
            await navigator.clipboard.writeText(text);
            console.log('Content copied to clipboard');
        } catch (err) {
            console.error('Failed to copy: ', err);
        }
        alert("Copy Code Successful");
    }
</script>

</body>

</html>