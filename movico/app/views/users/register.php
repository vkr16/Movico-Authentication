<?php require APPROOT . '/views/includes/head.php'; ?>

<body style="background-image: url('<?= URLROOT ?>/public/img/banner.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

<?php require APPROOT . '/views/includes/navigation.php'; ?>

<!-- mine -->
<div class="container text-white d-flex text-light" style="font-family: Montserrat; height: 50vh">
        <div class="col-md-4 align-self-center" style="margin-top: 40vh">
            <h3 style="font-family: Maven Pro">A Big Change Starts Here,<br>Sign Up Now! </h3><br>
            <form action="<?php echo URLROOT; ?>/users/register" method="POST">
              <div class="form-group">
                <label for="inputUsername">Username</label>
                <input required="" name="username" type="text" class="form-control" id="inputUsername" placeholder="Username" autocomplete="off">
                <span class="invalidFeedback text-warning" >
                    <?php echo $data['usernameError']; ?>
                </span>
              </div>
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input required="" name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                <span class="invalidFeedback text-warning" >
                    <?php echo $data['emailError']; ?>
                </span>
              </div>
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input required="" name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                 <span class="invalidFeedback text-warning" >
                    <?php echo $data['passwordError']; ?>
                </span>
              </div>
              <div class="form-group">
                <label for="inputConfirmPassword">Confirm Password</label>
                <input required="" name="confirmPassword" type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password">
                 <span class="invalidFeedback text-warning" >
                    <?php echo $data['confirmPasswordError']; ?>
                </span>
              </div>
              <button type="submit" id="submit" name="submit" class="btn btn-success">Sign Up</button>
                &emsp;<small class="text-light" style="">Have an account? <a href="<?php echo URLROOT; ?>/users/login" style="color:#00a103">Sign In</a> now.</small>
            </form>
        </div>
    </div>
