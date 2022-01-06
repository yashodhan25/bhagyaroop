                <div class="col-md-12 col-sm-12 col-lg-3">
                    <div class="filterForm">
                        <div class="filterHead"><span>Refine Your Search</span></div>

                        <div class="row">
                            <form action="" method="POST" name="myform" onsubmit="return verifyOnce();">

                            <div class="col-md-6 col-sm-6 col-lg-12">
                                <div class="filterContent">
                                    <h2>Marital Status</h2>
                                    <hr class="seperator">
                                    <ul>
                                        <li><input type="checkbox" checked name="marital_status[]" id="ch1" value="Never Married"><label>Never Married</label></li>
                                        <li><input type="checkbox" name="marital_status[]" id="ch2" value="Divorced"><label>Divorced</label></li>
                                        <li><input type="checkbox" name="marital_status[]" id="ch3" value="Widow/Widower"><label>Widow/Widower</label></li>
                                        <li><label><input type="checkbox" name="marital_status[]" style="margin-left:-10px" id="ch4" value="Awating Divorce / Legally Separated">&nbsp;&nbsp;Awaiting Divorce / Legally Separated</label></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-12">
                                <div class="filterContent">
                                    <h2>Educational Level</h2>
                                    <hr class="seperator">
                                    <ul>
                                        <li><input type="checkbox" name="educational_level[]" id="edu1" value="Graduate"><label>Graduate</label></li>
                                        <li><input type="checkbox" name="educational_level[]" id="edu2" value="Undergraduate"><label>Undergraduate</label></li>
                                        <li><input type="checkbox" name="educational_level[]" id="edu3" value="Diploma" ><label>Diploma</label></li>
                                        <li><input type="checkbox" name="educational_level[]" id="edu4" value="Post graduate" ><label>Post Graduate</label></li>
                                        <li><input type="checkbox" name="educational_level[]" id="edu5" value="PHD"><label>PHD</label></li>
                                        <li><input type="checkbox" name="educational_level[]" id="edu6" value="International Degree" ><label>International Degree</label></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-12">
                                <div class="filterContent">
                                    <h2>Annual Income</h2>
                                    <hr class="seperator">
                                    <select name="annual_income[]" class="selectpicker" multiple data-live-search="true">
                                        <option>Student</option>
                                        <option>Job Seeker</option>
                                        <option>Below 2,00,000</option>
                                        <option>2,00,000 – 3,00,000</option>
                                        <option>3,00,000 -4,00,000 </option>
                                        <option>4,00,000 –5,00,000 </option>
                                        <option>5,00,000-6,00,000</option>
                                        <option>6,00,000 -7,00,000</option>
                                        <option>7,00,000-8,00,000</option>
                                        <option>8,00,000-9,00,000</option>
                                        <option>9,00,000-10,00,000</option>
                                        <option>10,00,000 – 15,00,000</option>
                                        <option>15,00,000-20,00,000</option>
                                        <option>20,00,000-25,00,000</option>
                                        <option>25,00,000 – 30,00,000</option>
                                        <option>30,00,000 – 35,00,000</option>
                                        <option>35,00,000 – 40,00,000</option>
                                        <option>40,00,000 – 45,00,000</option>
                                        <option>45,00,000 – 50,00,000</option>
                                        <option>50,00,000 – 60,00,000</option>
                                        <option>60,00,000 – 70,00,000</option>
                                        <option>70,00,000 -80,00,000</option>
                                        <option>80,00,000 – 90,00,000</option>
                                        <option>90,00,000 – 10,00,00,000</option>
                                        <option>10,00,00,000 Above </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-12">
                                <div class="filterContent">
                                    <h2>Caste</h2>
                                    <hr class="seperator">

                                    <div id="hiddenSometime">
                                        <select name="caste[]" class="selectpicker" multiple data-live-search="true">
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
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-12">
                                <div class="filterContent">
                                    <h2>Birth Year</h2>
                                    <hr class="seperator">
                                    <select name="birth_year">
                                        <option value="" selected>-- | --</option>
                                        <option>1999-2003</option>
                                        <option>1996-1998</option>
                                        <option>1993-1995</option>
                                        <option>1990-1992</option>
                                        <option>1979-1989</option>
                                        <option>1958-1978</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-12">
                                <div class="filterContent">
                                    <h2>Height (cm)</h2>
                                    <hr class="seperator">
                                    <select name="height_cm">
                                        <option value="" selected>-- | --</option>
                                        <option value="141-150">141-150 (4.6 ft - 4.9 ft)</option>
                                        <option value="151-160">151-160 (4.9 ft - 5.2 ft)</option>
                                        <option value="161-170">161-170 (5.2 ft - 5.6 ft)</option>
                                        <option value="171-180">171-180 (5.6 ft - 5.9 ft)</option>
                                        <option value="181-190">181-190 (5.9 ft - 6.2 ft)</option>
                                        <option value="191-200">191-200 (6.2 ft - 6.6 ft)</option>
                                        <option value="201-210">201-210 (6.6 ft - 6.9 ft)</option>
                                        <option value="211-220">211-220 (6.9 ft - 7.2 ft)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-12">
                                <div class="filterContent">
                                    <h2>Country</h2>
                                    <h4>(Optional)</h4>
                                    <hr class="seperator">
                                    <input type="text" name="country" placeholder="Enter Country">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-12">
                                <div class="filterContent">
                                    <h2>Language Known</h2>
                                    <h4>(Optional)</h4>
                                    <hr class="seperator">
                                    <input type="text" name="lang_known" placeholder="Enter Language">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-12">
                                <div class="filterContent">
                                    <h2>Mother Tongue</h2>
                                    <h4>(Optional)</h4>
                                    <hr class="seperator">
                                    <input type="text" name="mother_tounge" placeholder="Enter Language">
                                </div>
                                <br><br>
                            </div>

                            <?php
                            $check = mysqli_query($con,"SELECT * FROM `usertype` WHERE `email` = '$email' ");
                            $found = mysqli_num_rows($view);
                            
                            for($z=1; $z<=$found; $z++){
                                $data = mysqli_fetch_assoc($check);    
                                $profileStatus = $data['type'];
                                $plan = $data['type'];
                            }
                            
                            if($plan != 'Silver' ){
                                ?>
                                <div class="col-sm-12 col-md-12">
                                    <div class="filterContent">
                                        <ul>
                                            <li><label><input type="checkbox" name="AdvanceSearch" id="AdvanceSearch" onclick="advance()">&nbsp;&nbsp;&nbsp;Do You Want to Use Advance Search ?</label></li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="Advance_search">
                                    
                                    <div class="col-sm-12 col-md-12">
                                        <div class="filterContent">
                                            <h2>Habits & Life-Style</h2>
                                            <hr class="seperator">
                                        </div>
                                    </div>


                                    <div class="col-sm-6 col-md-6 col-lg-12">
                                        <div class="filterContent">
                                            <h4>Diet</h4>
                                            <select name="diet[]" class="selectpicker" multiple data-live-search="true">
                                                <option value="veg">Veg</option>
                                                <option value="non-veg">Non-veg</option>
                                                <option value="Eggeterian">Eggeterian</option>
                                                <option value="Nonveg occasionally">Non-veg occasionally</option>
                                            </select>
                                            <br><br>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-12">
                                        <div class="filterContent">
                                            <h4>Smoking</h4>
                                            <select name="smooking[]" class="selectpicker" multiple data-live-search="true">
                                                <option>No</option>
                                                <option>Yes</option>
                                                <option>Occasionally</option>
                                            </select>
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-12">
                                        <div class="filterContent">
                                            <h4>Drinking</h4>
                                            <select name="drink[]" class="selectpicker" multiple data-live-search="true">
                                                <option>No</option>
                                                <option>Yes</option>
                                                <option>Occasionally</option>
                                            </select>
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-12">
                                        <div class="filterContent">
                                            <h4>Spectacles/Lens</h4>
                                            <select name="spl[]" class="selectpicker" multiple data-live-search="true">
                                                <option>No</option>
                                                <option>Yes</option>
                                            </select>
                                        </div>
                                        <br><br>
                                    </div>

                                    <div class="col-sm-12 col-md-12">
                                        <div class="filterContent">
                                            <h2>Horoscopic Details</h2>
                                            <hr class="seperator">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-12">
                                        <div class="filterContent">
                                            <h4>Rashi (Moon)</h4>
                                            <select name="rashi[]" class="selectpicker" multiple data-live-search="true">
                                                <option value="Aries">Aries</option>
                                                <option value="Taurus">Taurus</option>
                                                <option value="Gemini">Gemini</option>
                                                <option value="Cancer">Cancer</option>

                                                <option value="Leo">Leo</option>
                                                <option value="Virgo">Virgo</option>
                                                <option value="Libra">Libra</option>
                                                <option value="Scorpius">Scorpius</option>
                                                
                                                <option value="Sagittarius">Sagittarius</option>
                                                <option value="Capricornus">Capricornus</option>
                                                <option value="Aquarius">Aquarius</option>
                                                <option value="Pisces">Pisces</option>
                                            </select>
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-12">
                                        <div class="filterContent">
                                            <h4>Naadi</h4>
                                            <select name="naadi[]" class="selectpicker" multiple data-live-search="true">
                                                <option value="Antya">Antya</option>
                                                <option value="Adya">Adya</option>
                                                <option value="Madhya">Madhya</option>
                                            </select>
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-sm-12 col-md-12">
                                        <div class="filterContent">
                                            <h4>Manglik</h4>
                                            <select name="manglik[]" class="selectpicker" multiple data-live-search="true">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <br><br>
                                    </div>
                                    
                                </div>

                                <?php
                            }

                            ?>

                            <div class="col-sm-12 col-md-12" >
                                <div class="filterContent">
                                    <input type="hidden" name="filterData" value="filterData">
                                    <input type="submit" value="Apply">
                                    <input type="reset" value="Clear All" onclick="clearAll()">
                                </div>
                                <br><br>
                            </div>

                        </div>

                    </div>
                </div>