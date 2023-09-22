<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>

    <!--Page icon-->
    <link rel="icon" type="image/x-icon" href="results.png">        
    
    <style>
        .disp{
            text-align: center;
            margin: 3%;
            padding:5%;
            
            border: 2px;
            border-style: solid;        
        }
        .rev{
            text-decoration:none;
        }
        .error{
            color: green;
        }
    </style>
    
</head>


<body>

    <div class="disp">
        <h3>Mark Entry</h3>
        <form method="POST" action="#">
            <label for="userid">Registration number : </label>
            <input type="number" name="userid" id="userid" required> 
            <br><br>
            <label for="dob">Date of Birth : </label>
            <input type="date" name="dob" id="dob" required> 
            <br><br>
            <label for="math">Maths mark : </label>
            <input type="number" min="0" max="100" name="math" id="math" required> 
            <br><br>
            <label for="english">English mark : </label>
            <input type="number" min="0" max="100" name="english" id="english" required> 
            <br><br>
            <label for="biology">Biology mark : </label>
            <input type="number" min="0" max="100" id="biology" name="biology" required> 
            <br><br>
            <label for="chemistry">Chemistry mark : </label>
            <input type="number" min="0" max="100" id="chemistry" name="chemistry" required> 
            <br><br>
            <label for="physics">Phyics mark : </label>
            <input type="number" min="0" max="100" id="physics" name="physics" required> 
            <br><br>
            
            <?php
                if(isset($_POST['submit']) and isset($_POST['userid'])){
                    if($_SERVER['REQUEST_METHOD']==='POST'){
                        session_start();
                    
                        //$year="hsdhf";
                    
                        $_SESSION['userid']=$_POST['userid'];
                        $_SESSION['dob']=$_POST['dob'];
                        $_SESSION['math']=$_POST['math'];
                        $_SESSION['english']=$_POST['english'];
                        $_SESSION['biology']=$_POST['biology'];
                        $_SESSION['chemistry']=$_POST['chemistry'];
                        $_SESSION['physics']=$_POST['physics'];

                        $userid = $_SESSION['userid'];
                        $dob = $_SESSION['dob'];

                        $math = $_SESSION['math'];
                        $english = $_SESSION['english'];
                        $biology = $_SESSION['biology'];
                        $chemistry = $_SESSION['chemistry'];
                        $physics = $_SESSION['physics'];

                        $total=$math+$english+$biology+$chemistry+$physics;
                        $percentage=($total/500)*100;
                        if($percentage>=91){
                            $grade="A+";
                        }
                        else if($percentage>=80){
                            $grade="A";
                        }
                        else if($percentage>=70){
                            $grade="B+";
                        }
                        else if($percentage>=60){
                            $grade="B";
                        }
                        else if($percentage>=50){
                            $grade="C+";
                        }
                        else if($percentage>=40){
                            $grade="C";
                        }
                        else{
                            $grade="fail";
                        }

                        $con = mysqli_connect("localhost","root","","results");

                        while(mysqli_query($con,"insert into students() values('$userid','$dob','$math','$english','$biology','$chemistry','$physics','$total','$percentage','$grade')")){
                            echo"<p class='error'>Success!!</p>";
                            break;
                        }

                        unset($_SESSION['userid']);
                        
                        session_destroy();
                        mysqli_close($con);

                    }
                }
            ?>

            <input type="Submit" name="submit" id="submit">
        </form>
    </div>

    <div class="disp">
        <h3><a class="rev" href="del.php" target="_blank">Delete Marks!!</a></h3>
    </div>

    <!--copyright footer-->
    <div>
        <a href="https://github.com/Mr1-D3CRYPT" target="_blank">
            <h5 style="margin-left:5%;font-family: Cardo;font-size: small;position: absolute;">© 2023 Mr1-D3CRYPT</h5>
        </a>
    </div>

</body>
</html>