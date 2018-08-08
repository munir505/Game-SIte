<?php

    include('common.php');

    headers("Reg");

    titles("reg");

?>

<div id="RegMain" style="position: absolute; top: 28%; right: 5%; left: 5%;">
    

    <body>

       Enter Your Fullname, Username, Email and Password to Register.<br>
       <p id="result">Please Register, using the Fields Bellow.</p>

       <form id="usrDetails" onsubmit="return false">

        <b>Full Name : </b><br><input type="text" id="fullNameInput"> <br> <br>
        <b>User Name : </b><br><input type="text" id="userNameInput"> <br> <br>
        <b>Email Address : </b><br><input type="Email" id="emailInput"> <br> <br>
        <b>Password  : </b><br><input type="password" id="passwordInput"> <br> <br>

        <input type="submit" value="Register" onclick="storeUser()">


        <script src="Registration.js"></script>

    </form>

    <br>

</div>

<img src="mount.jpg"; style="width: 100%; position: absolute; bottom: 0px; left: 0px; right: 0px;" >

</body>



</html>