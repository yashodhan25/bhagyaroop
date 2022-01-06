<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Amethysta' rel='stylesheet'>
        <link rel="stylesheet" href="custom.css">
        <style>
            .myform ul li a{
                color: black;
                font-weight: bold;
            }
            .myform ul li a:hover{
                color: #0d6efd; 
            }
        </style>
    </head>

    <body>
        
        <!-- Registration Form -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <div class="myform">
                            <div class="head">
                                <span>Sign Up</span>
                            </div>
                            <form action="send.php" method="POST" name="myform" onsubmit="return verify();" style="padding: 20px 40px 20px 40px;">
                                <ul>
                                    <li class="head1"><label>Select Gender *</label></li>

                                    <li style="text-align:left">
                                        <input type="radio" name="r" value="male">
                                        Male&nbsp;&nbsp;
                                        <input type="radio" name="r" value="female">
                                        Female
                                    </li>

                                    
                                    <li class="head1"><label>Bride/Groom Name *</label></li>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-4" id="name1" style=""><li><input type="text" name="fname" placeholder="First Name" required></li></div>
                                        <div class="col-sm-12 col-md-12 col-lg-4" id="name2" style=""><li><input type="text" name="mname" placeholder="Middle Name"></li></div>
                                        <div class="col-sm-12 col-md-12 col-lg-4" id="name3" style=""><li><input type="text" name="lname" placeholder="Last Name"></li></div>
                                    </div>
                                    
                                    <li class="head1"><label>Enter Your Email Id *</label></li>
                                    
                                    <li><input type="email" name="email" placeholder="Email Id" required></li>

                                    <li class="head1"><label>Caste *</label></li>
                                    
                                    <li>
                                        <select name="caste" style="width:100%">
                                            <option value="">Select Caste</option>
                                            <option value="Brahmin">Brahmin</option>
                                            <option value="Maratha">Maratha</option>
                                            <option value="Buddhist">Buddhist</option>
                                            <option value="Kunbi">Kunbi</option>
                                            <option value="Chambhar">Chambhar</option>
                                            <option value="Arora"> Arora</option>
                                            <option value="Agarwal">Agarwal</option>
                                            <option value="Agri">Agri</option>
                                            <option value="Ahir">Ahir</option>
                                            <option value="Ahir Gawali">Ahir Gawali</option>
                                            <option value="Ahir Sonar">Ahir Sonar</option>
                                            <option value="Arya Kshatriya">Arya Kshatriya</option>
                                            <option value="Arya Samaj">Arya Samaj</option>
                                            <option value="Arya Vaishya">Arya Vaishya</option>
                                            <option value="Arya Vysya">Arya Vysya</option>
                                            <option value="Badgujar">Badgujar</option>
                                            <option value="Bairagi">Bairagi</option>
                                            <option value="Bania">Bania</option>
                                            <option value="Banjara">Banjara</option>
                                            <option value="Barai">Barai</option>
                                            <option value="Bari">Bari</option>
                                            <option value="Beldar">Beldar</option>
                                            <option value="Bengali">Bengali</option>
                                            <option value="Bengali Kayastha">Bengali Kayastha</option>
                                            <option value="Berad">Berad</option>
                                            <option value="Bhamti">Bhamti</option>
                                            <option value="Bhandari">Bhandari</option>
                                            <option value="Bhanushali">Bhanushali</option>
                                            <option value="Bharadi">Bharadi</option>
                                            <option value="Bhat">Bhat</option>
                                            <option value="Bhatt">Bhatt</option>
                                            <option value="Bhavasar kshatriya">Bhavasar kshatriya</option>
                                            <option value="Bhavsar">Bhavsar</option>
                                            <option value="Bhavsar Shimpi">Bhavsar Shimpi</option>
                                            <option value="Bhilla">Bhilla</option>
                                            <option value="Bhoi">Bhoi</option>
                                            <option value="Bhope">Bhope</option>
                                            <option value="Billava">Billava</option>
                                            <option value="Borul">Borul</option>
                                            <option value="Brahma kshatriya">Brahma kshatriya</option>
                                            <option value="Burud">Burud</option>
                                            <option value="Chandravanshi">Chandravanshi</option>
                                            <option value="Chaurasia">Chaurasia</option>
                                            <option value="Chitode Wani">Chitode Wani</option>
                                            <option value="Chitrakathi">Chitrakathi</option>
                                            <option value="CKP">CKP</option>
                                            <option value="Daivadnya Brahmin">Daivadnya Brahmin</option>
                                            <option value="Dangat">Dangat</option>
                                            <option value="Dashnam">Dashnam</option>
                                            <option value="Davari">Davari</option>
                                            <option value="Devadiga">Devadiga</option>
                                            <option value="Devang Koshthi">Devang Koshthi</option>
                                            <option value="Dever">Dever</option>
                                            <option value="Devli">Devli</option>
                                            <option value="Dhangar">Dhangar</option>
                                            <option value="Dhobi">Dhobi</option>
                                            <option value="Dhor">Dhor</option>
                                            <option value="Do not want to disclose">Do not want to disclose</option>
                                            <option value="Ezhava">Ezhava</option>
                                            <option value="Gabit">Gabit</option>
                                            <option value="Ganali">Ganali</option>
                                            <option value="Garhwali Kumaoni">Garhwali Kumaoni</option>
                                            <option value="Gavandi">Gavandi</option>
                                            <option value="Gawali">Gawali</option>
                                            <option value="Ghatti">Ghatti</option>
                                            <option value="Ghisadi">Ghisadi</option>
                                            <option value="Golha">Golha </option>
                                            <option value="Gollewar">Gollewar</option>
                                            <option value="Gomantak">Gomantak</option>
                                            <option value="Gond">Gond</option>
                                            <option value="Gondhali">Gondhali</option>
                                            <option value="Gopal">Gopal</option>
                                            <option value="Gosavi">Gosavi</option>
                                            <option value="Goswami">Goswami</option>
                                            <option value="Gowari">Gowari</option>
                                            <option value="Gowda">Gowda </option>
                                            <option value="Gujar">Gujar</option>
                                            <option value="Gujarati Mochi">Gujarati Mochi</option>
                                            <option value="Gujrathi">Gujrathi</option>
                                            <option value="Gurav">Gurav</option>
                                            <option value="Halba">Halba</option>
                                            <option value="Halba Koshti">Halba Koshti</option>
                                            <option value="Halbi">Halbi </option>
                                            <option value="Hatkar">Hatkar</option>
                                            <option value="Jain">Jain</option>
                                            <option value="Jangam">Jangam</option>
                                            <option value="Jogi (Nath)">Jogi (Nath)</option>
                                            <option value="Joshi">Joshi</option>
                                            <option value="Kachhi">Kachhi </option>
                                            <option value="Kahar(Hindu)">Kahar(Hindu)</option>
                                            <option value="Kaikadi">Kaikadi</option>
                                            <option value="Kakayya">Kakayya</option>
                                            <option value="kalal">kalal</option>
                                            <option value="Kalan">Kalan</option>
                                            <option value="Kalar">Kalar</option>
                                            <option value="Kapewar">Kapewar</option>
                                            <option value="Kapu">Kapu</option>
                                            <option value="Karwari">Karwari</option>
                                            <option value="Kasar">Kasar</option>
                                            <option value="Kashi Kapadi">Kashi Kapadi</option>
                                            <option value="Kayastha">Kayastha</option>
                                            <option value="Kharvi">Kharvi</option>
                                            <option value="khatik">khatik</option>
                                            <option value="Khatri">Khatri </option>
                                            <option value="Kohli">Kohli</option>
                                            <option value="kolhati">kolhati</option>
                                            <option value="Koli">Koli</option>
                                            <option value="Koli Mahadev">Koli Mahadev</option>
                                            <option value="komati">komati</option>
                                            <option value="Konkani">Konkani</option>
                                            <option value="Koshti">Koshti</option>
                                            <option value="Kshatriya">Kshatriya</option>
                                            <option value="kshatriya kumawat">kshatriya kumawat</option>
                                            <option value="KUDAL,DESHAKAR">KUDAL,DESHAKAR</option>
                                            <option value="Kulwant Vani">Kulwant Vani</option>
                                            <option value="Kumbhar">Kumbhar</option>
                                            <option value="Kutchi Lohana">Kutchi Lohana</option>
                                            <option value="Lad">Lad</option>
                                            <option value="Lad Sonar">Lad Sonar</option>
                                            <option value="Lad Wani">Lad Wani</option>
                                            <option value="Ladshakhiy Vani">Ladshakhiy Vani</option>
                                            <option value="Leva Gurjar">Leva Gurjar</option>
                                            <option value="Leva Patidar">Leva Patidar</option>
                                            <option value="Leva patil">Leva patil</option>
                                            <option value="Lingayat">Lingayat</option>
                                            <option value="Lingayatwani">Lingayatwani</option>
                                            <option value="Lohar">Lohar</option>
                                            <option value="Lonari">Lonari</option>
                                            <option value="Loni">Loni</option>
                                            <option value="Madiga">Madiga</option>
                                            <option value="Mahar">Mahar</option>
                                            <option value="Maheshwari">Maheshwari</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Mana">Mana</option>
                                            <option value="Mang">Mang</option>
                                            <option value="Mangalorean Tulu">Mangalorean Tulu</option>
                                            <option value="Mannervarlu">Mannervarlu</option>
                                            <option value="Marwari">Marwari</option>
                                            <option value="Matang">Matang</option>
                                            <option value="Maurya">Maurya</option>
                                            <option value="Modh Vania">Modh Vania</option>
                                            <option value="Mogaveera">Mogaveera </option>
                                            <option value="Munnuru Kapu">Munnuru Kapu</option>
                                            <option value="Nabhik">Nabhik</option>
                                            <option value="Naidu">Naidu</option>
                                            <option value="Nair">Nair </option>
                                            <option value="Namdev">Namdev</option>
                                            <option value="Nath">Nath</option>
                                            <option value="Nathpanthi Gosavi">Nathpanthi Gosavi</option>
                                            <option value="Navnath Gosavi">Navnath Gosavi</option>
                                            <option value="Neve">Neve</option>
                                            <option value="Neve Vani">Neve Vani</option>
                                            <option value="Nhavi">Nhavi</option>
                                            <option value="Nirali">Nirali</option>
                                            <option value="Nutan Maratha">Nutan Maratha</option>
                                            <option value="Otari">Otari</option>
                                            <option value="Pachkalshi">Pachkalshi</option>
                                            <option value="Padmashali">Padmashali</option>
                                            <option value="PANCHAL">PANCHAL</option>
                                            <option value="Pardhi">Pardhi</option>
                                            <option value="Parit">Parit</option>
                                            <option value="Patel">Patel</option>
                                            <option value="Pathare Prabhu">Pathare Prabhu</option>
                                            <option value="Patharvat">Patharvat</option>
                                            <option value="Prajapati">Prajapati</option>
                                            <option value="Pujari">Pujari</option>
                                            <option value="Punjabi">Punjabi</option>
                                            <option value="Raghuvanshi">Raghuvanshi</option>
                                            <option value="Rajasthani Brahmin">Rajasthani Brahmin </option>
                                            <option value="Rajput">Rajput</option>
                                            <option value="Ramoshi">Ramoshi</option>
                                            <option value="Rao Rathod Saoji Teli">Rao Rathod Saoji Teli </option>
                                            <option value="Rawal">Rawal</option>
                                            <option value="Reddy">Reddy</option>
                                            <option value="Rohidas">Rohidas</option>
                                            <option value="Sagar">Sagar</option>
                                            <option value="Sahastrarjun Kshatriya">Sahastrarjun Kshatriya</option>
                                            <option value="Sangar">Sangar</option>
                                            <option value="Sarode">Sarode</option>
                                            <option value="Savji">Savji</option>
                                            <option value="SC">SC</option>
                                            <option value="Shilwant">Shilwant</option>
                                            <option value="Shimpi">Shimpi</option>
                                            <option value="Shivyogi">Shivyogi</option>
                                            <option value="Sindhi">Sindhi</option>
                                            <option value="Somavanshi Arya Kshatriya">Somavanshi Arya Kshatriya</option>
                                            <option value="Sonar">Sonar</option>
                                            <option value="ST">ST</option>
                                            <option value="Sutar">Sutar</option>
                                            <option value="Swakula Sali">Swakula Sali</option>
                                            <option value="Tambat">Tambat</option>
                                            <option value="Tamil">Tamil</option>
                                            <option value="Thakur">Thakur</option>
                                            <option value="Vadar">Vadar</option>
                                            <option value="Vaidu">Vaidu</option>
                                            <option value="Vaish">Vaish</option>
                                            <option value="Vaishnav">Vaishnav</option>
                                            <option value="vaishnav lad">vaishnav lad</option>
                                            <option value="Vaishya">Vaishya</option>
                                            <option value="Vaishya Vani">Vaishya Vani</option>
                                            <option value="Valmiki">Valmiki</option>
                                            <option value="Vani">Vani</option>
                                            <option value="Vaniya">Vaniya</option>
                                            <option value="Vanjari">Vanjari</option>
                                            <option value="Vankar">Vankar</option>
                                            <option value="Vasudev(Bhatkya Jamati)">Vasudev(Bhatkya Jamati)</option>
                                            <option value="Veer">Veer</option>
                                            <option value="veershaiv kakkaya">veershaiv kakkaya</option>
                                            <option value="Velama">Velama</option>
                                            <option value="Vishwabrahmin">Vishwabrahmin</option>
                                            <option value="vishwakarma">vishwakarma</option>
                                            <option value="Vysya">Vysya</option>
                                            <option value="Walmiki">Walmiki</option>
                                            <option value="Warli">Warli</option>
                                            <option value="Yadav">Yadav</option>
                                        </select>
                                    </li>

                                    <li class="head1"><label>Enter Your Mobile Number *</label></li>

                                    <li style="text-align:left">
                                        <div>
                                            <select name="code" class="mobile" style="border: none;" onchange="codeCounty();">
                                                <option value="+91">India</option>
                                                <option value="+1">United States</option>
                                                <option value="+44">United Kingdom</option>
                                                <option value="+01">Canada</option>
                                                <option value="+81">Japan</option>
                                                <option value="+61">Australia</option>
                                                <option value="+49">Germany</option>
                                                <option value="+39">Italy</option>
                                                <option value="+64">New Zealand</option>
                                                <option value="+93">Afghanistan</option>
                                                <option value="+355">Albania</option>
                                                <option value="+213">Algeria</option>
                                                <option value="+376">Andorra</option>
                                                <option value="+244">Angola</option>
                                                <option value="+672">Antarctica</option>
                                                <option value="+54">Argentina</option>
                                                <option value="+374">Armenia</option>
                                                <option value="+297">Aruba</option>
                                                <option value="+43">Austria</option>
                                                <option value="+994">Azerbaijan</option>
                                                <option value="+973">Bahrain</option>
                                                <option value="+880">Bangladesh</option>
                                                <option value="+375">Belarus</option>
                                                <option value="+32">Belgium</option>
                                                <option value="+501">Belize</option>
                                                <option value="+229">Benin</option>
                                                <option value="+975">Bhutan</option>
                                                <option value="+591">Bolivia</option>
                                                <option value="+387">Bosnia and Herzegovina</option>
                                                <option value="+267">Botswana</option>
                                                <option value="+55">Brazil</option>
                                                <option value="+246">British Indian Ocean Territory</option>
                                                <option value="+673">Brunei</option>
                                                <option value="+359">Bulgaria</option>
                                                <option value="+226">Burkina Faso</option>
                                                <option value="+257">Burundi</option>
                                                <option value="+855">Cambodia</option>
                                                <option value="+237">Cameroon</option>
                                                <option value="+238">Cape Verde</option>
                                                <option value="+236">Central African Republic</option>
                                                <option value="+235">Chad</option>
                                                <option value="+56">Chile</option>
                                                <option value="+86">China</option>
                                                <option value="+61">Christmas Island</option>
                                                <option value="+61">Cocos Islands</option>
                                                <option value="+57">Colombia</option>
                                                <option value="+269">Comoros</option>
                                                <option value="+682">Cook Islands</option>
                                                <option value="+506">Costa Rica</option>
                                                <option value="+385">Croatia</option>
                                                <option value="+53">Cuba</option>
                                                <option value="+599">Curacao</option>
                                                <option value="+357">Cyprus</option>
                                                <option value="+420">Czech Republic</option>
                                                <option value="+243">Democratic Republic of the Congo</option>
                                                <option value="+45">Denmark</option>
                                                <option value="+253">Djibouti</option>
                                                <option value="+670">East Timor</option>
                                                <option value="+593">Ecuador</option>
                                                <option value="+20">Egypt</option>
                                                <option value="+503">El Salvador</option>
                                                <option value="+240">Equatorial Guinea</option>
                                                <option value="+291">Eritrea</option>
                                                <option value="+372">Estonia</option>
                                                <option value="+251">Ethiopia</option>
                                                <option value="+500">Falkland Islands</option>
                                                <option value="+298">Faroe Islands</option>
                                                <option value="+679">Fiji</option>
                                                <option value="+358">Finland</option>
                                                <option value="+33">France</option>
                                                <option value="+689">French Polynesia</option>
                                                <option value="+241">Gabon</option>
                                                <option value="+220">Gambia</option>
                                                <option value="+995">Georgia</option>
                                                <option value="+233">Ghana</option>
                                                <option value="+350">Gibraltar</option>
                                                <option value="+30">Greece</option>
                                                <option value="+299">Greenland</option>
                                                <option value="+502">Guatemala</option>
                                                <option value="+224">Guinea</option>
                                                <option value="+245">Guinea-Bissau</option>
                                                <option value="+592">Guyana</option>
                                                <option value="+509">Haiti</option>
                                                <option value="+504">Honduras</option>
                                                <option value="+852">Hong Kong</option>
                                                <option value="+36">Hungary</option>
                                                <option value="+354">Iceland</option>
                                                <option value="+62">Indonesia</option>
                                                <option value="+98">Iran</option>
                                                <option value="+964">Iraq</option>
                                                <option value="+353">Ireland</option>
                                                <option value="+972">Israel</option>
                                                <option value="+225">Ivory Coast</option>
                                                <option value="+962">Jordan</option>
                                                <option value="+7">Kazakhstan</option>
                                                <option value="+254">Kenya</option>
                                                <option value="+686">Kiribati</option>
                                                <option value="+383">Kosovo</option>
                                                <option value="+965">Kuwait</option>
                                                <option value="+996">Kyrgyzstan</option>
                                                <option value="+856">Laos</option>
                                                <option value="+371">Latvia</option>
                                                <option value="+961">Lebanon</option>
                                                <option value="+266">Lesotho</option>
                                                <option value="+231">Liberia</option>
                                                <option value="+218">Libya</option>
                                                <option value="+423">Liechtenstein</option>
                                                <option value="+370">Lithuania</option>
                                                <option value="+352">Luxembourg</option>
                                                <option value="+853">Macau</option>
                                                <option value="+389">Macedonia</option>
                                                <option value="+261">Madagascar</option>
                                                <option value="+265">Malawi</option>
                                                <option value="+60">Malaysia</option>
                                                <option value="+960">Maldives</option>
                                                <option value="+223">Mali</option>
                                                <option value="+356">Malta</option>
                                                <option value="+692">Marshall Islands</option>
                                                <option value="+222">Mauritania</option>
                                                <option value="+230">Mauritius</option>
                                                <option value="+262">Mayotte</option>
                                                <option value="+52">Mexico</option>
                                                <option value="+691">Micronesia</option>
                                                <option value="+373">Moldova</option>
                                                <option value="+377">Monaco</option>
                                                <option value="+976">Mongolia</option>
                                                <option value="+382">Montenegro</option>
                                                <option value="+212">Morocco</option>
                                                <option value="+258">Mozambique</option>
                                                <option value="+95">Myanmar</option>
                                                <option value="+264">Namibia</option>
                                                <option value="+674">Nauru</option>
                                                <option value="+977">Nepal</option>
                                                <option value="+31">Netherlands</option>
                                                <option value="+599">Netherlands Antilles</option>
                                                <option value="+687">New Caledonia</option>
                                                <option value="+505">Nicaragua</option>
                                                <option value="+227">Niger</option>
                                                <option value="+234">Nigeria</option>
                                                <option value="+683">Niue</option>
                                                <option value="+850">North Korea</option>
                                                <option value="+47">Norway</option>
                                                <option value="+968">Oman</option>
                                                <option value="+92">Pakistan</option>
                                                <option value="+680">Palau</option>
                                                <option value="+970">Palestine</option>
                                                <option value="+507">Panama</option>
                                                <option value="+675">Papua New Guinea</option>
                                                <option value="+595">Paraguay</option>
                                                <option value="+51">Peru</option>
                                                <option value="+63">Philippines</option>
                                                <option value="+64">Pitcairn</option>
                                                <option value="+48">Poland</option>
                                                <option value="+351">Portugal</option>
                                                <option value="+974">Qatar</option>
                                                <option value="+242">Republic of the Congo</option>
                                                <option value="+262">Reunion</option>
                                                <option value="+40">Romania</option>
                                                <option value="+7">Russia</option>
                                                <option value="+250">Rwanda</option>
                                                <option value="+590">Saint Barthelemy</option>
                                                <option value="+290">Saint Helena</option>
                                                <option value="+590">Saint Martin</option>
                                                <option value="+508">Saint Pierre and Miquelon</option>
                                                <option value="+685">Samoa</option>
                                                <option value="+378">San Marino</option>
                                                <option value="+239">Sao Tome and Principe</option>
                                                <option value="+966">Saudi Arabia</option>
                                                <option value="+221">Senegal</option>
                                                <option value="+381">Serbia</option>
                                                <option value="+248">Seychelles</option>
                                                <option value="+232">Sierra Leone</option>
                                                <option value="+65">Singapore</option>
                                                <option value="+421">Slovakia</option>
                                                <option value="+386">Slovenia</option>
                                                <option value="+677">Solomon Islands</option>
                                                <option value="+252">Somalia</option>
                                                <option value="+27">South Africa</option>
                                                <option value="+82">South Korea</option>
                                                <option value="+211">South Sudan</option>
                                                <option value="+34">Spain</option>
                                                <option value="+94">Sri Lanka</option>
                                                <option value="+249">Sudan</option>
                                                <option value="+597">Suriname</option>
                                                <option value="+47">Svalbard and Jan Mayen</option>
                                                <option value="+268">Swaziland</option>
                                                <option value="+46">Sweden</option>
                                                <option value="+41">Switzerland</option>
                                                <option value="+963">Syria</option>
                                                <option value="+886">Taiwan</option>
                                                <option value="+992">Tajikistan</option>
                                                <option value="+255">Tanzania</option>
                                                <option value="+66">Thailand</option>
                                                <option value="+228">Togo</option>
                                                <option value="+690">Tokelau</option>
                                                <option value="+676">Tonga</option>
                                                <option value="+216">Tunisia</option>
                                                <option value="+90">Turkey</option>
                                                <option value="+993">Turkmenistan</option>
                                                <option value="+688">Tuvalu</option>
                                                <option value="+256">Uganda</option>
                                                <option value="+380">Ukraine</option>
                                                <option value="+971">United Arab Emirates</option>
                                                <option value="+598">Uruguay</option>
                                                <option value="+998">Uzbekistan</option>
                                                <option value="+678">Vanuatu</option>
                                                <option value="+379">Vatican</option>
                                                <option value="+58">Venezuela</option>
                                                <option value="+84">Vietnam</option>
                                                <option value="+681">Wallis and Futuna</option>
                                                <option value="+212">Western Sahara</option>
                                                <option value="+967">Yemen</option>
                                                <option value="+260">Zambia</option>
                                                <option value="+263">Zimbabwe</option>
                                            </select>
                                            <span id="code">+91</span><input type="number" name="mobile" placeholder="Enter Mobile Number" required>
                                        </div>
                                    </li>

                                    <li><input type="password" name="pass1" placeholder="Enter Your Password" required ></li>
                                    <li><input type="text" name="pass2" placeholder="Re-Enter Your Password" required ></li>
                                    <li><input type="checkbox" name="tc" required >&nbsp;&nbsp;I Agree With <a href="./../terms.php">Terms and Conditions</a></li>
                                    <li><input type="submit" value="Register"></li>
                                </ul>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>


        <script>
            
            function codeCounty(){
                var country = document.myform.code.value;
                document.getElementById("code").innerHTML = country;
            }

            function verify(){
                var caste = document.myform.caste.value;                
                var gender = document.myform.r.value;
                var mobile = document.myform.mobile.value;
                var password1 = document.myform.pass1.value;
                var password2 = document.myform.pass2.value;
                if(mobile.length < 10 || mobile.length > 10){
                    alert("Please Enter Valid Mobile Number !");
                    return false;
                }
                if(caste == ""){
                    alert("Please Select Caste !");
                    return false;
                }

                if(gender == ""){
                    alert("Please Select Gender !");
                    return false;
                }

                if(password1 !== password2){
                    alert('Password dosent Match !');
                    return false;
                }else{
                    var confirm = window.confirm("Please Confirm the details you filled Above in Sign Up Form before submitting ");
                    if (confirm == true) {
                        return true;
                    }else{
                        return false;
                    }
                }
                
            }
             
        </script>

    </body>
</html>

<?php
if(isset($_GET['a'])){
    echo "<script> alert('Registration Done Successfully !'); </script>";
}
if(isset($_GET['b'])){
    echo "<script> alert('User Already Registered !'); </script>";
}
?>