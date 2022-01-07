<?php include_once("connections/header.php");
    include_once("connections/db_connection.php");
    ?>
<link rel="stylesheet" href="css/register.css">
</head>
<body>
    <section class = main>
        <img id = "img-1" src="img/manila.png" alt="manila prfile">
        <div class="inputs">
            <div class="header" style="display:flex;width: 100%;align-items: center;margin: 1rem 0;flex-direction: column;">
                <h1 style="margin: 0; font-size: 1rem;">Manila COVID-19 Vaccine</h1>
                <h1 style="margin:0; font-size: 1rem;">Registration Form</h1>
                <h1 class = "animated-h1">1/4</h1>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="pic" style="width: 100%; display: flex; align-items: center; flex-direction: column;">
                    <input type="file" name="profile" accept=".jpg, .jpeg, .png" id="file-name" style="font-size: 1rem; font-weight:600;">
                    <img src="img/images.png" id = "profile"  alt="profile" style="height: 150px;width: 150px; margin-top: 1rem;">
                </div>
                <div class="first">
                    <h1 class = "red"> Last Name</h1>
                    <input type="text" name="last_name" id="lname" class="text">
                </div>
                <div class="second">
                    <h1 class = "red">First Name</h1>
                    <input type="text" name="first_name" id="fname" class="text">
                </div><br>
                <div class="third">
                    <h1 class = "black" >Middle Name (Optional)</h1>
                    <input type="text" name="middle_name" id="mname" class="text">   
                </div>
                <div class="fourth">
                    <div class="first_select">
                        <h1 class="black">Suffix</h1>
                        <select name="suffix">
                            <option value=""></option>
                            <option value="JR.">JR.</option>
                            <option value="SR.">SR.</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                        </select>
                    </div>
                    <div class="second_select">
                        <h1 class="red">Gender</h1>
                        <select name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    
                </div>
                
                <div class="fifth">
                    <div class="first_select">
                        <h1 class = "red" style="width: fit-content;">Month</h1>
                        <select name="month">
                            <option value=""></option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>

                    <div class="second_select">
                        <h1 class="red">Day</h1>
                        <select name="day" id="">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>

                    <div class="third_select">
                        <h1 class="red">Year</h1>
                        <select name="year" id="">
                            <option value=""></option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                        </select>
                    </div>
                    
                </div>
            
                <div class="sixth">
                    <h1 class="red">Mobile No.(09XXXXXXXXX)</h1>
                    <input type="text" name="tawag" id="">
                </div> 
                <div class="seventh">
                    <h1 class="red">Home Address</h1>
                    <input type="text" name="address" id="">
                </div>

                <div class="eighth">
                    <h1 class="red">City/Area</h1>
                    <select name="city" id="city">
                        <option value=""></option>
                        
                    </select>
                </div>
                <div class="nineth">
                    <h1 class="red">Barangay</h1>
                    <select name="barangay" id="barangay">
                        <option value="" id = "brgy_list"></option>
                    </select>
                </div>
                <div class="questions" style="border-top: 1px solid rgba(110, 110, 110, .3); margin-top: 2rem; padding-top: 5rem;">
                    <p>SAGUTIN ANG MGA SUMUSUNOD NA KATANUNGAN OO HINDI DI ALAM</p>
                    <div class="first-question">
                        <div class="f_question">
                            <p style="flex-wrap: nowrap; width: 100%;">Nagpositibo ka na ba sa COVID-19?</p>
                        </div>
                        
                        <div id="first-choices"class="choices" style="display: flex; justify-content: flex-start">
                            <input type="radio" name="first-question-choices" id="first-question-first-choice" value="OO" >
                            <label for="first-question-first-choice" class = "h1">OO</label>

                            <input type="radio" name="first-question-choices" id="first-question-second-choice" value="HINDI" checked>
                            <label for="first-question-second-choice" class = "h1" value="HINDI" style="background-color: rgb(19, 134, 241); box-shadow: 0px 0px 3px 3px rgb(12, 94, 246); color: white;">HINDI</label>
                            
                            <input type="radio" name="first-question-choices" id="first-question-third-choice" value="DI ALAM">
                            <label for = "first-question-third-choice" value="DI ALAM"class = "h1">DI ALAM</label>
                        </div>
                        
                    </div>
                    <div class="second-question">
                        <div class="f_question">
                            <p style="flex-wrap: nowrap; width: 100%;">Sa nakaraang 14 na araw, may nakasama ka na ba na positibo sa COVID-19?</p>
                        </div>
                        <div id="second-choices"class="choices" style="display: flex; justify-content: flex-start">
                        <input type="radio" name="second-question-choices" id="second-question-first-choice" value="OO">
                            <label for="second-question-first-choice" class = "h1">OO</label>

                            <input type="radio" name="second-question-choices" id="second-question-second-choice" value="HINDI" checked>
                            <label for="second-question-second-choice" class = "h1" value="HINDI" style="background-color: rgb(19, 134, 241); box-shadow: 0px 0px 3px 3px rgb(12, 94, 246); color: white;">HINDI</label>
                            
                            <input type="radio" name="second-question-choices" id="second-question-third-choice" value="DI ALAM">
                            <label for = "second-question-third-choice" value="DI ALAM"class = "h1">DI ALAM</label>
                        </div>
                        
                    </div>
                    <div id="third-question-id" class="third-question">
                        <div class="f_question">
                            <p style="flex-wrap: nowrap; width: 100%;">Sa nakaraang 14 na araw, nanggaling ka ba sa ibang bansa?</p>
                        </div>
                        <div id="third-choices"class="choices" style="display: flex; justify-content: flex-start">
                            <input type="radio" name="third-question-choices" id="third-question-first-choice" value="OO">
                            <label for="third-question-first-choice" class = "h1">OO</label>

                            <input type="radio" name="third-question-choices" id="third-question-second-choice" value="HINDI" checked>
                            <label for="third-question-second-choice" class = "h1" value="HINDI" style="background-color: rgb(19, 134, 241); box-shadow: 0px 0px 3px 3px rgb(12, 94, 246); color: white;">HINDI</label>
                            
                            <input type="radio" name="third-question-choices" id="third-question-third-choice" value="DI ALAM">
                            <label for="third-question-third-choice" class = "h1">DI ALAM</label>
                        </div>
                        
                    </div>

                    <div id="fourth-question-id" class="fourth-question">
                        <div class="f_question">
                            <p style="flex-wrap: nowrap; width: 100%;">Nakisalamuha ka ba sa maraming tao sa pagtitipon sa nakaraang 2 linggo?</p>
                        </div>
                        <div id="fourth-choices" class="choices" style="display: flex; justify-content: flex-start">
                            <input type="radio" name="fourth-question-choices" id="fourth-question-first-choice" value="OO">
                            <label for="fourth-question-first-choice" class = "h1">OO</label>

                            <input type="radio" name="fourth-question-choices" id="fourth-question-second-choice" value="HINDI" checked>
                            <label for="fourth-question-second-choice" class = "h1" value="HINDI" style="background-color: rgb(19, 134, 241); box-shadow: 0px 0px 3px 3px rgb(12, 94, 246); color: white;">HINDI</label>
                            
                            <input type="radio" name="fourth-question-choices" id="fourth-question-third-choice" value="DI ALAM">
                            <label for="fourth-question-third-choice" class = "h1">DI ALAM</label>
                        </div>
                        
                    </div>
                </div>
                <div class="slide">
                    <p><strong>Nagkaroon ka ba ng alin man sa mga sumusunod sa nakaraang 2 linggo (14 na araw)? Sagutin lamang po ang mga tanong sa pamamagitan ng pagpili kung OO o HINDI</strong></p>
                    <div class="first-slide ">
                        <div class="wrap" id = "wrap">
                            <div class="mid"></div>
                            <h1 class="text">OO</h1>
                        </div>
                        <h3>Lagnat</h3>
                    </div>

                </div>
                <input type="submit" value="Register" id="register"class = "register" style="color: white; border:none; background-color:green; font-size:1.75rem;border-radius:5px; font-weight:.50rem; cursor:pointer;" name="submit">
        </form>
        </div>
    </section>
    <script src="js/register.js"></script>
<?php
    $con = connection();
    if(isset($_POST['submit'])){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $mname = $_POST['middle_name'];
        $suffix = $_POST['suffix'];
        $gender = $_POST['gender'];
        $month = $_POST['month'];
        $day = $_POST['day'];
        $year = $_POST['year'];
        $contact = $_POST['tawag'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $barangay = $_POST['barangay'];
        $firstanswer = $_POST['first-question-choices'];
        $secondanswer = $_POST['second-question-choices'];
        $thirdanswer = $_POST['third-question-choices'];
        $fourthanswer = $_POST['fourth-question-choices'];
        $target_dir = "upload/";
        $target_file = $target_dir.basename($_FILES['profile']['name']);
        move_uploaded_file($_FILES['profile']['tmp_name'], $target_file);
        $month = $_POST['month'];

        $birthdate = array($day, $month, $year);
        $birthdate = join("-", $birthdate);
        $dateRegistered = date("Y-m-d");

        $time = gmstrftime("%X");


            $sql = "INSERT INTO `usersinfo`(`profile`, `LastName`, `MiddleName`, `FirstName`, `Suffix`, `Gender`, `Birthdate`, `MobileNo`, `Address`, `City`, `Barangay`, `firstQuestionAnswer`, `secondQuestionAnswer`, `thirdQuestionAnswer`, `fourthQuestionAnswer`, `dateRegistered`, `time`) VALUES ('$target_file','$lname','$mname','$fname','$suffix','$gender','$birthdate','$contact','$address','$city','$barangay','$firstanswer','$secondanswer','$thirdanswer','$fourthanswer', '$dateRegistered', '$time')";
            $con->query($sql) or die("Error"); 
        
    }
    
?>
<?php include_once("connections/footer.php")?>