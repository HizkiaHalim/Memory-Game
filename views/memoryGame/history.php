<div class="site-index m-5 p-3 historyMain" >
    <div class="" >
        <p class="fs-2 text-center fw-bold giveOutlineText"><?= Yii::t('app', 'My History') ?></p>
            <table class="table table-sm giveWhite text-center border border-4 border-success rounded">
                <thead>
                    <tr >
                        <th class="col-1">#</th>
                        <th class="col-1">
                            <?= Yii::t('app', 'Time') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="timeSort">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-1">
                            <?= Yii::t('app', 'Move') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="moveSort">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-2">
                            <?= Yii::t('app', 'Difficulty') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="diffSort">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-2">
                            <?= Yii::t('app', 'Card Qty') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="cardSort">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-2">
                            <?= Yii::t('app', 'Score') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="scoreSort">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-2"></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider" id="historyTb">
                </tbody>
            </table>
    </div>

    <div id="gameDetail" class="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?= Yii::t('app', 'Game Detail') ?></h4>
                </div>
                <div class="modal-body">
                    <p class="gameId"></p>
                    <p class="time"></p>
                    <p class="diificulty"></p>
                    <p class="cardqty"></p>
                    <p class="score"></p>
                    <p class="move"></p>
                    <p class="dateFrom"></p>
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th class="align-middle"><?= Yii::t('app', 'No') ?></th>
                                <th class="align-middle"><?= Yii::t('app', 'Move') ?></th>
                            </tr>
                        </thead>
                        <tbody id="tableMove"></tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="cancelAddBtn"><?= Yii::t('app', 'Close') ?></button>
                </div>
            </div>
        </div>
    </div> 
</div>
<script>
    $(function()
    {
        var game = <?=$game?>;
        var moveset = <?=$moveset?>;
        var times = 0, scores = 0, moves = 0, diffs = 0, cards = 0;

        for (let i = 0; i < game.length; i++) {
            if (game[i].DIFFICULTY == 'Easy') 
            {
                dif = '<?= Yii::t('app', 'Easy') ?>';
            }
            else
            {
                dif = '<?= Yii::t('app', 'Hard') ?>';
            }
            $("#historyTb").append("<tr><td class='align-middle'>" + (i+1) + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + dif + "</td><td class='align-middle'>" + game[i].CARDQTY + "</td><td class='align-middle'>" + game[i].SCORE + "</td><td class='align-middle'><button type='button' class=' seeDetail btn btn-success' data-bs-toggle='modal' data-bs-target='#gameDetail' value=" + i + "><?= Yii::t('app', 'See Detail') ?></button></td></tr>")
        }

        $("#historyTb").on('click', '.seeDetail', function() 
        {
            selector = $(this).val();
            gameId = "<?= Yii::t('app', 'Game ID') ?> : " + game[selector].ID;
            time = "<?= Yii::t('app', 'Clear Time') ?> : " + game[selector].MINUTE.toString().padStart(2,"0") + ":" + game[selector].SECOND.toString().padStart(2,"0");
            if (game[selector].DIFFICULTY == 'Easy') 
            {
                diificulty = "<?= Yii::t('app', 'Difficulty') ?> : " + '<?= Yii::t('app', 'Easy') ?>';
            }
            else
            {
                diificulty = "<?= Yii::t('app', 'Difficulty') ?> : " + '<?= Yii::t('app', 'Hard') ?>';
            }
            cardqty = "<?= Yii::t('app', 'Card Quantity') ?> : " + game[selector].CARDQTY;
            score = "<?= Yii::t('app', 'Score') ?> : " + game[selector].SCORE;
            move = "<?= Yii::t('app', 'Move') ?> : " + game[selector].MOVE;
            dateFrom = "<?= Yii::t('app', 'Start Date') ?> : " + game[selector].DATE_START;
            numCount = 0;
            $(".gameId").html(gameId);
            $(".time").html(time);
            $(".diificulty").html(diificulty);
            $(".cardqty").html(cardqty);
            $(".score").html(score);
            $(".move").html(move);
            $(".dateFrom").html(dateFrom);
            $("#tableMove").empty();
            for (let i = 0; i < moveset.length; i++) 
            {
                if (moveset[i].GAME_ID == game[selector].ID) {
                    $("#tableMove").append("<tr><td class='align-middle'>" + (numCount+1) + "</td><td class='align-middle text-break'>" + moveset[i].MOVE + "</td></tr>");
                    numCount = numCount + 1;
                }
            }
        })

        $("#timeSort").on('click', function()
        {
            $("#historyTb").empty();
            
            if (times == 0) 
            {
                game.sort(function(l1, l2) 
                {
                    var min1 = parseInt(l1.MINUTE)*60;
                    var min2 = parseInt(l2.MINUTE)*60;
                    var a = parseInt(l1.SECOND)+min1;
                    var b = parseInt(l2.SECOND)+min2;
                    return (a > b) ? 1 : (a < b) ? -1 : 0;
                });
                times = 1;
            }
            else
            {
                game.sort(function(l1, l2) 
                {
                    var min1 = parseInt(l1.MINUTE)*60;
                    var min2 = parseInt(l2.MINUTE)*60;
                    var a = parseInt(l1.SECOND)+min1;
                    var b = parseInt(l2.SECOND)+min2;
                    return (a < b) ? 1 : (a > b) ? -1 : 0;
                });
                times = 0;
            }
            for (let i = 0; i < game.length; i++)
            {
                if (game[i].DIFFICULTY == 'Easy') 
                {
                    dif = '<?= Yii::t('app', 'Easy') ?>';
                }
                else
                {
                    dif = '<?= Yii::t('app', 'Hard') ?>';
                }
                $("#historyTb").append("<tr><td class='align-middle'>" + (i+1) + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + dif + "</td><td class='align-middle'>" + game[i].CARDQTY + "</td><td class='align-middle'>" + game[i].SCORE + "</td><td class='align-middle'><button type='button' class=' seeDetail btn btn-success' data-bs-toggle='modal' data-bs-target='#gameDetail' value=" + i + "><?= Yii::t('app', 'See Detail') ?></button></td></tr>")
            }
        });

        $("#moveSort").on('click', function()
        {
            $("#historyTb").empty();
            if (moves == 0) 
            {
                game.sort(function(l1, l2) 
                {
                    var a = parseInt(l1.MOVE), b = parseInt(l2.MOVE);
                    return (a > b) ? 1 : (a < b) ? -1 : 0;
                });
                moves = 1;
            }
            else
            {
                game.sort(function(l1, l2) 
                {
                    var a = parseInt(l1.MOVE), b = parseInt(l2.MOVE);
                    return (a < b) ? 1 : (a > b) ? -1 : 0;
                });
                moves = 0;
            }
            
            for (let i = 0; i < game.length; i++) 
            {
                if (game[i].DIFFICULTY == 'Easy') 
                {
                    dif = '<?= Yii::t('app', 'Easy') ?>';
                }
                else
                {
                    dif = '<?= Yii::t('app', 'Hard') ?>';
                }
                $("#historyTb").append("<tr><td class='align-middle'>" + (i+1) + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + dif + "</td><td class='align-middle'>" + game[i].CARDQTY + "</td><td class='align-middle'>" + game[i].SCORE + "</td><td class='align-middle'><button type='button' class=' seeDetail btn btn-success' data-bs-toggle='modal' data-bs-target='#gameDetail' value=" + i + "><?= Yii::t('app', 'See Detail') ?></button></td></tr>")
                
            }
        });

        $("#diffSort").on('click', function()
        {
            $("#historyTb").empty();

            if (diffs == 0) 
            {
                game.sort(function(l1, l2) 
                {
                    var a = l1.DIFFICULTY, b = l2.DIFFICULTY;
                    return (a > b) ? 1 : (a < b) ? -1 : 0;
                });
                diffs = 1;
            }
            else
            {
                game.sort(function(l1, l2) 
                {
                    var a = l1.DIFFICULTY, b = l2.DIFFICULTY;
                    return (a < b) ? 1 : (a > b) ? -1 : 0;
                });
                diffs = 0;
            }
            for (let i = 0; i < game.length; i++) 
            {
                if (game[i].DIFFICULTY == 'Easy') 
                {
                    dif = '<?= Yii::t('app', 'Easy') ?>';
                }
                else
                {
                    dif = '<?= Yii::t('app', 'Hard') ?>';
                }
                $("#historyTb").append("<tr><td class='align-middle'>" + (i+1) + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + dif + "</td><td class='align-middle'>" + game[i].CARDQTY + "</td><td class='align-middle'>" + game[i].SCORE + "</td><td class='align-middle'><button type='button' class=' seeDetail btn btn-success' data-bs-toggle='modal' data-bs-target='#gameDetail' value=" + i + "><?= Yii::t('app', 'See Detail') ?></button></td></tr>")
            }
        });

        $("#cardSort").on('click', function()
        {
            $("#historyTb").empty();

            if (cards == 0) 
            {
                game.sort(function(l1, l2) 
                {
                    var a = parseInt(l1.CARDQTY), b = parseInt(l2.CARDQTY);
                    return (a > b) ? 1 : (a < b) ? -1 : 0;
                });
                cards = 1;
            }
            else
            {
                game.sort(function(l1, l2) 
                {
                    var a = parseInt(l1.CARDQTY), b = parseInt(l2.CARDQTY);
                    return (a < b) ? 1 : (a > b) ? -1 : 0;
                });
                cards = 0;
            }
            for (let i = 0; i < game.length; i++) 
            {
                if (game[i].DIFFICULTY == 'Easy') 
                {
                    dif = '<?= Yii::t('app', 'Easy') ?>';
                }
                else
                {
                    dif = '<?= Yii::t('app', 'Hard') ?>';
                }
                $("#historyTb").append("<tr><td class='align-middle'>" + (i+1) + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + dif + "</td><td class='align-middle'>" + game[i].CARDQTY + "</td><td class='align-middle'>" + game[i].SCORE + "</td><td class='align-middle'><button type='button' class=' seeDetail btn btn-success' data-bs-toggle='modal' data-bs-target='#gameDetail' value=" + i + "><?= Yii::t('app', 'See Detail') ?></button></td></tr>")
            }
        });

        $("#scoreSort").on('click', function()
        {
            $("#historyTb").empty();

            if (moves == 0) 
            {
                game.sort(function(l1, l2) 
                {
                    var a = parseInt(l1.SCORE), b = parseInt(l2.SCORE);
                    return (a < b) ? 1 : (a > b) ? -1 : 0;
                });
                moves = 1;
            }
            else
            {
                game.sort(function(l1, l2) 
                {
                    var a = parseInt(l1.SCORE), b = parseInt(l2.SCORE);
                    return (a > b) ? 1 : (a < b) ? -1 : 0;
                });
                moves = 0;
            }
            for (let i = 0; i < game.length; i++) 
            {
                if (game[i].DIFFICULTY == 'Easy') 
                {
                    dif = '<?= Yii::t('app', 'Easy') ?>';
                }
                else
                {
                    dif = '<?= Yii::t('app', 'Hard') ?>';
                }
                $("#historyTb").append("<tr><td class='align-middle'>" + (i+1) + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + dif + "</td><td class='align-middle'>" + game[i].CARDQTY + "</td><td class='align-middle'>" + game[i].SCORE + "</td><td class='align-middle'><button type='button' class=' seeDetail btn btn-success' data-bs-toggle='modal' data-bs-target='#gameDetail' value=" + i + "><?= Yii::t('app', 'See Detail') ?></button></td></tr>")
            }
        });
    })
</script>