<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div id="content">
        <div class="box">

           
                
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="sokolida-season">
                    <div class="keason-seriously">

                            <div class="nazdejtunim">
                            
                            </div>
                            <div class="signup-form">
                            <form action="#" method="post">
                                <div class="kaensguidanc email">
                                <input class="input" type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"">
                                <i class="fas fa-at"></i>
                                </div>

                                <div class="kaensguidanc password">
                                <input class="input" type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
                                <i class="fas fa-key"></i>
                                </div>

                                
                                <input class="submit" type="submit" name="submit" value="Вход" />
                        
                            </form>
                            </div>
                    </div>
                </div>




                


            </div>
        
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>