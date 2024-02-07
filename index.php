<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">VOTING SYSTEM</h1>
     <div class="bg-info pb-5">
        <h2 class="text-center py-5">Login</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username" 
                    placeholder="Enter user name" required="required">
                </div>

                 <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile" 
                    placeholder="Enter your mobile number" required="required" maxlength="10" minlength="10">
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" 
                    placeholder="Enter your password" required="required">
                </div>

                <div class="mb-3">
                   <select name="std" class="form-select w-50 m-auto">
                         <option value="group">Group</option>
                         <option value="voter">Voter</option>
                   </select>
                </div>

                <button type="submit" class="btn btn-dark my-4">Login</button>
                <p>Don't have an account? <a href="./partials/registration.php" class="text-white">Register Here</a> </p>  
                
            </form>
        </div>
     </div>
    
</body>
</html>