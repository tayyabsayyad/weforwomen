<?php


if(isset($_POST['submit']))
{
    $con = mysqli_connect("localhost","root","oracle","weforwomen") or die("Unable to connect");
    

    $job_title = $_POST['job-title'];
    $job_field = $_POST['job-field'];
    $job_textarea = $_POST['job-textarea'];
    $city = $_POST['city'];
    $skills = $_POST['skills'];
    $experience = $_POST['experience'];
    $budget= $_POST['budget'];
    $pay_type=$_POST['pay'];
    $duration = $_POST['duration'];
    // $job_type = $_POST['job-type'];


    echo  $job_title .$job_field. $job_textarea . $city.  $skills. $experience.  $budget. $pay_type .$duration;


    $query = "INSERT INTO postjob(job_title, job_field, job_desc, job_location, job_skills, experience, budget, payment_type, job_duration, fk_r_id) VALUES ('$job_title', '$job_field', '$job_textarea', '$city', '$skills', '$experience' ,'$budget', '$pay_type', $duration,1)";

    $result = mysqli_query($con, $query);
    echo $result;
    if($result){
        echo "insert hua 000";
    }
    else echo "nahi hua";
}

?>




















<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Post a Job</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="customStyle.css" />
    <!-- <script src="currency/js/bootstrap-formhelpers-currencies.js"></script> -->
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <div class="inner-content">
                <form action="post-job.php" method="post" enctype="multipart/form-data">
                <h1 class="toph1">Get help by helping others</h1>
                <br/><br/>
                


                <div class="titles">Choose a name for your project/requirement</div>
                <input class="input-cus" type="text" name="job-title" placeholder="e.g. Build me a Software" required/>
                <br/><br/><br/>





                <div class="titles">Job Field</div>
                <div class="row">
                    <div class="col-md-12">
                        <select name="job-field">
                            <option value="Telecaller">Tellecaller</option>
                            <option value="Receptionist">Receptionist</option>
                            <option value="Professor">Professor</option>
                            <option value="Computer Operator">Computer Operator</option>
                        </select>   
                    </div>
                </div>
                <br/><br/><br/>

                
                
                



                <div class="titles">Tell us more about your project</div>
                <p class="subtitles">Great project descriptions include a little bit about yourself, details of what you are trying to achieve, and any decisions that you have already made about your project. If there are things you are unsure of, don't worry, our will be able to help you fill in the blanks.</p>
                <textarea id="project-textarea" name="job-textarea" placeholder="Describe your project here..."  required></textarea>
                <br/><br/><br/>




                <div class="titles">Location (City)</div>
                <div class="row">
                    <div class="col-md-12">
                            <select name="city">
                                <option value="Mumbai">Mumbai</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Bangluru">Bangluru</option>
                            </select>   
                    </div> 
                </div>               
                <br/><br/><br/>


                <!-- <div class="file-div">
                <button type="button" id="upload-button">Upload file</button><input type="file" name="file" id="file"/> drag and drop or upload  file here
                </div>
                <br/><br/><br/> -->







                <div class="titles">What skills are required?</div>
                <input class="input-cus"type="text" name="skills" placeholder="What skills are required?" required/>
                <br/><br/><br/>


                
                <div class="row">
                    <div class="col-md-4">
                        <div class="titles">Year of Experience</div>
                            <select name="experience">
                                <option value="Fresher">Fresher</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5+</option>
                            </select>   
                    </div>
                    <div class="col-sm-8">
                        <div class="titles">Budget</div>
                            <select name="budget">
                                <option value="Micro Project (₹600 - 1500 INR)" selected="selected" label="Micro Project (₹600 - 1500 INR)">Micro Project (₹600 - 1500 INR)</option>
                                <option value="Simple project (₹1500 - 12500 INR)" label="Simple project (₹1500 - 12500 INR)">Simple project (₹1500 - 12500 INR)</option>
                                <option value="Very small project (₹12500 - 37500 INR)" label="Very small project (₹12500 - 37500 INR)">Very small project (₹12500 - 37500 INR)</option>
                                <option value="Small project (₹37500 - 75000 INR)" label="Small project (₹37500 - 75000 INR)">Small project (₹37500 - 75000 INR)</option>
                                <option value="Medium project (₹75000 - 150000 INR)" label="Medium project (₹75000 - 150000 INR)">Medium project (₹75000 - 150000 INR)</option>
                                <option value="Large project (₹150000 - 250000 INR)" label="Large project (₹150000 - 250000 INR)">Large project (₹150000 - 250000 INR)</option>
                                <option value="Larger project (₹250000 - 500000 INR)" label="Larger project (₹250000 - 500000 INR)">Larger project (₹250000 - 500000 INR)</option>
                                <option value="Very Large project (₹500000 - 1000000 INR)" label="Very Large project (₹500000 - 1000000 INR)">Very Large project (₹500000 - 1000000 INR)</option>
                                <option value="Huge project (₹1000000 - 2500000 INR)" label="Huge project (₹1000000 - 2500000 INR)">Huge project (₹1000000 - 2500000 INR)</option>
                                <option value="Major project (₹2500000 +  INR)" label="Major project (₹2500000 +  INR)">Major project (₹2500000 +  INR)</option>
                            </select>
                    </div>



                </div>               
                <br/><br/><br/>
















                <div class="titles">How do you want to pay?</div>                
                <input type="radio" checked name="pay" value="male"> &nbsp &nbsp Fixed price project</input><br/>
                <input type="radio" name="pay" value="female"> &nbsp &nbsp Hourly project</input>
                <br/><br/><br/>
                <!-- <div class="titles">What is your estimated budget?</div>
                <div class="row">
                    
                        <div class="col-sm-2">
                            <select name="currency">
                            <option value="USD" label="USD">USD</option>
                            <option value="NZD" label="NZD">NZD</option>
                            <option value="AUD" label="AUD">AUD</option>
                            <option value="GBP" label="GBP">GBP</option>
                            <option value="HKD" label="HKD">HKD</option>
                            <option value="SGD" label="SGD">SGD</option>
                            <option value="PHP" label="PHP">PHP</option>
                            <option value="EUR" label="EUR">EUR</option>
                            <option value="CAD" label="CAD">CAD</option>
                            <option value="ZAR" label="ZAR">ZAR</option>
                            <option value="INR" selected="selected" label="INR">INR</option>
                            <option value="JMD" label="JMD">JMD</option>
                            <option value="CLP" label="CLP">CLP</option>
                            <option value="MXN" label="MXN">MXN</option>
                            <option value="IDR" label="IDR">IDR</option>
                            <option value="MYR" label="MYR">MYR</option>
                            <option value="SEK" label="SEK">SEK</option>
                            <option value="JPY" label="JPY">JPY</option>
                            <option value="PLN" label="PLN">PLN</option>
                            <option value="BRL" label="BRL">BRL</option>
                            <option value="CNY" label="CNY">CNY</option>
                            <option value="VND" label="VND">VND</option>
                            <option value="ARS" label="ARS">ARS</option>
                            </select>   
                        </div>
                        <div class="col-sm-7">
                            <select name="budget">
                                <option value="Micro Project (₹600 - 1500 INR)" selected="selected" label="Micro Project (₹600 - 1500 INR)">Micro Project (₹600 - 1500 INR)</option>
                                <option value="Simple project (₹1500 - 12500 INR)" label="Simple project (₹1500 - 12500 INR)">Simple project (₹1500 - 12500 INR)</option>
                                <option value="Very small project (₹12500 - 37500 INR)" label="Very small project (₹12500 - 37500 INR)">Very small project (₹12500 - 37500 INR)</option>
                                <option value="Small project (₹37500 - 75000 INR)" label="Small project (₹37500 - 75000 INR)">Small project (₹37500 - 75000 INR)</option>
                                <option value="Medium project (₹75000 - 150000 INR)" label="Medium project (₹75000 - 150000 INR)">Medium project (₹75000 - 150000 INR)</option>
                                <option value="Large project (₹150000 - 250000 INR)" label="Large project (₹150000 - 250000 INR)">Large project (₹150000 - 250000 INR)</option>
                                <option value="Larger project (₹250000 - 500000 INR)" label="Larger project (₹250000 - 500000 INR)">Larger project (₹250000 - 500000 INR)</option>
                                <option value="Very Large project (₹500000 - 1000000 INR)" label="Very Large project (₹500000 - 1000000 INR)">Very Large project (₹500000 - 1000000 INR)</option>
                                <option value="Huge project (₹1000000 - 2500000 INR)" label="Huge project (₹1000000 - 2500000 INR)">Huge project (₹1000000 - 2500000 INR)</option>
                                <option value="Major project (₹2500000 +  INR)" label="Major project (₹2500000 +  INR)">Major project (₹2500000 +  INR)</option>
                            </select>
                        </div>
                   
                </div>
                <br/><br/><br/> -->



                <div class="titles">Job Duration</div>
                <input class="input-cus" type="number" name="duration" placeholder="e.g. 3 Months" required/>
                <br/><br/><br/>





                <button class="btn btn-success"type="submit" id="submit" name="submit">Post my Project</button>
            
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            
                </form>
            </div>

        </div>

    </div>



    </script>
</body>
</html>