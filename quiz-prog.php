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

    <div class="code-editor" style="margin-top: 90px ; margin-right: 200px; height:100%" ></div>
        <script>
            const flask = new CodeFlask('.code-editor', {
                    language: 'html',
                    lineNumbers: true,
                    defaultTheme: true,
            });

                flask.onUpdate((code) => {
                });

                flask.updateCode("<!DOCTYPE html>\n<html>\n	<head>\n            <title>App</title>\n	</head>\n	<body>\n	    <h1>App</h1>\n	</body>\n</html>")

                fla

        </script>

<?php require_once './inc/footer.php' ?>
