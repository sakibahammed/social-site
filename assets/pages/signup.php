
    <h4 class=" text-center mt-5">Welcome To The Free Social Media Without Restriction</h4>

   
    <div class="login">
        <div class="col-4 bg-white border rounded p-3 shadow-sm">
            <form method="post" action="assets/php/actions.php?signup">
                <div class="d-flex justify-content-center">
                </div>
                <h1 class="h5 mb-3 fw-normal">Create new account</h1>
                <div class="d-flex">
                    <div class="form-floating mt-1 col-6 ">
                        <input type="text" name="first_name" class="form-control rounded-0" placeholder="username/email">
                        <label for="floatingInput">first name</label>
                    </div>
                    <div class="form-floating mt-1 col-6">
                        <input type="text" name="last_name" class="form-control rounded-0" placeholder="username/email">
                        <label for="floatingInput">last name</label>
                    </div>
                </div>

                <?=showError('first_name')?>
                <?=showError('last_name')?>
                <div class="d-flex gap-3 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                            value="1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios3"
                            value="2">
                        <label class="form-check-label" for="exampleRadios3">
                            Female
                        </label>
                    </div>
                    
                </div>
                <div class="form-floating mt-1">
                    <input type="email" name="email" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">email</label>
                </div>
                <?=showError('email')?>
                <div class="form-floating mt-1">
                    <input type="text" name="username" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">username</label>
                </div>
                <?=showError('username')?>
                <div class="form-floating mt-1">
                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">password</label>
                </div>
                <?=showError('password')?>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit">Sign Up</button>
                    <a href="#" class="text-decoration-none">Already have an account ?</a>


                </div>

            </form>
        </div>
    </div>

