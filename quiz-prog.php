<?php 
    session_start();
    require './inc/header.php'; 
?>

    <div id="result" style="display:none">
        <form action="result_prog.php" method="get">
            <input type="hidden" value='' name='earned_prog' id='earned_prog'>
            <input type="hidden" value='' name='max_prog' id='max_prog'>
            <button type="submit" class="btn btn-success">Enregistrez votre résultat</button>
        </form>
    </div>

<?php require './inc/footer.php' ?>