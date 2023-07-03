<div class="site-index" id="registerSite">
    <div class="container col-4 loginForm border border-4 border-success rounded pt-3 pb-2">
        <p class="fs-4 text-center"><?= Yii::t('app', 'Sign Up') ?></p>
        <form id="formRegister" class="needs-validation" novalidate>
            <div>
                <label for="username" class="form-label pt-1">Username</label>
                <input type="text" class="form-control" id="username" required placeholder="<?= Yii::t('app', 'Enter Your Username') ?>">
                <div class="invalid-feedback"><?= Yii::t('app', 'Please input username.') ?></div>
                <div class="valid-feedback"></div>
            </div>
            <div>
                <label for="email" class="form-label pt-1">Email</label>
                <input type="email" class="form-control" id="email" required placeholder="<?= Yii::t('app', 'Enter Your Email') ?>">
                <div class="invalid-feedback"><?= Yii::t('app', 'Please input email.') ?></div>
                <div class="valid-feedback"></div>
            </div>
            <div>
                <label for="password" class="form-label pt-1"><?= Yii::t('app', 'Password') ?></label>
                <input type="password" class="form-control" id="password" required placeholder="<?= Yii::t('app', 'Enter Your Password') ?>">
                <div class="invalid-feedback"><?= Yii::t('app', 'Please input password.') ?></div>
                <div class="valid-feedback"></div>
            </div>
            <div>
                <label for="confPassword" class="form-label pt-1"><?= Yii::t('app', 'Confirm Password') ?></label>
                <input type="password" class="form-control" id="confPassword" required placeholder="<?= Yii::t('app', 'Enter Your Password') ?>">
                <div class="invalid-feedback"><?= Yii::t('app', 'Please input password.') ?></div>
                <div class="valid-feedback"></div>
            </div>
        </form>
        <div class="row justify-content-center pt-3">
            <div class="col-5 d-grid">
                <button class="btn btn-success" id="submitBtn"><?= Yii::t('app', 'Register') ?></button>
            </div>
            <div class="d-flex justify-content-center pt-2">
                <a class="link text-center" href='<?= Yii::$app->getUrlManager()->createUrl('memory-login/login') ?>'><?= Yii::t('app', 'Already Registered? Sign In Here!') ?></a>
            </div>
        </div>
    </div>
</div>

<script>
    $(function()
    {
        var adminId = <?=$adminId?>;

        $("#submitBtn").on("click",function()
        {
            
            if ($("#email").val() == "" || $("#username").val() == "" || $("#password").val() == "" || $("#confPassword").val() == "") 
            {
                $("#formRegister").addClass('was-validated')
                alert('<?= Yii::t('app', 'All input must be filled!') ?>');
            } 
            else if ( $("#username").val().length > 20)
            {
                alert('<?= Yii::t('app', 'Username too long! Max: 20 Char') ?>');
            }
            else if ($("#email").val().length > 256 || $("#password").val().length > 256 || $("#confPassword").val().length > 256 ) 
            {
                alert('<?= Yii::t('app', 'Input too long! Max: 256 Char') ?>');
            }
            else if ($("#password").val() != $("#confPassword").val()) 
            {
                alert('<?= Yii::t('app', 'Password and Confirm Password do not match!') ?>');
            }
            else 
            {
                var data = {
                    email : $("#email").val(),
                    username : $("#username").val(),
                    password : $("#password").val(),
                    adminId : adminId,
                };
                $.ajax({
                    type : 'POST',
                    data : data,
                    dataType : 'JSON',
                    url : '<?= Yii::$app->getUrlManager()->createUrl('memory-login/add-user') ?>',
                    success : function(result)
                    {
                        if (result.errNum == 0) 
                        {
                            title = ["Ajojing", "Trying To Be A Sherpa", "Bored Guy", "A Win Is A Win"];
                            hint = ["Turn Off In-game Music 10 Times", "Access Guide Book 20 Times Without Changing Menu", "Access Guide Book 40 Times Without Changing Menu", "Win With Minus Score"];
                            var achieveData = {
                                title : title,
                                hint : hint,
                                userId : result.outId,
                                adminId : adminId,
                            };
                            $.ajax({
                                type : 'POST',
                                data : achieveData,
                                dataType : 'JSON',
                                url : '<?= Yii::$app->getUrlManager()->createUrl('memory-login/add-achievement') ?>',
                                success : function(result)
                                {

                                    alert("<?= Yii::t('app', 'User Registered Successfully') ?>");
                                    window.location.href ='<?= Yii::$app->getUrlManager()->createUrl('memory-login/login') ?>'
                                }
                            })
                        }
                        else if (result.errNum == 1)
                        {
                            alert("Error Code (" + result.errNum + ")  : " + result.errStr);
                        }
                        else
                        {
                            alert(result.email[0])
                        }
                    }
                });
            }
        });
    });
</script>