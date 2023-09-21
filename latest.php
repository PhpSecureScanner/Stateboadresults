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
            margin: 10%;
            padding:5%;
            
            border: 2px;
            border-style: solid;
        }
    </style>
    
</head>


<body>

    <div class="disp">
    <h4 style="color:red;">Welcome to this page!! Enter the details to view the results of VHSE 2023!!</h4>
        <form action="results.php">
            <label for="regno">Resgistration Number : </label>
            <input type="text" id="regno" required>
            <br><br>
            <label for="dob">Date of birth : </label>
            <input type="Date" required>
            <br><br>
            <input type="submit" value="View results"/>
        </form>

    </div>

    <!--copyright footer-->
    <br>
    <br>
    <br>
    <div>
        <a href="https://github.com/Mr1-D3CRYPT" target="_blank">
            <h5 style="margin:10%;margin-top:15%;font-family: Cardo;font-size: small;position: absolute;">© 2023 Mr1-D3CRYPT</h5>
        </a>
    </div>

</body>
</html>