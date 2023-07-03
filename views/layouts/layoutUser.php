<?php
    use app\assets\AppAsset;
    
    use yii\bootstrap5\NavBar;

    AppAsset::register($this);

    $this->registerCsrfMetaTags();
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang = "<?= Yii::$app->language ?>" class = "h-100">
    <head>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100 mainBody">
    <?php $this->beginBody() ?>
        <header id = "header">
            <?php 
                NavBar::begin([]);
                NavBar::end();
            ?>
            <nav class="navbar navbar-dark navbar-expand-md fixed-top justify-content-center">
                <div class="row container col-10 justify-content-between align-middle">
                    <div class="row col-8">
                        <!-- <?= Yii::$app->getUrlManager()->createUrl('memory-login/login') ?> -->
                        <ul class="navbar-nav">
                            <a class="navbar-brand" href='<?= Yii::$app->getUrlManager()->createUrl('memory-home/home') ?>'>Memory Game</a>
                            <li class="nav-item px-4">
                                <a class="nav-link active" aria-current="page" href="<?= Yii::$app->getUrlManager()->createUrl('memory-home/home') ?>"><?= Yii::t('app', 'Home') ?></a>
                            </li>
                            <li class="nav-item px-4">
                                <a class="nav-link active" aria-current="page" href="<?= Yii::$app->getUrlManager()->createUrl('memory-leaderboard/leaderboard') ?>"><?= Yii::t('app', 'Leaderboard') ?></a>
                            </li>
                            <li class="nav-item px-4">
                                <a class="nav-link active" aria-current="page" href="<?= Yii::$app->getUrlManager()->createUrl('memory-history/history') ?>"><?= Yii::t('app', 'History') ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2 border border-white border-2 rounded-3 p-0 text-center">
                        <a class="nav-link p-1 " id="userBtn" aria-current="page" href="<?= Yii::$app->getUrlManager()->createUrl('memory-user/user-page') ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-person-circle" viewBox="0 1 18 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <?= Yii::t('app', 'My Profile') ?>
                        </a>
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
        // $("#selectLang").on('change',function()
        // {
        //     var data = {
        //         lang : $("#selectLang").val(),
        //     };
        //     $.ajax
        //     ({
        //     type : 'POST',
        //     data : data,
        //     dataType : 'JSON',
        //     url : '<?= Yii::$app->getUrlManager()->createUrl('rentabook-login/set-lang') ?>',
        //     success : function(result)
        //     {
        //         if (result == 0) {
                    
        //             alert("<?= Yii::t('app', 'Bahasa Berhasil Diubah') ?>");
        //         }
        //         location.reload();
        //     }
        //     })
        // })
    })
</script>