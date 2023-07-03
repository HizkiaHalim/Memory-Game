<?php
    use app\assets\AppAsset;

    AppAsset::register($this);

    $this->registerCsrfMetaTags();
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang = "<?= Yii::$app->language ?>" class = "h-100">
    <head>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100 mainBody" >
    <?php $this->beginBody() ?>
        <header id = "header">
            <nav class = "navbar navbar-dark navbar-expand-md fixed-top justify-content-center">
                <div class="row container col-10 justify-content-between">
                    <div class = "col-2">
                        <a class="navbar-brand" href='<?= Yii::$app->getUrlManager()->createUrl('memory-login/login') ?>'>Memory Game</a>
                    </div>
                    <div class = "col-2">
                        <select class="form-select" id="selectLang">
                            <option selected><?= Yii::t('app', 'Language') ?></option>
                            <option value='eng'>English</option>
                            <option value='idn'>Indonesia</option>
                        </select>
                    </div>
                </div>
            </nav>
        </header>
        
        <?= $content ?>

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

<script>
    $(function()
    {
        $("#selectLang").on('change',function()
        {
            var data = {
                lang : $("#selectLang").val(),
            };
            $.ajax
            ({
            type : 'POST',
            data : data,
            dataType : 'JSON',
            url : '<?= Yii::$app->getUrlManager()->createUrl('memory-login/set-lang') ?>',
            success : function(result)
            {
                if (result == 0) {
                    alert("<?= Yii::t('app', 'Bahasa Berhasil Diubah') ?>");
                }
                location.reload();
            }
            })
        })
    })
</script>