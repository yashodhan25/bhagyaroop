function validateFun(){

    var step = document.myform.step.value; // 1

    if(step == "1"){
        var aboutme = document.myform.aboutme.value; // 1
        var Full_Name = document.myform.fn.value; // 2
        var Middle_Name = document.myform.mname.value; // 17
        var Last_Name = document.myform.lname.value; // 18
        var Date_of_Birth = document.myform.db.value; // 3
        var Marrital_status = document.myform.ms.value; // 4
        var Height = document.myform.height.value; // 5
        var Weight = document.myform.weight.value; // 6
        var Body_Type = document.myform.btype.value; // 7
        var Body_Skin = document.myform.comp.value; // 8
        
        var Blood_Group = document.myform.blgrp.value; // 9
        
        var Mother_Toung = document.myform.mtg.value; // 10
        var Passport_Status = document.myform.pp.value; // 11
        var Passport_Detail = document.myform.pp1.value; // 12
        var Disability = document.myform.disa.value; // 13
        var Disability_Detail = document.myform.disa1.value; // 14
        var Medical_History = document.myform.mdh.value; // 15
        var Medical_History_Details = document.myform.mdh1.value; // 16
        

        
        if(aboutme == ""){
            alert("Please fill About Me !");
            return false;
        }
        if(Full_Name == ""){
            alert("Please fill Full Name !");
            return false;
        }

        if(Date_of_Birth == ""){
            alert("Please fill Date of Birth !");
            return false;
        }
        
        if(Height == ""){
            alert("Please fill Your Height !");
            return false;
        }
        if(Weight == ""){
            alert("Please fill Your Weight !");
            return false;
        }
        if(Mother_Toung == ""){
            alert("Please fill Mother Toung !");
            return false;
        }

        var val1 = document.getElementById("passval").value;
        if(Passport_Detail == "" && val1 !== "No"){
            alert("Please fill Passport Detail !");
            return false;
        }

        var val2 = document.getElementById("dis").value;
        if(Disability_Detail == "" && val2 == "Yes"){
            alert("Please fill Disability Details !");
            return false;
        }

        var val3 = document.getElementById("mdh").value;
        if(Medical_History_Details == "" && val3 == "Other"){
            alert("Please fill Medical History Details !");
            return false;
        }
    }

    if(step == "2"){
        var Medium_of_Education = document.myform.edm.value; // 1
    
        var Educational_Field = []; // 2
        for (var option of document.myform.edl.options)
        {
            if (option.selected) {
                Educational_Field.push(option.value);
            }
        }

        var Educational_Field_details = document.myform.edl1.value; // 3

        var Educational_Level = document.myform.edf.value; // 4

        var Educational_Level_details = document.myform.edf1.value; // 5

        var Education_University = document.myform.euc.value; // 6

        var Additional_Qualification = document.myform.aqf.value; // 7

        var Additional_Languages = document.myform.alg.value; // 8


        if(Medium_of_Education == ""){
            alert("Please fill Medium of Education !");
            return false;
        }

        var val4 = document.getElementById("edl").value;
        if(Educational_Field_details == "" && val4 == "Others"){
            alert("Please fill Educational Field details !");
            return false;
        }

    }

    if(step == "3"){
        var Occupation = document.myform.occ.value; // 1
        var Occupation_detail = document.myform.occ1.value; // 2
        var Working_Field = document.myform.wfie.value; // 3
        var Working_Field_detail = document.myform.wfie1.value; // 3
        var Duration_of_Employment = document.myform.dym.value; // 4
        var Company_Name = document.myform.cbn.value; // 5
        var Designation = document.myform.desgn.value; // 6
        var Work_Country = document.myform.wcc.value; // 7
        var Annual_Income = document.myform.annin.value; // 8

        if(Occupation_detail == "" && Occupation == "Others"){
            alert("Please fill Occupation detail !");
            return false;
        }
        if(Working_Field_detail == "" && Working_Field == "Others"){
            alert("Please fill Working Field detail !");
            return false;
        }

        if(Duration_of_Employment == ""){
            alert("Please fill Duration of Employment !");
            return false;
        }
        if(Company_Name == ""){
            alert("Please fill Company Name !");
            return false;
        }
        if(Designation == ""){
            alert("Please fill Working Field !");
            return false;
        }
        if(Work_Country == ""){
            alert("Please fill Work Country and City !");
            return false;
        }
    }

    if(step == "4"){
        var Date_of_Birth = document.myform.wife.value; // 1
        var Birth_Time = document.myform.time.value; // 2
        var Birth_Place = document.myform.bp.value; // 3
        var Village = document.myform.vi.value; // 4
        var City = document.myform.vc.value; // 5
        var State = document.myform.stc.value; // 6
        var Country = document.myform.couE.value; // 7
        var Caste = document.myform.c.value; // 8
        var Other_Caste = document.myform.c1.value; // 9
        var Sub_Caste = document.myform.s.value; // 10
        var Birth_Moon_Sign = document.myform.bms.value; // 11
        var Constellation = document.myform.cont.value; // 12
        var Charan = document.myform.ss.value; // 13
        var Gotra = document.myform.gotr.value; // 14
        var Gan = document.myform.gan.value; // 15
        var Manglik = document.myform.man.value; // 16
        var Naad = document.myform.nad.value; // 17
        var see_Horoscope = document.myform.hor.value; // 18
        var rashi = document.myform.rashi.value; // 19


        if(Date_of_Birth == ""){
            alert("Please fill Date_of_Birth !");
            return false;
        }
        if(Birth_Time == ""){
            alert("Please fill Birth Time !");
            return false;
        }
        if(Birth_Place == ""){
            alert("Please fill Birth Place !");
            return false;
        }
        if(City == ""){
            alert("Please fill City !");
            return false;
        }
        if(State == ""){
            alert("Please fill State !");
            return false;
        }
        if(Country == ""){
            alert("Please fill Country !");
            return false;
        }
        if(Other_Caste == "" && Caste == "Other"){
            alert("Please fill Other Caste Details !");
            return false;
        }
    }

    if(step == "5"){
        var Diet = document.myform.diet.value; // 1
        var Diet_details = document.myform.diet1.value; // 2
        var smoking = document.myform.smoke.value; // 3
        var Drink = document.myform.drink.value; // 4
        var Spectacles = document.myform.splt.value; // 5
        var Sports_Fitness = document.myform.sfrts.value; // 6
        var Hobbies = document.myform.hobi.value; // 7

        if(Diet_details == "" && Diet == "Others"){
            alert("Please fill Diet Details !");
            return false;
        }
    }

    if(step == "6"){
        var Country = document.myform.coun.value; // 1
        var Country_details = document.myform.coun1.value; // 2
        var Address = document.myform.addr.value; // 3
        var Pin = document.myform.pin.value; // 4
        var Self_Mobile_Number = document.myform.snum.value; // 5
        var ccode1 = document.myform.ccode1.value; // 5
        var Father_Mobile_No = document.myform.bnum.value; // 6
        var ccode2 = document.myform.ccode2.value; // 5
        var Self_Email_Id = document.myform.manem.value; // 7
        var Father_Email_Id = document.myform.mfemail.value; // 8

        if(ccode1 == ""){
            alert("Please fill Country Code !");
            return false;
        }

        if(ccode2 == ""){
            alert("Please fill Country Code !");
            return false;
        }

        if(Country_details == "" && Country == "Others"){
            alert("Please fill Country details !");
            return false;
        }
        if(Address == ""){
            alert("Please fill Address !");
            return false;
        }

        if(Self_Mobile_Number == ""){
            alert("Please fill Self Mobile Number !");
            return false;
        }else{
            if(Self_Mobile_Number.length > 10 || Self_Mobile_Number.length < 10){
                alert("Please fill Self Mobile Number with 10 Digits !");
                return false;
            }
        }

        if(Father_Mobile_No == ""){
            alert("Please fill Mother/Father Mobile Number !");
            return false;
        }else{
            if(Father_Mobile_No.length > 10 || Father_Mobile_No.length < 10){
                alert("Please fill Mother/Father Mobile Number with 10 Digits !");
                return false;
            }
        }

        if(Self_Email_Id == ""){
            alert("Please fill Self Email Id !");
            return false;
        }
    }

    if(step == "7"){
        var relative_name = document.myform.reln.value; // 1
        var relative_mobile = document.myform.remail.value; // 2
        var ccode3 = document.myform.ccode3.value; // 5
        var relative_mail = document.myform.remob.value; // 3
        var relation = document.myform.relmeb.value; // 4

        if(relative_name == ""){
            alert("Please fill Relative Name !");
            return false;
        }
        if(relative_mobile == ""){
            alert("Please fill Relative Mobile Number !");
            return false;
        }
        if(relative_mobile.length > 10 || relative_mobile.length < 10){
            alert("Please fill Relative Mobile Number with 10 Digits !");
            return false;
        }
        if(ccode3 == ""){
            alert("Please fill Country Code !");
            return false;
        }
    }

    if(step == "8"){
        var Father = document.myform.fath.value; // 1
        var Father_Occupation = document.myform.fatho.value; // 2
        var Fathers_Details = document.myform.fdt.value; // 3
        var Fathers_Native_Place = document.myform.fdtn.value; // 4
        var Mother = document.myform.math.value; // 5
        var Mother_Occupation = document.myform.matho.value; // 6
        var Mothers_Maternal_Surname = document.myform.mdt.value; // 7
        var Mothers_Native_Place = document.myform.mdtn.value; // 8
        var No_of_Brothers = document.myform.nb.value; // 9
        var Marital_Status_b = document.myform.pay.value; // 10
        var No_of_Sistors = document.myform.ns.value; // 11
        var Marital_Status_s = document.myform.nmss.value; // 12
        var About_Family = document.myform.afmaly.value; // 13
        var Family_Medical_History = document.myform.fmh.value; // 14
        var Family_Disability = document.myform.fdida.value; // 15
        var Family_Disability_details = document.myform.fdida1.value; // 16


        if(Mothers_Maternal_Surname == ""){
            alert("Please fill Mothers Maternal Surname !");
            return false;
        }
        if(Family_Disability_details == "" && Family_Disability == "Yes"){
            alert("Please fill Family Disability details !");
            return false;
        }
    }

    if(step == "9"){
        var Mothers_Maternal_Surname = document.myform.mdt.value;
        var Family_Disability = document.myform.fdida.value;
        var Family_Disability_details = document.myform.fdida1.value;

        if(Mothers_Maternal_Surname == ""){
            alert("Please fill Mothers Maternal Surname !");
            return false;
        }
        if(Family_Disability_details == "" && Family_Disability == "Yes"){
            alert("Please fill Family Disability details !");
            return false;
        }
    }

}