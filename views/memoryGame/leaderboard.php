<div class="site-index m-5 p-3 " >
    <div class="" >
        <p class="fs-2 text-center fw-bold giveOutlineText"><?= Yii::t('app', 'Leaderboard') ?></p>
        <div class="border border-4 border-success giveWhite mb-2">
            <p class="fs-5 text-center fw-bold"><?= Yii::t('app', 'Easy-8') ?></p>
            <table class="table table-sm  text-center  rounded">
                <thead>
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-4">
                            Username
                        </th>
                        <th class="col-1">
                            <?= Yii::t('app', 'Time') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="timeSort8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-1" >
                            <?= Yii::t('app', 'Move') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="moveSort8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-2">
                            <?= Yii::t('app', 'Score') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="scoreSort8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                    </tr> 
                </thead>
                <tbody class="table-group-divider" id="easy8Tb">
                </tbody>
            </table>
        </div>
        <div class="border border-4 border-success giveWhite mb-2">
            <p class="fs-5 text-center fw-bold"><?= Yii::t('app', 'Easy-10') ?></p>
            <table class="table table-sm  text-center  rounded">
                <thead>
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-4">Username</th>
                        <th class="col-1">
                            <?= Yii::t('app', 'Time') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="timeSort10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-1">
                            <?= Yii::t('app', 'Move') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="moveSort10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-2">
                            <?= Yii::t('app', 'Score') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="scoreSort10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody class="table-group-divider" id="easy10Tb">
                </tbody>
            </table>
        </div>
        <div class="border border-4 border-success giveWhite mb-2">
            <p class="fs-5 text-center fw-bold"><?= Yii::t('app', 'Easy-12') ?></p>
            <table class="table table-sm  text-center  rounded">
                <thead>
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-4">Username</th>
                        <th class="col-1">
                            <?= Yii::t('app', 'Time') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="timeSort12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-1" >
                            <?= Yii::t('app', 'Move') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="moveSort12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-2" >
                            <?= Yii::t('app', 'Score') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="scoreSort12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody class="table-group-divider" id="easy12Tb">
                </tbody>
            </table>
        </div>
        <div class="border border-4 border-success giveWhite mb-2">
            <p class="fs-5 text-center fw-bold"><?= Yii::t('app', 'Hard-15') ?></p>
            <table class="table table-sm  text-center  rounded">
                <thead>
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-4">
                            Username
                        </th>
                        <th class="col-1" >
                            <?= Yii::t('app', 'Time') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="timeSort15">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-1">
                            <?= Yii::t('app', 'Move') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="moveSort15">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-2">
                            <?= Yii::t('app', 'Score') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="scoreSort15">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody class="table-group-divider" id="hard15Tb">
                </tbody>
            </table>
        </div>
        <div class="border border-4 border-success giveWhite mb-2">
            <p class="fs-5 text-center fw-bold"><?= Yii::t('app', 'Hard-18') ?></p>
            <table class="table table-sm  text-center  rounded">
                <thead>
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-4">Username</th>
                        <th class="col-1">
                            <?= Yii::t('app', 'Time') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="timeSort18">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-1">
                            <?= Yii::t('app', 'Move') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="moveSort18">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-2">
                            <?= Yii::t('app', 'Score') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="scoreSort18">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody class="table-group-divider" id="hard18Tb">
                </tbody>
            </table>
        </div>
        <div class="border border-4 border-success giveWhite">
            <p class="fs-5 text-center fw-bold"><?= Yii::t('app', 'Hard-21') ?></p>
            <table class="table table-sm  text-center  rounded">
                <thead>
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-4">Username</th>
                        <th class="col-1">
                            <?= Yii::t('app', 'Time') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="timeSort21">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-1">
                            <?= Yii::t('app', 'Move') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="moveSort21">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th class="col-2">
                            <?= Yii::t('app', 'Score') ?>
                            <button type="button" class="btn btn-link btn-sm p-0 m-0 mb-1" id="scoreSort21">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                </svg>
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody class="table-group-divider" id="hard21Tb">
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(function()
    {
        var game = <?=$game?>;
        var user = <?=$user?>;

        var easy8 = [];
        var easy10 = [];
        var easy12 = [];
        var hard15 = [];
        var hard18 = [];
        var hard21 = [];
        var num8 = 0;
        var num10 = 0;
        var num12 = 0;
        var num15 = 0;
        var num18 = 0;
        var num21 = 0;
        var tempUser ="";

        for (let i = 0; i < game.length; i++) {
            for (let j = 0; j < user.length; j++) {
                if (user[j].ID == game[i].USER_ID) {
                    tempUser = user[j].USERNAME;
                    break;
                }
            }
            if (game[i].CARDQTY == '8') 
            {
                easy8.push(game[i]);
                if (easy8.length < 6) 
                {
                    $("#easy8Tb").append("<tr><td class='align-middle'>" + (num8+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + game[i].SCORE + "</td></tr>");
                    num8++
                }
            }
            else if (game[i].CARDQTY == '10') 
            {
                easy10.push(game[i]);
                if (easy10.length < 6) 
                {
                    $("#easy10Tb").append("<tr><td class='align-middle'>" + (num10+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + game[i].SCORE + "</td></tr>");
                    num10++;
                }
            }
            else if (game[i].CARDQTY == '12') 
            {
                easy12.push(game[i]);
                if (easy12.length < 6) 
                {
                    $("#easy12Tb").append("<tr><td class='align-middle'>" + (num12+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + game[i].SCORE + "</td></tr>");
                    num12++;
                }
            }
            else if (game[i].CARDQTY == '15') 
            {
                hard15.push(game[i]);
                if (hard15.length < 6) 
                {
                    $("#hard15Tb").append("<tr><td class='align-middle'>" + (num15+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + game[i].SCORE + "</td></tr>");
                    num15++;
                }
            }
            else if (game[i].CARDQTY == '18') 
            {
                hard18.push(game[i]);
                if (hard18.length < 6) 
                {
                    $("#hard18Tb").append("<tr><td class='align-middle'>" + (num18+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + game[i].SCORE + "</td></tr>");
                    num18++;
                }
            }
            else if (game[i].CARDQTY == '21') 
            {
                hard21.push(game[i]);
                if (hard21.length < 6) 
                {
                    $("#hard21Tb").append("<tr><td class='align-middle'>" + (num21+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + game[i].MINUTE.toString().padStart(2,"0") + ":" + game[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + game[i].MOVE + "</td><td class='align-middle'>" + game[i].SCORE + "</td></tr>");
                    num21++;
                }
            }
        }

// SORT 8

        $("#timeSort8").on('click', function()
        {
            $("#easy8Tb").empty();
            
            easy8.sort(function(l1, l2) 
            {
                var min1 = parseInt(l1.MINUTE)*60;
                var min2 = parseInt(l2.MINUTE)*60;
                var a = parseInt(l1.SECOND)+min1;
                var b = parseInt(l2.SECOND)+min2;
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < easy8.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == easy8[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#easy8Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + easy8[i].MINUTE.toString().padStart(2,"0") + ":" + easy8[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + easy8[i].MOVE + "</td><td class='align-middle'>" + easy8[i].SCORE + "</td></tr>");
            }
        });

        $("#moveSort8").on('click', function()
        {
            $("#easy8Tb").empty();
            easy8.sort(function(l1, l2) 
            {
            var a = parseInt(l1.MOVE), b = parseInt(l2.MOVE);
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < easy8.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == easy8[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#easy8Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + easy8[i].MINUTE.toString().padStart(2,"0") + ":" + easy8[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + easy8[i].MOVE + "</td><td class='align-middle'>" + easy8[i].SCORE + "</td></tr>");
                
            }
        });

        $("#scoreSort8").on('click', function()
        {
            $("#easy8Tb").empty();
            easy8.sort(function(l1, l2) 
            {
            var a = parseInt(l1.SCORE), b = parseInt(l2.SCORE);
            return (a < b) ? 1 : (a > b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < easy8.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == easy8[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#easy8Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + easy8[i].MINUTE.toString().padStart(2,"0") + ":" + easy8[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + easy8[i].MOVE + "</td><td class='align-middle'>" + easy8[i].SCORE + "</td></tr>");
            }
        });

// SORT 10

        $("#timeSort10").on('click', function()
        {
            $("#easy10Tb").empty();
            
            easy10.sort(function(l1, l2) 
            {
                var min1 = parseInt(l1.MINUTE)*60;
                var min2 = parseInt(l2.MINUTE)*60;
                var a = parseInt(l1.SECOND)+min1;
                var b = parseInt(l2.SECOND)+min2;
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < easy10.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == easy10[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#easy10Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + easy10[i].MINUTE.toString().padStart(2,"0") + ":" + easy10[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + easy10[i].MOVE + "</td><td class='align-middle'>" + easy10[i].SCORE + "</td></tr>");
            }
        });

        $("#moveSort10").on('click', function()
        {
            $("#easy10Tb").empty();
            easy10.sort(function(l1, l2) 
            {
            var a = parseInt(l1.MOVE), b = parseInt(l2.MOVE);
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < easy10.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == easy10[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#easy10Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + easy10[i].MINUTE.toString().padStart(2,"0") + ":" + easy10[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + easy10[i].MOVE + "</td><td class='align-middle'>" + easy10[i].SCORE + "</td></tr>");
            }
        });

        $("#scoreSort10").on('click', function()
        {
            $("#easy10Tb").empty();
            easy10.sort(function(l1, l2) 
            {
            var a = parseInt(l1.SCORE), b = parseInt(l2.SCORE);
            return (a < b) ? 1 : (a > b) ? -1 : 0;
            });
            sortScore10 = 1;
            for (let i = 0; i < 5 && i < easy10.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == easy10[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#easy10Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + easy10[i].MINUTE.toString().padStart(2,"0") + ":" + easy10[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + easy10[i].MOVE + "</td><td class='align-middle'>" + easy10[i].SCORE + "</td></tr>");
            }
        });

// SORT 12

        $("#timeSort12").on('click', function()
        {
            $("#easy12Tb").empty();
            
            easy12.sort(function(l1, l2) 
            {
                var min1 = parseInt(l1.MINUTE)*60;
                var min2 = parseInt(l2.MINUTE)*60;
                var a = parseInt(l1.SECOND)+min1;
                var b = parseInt(l2.SECOND)+min2;
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < easy12.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == easy12[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#easy12Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + easy12[i].MINUTE.toString().padStart(2,"0") + ":" + easy12[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + easy12[i].MOVE + "</td><td class='align-middle'>" + easy12[i].SCORE + "</td></tr>");
            }
        });

        $("#moveSort12").on('click', function()
        {
            $("#easy12Tb").empty();
            easy12.sort(function(l1, l2) 
            {
            var a = parseInt(l1.MOVE), b = parseInt(l2.MOVE);
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < easy12.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == easy12[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#easy12Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + easy12[i].MINUTE.toString().padStart(2,"0") + ":" + easy12[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + easy12[i].MOVE + "</td><td class='align-middle'>" + easy12[i].SCORE + "</td></tr>");
            }
        });

        $("#scoreSort12").on('click', function()
        {
            $("#easy12Tb").empty();
            easy12.sort(function(l1, l2) 
            {
            var a = parseInt(l1.SCORE), b = parseInt(l2.SCORE);
            return (a < b) ? 1 : (a > b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < easy12.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == easy12[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#easy12Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + easy12[i].MINUTE.toString().padStart(2,"0") + ":" + easy12[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + easy12[i].MOVE + "</td><td class='align-middle'>" + easy12[i].SCORE + "</td></tr>");
            }
        });

// SORT 15

        $("#timeSort15").on('click', function()
        {
            $("#hard15Tb").empty();
            
            hard15.sort(function(l1, l2) 
            {
                var min1 = parseInt(l1.MINUTE)*60;
                var min2 = parseInt(l2.MINUTE)*60;
                var a = parseInt(l1.SECOND)+min1;
                var b = parseInt(l2.SECOND)+min2;
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < hard15.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == hard15[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#hard15Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + hard15[i].MINUTE.toString().padStart(2,"0") + ":" + hard15[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + hard15[i].MOVE + "</td><td class='align-middle'>" + hard15[i].SCORE + "</td></tr>");
            }
        });
    
        $("#moveSort15").on('click', function()
        {
            $("#hard15Tb").empty();
            hard15.sort(function(l1, l2) 
            {
            var a = parseInt(l1.MOVE), b = parseInt(l2.MOVE);
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < hard15.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == hard15[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#hard15Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + hard15[i].MINUTE.toString().padStart(2,"0") + ":" + hard15[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + hard15[i].MOVE + "</td><td class='align-middle'>" + hard15[i].SCORE + "</td></tr>");
            }
        });
    
        $("#scoreSort15").on('click', function()
        {
            $("#hard15Tb").empty();
            hard15.sort(function(l1, l2) 
            {
            var a = parseInt(l1.SCORE), b = parseInt(l2.SCORE);
            return (a < b) ? 1 : (a > b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < hard15.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == hard15[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#hard15Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + hard15[i].MINUTE.toString().padStart(2,"0") + ":" + hard15[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + hard15[i].MOVE + "</td><td class='align-middle'>" + hard15[i].SCORE + "</td></tr>");
            }
        });
    

// SORT 18
        $("#timeSort18").on('click', function()
        {
            $("#hard18Tb").empty();
            hard18.sort(function(l1, l2) 
            {
                var min1 = parseInt(l1.MINUTE)*60;
                var min2 = parseInt(l2.MINUTE)*60;
                var a = parseInt(l1.SECOND)+min1;
                var b = parseInt(l2.SECOND)+min2;
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < hard18.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == hard18[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#hard18Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + hard18[i].MINUTE.toString().padStart(2,"0") + ":" + hard18[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + hard18[i].MOVE + "</td><td class='align-middle'>" + hard18[i].SCORE + "</td></tr>");
            }
        });
    
        $("#moveSort18").on('click', function()
        {
            $("#hard18Tb").empty();
            hard18.sort(function(l1, l2) 
            {
            var a = parseInt(l1.MOVE), b = parseInt(l2.MOVE);
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < hard18.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == hard18[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#hard18Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + hard18[i].MINUTE.toString().padStart(2,"0") + ":" + hard18[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + hard18[i].MOVE + "</td><td class='align-middle'>" + hard18[i].SCORE + "</td></tr>");
            }
        });
    
        $("#scoreSort18").on('click', function()
        {
            $("#hard18Tb").empty();
            hard18.sort(function(l1, l2) 
            {
            var a = parseInt(l1.SCORE), b = parseInt(l2.SCORE);
            return (a < b) ? 1 : (a > b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < hard18.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == hard18[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#hard18Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + hard18[i].MINUTE.toString().padStart(2,"0") + ":" + hard18[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + hard18[i].MOVE + "</td><td class='align-middle'>" + hard18[i].SCORE + "</td></tr>");
            }
        });

// SORT 21

        $("#timeSort21").on('click', function()
        {
            $("#hard21Tb").empty();
            
            hard21.sort(function(l1, l2) 
            {
                var min1 = parseInt(l1.MINUTE)*60;
                var min2 = parseInt(l2.MINUTE)*60;
                var a = parseInt(l1.SECOND)+min1;
                var b = parseInt(l2.SECOND)+min2;
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < hard21.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == hard21[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#hard21Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + hard21[i].MINUTE.toString().padStart(2,"0") + ":" + hard21[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + hard21[i].MOVE + "</td><td class='align-middle'>" + hard21[i].SCORE + "</td></tr>");
            }
        });
    
        $("#moveSort21").on('click', function()
        {
            $("#hard21Tb").empty();
            hard21.sort(function(l1, l2) 
            {
            var a = parseInt(l1.MOVE), b = parseInt(l2.MOVE);
            return (a > b) ? 1 : (a < b) ? -1 : 0;
            });
            for (let i = 0; i < 5 && i < hard21.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == hard21[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#hard21Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + hard21[i].MINUTE.toString().padStart(2,"0") + ":" + hard21[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + hard21[i].MOVE + "</td><td class='align-middle'>" + hard21[i].SCORE + "</td></tr>");
            }
        });
    
        $("#scoreSort21").on('click', function()
        {
            $("#hard21Tb").empty();
            hard21.sort(function(l1, l2) 
            {
            var a = parseInt(l1.SCORE), b = parseInt(l2.SCORE);
            return (a < b) ? 1 : (a > b) ? -1 : 0;
            });
            
            for (let i = 0; i < 5 && i < hard21.length; i++) {
                for (let j = 0; j < user.length; j++) {
                    if (user[j].ID == hard21[i].USER_ID) {
                        tempUser = user[j].USERNAME;
                        break;
                    }
                }
                $("#hard21Tb").append("<tr><td class='align-middle'>" + (i+1) + "</td>><td class='align-middle'>" + tempUser + "</td><td class='align-middle'>" + hard21[i].MINUTE.toString().padStart(2,"0") + ":" + hard21[i].SECOND.toString().padStart(2,"0") + "</td><td class='align-middle'>" + hard21[i].MOVE + "</td><td class='align-middle'>" + hard21[i].SCORE + "</td></tr>");
            }
        });
    })
</script>