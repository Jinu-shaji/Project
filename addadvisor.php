<!DOCTYPE html>
    <head>
        <!--meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script-->
        <title>Users</title>
<link rel="stylesheet" type="text/css" href="maincss.css">
        <link rel="stylesheet" type="text/css" href="form.css">

        <script>
            $(document).ready(function(){
                $('#user').addClass("active");
            });
        </script>
        
    </head>
    <body>
<header>
            <div class="main">
    <ul>
<li><a href="adminhome.php">Home</a></li></ul></div>
        <div class="title">
            <h3>PROJECT PIVOT </h3></div></header>
<font face="Bahnschrift Condensed">

<center><h2>ADD ADVISOR</h2>
<form name="form2" method="post" action="" class="f2" >

<div class="input-group"><table  width=90%>
        <tr><td>
<label>Batch:</label></td><td>
<input type="text" name="batch" id="batch" required></td></tr>
</div>
<div class="input-group"><tr><td>
<label>Name:</label></td><td>
<input type="text" name="name" id="name" pattern="[a-z A-Z]+" required></div>

<div class="input-group"><tr><td>
<label>Email:</label></td><td>
<input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></div>
<div class="input-group"><tr><td>
<label>PhoneNo:</label></td><td>
<input name="phone" id="phone" pattern="[9876][0-9]{9}" maxlength="10" minlength="10" required></div>


       
       <div class="input-group"><tr><td>
<button type="reset" name="reset" class="btn" >RESET</button>
</td><td>
<button type="submit" name="save" class="btn" >ADD</button>
</td></tr></font>
</div>
</form>
</body>

</html>
