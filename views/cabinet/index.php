<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
<div id="content">
        <div class="box">


            <h1>Кабинет пользователя</h1>
            
            <h3>Привет, <?php echo $user['name'];?>!</h3>
            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <li><a href="/cart">Выбранные авто</a></li>
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>