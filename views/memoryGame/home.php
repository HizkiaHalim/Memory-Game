<div class="d-flex justify-content-center site-index my-auto row" id="home">
    <div class="" id="homediv2">
        <p class="fs-2 text-center fw-bold giveOutlineText" id="welcome"></p>
        
        <div class="d-flex justify-content-evenly border border-4 border-success rounded giveWhite">
            <div class="container">
                <p class="fs-4 text-center"><?= Yii::t('app', 'Play') ?></p>
                <div class="m-3 mt-5">
                    <div>
                        <span><?= Yii::t('app', 'Difficulty') ?> </span>
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="difficulty" id="easy" autocomplete="off"  value="Easy" checked>
                            <label class="btn btn-outline-success" for="easy"><?= Yii::t('app', 'Easy') ?></label>
    
                            <input type="radio" class="btn-check" name="difficulty" id="hard" autocomplete="off" value="Hard">
                            <label class="btn btn-outline-success" for="hard"><?= Yii::t('app', 'Hard') ?></label>
                        </div>
                    </div>
    
                    <div class="qtyEasy pt-4" >
                        <span> <?= Yii::t('app', 'Card Quantity') ?></span>
                        <div class="btn-group" role="group">
                            <input type="radio" value="8" class="btn-check" name="qtyEasy" id="8" autocomplete="off">
                            <label class="btn btn-outline-success" for="8">8</label>
        
                            <input type="radio" value="10" class="btn-check" name="qtyEasy" id="10" autocomplete="off">
                            <label class="btn btn-outline-success" for="10">10</label>
        
                            <input type="radio" value="12" class="btn-check" name="qtyEasy" id="12" autocomplete="off">
                            <label class="btn btn-outline-success" for="12">12</label>
                        </div>
                    </div>
    
                    <div class="qtyHard pt-4" hidden>
                        <span> <?= Yii::t('app', 'Card Quantity') ?></span>
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" value="15" name="qtyHard" id="15" autocomplete="off">
                            <label class="btn btn-outline-success" for="15">15</label>
                            
                            <input type="radio" class="btn-check" value="18" name="qtyHard" id="18" autocomplete="off">
                            <label class="btn btn-outline-success" for="18">18</label>
    
                            <input type="radio" class="btn-check" value="21" name="qtyHard" id="21" autocomplete="off">
                            <label class="btn btn-outline-success" for="21">21</label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-success" id="playNewBtn"><?= Yii::t('app', 'New Game') ?></button>
                        <button class="btn btn-success mx-2" id="continueBtn"><?= Yii::t('app', 'Continue') ?></button>
                    </div>
                </div>
            </div>
            <div class="container giveBorderLeft">
                <p class="fs-4 text-center"><?= Yii::t('app', 'My Recent Completed Game') ?></p>
                <table class="table table-sm">
                    <thead>
                        <tr class="text-center">
                            <th class="col-1">#</th>
                            <th class="col-2"><?= Yii::t('app', 'Time') ?></th>
                            <th class="col-2"><?= Yii::t('app', 'Move') ?></th>
                            <th class="col-2"><?= Yii::t('app', 'Score') ?></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider text-center" id="recent">
                    </tbody>
                </table>
            </div>
        </div>

        <p id="guideBook" class="fs-2 text-center fw-bold giveOutlineText text-decoration-underline"><?= Yii::t('app', 'Need A Guide? Read This Guide Book!') ?></p>
    </div>

    <div id="newgameConf" class="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?= Yii::t('app', 'Game On Going') ?></h4>
                </div>
                <div class="modal-body">
                    <p><?= Yii::t('app', 'Are you sure you want to start a new game? (Your Ongoing Game Will Be Erased!)') ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="cancelAddBtn"><?= Yii::t('app', 'No') ?></button>
                    <button type="button" class="btn btn-danger" id="AddBtn"><?= Yii::t('app', 'Yes') ?></button>
                </div>
            </div>
        </div>
    </div> 

    <div class="modal loading" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog loadingback">
            <div class="modal-content loadingback2">
                <div class="loader"></div>
            </div>
        </div>
    </div> 

    <div id="guideBookContainer"  class="border border-4 border-success rounded giveWhite">
        <div class="container my-2 px-0">
            <div>
                
                <button class="btn btn-outline-success d-flex" id="backBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                    <div id="backText">
                        <?= Yii::t('app', 'Back') ?>
                    </div>    
                </button>
            </div>
            <p class="fs-4 text-center fw-bold"><?= Yii::t('app', 'Guide Book') ?></p>

            <!-- Section 1 -->
            <p class="fs-5 fw-bold"><?= Yii::t('app', 'Section 1 : How To Play') ?></p>
            <p>- <?= Yii::t('app', 'On the "Home" menu, which will shown after User log in, User will find "Difficulty", "Card Quantity", "New Game", and "Continue" button on the left side of the screen.') ?></p>
            <p>- <?= Yii::t('app', 'Before pressing the "New Game" button, User have to choose the difficulty and the card quantity of the game. If User does not select the difficulty level or the card quantity, the game cannot be start.') ?></p>
            <p>- <?= Yii::t('app', 'After selecting the desired difficulty level and card quantity, the User can press the "New Game" button to start the game.') ?></p>
            <p>- <?= Yii::t('app', 'When the game started, User have to match a certain number of picture by clicking on the cards shown on screen. If User manage to select matching image correctly User gain a score. The rules are as follows:') ?></p>
            <p>&emsp;1. <?= Yii::t('app', 'On "Easy" difficulty, there are 2 (two) identical pictures that must be matched. On "Hard" difficulty, 3 (three) pictures must be matched') ?></p>
            <p>&emsp;2. <?= Yii::t('app', 'When User fails to select 2 (two) / 3 (three) of the same image (depending on difficulty) score will be deducted by 1 (one)') ?></p>
            <p>&emsp;3. <?= Yii::t('app', 'If the User successfully select 2 (two) / 3 (three) of the same picture (depending on difficulty) score will be increased by 3 (three)') ?></p>
            <p>&emsp;4. <?= Yii::t('app', 'The game will be finished after User successfully match all the image given') ?></p>
            <p>- <?= Yii::t('app', 'If User accidentally (or not) quit the game, User can easily continue the uncompleted game by clicking the "Continue" button on the home screen') ?></p>

            <!-- Section 2 -->
            <p class="fs-5 fw-bold"><?= Yii::t('app', 'Section 2 : Score, History, And Leaderboard') ?></p>
            <p>- <?= Yii::t('app', "For every completed game, the system will store the User's score, moves and free time in that game.") ?></p>
            <p>- <?= Yii::t('app', 'The saved game details will then be displayed to the User in the "History" menu or "My Recent Completed Game" menu located on the right side of the home screen.') ?></p>
            <p>* <?= Yii::t('app', '"My Recent Completed Game" only show 5 recent completed game! The full game history will be shown at "History" Screen.') ?></p>
            <p>- <?= Yii::t('app', 'On "History" menu, Users can view their own completed game and if User click the "See Detail" button, detailed information of the game will be shown such as start date, game id, and move detail') ?></p>
            <p>- <?= Yii::t('app', 'If User manage to clear the game quickly or with minimal moves or with a big score, the User will have an opportunity to have their name written on the "Leaderboard" menu.') ?></p>

            <!-- Section 3 -->
            <p class="fs-5 fw-bold"><?= Yii::t('app', 'Section 3 : Profile And Language') ?></p>
            <p>- <?= Yii::t('app', 'When logged in, the User can access the "Profile" menu by clicking on the "My Profile" button on the upper right side of the screen') ?></p>
            <p>- <?= Yii::t('app', 'On "Profile" menu User can change their email, username, password, and language.') ?></p>
            <p>- <?= Yii::t('app', 'User must enter their password to save their new email, username, or password.') ?></p>

            <!-- Section 4 -->
            <p class="fs-5 fw-bold"><?= Yii::t('app', 'Section 4 : Move Detail') ?></p>
            <p>- <?= Yii::t('app', 'If User has completed the game at least once, User can access the game details by clicking "See Detail" button at "History" menu.') ?></p>
            <p>- <?= Yii::t('app', 'At "Game Detail" screen, Users can view their own move in the game. Move detail will be written in numbers, so here is a guide to read it.') ?></p>
            <p>&emsp;1. <?= Yii::t('app', 'For example, the system show move 1 as 1-2 | 3-4.') ?></p>
            <p>&emsp;2. <?= Yii::t('app', 'Number in front of each group represents the row of selected card. For this example it is row 1 and row 3.') ?></p>
            <p>&emsp;3. <?= Yii::t('app', 'Number in the back of each group represent the column of selected card. For this example it is column 2 and column 4.') ?></p>
            <p>&emsp;3. <?= Yii::t('app', 'So for this example, it can be concluded that the user selects a card in row 1 column 2 and a card in row 3 column 4.') ?></p>
        </div>
    </div>
</div>

<script>
    $(function()
    {
        var name = '<?=$username?>';
        var adminId = <?=$adminId?>;
        var game = <?=$game?>;
        var hehe = 0;
        var egg = false;
        $("#welcome").html("<?= Yii::t('app', 'Welcome') ?>, " + name + "!");

        for (let i = 0; i < game.length; i++) 
        {
            $("#recent").append("<tr><td>#" + (i+1) + "</td><td>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td>" + game[i].MOVE + "</td><td>" + game[i].SCORE + "</td><tr>");
        }

        if (game.length > 0) 
        {
            if (parseInt(game[0].SCORE) < 0) 
            {
                var data = {
                        userId : adminId,
                        title : 'A Win Is A Win' 
                    }
                    $.ajax({
                        type : 'POST',
                        data : data,
                        dataType : 'JSON',
                        url : '<?= Yii::$app->getUrlManager()->createUrl('memory-home/get-achievement') ?>',
                        success : function(result)
                        {
                            if (result.errNum == 0) 
                            {
                                alert("<?= Yii::t('app', 'Congrats You Got An Achievement') ?>");
                            }
                        }
                    })
            }
        }

        $(":radio[name=difficulty]").on("change",function()
        {
            value = $(":radio[name=difficulty]:checked").val();
            $(".qty"+value).removeAttr("hidden");
            if (value == "Easy") 
            {
                $(".qtyHard").attr("hidden",true);
                $(":radio[name=qtyHard]").prop('checked', false);
            } 
            else 
            {
                $(".qtyEasy").attr("hidden",true);
                $(":radio[name=qtyEasy]").prop('checked', false);
            }
        }); 

        $("#playNewBtn").on("click",function()
        {
            diff = $(":radio[name=difficulty]:checked").val();
            flag = false;
            if (diff == "Easy" && $(":radio[name=qtyEasy]:checked").val() != undefined) 
            {
                cardQty =  $(":radio[name=qtyEasy]:checked").val();
                flag = true;
            } 
            else if (diff == "Easy" && $(":radio[name=qtyEasy]:checked").val() == undefined)
            {
                alert("<?= Yii::t('app', 'Please select card quantity') ?>");
            }
            if (diff == "Hard" && $(":radio[name=qtyHard]:checked").val() != undefined) 
            {
                cardQty =  $(":radio[name=qtyHard]:checked").val();
                flag = true;
            } 
            else if (diff == "Hard" && $(":radio[name=qtyHard]:checked").val() == undefined) 
            {
                alert("<?= Yii::t('app', 'Please select card quantity') ?>");
            }
            if(flag)
            {
                var data = {
                    difficulty : diff,
                    cardQty : cardQty
                }
                $.ajax({
                    type : 'POST',
                    data : data,
                    dataType : 'JSON',
                    url : '<?= Yii::$app->getUrlManager()->createUrl('memory-game/get-game') ?>',
                    beforeSend: function () { ShowLoadingScreen(); },
                    success : function(result)
                    {
                        $(".loading").modal('toggle')
                        if (result== 0) 
                        {
                            $("#newgameConf").modal('toggle')
                        }
                        else
                        {
                            console.log(result)
                            startNewGame();
                            // window.location.href = '<?= Yii::$app->getUrlManager()->createUrl('memory-game/game') ?>'
                        }
                    }
                })
            }
        });

        $("#guideBook").on("click",function()
        {
            $("#homediv2").hide();
            $("#guideBookContainer").show();
            hehe++;
            if (hehe == 20) {
                var data = 
                {
                    userId : adminId,
                    title : 'Trying To Be A Sherpa' 
                }
                $.ajax({
                    type : 'POST',
                    data : data,
                    dataType : 'JSON',
                    url : '<?= Yii::$app->getUrlManager()->createUrl('memory-home/get-achievement') ?>',
                    success : function(result)
                    {
                        if (result.errNum == 0) 
                        {
                            alert("<?= Yii::t('app', 'Congrats You Got An Achievement') ?>");
                        }
                    }
                })
            }
            if (hehe == 40) {
                var data = 
                {
                    userId : adminId,
                    title : 'Bored Guy' 
                }
                $.ajax({
                    type : 'POST',
                    data : data,
                    dataType : 'JSON',
                    url : '<?= Yii::$app->getUrlManager()->createUrl('memory-home/get-achievement') ?>',
                    success : function(result)
                    {
                        if (result.errNum == 0) 
                        {
                            alert("<?= Yii::t('app', 'Congrats You Got An Achievement') ?>");
                        }
                    }
                })
            }
        });

        $("#backBtn").on("click",function()
        {
            $("#homediv2").show();
            $("#guideBookContainer").hide();
        });

        $("#continueBtn").on("click",function()
        {
            ContinueGame();
        });

        $("#cancelAddBtn").on("click",function()
        {
            location.reload()
        })

        $("#AddBtn").on("click",function()
        {
            $("#newgameConf").modal('toggle');
            startNewGame();
        })
        
        function startNewGame()
        {
            var data = {
                difficulty : diff,
                cardQty : cardQty
            }
            console.log(data)
            $.ajax({
                type : 'POST',
                data : data,
                dataType : 'JSON',
                url : '<?= Yii::$app->getUrlManager()->createUrl('memory-game/new-game') ?>',
                beforeSend: function () { ShowLoadingScreen(); },
                success : function(result)
                {
                    $(".loading").modal('toggle')
                    window.location.href = '<?= Yii::$app->getUrlManager()->createUrl('memory-game/game') ?>'
                }
            })
        }

        function ShowLoadingScreen()
        {
            $(".loading").modal('toggle');
        }

        function ContinueGame()
        {
            var data = {
                difficulty : "w",
                cardQty : 0
            }
            $.ajax({
                type : 'POST',
                data : data,
                dataType : 'JSON',
                url : '<?= Yii::$app->getUrlManager()->createUrl('memory-game/get-game') ?>',
                beforeSend: function () { ShowLoadingScreen(); },
                success : function(result)
                {
                    ShowLoadingScreen();
                    if (result == 0) 
                    {

                        window.location.href = '<?= Yii::$app->getUrlManager()->createUrl('memory-game/game') ?>'
                    }
                    else
                    {
                        alert("<?= Yii::t('app', 'No incomplete game found!') ?>");
                        location.reload();
                    }
                }
            })
        }
    })
</script>


<!-- 
    selasa presen ulang!!!
    catatan:
    - buat guide book
    - translate juga
 -->