<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="contant">
        <div class="box">

            
                
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
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

                                <div class="kaensguidanc user">
                                <input class="input" type="text-indent" name="name" placeholder="User" value="<?php echo $name; ?>">
                                <i class="fas fa-at"></i>
                                </div>

                                <div class="kaensguidanc email">
                                <input class="input" type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
                                <i class="fas fa-at"></i>
                                </div>

                                <div class="kaensguidanc password">
                                <input class="input" type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
                                <i class="fas fa-key"></i>
                                </div>

                                
                                <input class="submit" type="submit" name="submit" value="Регистрация" />
                        
                            </form>
                            </div>
                    </div>
                </div>



                    
                <?php endif; ?>
                <br/>
                <br/>
        
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>