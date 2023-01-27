<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
            width: 650px;
            margin-left: 500px ;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
        }

        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 10%;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<div class="imgcontainer">
    <img src="login.jpg" alt="Avatar" class="avatar">
</div>

<div class="topnav">
    <a href="homePage.php">HomePage</a>
    <a class="active" href="#category">Category</a>
    <a href="#CompInfo">Company Info</a>
    <a href="#empInfo">Employee Info</a>
    <a href="login.php">Log In Info</a>
</div>

<form id="regForm" action="register.php" enctype="multipart/form-data" method="post">
    <h1>We are company specialized &nspar; in Real state Developer</h1>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
        <h1>Please select your favorite Design : </h1>
        <input type="radio"  name="Design" value="Design">
        <label for="Architect">Architect</label><br>
        <input type="radio"  name="Design" value="Civil/Structural">
        <label for="Civil">Civil/Structural</label><br>
        <input type="radio"  name="Design" value="Mechnical">
        <label for="Mechnical">Mechnical</label><br><br>
        <input type="radio"  name="Design" value="Electrical">
        <label for="Electrical">Electrical</label><br><br>
        <input type="radio"  name="Design" value="Interior">
        <label for="Interior">Interior</label><br><br>
        <h1>Please select your Contractor : </h1>
        <input type="radio"  name="Contractor" value="Earth works">
        <label for="Architect">Earth works</label><br>
        <input type="radio"  name="Contractor" value="Civil/Structural">
        <label for="Civil">Civil/Structural</label><br>
        <input type="radio"  name="Contractor" value="Mechnical">
        <label for="Mechnical">Mechnical</label><br><br>
        <input type="radio"  name="Contractor" value="Electrical">
        <label for="Electrical">Electrical</label><br><br>
        <input type="radio"  name="Contractor" value="Finishing">
        <label for="Interior">Finishing</label><br><br>
        <h1>Please select other Notes : </h1>
        <input type="text"  name="other" value="">
    </div>
    <div  class="tab">Company Info:
        <p><input required type="text" placeholder="Company Name..." oninput="this.className = ''" name="Company_Name"></p>
        <p><input required type="text" placeholder="Company Address..." oninput="this.className = ''" name="Company_Address"></p>
        <p><input required type="number" placeholder="Phone Number..." oninput="this.className = ''" name="Phone_Number"></p>
        <p><input required type="number" placeholder="Mobile Number..." oninput="this.className = ''" name="Company_Mobile_Number"></p>
        <p><input required type="text" placeholder="Established Info..." oninput="this.className = ''" name="Established_Info"></p>
        <p><input required type="text" placeholder="Company Website..." oninput="this.className = ''" name="Company_Website"></p>
        <p><input required type="text" placeholder="Company Capital..." oninput="this.className = ''" name="Company_Capital"></p>
        <p><input required type="number" placeholder="Number Of Employees..." oninput="this.className = ''" name="Number_Of_Employees"></p>
        <textarea name="Company_Profile" rows="4" cols="131" maxlength="200" placeholder="Company Profile...">
        Company Profile...
        </textarea>
        <p><input type="file" oninput="this.className = ''" name="fileToUpload"></p>

    </div>
    <div class="tab">Employee Info:
        <p><input required type="text" placeholder="Employee Name..." oninput="this.className = ''" name="Employee_Name"></p>
        <p><input required type="text" placeholder="Employee Title..." oninput="this.className = ''" name="Employee_Title"></p>
        <p><input required type="text" placeholder="Email Address..." oninput="this.className = ''" name="Email_Address"></p>
        <p><input required type="number" placeholder="Mobile Number..." oninput="this.className = ''" name="Employee_Mobile_Number"></p>
        <p><input required type="text" placeholder="Employee Info..." oninput="this.className = ''" name="Employee_Info"></p>
        <p><input required type="text" placeholder="Company Since..." oninput="this.className = ''" name="Company_Since"></p>
    </div>
    <div class="tab">Login Info:
        <p><input placeholder="Username..." oninput="this.className = ''" name="Username"></p>
        <p><input placeholder="Password..." oninput="this.className = ''" name="Password" type="password"></p>
        <p><input placeholder="ReTypePassword..." oninput="this.className = ''" name="ReTypePassword" type="password"></p>
    </div>
    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
</form>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>


</body>
</html>
