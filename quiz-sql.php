<?php require_once './inc/header.php'; ?>
 <script src="https://unpkg.com/codeflask/build/codeflask.min.js"></script> 
    <section class="clean-block clean-services dark">
        <div class="container" style="display: flex;">
            <div class="block-heading" >
                </br>
                
                    <h2 class="text-info">Quiz SQL</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    <form >
                        <B>Question :</B>
                        Quelles sont les propriétés que possède un triangle isocèle ?<BR>
                        <div class="question">
                            <div name="q"class="q q0">
                            <br><input type="checkbox"  name="choix0" value=1></input><label id="0l0">il a deux côtés égaux</label> 
                            <br><input type="checkbox"  name="choix0" value=0><label id="0l1">il a deux côtés égaux</label>
                            <br><input type="checkbox"name="choix0" value=0><label id="0l2">il a deux côtés égaux</label>
                            <br><input type="checkbox"  name="choix0" value=1><label id="0l3">il a deux côtés égaux</label>
                            <br><br>
                            </div>
                            <B>Question :</B>
                            Quelles sont les propriétés que possède un triangle isocèle ?<BR>
                            <div name="q" class="q q1">
                                <br><input type="checkbox" name="choix1" value=1><label id="1l0">il a deux côtés égaux</label> 
                                <br><input type="checkbox" name="choix1" value=0><label id="1l1">il a deux côtés égaux</label> 
                                <br><input type="checkbox" name="choix1" value=0><label id="1l2">il a deux côtés égaux</label> 
                                <br><br>
                            </div> 
                        </div>
                     
                    </form>
                <br>
                <div class="btn-group" role="group"><a class="btn btn-primary active" role="button" onclick="test()" >Soumettre</a></div>
                <br>
                <hr>
                <br>
                <div id="scoreX" class="scoreX btn-group" role="group"><a class="btn btn-primary active" role="button" href="Score.php" >Historique Scores</a></div>
                <p > Votre score est de <span id="sum"></span> sur <span id="total"></span> </p>
                <div id="editorSQL">
                </div>
            </div>
            <div class="code-editor" style="margin-top: 90px ; padding-left: 250px" ></div>
                <script>
                    const flask = new CodeFlask('.code-editor', {
                         language: 'js',
                         lineNumbers: true,
                         defaultTheme: true,
                    });

                        flask.onUpdate((code) => {
                        });

                        const new_content = "/* Editeur SQL */";

                        flask.updateCode(new_content);
                        //flask.addLanguage('sql', options);

                    </script>

            <div class="row">
                <div class="col">
                    
                </div>
            </div>
        </div>
    </section>

<?php require_once './inc/footer.php' ?>

