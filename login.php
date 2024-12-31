 <?php session_start();?>
 <!-- Login Section -->
 <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center mb-4">Login</h2>
                    
                    <?php if(isset($_SESSION['error'])):?>
                         <!-- Error Alert -->
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Login gagal!</strong> <?php echo $_SESSION['error'];?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif;?>    
                    
                    <form method="post" action="controller/auth.php">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
