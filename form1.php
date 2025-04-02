<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resistration form</title>
    <style>
        body{
            display:flex;
       justify-content:center;
    align-items:center;
        }
.container{
    background-color:rgb(75, 125, 155);
    height:20rem;
    width:30rem;
    border-radius:5px;
   
}

.head{
    color:#030303;
    text-align:center;
}
.box{
    height:20px;
    width:100%;
    margin-top:15px;
    display:flex;
    justify-content:center;
} 
    </style>
</head>
<body>
    <div class="container">
    <div class="head">
    <h1>Resistration form</h1>
    </div>   
     <hr>
    
        <form action="submit.php" method="POST">
            <div class="box">
                <label for="">Name</label>
            <input type="text" name="name">
            </div>
            <div class="box">
                <label for="">Email</label>
            <input type="email" name="email" >
            </div>
            <div class="box">
                <label for="" > Age </label>
            <input type="number" name="age">
            </div>
            <div class="box" >
                <label for="">course</label>
              <input type="text" name="course">
        </div>
        <div class="box">
            <input type="submit">
        </div>


        </form>
    </div>
</body>
</html>