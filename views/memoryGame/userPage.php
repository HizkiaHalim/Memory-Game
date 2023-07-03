<div class="site-index my-auto">
    <div class="container col-4 border border-4 border-success rounded py-3 giveWhite">
        <p class="fs-4 text-center"><?= Yii::t('app', 'Profile') ?></p>
        <div>
            <p id="username"></p>
            <div id="emailprofile">
            </div>
        </div>
        <div class="d-grid mt-3 gap-2">
            <button type="button" id="editBtn" class="btn btn-outline-success btn-block" data-bs-toggle="modal" data-bs-target="#editUser"><?= Yii::t('app', 'Edit Profile') ?></button>
        </div>
        <div class="d-grid mt-3 gap-2">
            <button  type="button" id="changepassBtn" class="btn btn-outline-success btn-block" data-bs-toggle="modal" data-bs-target="#editPass"><?= Yii::t('app', 'Change Password') ?></button>
        </div>
        <div class="d-grid mt-3 gap-2">
            <button  type="button" id="achievementBtn" class="btn btn-outline-success btn-block" data-bs-toggle="modal" data-bs-target="#achievement"><?= Yii::t('app', 'Achievement') ?></button>
        </div>
        <div class="d-grid mt-3 gap-2">
            <button class="btn btn-outline-success btn-block" data-bs-toggle="modal" data-bs-target="#changeLang"><?= Yii::t('app', 'Change Language') ?></button>
        </div>
        <div class="d-grid mt-3 gap-2">
            <a class="btn btn-outline-success btn-block" href='<?= Yii::$app->getUrlManager()->createUrl('memory-login/login') ?>' ><?= Yii::t('app', 'Logout') ?></a>
        </div>
    </div>
    
    <form id="formEdit" class="needs-validation" novalidate>
        <div class="modal" id="editUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?= Yii::t('app', 'Edit Profile') ?></h5>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label for="usernameEdit" class="form-label pt-1">Username</label>
                            <input type="text" class="form-control" id="usernameEdit" required placeholder="<?= Yii::t('app', 'Enter Your Username') ?>">
                            <div class="invalid-feedback"><?= Yii::t('app', 'Please input username.') ?></div>
                            <div class="valid-feedback"></div>
                        </div>
                        <div>
                            <label for="emailEdit" class="form-label pt-1">Email</label>
                            <input type="email" class="form-control" id="emailEdit" required placeholder="<?= Yii::t('app', 'Enter Your Email') ?>">
                            <div class="invalid-feedback"><?= Yii::t('app', 'Please input email.') ?></div>
                            <div class="valid-feedback"></div>
                        </div>
                        <div>
                            <label for="passwordEdit" class="form-label pt-1"><?= Yii::t('app', 'Password') ?></label>
                            <input type="password" class="form-control" id="passwordEdit" required placeholder="<?= Yii::t('app', 'Enter Your Password') ?>">
                            <div class="invalid-feedback"><?= Yii::t('app', 'Please input your password.') ?></div>
                            <div class="valid-feedback"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
                        <button type="button" class="btn btn-success" id="submitEdit"><?= Yii::t('app', 'Save changes') ?></button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="modal" id="achievement" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= Yii::t('app', 'Achievement') ?></h5>
                </div>
                <div class="modal-body" id="achievementContainer">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
                </div>
            </div>
        </div>
    </div>

    <form id="formPassword" class="needs-validation" novalidate>
        <div class="modal" id="editPass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?= Yii::t('app', 'Change Password') ?></h5>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label for="newPasswordEdit" class="form-label pt-1"><?= Yii::t('app', 'New Password') ?></label>
                            <input type="password" class="form-control" id="newPasswordEdit" required placeholder="<?= Yii::t('app', 'Enter Your New Password') ?>">
                            <div class="invalid-feedback"><?= Yii::t('app', 'Please input your new password.') ?></div>
                            <div class="valid-feedback"></div>
                        </div>
                        <div>
                            <label for="confPasswordEdit" class="form-label pt-1"><?= Yii::t('app', 'Confirm New Password') ?></label>
                            <input type="password" class="form-control" id="confPasswordEdit" required placeholder="<?= Yii::t('app', 'Enter Your New Password') ?>">
                            <div class="invalid-feedback"><?= Yii::t('app', 'Please input your new password.') ?></div>
                            <div class="valid-feedback"></div>
                        </div>
                        <div>
                            <label for="oldPasswordEdit" class="form-label pt-1"><?= Yii::t('app', 'Old Password') ?></label>
                            <input type="password" class="form-control" id="oldPasswordEdit" required placeholder="<?= Yii::t('app', 'Enter Your Password') ?>">
                            <div class="invalid-feedback"><?= Yii::t('app', 'Please input your old password.') ?></div>
                            <div class="valid-feedback"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
                        <button type="button" class="btn btn-success" id="submitEditPass"><?= Yii::t('app', 'Save changes') ?></button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="modal" id="changeLang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= Yii::t('app', 'Change Language') ?></h5>
                </div>
                <div class="modal-body">
                    <div>
                        <label for="language" class="form-label pt-1"><?= Yii::t('app', 'Language') ?></label>
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="language" id="eng" autocomplete="off"  value="eng">
                            <label class="btn btn-outline-success" for="eng">English</label>
    
                            <input type="radio" class="btn-check" name="language" id="idn" autocomplete="off" value="idn">
                            <label class="btn btn-outline-success" for="idn">Indonesia</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
                    <button type="button" class="btn btn-success" id="submitLang"><?= Yii::t('app', 'Save changes') ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function()
    {
        var userDetail = <?=$userDetail?>;
        var adminId = <?=$adminId?>;
        var achievement = <?=$achievement?>;

        $("#username").html("Username : " + userDetail[0].USERNAME);
        $("#emailprofile").html("Email : " + userDetail[0].EMAIL);
        if ('<?= Yii::$app->session['lang']?>' == 'idn' || '<?= Yii::$app->session['lang']?>'== 'eng') 
        {
            $(":radio[name='language'][id='" + '<?= Yii::$app->session['lang']?>' + "']").prop('checked', true);
        } 
        else 
        {
            $(":radio[name='language'][id='eng']").prop('checked', true);
            
        }
        
        $("#achievementBtn").on('click', function()
        {
            $("#achievementContainer").empty();
           for (let i = 0; i < achievement.length; i++) {
                if (achievement[i].OBTAIN_STATUS == 'NOT OBTAINED') 
                {
                    $("#achievementContainer").append("<div class='border border-2 border-secondary px-2 my-3'><p class='text-center fw-bold'>" + achievement[i].TITLE + "</p><p>?????????????</p><p>Status : " + achievement[i].OBTAIN_STATUS + "</p></div>")
                }
                else
                {
                    $("#achievementContainer").append("<div class='border border-2 border-success px-2 my-3'><p class='text-center fw-bold'>" + achievement[i].TITLE + "</p><p>" + achievement[i].HINT + "</p><p>Status : " + achievement[i].OBTAIN_STATUS + "</p></div>")
                }
           }
        });

        $("#editBtn").on('click', function()
        {
            $("#usernameEdit").val(userDetail[0].USERNAME);
            $("#emailEdit").val(userDetail[0].EMAIL);
            $("#passwordEdit").val("");
        });

        $("#changepassBtn").on('click', function()
        {
            $("#newPasswordEdit").val("");
            $("#confPasswordEdit").val("");
            $("#oldPasswordEdit").val("");
        });

        $("#submitEditPass").on('click', function()
        {
            if ($("#newPasswordEdit").val() == "" || $("#confPasswordEdit").val() == "" || $("#oldPasswordEdit").val() == "") 
            {
                $("#formPassword").addClass('was-validated')
                alert('<?= Yii::t('app', 'All input must be filled!') ?>');
            } 
            else if ($("#newPasswordEdit").val().length > 256 || $("#confPasswordEdit").val().length > 256 || $("#oldPasswordEdit").val().length > 256) 
            {
                alert('<?= Yii::t('app', 'Input too long! Max: 256 Char') ?>');
            }
            else if ($("#newPasswordEdit").val() != $("#confPasswordEdit").val()) 
            {
                alert('<?= Yii::t('app', 'New Password and Confirm New Password do not match!') ?>');
            }
            else
            {
                var data = {
                    id : userDetail[0].ID,
                    username : userDetail[0].USERNAME,
                    email : userDetail[0].EMAIL,
                    password : $("#newPasswordEdit").val(),
                    oldPassword : $("#oldPasswordEdit").val(),
                    realPassword : userDetail[0].PASSWORD,
                    adminId : adminId,
                };
                $.ajax({
                    type : 'POST',
                    data : data,
                    dataType : 'JSON',
                    url : '<?= Yii::$app->getUrlManager()->createUrl('memory-user/edit-password') ?>',
                    success : function(result)
                    {
                        if (result == 1)
                        {
                            alert('<?= Yii::t('app', 'Wrong Password') ?>');
                        }
                        else if (result.errNum == 1)
                        {
                            alert("Error Code (" + result.errNum + ")  : " + result.errStr);
                        }
                        else
                        {
                            alert('<?= Yii::t('app', 'Profile Updated Successfully') ?>');
                            location.reload();
                        }
                    }
                });
            }
        });

        $("#submitEdit").on('click', function()
        {
            if ($("#emailEdit").val() == "" || $("#passwordEdit").val() == "" || $("#usernameEdit").val() == "") 
            {
                $("#formEdit").addClass('was-validated')
                alert('<?= Yii::t('app', 'All input must be filled!') ?>');
            } 
            else if ( $("#usernameEdit").val().length > 20)
            {
                alert('<?= Yii::t('app', 'Username too long! Max: 20 Char') ?>');
            }
            else if ($("#emailEdit").val().length > 256 || $("#passwordEdit").val().length > 256) 
            {
                alert('<?= Yii::t('app', 'Input too long! Max: 256 Char') ?>');
            }
            else
            {
                var data = {
                    id : userDetail[0].ID,
                    username : $("#usernameEdit").val(),
                    email : $("#emailEdit").val(),
                    password : $("#passwordEdit").val(),
                    realPassword : userDetail[0].PASSWORD,
                    adminId : adminId,
                };
                $.ajax({
                    type : 'POST',
                    data : data,
                    dataType : 'JSON',
                    url : '<?= Yii::$app->getUrlManager()->createUrl('memory-user/edit-profile') ?>',
                    success : function(result)
                    {
                        if (result == 1)
                        {
                            alert('<?= Yii::t('app', 'Wrong Password') ?>');
                        }
                        else if (result.errNum == 1)
                        {
                            alert("Error Code (" + result.errNum + ")  : " + result.errStr);
                        }
                        else
                        {
                            alert('<?= Yii::t('app', 'Profile Updated Successfully') ?>');
                            location.reload();
                        }
                    }
                });
            }
        });

        $("#submitLang").on('click', function()
        {
            var data = {
                lang : $(":radio[name=language]:checked").val()
            };
            $.ajax({
                type : 'POST',
                data : data,
                dataType : 'JSON',
                url : '<?= Yii::$app->getUrlManager()->createUrl('memory-user/set-lang') ?>',
                success : function(result)
                {
                    if (result == 0) {
                    alert("<?= Yii::t('app', 'Bahasa Berhasil Diubah') ?>");
                    }
                    location.reload();
                }
            });
        });
    })
</script>