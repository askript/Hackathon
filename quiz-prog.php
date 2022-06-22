<?php 
    session_start();
    require './inc/header.php'; 
?>

    <p>prog</p>

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