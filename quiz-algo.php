<?php 
    session_start();
    require './inc/header.php'; 
?>

    <div id="result" style="display:none">
        <form action="result_algo.php" method="get">
            <input type="hidden" value='' name='earned_algo' id='earned_algo'>
            <input type="hidden" value='' name='max_algo' id='max_algo'>
            <button type="submit" class="btn btn-success">Enregistrez votre résultat</button>
        </form>
    </div>

<?php require './inc/footer.php' ?>