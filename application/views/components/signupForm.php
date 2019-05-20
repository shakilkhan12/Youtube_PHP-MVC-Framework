<h2>Create new account</h2>
    <form action="<?php echo BASEURL; ?>/accountController/createAccount" method="POST">

    <div class="form-group">
    <input type="text" name="fullName" class="form-control" placeholder="FullName..." value="<?php if(!empty($data['fullName'])): echo $data['fullName']; endif; ?>">
    <div class="error">
        <?php if(!empty($data['fullNameError'])): echo $data['fullNameError']; endif; ?>
    </div>
    </div>
    <!-- Close form-group -->
    <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Email..." value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>">
    <div class="error">
        <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
    </div>
    </div>
    <!-- Close form-group -->
    <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Create new password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>">
    <div class="error">
        <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
    </div>
    </div>
    <!-- Close form-group -->
    <div class="form-group">
    <input type="submit" name="singupBtn" class="btn btn-primary" value="Register">
    </div>
    <!-- Close form-group -->

    </form>