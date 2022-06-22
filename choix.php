<?php session_start(); ?>
<?php require './inc/header.php'; ?>
s
<main class="page">
    <section class="clean-block features">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Quiz&nbsp;</h2>
                <p>Choisissez votre type de quiz que vous voulez réalisez</p>
            </div>
        </div>
        <div class="d-lg-flex align-self-center justify-content-lg-center text" style="margin: 10px;">
            <p></p><a class="btn btn-outline-light active btn-lg align-items-center wobble animated" role="button" href="StartSQL.html" style="height: 55.6px;">Commencé le quiz SQL</a><a class="btn btn-outline-light active btn-lg align-items-center wobble animated" role="button" href="CoursSQL.html" style="width: 178.75px;height: 62.6px;margin: 24px;padding: 9px 16px;">Cours SQL</a>
        </div>
        <div class="d-lg-flex align-self-center justify-content-lg-center text" style="margin: 10px;">
            <p></p><a class="btn btn-outline-light active btn-lg align-items-center pulse animated" role="button" href="StartAlgo.html" style="margin: -9px;padding: 27px 16px;">Commencé le quiz Algorithmie</a><a class="btn btn-outline-light active btn-lg align-items-center pulse animated" role="button" href="CoursAlgo.html" style="margin: 15px;">Cours D'Algorithmie</a>
        </div>
        <div class="d-lg-flex align-self-center justify-content-lg-center text" style="margin: 10px;">
            <p></p><a class="btn btn-outline-light active btn-lg align-items-center wobble animated" role="button" href="StartProg.html" style="padding: 15px 16px;margin: 20px;height: 60.6px;">Commencé le quiz Programmation</a><a class="btn btn-outline-light active btn-lg align-items-center wobble animated" role="button" href="CoursProg.html" style="margin: 12px;padding: 11px 16px;height: 50.6px;width: 393.038px;">Cours De Programmation</a>
        </div>
    </section>
</main>

<?php require_once './inc/footer.php' ?>