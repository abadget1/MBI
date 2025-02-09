<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-md-4 col-md-offset-4">
                <form method="POST" action="<?php echo site_url('Register/create')?>">
                  <div class="text-center">
                    <a href="<?php echo site_url('admin/Admin');?>" class="text-center"><img src="<?php echo base_url(); ?>/assets/images/MBILogo2.png"></a>
                        <div class="form-group">
                          <label for="firstname">First Name</label>
                          <input type="text" class="form-control" name="firstname" required placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                          <label for="lastname">Last Name</label>
                          <input type="text" class="form-control"  name="lastname" required placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control"  name="username" required placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                          <label for="birthday">Birthday</label>
                          <input type="date" class="form-control" name="birthday" required placeholder="Enter Birthday">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" required placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" required placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" name="address" required placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="level">Select Job Level</label>
                            <select class="form-control" name="level" required>
                              <option>Accountant</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-primary" value="save">Submit</button>
                          <div>
                            <button type="button" class="btn btn-link"><a href="Login">Cancel<a></button>
                          </div>
                      </form>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
