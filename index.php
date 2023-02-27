<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Project</title>
</head> 
<style>
    h1{
        text-align: center;
    }
       form {
        display: inline-grid;
        padding: 10px;
        margin-left: 35%;
}
input{
    width: 400px;
    padding-bottom: 8px;
}
button{
    width: 80px;
   
}
label{
    padding-bottom: 10px;
   
}
</style>
<body>
    <h1>Information Input</h1>
    <form  action="superGlobal.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter Your Name"  required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter Your Email" required>

    <button>Submit</button>
    </form>
</body>
</html>