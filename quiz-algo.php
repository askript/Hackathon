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

    <div class="code-editor" style="margin-top: 90px ; margin-right: 200px; height:100%" ></div>
                <script>
                    const flask = new CodeFlask('.code-editor', {
                         language: 'js',
                         lineNumbers: true,
                         defaultTheme: true,
                    });

                        flask.onUpdate((code) => {
                        });

                        const new_content = "/* Editeur Javascript */";

                        flask.updateCode(new_content);
                        //flask.addLanguage('sql', options);

                    </script>


<?php require_once './inc/footer.php' ?>

