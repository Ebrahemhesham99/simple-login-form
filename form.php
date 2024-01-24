<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" 
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
    crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 left-side-image">
            </div> 
           <div class="col-md-6 right">
                <div class="text">
                    <h1>Join the community of task-management </h1>
                </div>
             <form action="info.php" method="POST">
                <div class="input-box">
                   <header>Sign in</header>
                   <div class="input-field">
                        <input type="text" class="input" id="email" required="" name="email">
                        <label for="email">Email</label> 
                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" id="pass" required="" name="pass">
                        <label for="pass">Password</label>
                    </div> 
                   <div class="input-field">
                        <input type="submit" class="submit" value="log in">
                   </div> 
                   <div class="signin">
                    <span>Already have an account? <a href="#" onclick="toggleForm()">sign up here</a></span>
                   </div>
                </div> 
             </form>
            </div>
            
            <!-- <div class="col-md-6 left">
                <div class="text">
                    <h1>Join the community of task-management </h1>
                </div>
                <form action="info.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">First Name:</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Last Name:</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <select class="form-control" id="country" name="country" required>
                <option value="Egypt">Egypt</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                    <option value="UK">UK</option>
                    <option value="Australia">Australia</option>
                </select>
            </div>
                   <div class="signin">
                    <span>Already have an account? <a href="#" onclick="toggleForm()">sign up here</a></span>
                   </div>
                </div> 
             </form>
             <div class="col-md-6 right-side-image">
            </div> -->
            </div>
        </div>
    </div>
</div>
<script src="js/form.js"></script>
</body>
</html>