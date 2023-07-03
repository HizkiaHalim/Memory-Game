<div class="d-flex justify-content-center site-index my-auto row" id="gameScreen">
    <div id="counter" class="d-flex justify-content-evenly">
        <div>
            <p class="text-center mb-0"><?= Yii::t('app', 'Score') ?> : </p>
            <div class="board border border-2 border-success rounded p-1 mt-0"><span id="score"></span></div>
        </div>
        <div>
            <p class="text-center mb-0"><?= Yii::t('app', 'Move') ?> : </p>
            <div class="board border border-2 border-success rounded p-1 mt-0"><span id="move"></span></div>
        </div>
        <div>
            <p class="text-center mb-0"><?= Yii::t('app', 'Time') ?>:</p>
            <div class="board border border-2 border-success rounded p-1 mt-0"><span id="time">00:00</span></div>
        </div>
        <div>
            <p class="text-center mb-0"><?= Yii::t('app', 'Difficulty') ?> : </p>
            <div class="board border border-2 border-success rounded p-1 mt-0"><span id="diff"></span></div>
        </div>
        <div>
            <p class="text-center mb-0"><?= Yii::t('app', 'Music') ?> : </p>
            <div class="btn-group" role="group" id="musicBack">
                <input type="radio" class="btn-check" name="music" id="on" autocomplete="off"  value="on">
                <label class="btn btn-outline-success" for="on">On</label>
                <input type="radio" class="btn-check" name="music" id="off" autocomplete="off" value="off" checked>
                <label class="btn btn-outline-success" for="off">Off</label>
            </div>
        </div>
    </div>
    <div>
        <div id="game0" class="d-flex justify-content-evenly"></div>
        <div id="game1" class="d-flex justify-content-evenly pt-2"></div>
        <div id="game2" class="d-flex justify-content-evenly pt-2"></div>
    </div>

    <div class="modal loading" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog loadingback">
            <div class="modal-content loadingback2">
                <div class="loader"></div>
            </div>
        </div>
    </div> 
</div>


<script>
    $(function()
    {
        var adminId = '<?=$adminId?>';
        var gameStatus = '<?=$gameStatus?>';
        var cardDict = [
            "<?= Yii::$app->getUrlManager()->createUrl('/images/mobil1.jpg') ?>", 
            "<?= Yii::$app->getUrlManager()->createUrl('/images/mobil2.jpg') ?>", 
            "<?= Yii::$app->getUrlManager()->createUrl('/images/mobil3.jpg') ?>", 
            "<?= Yii::$app->getUrlManager()->createUrl('/images/mobil4.jpg') ?>", 
            "<?= Yii::$app->getUrlManager()->createUrl('/images/mobil5.jpg') ?>",
            "<?= Yii::$app->getUrlManager()->createUrl('/images/mobil6.jpg') ?>", 
            "<?= Yii::$app->getUrlManager()->createUrl('/images/mobil7.jpg') ?>"];
        if (gameStatus == 'New') 
        {
            var difficulty = '<?=$difficulty?>';
            var cardLeft = <?=$cardQty?>;
            var cardQty = <?=$cardQty?>;
            var gameId = <?=$gameId?>;
            var score = 0;
            var dateFinish = "";
            var selectedCard = [];
            var valueArr = [];
            var cardClass = [];
            var cardVal = [];
            var moveTemp = [];
            var moveArr = [];
            var second = 0;
            var minute = 0;
            var row = 0;
            var column = 0;
            var match = 0;
            var matchDone = 0;
            var move = 0;
            var game_status = 'incomplete';
        }
        else if (gameStatus == 'Continue') 
        {
            var game = <?=$game?>;
            var cardClassValue = <?=$cardClassValue?>;
            var cardQty = game[0].CARDQTY;
            var difficulty = game[0].DIFFICULTY;
            var cardLeft = <?=$cardQty?>;
            var gameId = game[0].ID;
            var dateFinish = "";
            var score = parseInt(game[0].SCORE);
            var selectedCard = [];
            var valueArr = [];
            var cardClass = [];
            var cardVal = [];
            var matchDone = 0;
            var cardMatch = 0;
            console.log(cardClassValue)
            for (let i = 0; i < cardClassValue.length; i++) {
                cardClass.push(cardClassValue[i].CLASS);
                cardVal.push(cardClassValue[i].CARD_VALUE);
                if (cardClassValue[i].CLASS == 'tile') {
                    matchDone++;
                    valueArr.push(cardClassValue[i].CARD_VALUE);
                }
                if (cardClassValue[i].CLASS == 'tileTrue') {
                    cardMatch++;
                }
            }
            var cardLeft = parseInt(cardQty) - parseInt(cardMatch);
            var moveTemp = [];
            var moveArr = [];
            var second = game[0].SECOND;
            var minute = game[0].MINUTE;
            var row = 0;
            var column = 0;
            var match = 0;
            var move =  game[0].MOVE;
            var tempMove = [];
            var game_status = 'incomplete'
        }

    // ----------------------------------------SETUP----------------------------------------
       
        //setup music
        var audiotime;
        var hehe = 0;
        var audio = document.createElement('audio');
        audio.setAttribute('src', '../audio/audio1.mp3');
        audio.addEventListener('ended', function() {
            this.play();
        }, false);

        var winAudio = document.createElement('audio');
        winAudio.setAttribute('src', '../audio/win.mp3');

        var flipAudio = document.createElement('audio');
        flipAudio.setAttribute('src', '../audio/flip.mp3');

        var wrongAns = document.createElement('audio');
        wrongAns.setAttribute('src', '../audio/wrong.mp3');

        var trueAns = document.createElement('audio');
        trueAns.setAttribute('src', '../audio/right.mp3');


        // setup timer
        timerSetup = setInterval(function() 
        {
            if (second == 60) {
                second = 0;
                minute++
            }
            second++; 
            $("#time").html( minute.toString().padStart(2,"0")+ " : " + second.toString().padStart(2,"0"))
        } ,1000);

        // setup row, column, match(jumlah gambar)
        if (difficulty == 'Easy') {
            row = 2;
            match = 2 - matchDone;
        }
        else {
            row = 3;
            match = 3 - matchDone;
        }
        
        column = cardQty/row;

        // setup gambar dari dict
        for (let j = 0; j < row; j++) {
            for (let i = 0; i < column; i++) {
                selectedCard.push(cardDict[i]);
            }
        }
        
        // setup counter
        $("#difficulty").html(difficulty);
        $("#cardQty").html(cardQty);
        $("#score").html(score);
        $("#move").html(move);
        $("#diff").html(difficulty + "-" + cardQty);

        // setup box dan isinya
        if (gameStatus == 'New') 
        {
            for (let i = 0; i < row; i++) {
                for (let j = 0; j < column; j++) {
                    selector = Math.floor(Math.random() * selectedCard.length)
                    $("#game"+i).append("<div id='" + (i+1) + "-" + (j+1) + "' name='untile' class='d-flex untile border border-2 border-success rounded' value='" + selectedCard[selector] + "'><img class='imgSelect' src=" + selectedCard[selector] + "></div>");
                    cardVal.push(selectedCard[selector]);
                    selectedCard.splice(selector, 1);
                }
            }
        }
        else
        {
            counter = 0;
            for (let i = 0; i < row; i++) {
                for (let j = 0; j < column; j++) {
                    $("#game"+i).append("<div id='" + (i+1) + "-" + (j+1) + "' name='" + cardClass[counter] + "' class='" + cardClass[counter] + " border border-2 border-success rounded' value='" + cardVal[counter] + "'><img class='imgSelect' src=" + cardVal[counter] + "></div>");
                    counter++;
                    if ($("#"+ (i+1) + "-" + (j+1)).hasClass('tileTrue') || $("#"+ (i+1) + "-" + (j+1)).hasClass('tile') ) {
                        $("#" + (i+1) + "-" + (j+1) + " img").attr("class","imgSelected");
                    }
                    if ($("#"+ (i+1) + "-" + (j+1)).hasClass('tile')) {
                        moveTemp.push( (i+1) + "-" + (j+1) );
                        tempMove.push( (i+1) + "-" + (j+1) );
                    }
                }
            }
        }

        //first-time card class fill
        cardClass = [];
        for (let i = 0; i < row; i++) 
        {
            for (let j = 0; j < column; j++) 
            {
                cardClass.push($("#"+ (i+1) + "-" + (j+1) ).attr('name'))
            }
        }

        ShowLoadingScreen()
        updateAll();

    //-------------------------------------MUSIC LOGIC---------------------------------------
        $(":radio[name='music']").on("change",function()
        {

            // Unique and Weird
            if ($(":radio[name=music]:checked").val() == 'on' && hehe == 10) 
            {
                var data = {
                    userId : adminId,
                    title : 'Ajojing' 
                }
                $.ajax({
                    type : 'POST',
                    data : data,
                    dataType : 'JSON',
                    url : '<?= Yii::$app->getUrlManager()->createUrl('memory-game/get-ajojing') ?>',
                    success : function(result)
                    {
                        if (result.errNum == 0) 
                        {
                            alert("<?= Yii::t('app', 'Congrats You Got An Achievement') ?>");
                        }
                    }
                })
                audio.setAttribute('src', '../audio/hehe.mp3');
            }
            if ($(":radio[name=music]:checked").val() == 'on') 
            {
                audio.play();
            }
            else
            {
                hehe++;
                audio.pause();
            }
        })
    // -------------------------------------GAME LOGIC---------------------------------------
        $(".untile").on("click", flipTile);

        function flipTile()
        {
            
            //check kalo udh diklik apa blom
            if (!$(this).data('clicked')) 
            {
                //flip sound
                flipAudio.currentTime = 0;
                flipAudio.play();

                //set class jadi kebuka, set nama buat cardclass, 
                $(this).attr('name','tile')
                $(this).removeClass("untile").addClass("tile");
                temp = $(this).attr('id')
                $("#" + temp + " img").attr("class","imgSelected");
    
                //set cardclass buat masuk db (ini buat tiap click)
                cardClass = [];
                for (let i = 0; i < row; i++) {
                    for (let j = 0; j < column; j++) {
                        cardClass.push($("#"+ (i+1) + "-" + (j+1) ).attr('name'))
                    }
                }
                
                match--;
                valueArr.push($(this).attr('value'));
                abc = $(this).attr('id')
                moveTemp.push(abc);
                $(this).data('clicked', true)

                // if udh kepilih 2/3 gambar
                if (match <= 0) 
                {
                    wrong = false;
                    match = row;
                    move++;

                    // loop buat check bener apa kgk
                    for (let i = 0; i < row-1; i++) 
                    {
                        if (valueArr[i] != valueArr[i+1]) 
                        {
                            wrong = true;
                        }
                    }

                    // catet move
                    if (row == 2) 
                    {
                        if (wrong) 
                        {
                            tempMove = moveTemp[0] + " | " + moveTemp[1]+ " Wrong";
                        }
                        else
                        {
                            tempMove = moveTemp[0] + " | " + moveTemp[1] + " Match";
                        }
                    } 
                    else 
                    {
                        if (wrong) 
                        {
                            tempMove = moveTemp[0] + " | " + moveTemp[1] + " | " + moveTemp[2]+ " Wrong";
                        }
                        else
                        {
                            tempMove = moveTemp[0] + " | " + moveTemp[1] + " | " + moveTemp[2] + " Match";
                        }
                        
                    }
                    //add move
                    var data = {
                            date_finish : dateFinish,
                            gameId      : gameId,
                            move        : tempMove,
                        }
                    $.ajax({
                        type : 'POST',
                        data : data,
                        dataType : 'JSON',
                        url : '<?= Yii::$app->getUrlManager()->createUrl('memory-game/new-move') ?>',
                        success : function(result)
                        {
                            console.log("done")
                        }
                    })
                    
                    // if else bener apa kagak
                    if (wrong) 
                    {
                        //wrong sound
                        wrongAns.currentTime = 0;
                        wrongAns.play();

                        $(".untile").off('click');
                        $('.tile').attr('name','untile');
                        score--;
                        console.log('here')
                        close = setInterval(function() 
                        {
                            $(".tile img").attr("class", "imgSelect");
                            $(".tile").removeClass("tile").addClass("untile");
                        }, 1000);
                        setTimeout(function() 
                        { 
                            console.log("cklear")
                            $(".untile").data('clicked', false);
                            $(".untile").on('click', flipTile);
                            clearInterval( close ); 
                        }, 1001);
                    }
                    else
                    {
                        //right sound
                        trueAns.currentTime = 0;
                        trueAns.play();

                        $(".untile").off('click');
                        for (let i = 0; i < row; i++) {
                            
                            $('#'+moveTemp[i]).attr('name','tileTrue');
                            $("#"+moveTemp[i]).removeClass("tile").addClass("tileTrue");
                        }
                        $(this).attr('name','tileTrue');
                        $(this).removeClass("tile").addClass("tileTrue");
                        setTimeout(function() 
                        { 
                            $(".untile").data('clicked', false);
                            $(".untile").on('click', flipTile);
                            clearInterval( close ); 
                        }, 500);
                        score += 3;
                        cardLeft -= row
                    }
                    
                    //set cardclass buat masuk db
                    cardClass = [];
                    for (let i = 0; i < row; i++) {
                        for (let j = 0; j < column; j++) {
                            cardClass.push($("#"+ (i+1) + "-" + (j+1) ).attr('name'))
                        }
                    }

                    //kosongin arr pilihan dan update tulisan
                    valueArr = [];
                    moveTemp = [];
                    $("#score").html(score);
                    $("#move").html(move);

                    // end the game
                    if (cardLeft == 0) {
                        game_status = 'complete'
                        ShowLoadingScreen(); 
                        clearInterval( timerSetup ); 
                        endgame();
                    }
                }
            }
        }

    // ------------------------------------ENDGAME LOGIC---------------------------------
        function endgame()
        {
            var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            dateFinish= new Date(new Date().getTime());
            dateFinish = dateFinish.getDate() + "-" + monthNames[dateFinish.getMonth()] + "-" + dateFinish.getFullYear(); 
            var data = {
                    date_finish : dateFinish,
                    gameId      : gameId,
                    minute      : minute,
                    second      : second,
                    score       : score,
                    move        : move,
                    game_status : 'complete',
                    cardClass    : cardClass,
                    cardVal     : cardVal
                }
            $.ajax({
                type : 'POST',
                data : data,
                dataType : 'JSON',
                url : '<?= Yii::$app->getUrlManager()->createUrl('memory-game/update-game') ?>',
                success : function(result)
                {
                    $(".loading").modal('toggle');
                    //win sound
                    winAudio.currentTime = 0;
                    winAudio.play();
                    alert('<?= Yii::t('app', 'YOU WIN!!') ?>');
                    window.location.href ='<?= Yii::$app->getUrlManager()->createUrl('memory-home/home') ?>'
                }
            })

            
        } 

        function ShowLoadingScreen()
        {
            $(".loading").modal('toggle');
            $("#homediv2").attr('hidden',true);
        }

    // ------------------------------------UNLOAD LOGIC---------------------------------
        $(window).bind("beforeunload",function()
        {
            ShowLoadingScreen(); 
            updateAll();
        });

        function updateAll(){
            var data = {
                    date_finish : "",
                    gameId      : gameId,
                    minute      : minute,
                    second      : second,
                    score       : score,
                    move        : move,
                    game_status : game_status,
                    cardClass    : cardClass,
                    cardVal     : cardVal
                }
            $.ajax({
                type : 'POST',
                data : data,
                dataType : 'JSON',
                async: false,
                url : '<?= Yii::$app->getUrlManager()->createUrl('memory-game/update-game') ?>',
                success : function(result)
                {
                    $(".loading").modal('toggle');
                }
            })
        }
    });
</script>