<?php 
    session_start();
    require './inc/header.php'; 
?>

    <p>algo</p>


    
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