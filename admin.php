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
    </style>
    
</head>


<body>

    <div class="disp">
        <h3>Mark Entry</h3>
        <form action="">
            <label for="userid">Registration number : </label>
            <input type="text" id="userid" required> 
            <br><br>
            <label for="math">Maths mark : </label>
            <input type="text" id="math" required> 
            <br><br>
            <label for="english">English mark : </label>
            <input type="text" id="english" required> 
            <br><br>
            <label for="biology">Biology mark : </label>
            <input type="text" id="biology" required> 
            <br><br>
            <label for="chemistry">Chemistry mark : </label>
            <input type="text" id="chemistry" required> 
            <br><br>
            <input type="Submit"/>
        </form>
    </div>

    <div class="disp">
        <h3><a class="rev" href="reeval.php" target="_blank">Re-Evaluation Queries</a></h3>
    </div>

    <!--copyright footer-->
    <div>
        <a href="https://github.com/Mr1-D3CRYPT" target="_blank">
            <h5 style="margin-left:5%;font-family: Cardo;font-size: small;position: absolute;">© 2023 Mr1-D3CRYPT</h5>
        </a>
    </div>

</body>
</html>