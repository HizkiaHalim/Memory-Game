<div class="site-index my-auto">
    <div class="container col-4 loginForm border border-4 border-success rounded py-5">
        <p class="fs-3 text-center"><?= Yii::t('app', 'Login') ?></p>
        <form id="formLogin" class="needs-validation" novalidate>
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
        </form>
        <div class="row justify-content-center pt-4">
            <div class="col-5 d-grid">
                <button id="submitBtn" class="btn btn-success"><?= Yii::t('app', 'Login') ?></button>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-4">
            <a class="link text-center" href='<?= Yii::$app->getUrlManager()->createUrl('memory-login/register') ?>'><?= Yii::t('app', 'Not Registered Yet? Sign Up Here!') ?></a>
        </div>
    </div>
</div>

<script>
    $(function()
    {
        $("#submitBtn").on("click",function()
        {
            if ($("#email").val() == "" || $("#password").val() == "" ) 
            {
                $("#formLogin").addClass('was-validated')
                alert('<?= Yii::t('app', 'All input must be filled!') ?>');
            } 
            else if ($("#email").val().length > 256 || $("#password").val().length > 256 ) 
            {
                alert('<?= Yii::t('app', 'Input too long! Max: 256 Char') ?>');
            }
            else
            {
                var data = {
                    email : $("#email").val(),
                    password : $("#password").val(),
                };
                $.ajax({
                    type : 'POST',
                    data : data,
                    dataType : 'JSON',
                    url : '<?= Yii::$app->getUrlManager()->createUrl('memory-login/verify-login') ?>',
                    success : function(result)
                    {
                        if (result == 0) 
                        {
                            window.location.href ='<?= Yii::$app->getUrlManager()->createUrl('memory-home/home') ?>'
                        }
                        else if (result == 1)
                        {
                            alert('<?= Yii::t('app', 'Wrong Username or Password') ?>');
                        }
                    }
                });
            }
        });

    });
</script>