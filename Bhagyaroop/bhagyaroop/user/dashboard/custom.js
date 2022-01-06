function verifyOnce(){

    // Validation for Marrital Status

    var m_sts1 = document.getElementById("ch1");
    var m_sts2 = document.getElementById("ch2");
    var m_sts3 = document.getElementById("ch3");
    var m_sts4 = document.getElementById("ch4");
    
    if(m_sts1.checked == true || m_sts2.checked == true || m_sts3.checked == true || m_sts4.checked == true ){
    }else{
        alert('Please Check Any Marrital Status !');
        return false;
    }

}