<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="<?= PATH ?>">Главная</a></li>
                <li>Личный кабинет</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-12">
                <div class="product-one signup">
                    <div class="register-top heading">
                          <h2>Личный кабинет</h2>
                    </div>

                    <div class="register-main">
                        <div class="col-md-6 account-left">
                          <h2>Создать резюме</h2>
                            <form method="post" action="user/cabinet" id="cabinet" role="form" data-toggle="validator">
                                <div class="form-group has-feedback">
                                    <label for="name">Имя</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Имя" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="surname">Фамилия</label>
                                    <input type="text" name="surname" class="form-control" id="surname" placeholder="Фамилия" value="<?=isset($_SESSION['form_data']['surname']) ? h($_SESSION['form_data']['surname']) : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="sex">Пол:</label>
                                    <select name="sex" id="" class="form-control">
                                        <option value="f">Женский</option>
                                        <option value="m">Мужской</option>
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="education">Образование</label>
                                    <input type="text" name="education" class="form-control" id="name" placeholder="Образование" value="<?=isset($_SESSION['form_data']['education']) ? h($_SESSION['form_data']['education']) : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="resume">Резюме</label>
                                    <input type="text" name="resume_description" class="form-control" id="name" placeholder="Резюме" value="<?=isset($_SESSION['form_data']['resume']) ? h($_SESSION['form_data']['resume']) : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>

                                <!-- <input type="hidden" name="user_id" value="<?php // $_SESSION['user']['id'];?>"> -->
                                <input type="hidden" name="occupation_id" value="1">
                                
                                <button type="submit" class="btn btn-default">Зарегистрировать</button>
                            </form>
                            <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>