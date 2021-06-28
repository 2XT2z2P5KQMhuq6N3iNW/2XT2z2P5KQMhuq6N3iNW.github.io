<?php include$_SERVER["DOCUMENT_ROOT"]."/header.php"; ?>
<HTML>

<!-- Mirrored from wwwwwwwww.jodi.org/betalab/untitled/3.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jan 2020 01:43:41 GMT -->
<HEAD>
<SCRIPT LANGUAGE="JavaScript">
<!--
var timerID = null
var timerRunning = false
function stopclock(){
    // cannot directly test timerID on DEC OSF/1 in beta 4.
    if(timerRunning)
        clearTimeout(timerID)
    timerRunning = false
}
function startclock(){
     // Make sure the clock is stopped
    stopclock()
    showtime()
}
function showtime(){
    var now = new Date()
    var hours = now.getHours()
    var minutes = now.getMinutes()
    var seconds = now.getSeconds()
    var timeValue = "" + ((hours > 12) ? hours - 12 : hours)
    timeValue  += ((minutes < 10) ? ":0" : ":") + minutes
    timeValue  += ((seconds < 10) ? ":0" : ":") + seconds
    timeValue  += (hours >= 12) ? " P.M." : " A.M."
    document.clock.face.value = timeValue 
    timerID = setTimeout("showtime()",1000)
    timerRunning = true
}
//-->
</SCRIPT>
<title> _ </title></HEAD>
<body BGCOLOR="#cccccc" background="p/p3.jpg" link="#000000" vlink="#000000" alink="#ffffff" onLoad="startclock()">

<FORM NAME="clock" onSubmit="0"><INPUT TYPE="text" NAME="face" SIZE=12 VALUE =""></FORM>
<center>
<PRE><FORM>                                   <INPUT TYPE="radio" name="nextpage" value="1.php" onClick="location.replace('1.php')">

<INPUT TYPE="radio"  name="nextpage" value="2.php" onClick="location.replace('2.php')">                                       <INPUT TYPE="radio"  name="nextpage" value="3.php" CHECKED onClick="location.replace('3.php')">            <INPUT TYPE="radio"  name="nextpage" value="4.php" onClick="location.replace('4.php')">
                                      <INPUT TYPE="radio"  name="nextpage" value="5.php" onClick="location.replace('5.php')">

<INPUT TYPE="radio"  name="nextpage" value="6.php" onClick="location.replace('6.php')">      <INPUT TYPE="radio"  name="nextpage" value="7.php" onClick="location.replace('7.php')">                    <INPUT TYPE="radio"  name="nextpage" value="8.php" onClick="location.replace('8.php')">

              <INPUT TYPE="radio" name="nextpage" value="9.php" onClick="location.replace('9.php')">  <INPUT TYPE="radio" name="nextpage" value="10.php" onClick="location.replace('10.php')">
<INPUT TYPE="radio" name="nextpage" value="11.php" onClick="location.replace('11.php')">                                                             <INPUT TYPE="radio" name="nextpage" value="12.php" onClick="location.replace('12.php')">     
    
             <INPUT TYPE="radio" name="nextpage" value="13.php" onClick="location.replace('13.php')">                 <INPUT TYPE="radio" name="nextpage" value="14.php" onClick="location.replace('14.php')">
<INPUT TYPE="radio" name="nextpage" value="15.php" onClick="location.replace('15.php')">
<INPUT TYPE="radio" name="nextpage" value="16.php" onClick="location.replace('16.php')">                      <INPUT TYPE="radio" name="nextpage" value="17.php" onClick="location.replace('17.php')">            <INPUT TYPE="radio" name="nextpage" value="18.php" onClick="location.replace('18.php')">               

<INPUT TYPE="radio" name="nextpage" value="19.php" onClick="location.replace('19.php')">   <INPUT TYPE="radio" name="nextpage" value="20.php" onClick="location.replace('20.php')">                       
<INPUT TYPE="radio" name="nextpage" value="21.php" onClick="location.replace('21.php')">         <INPUT TYPE="radio" name="nextpage" value="22.php" onClick="location.replace('22.php')">                             <INPUT TYPE="radio" name="nextpage" value="23.php" onClick="location.replace('23.php')"> 

<INPUT TYPE="radio" name="nextpage" value="24.php" onClick="location.replace('24.php')">          
<INPUT TYPE="radio" name="nextpage" value="25.php" onClick="location.replace('25.php')">     <INPUT TYPE="radio" name="nextpage" value="26.php" onClick="location.replace('26.php')">             
<INPUT TYPE="radio" name="nextpage" value="27.php" onClick="location.replace('27.php')">         <INPUT TYPE="radio" name="nextpage" value="28.php" onClick="location.replace('28.php')">                                                               <INPUT TYPE="radio" name="nextpage" value="29.php" onClick="location.replace('29.php')">

<INPUT TYPE="radio" name="nextpage" value="30.php" onClick="location.replace('30.php')">                                                       
</form></center>





</pre></body>
<!-- Mirrored from wwwwwwwww.jodi.org/betalab/untitled/3.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jan 2020 01:43:41 GMT -->
</HTML>