<?php 
    session_start();
    require './inc/header.php';
?>

    <section class="clean-block clean-services dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Quiz SQL</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                <form >
                    <B>Question :</B>
                    Quelles sont les propriétés que possède un triangle isocèle ?<BR>
                    <div   class="question">
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
                <div id="submit_SQL" class="btn-group" role="group"><a class="btn btn-primary active" role="button" onclick="test()" >Soumettre</a></div>
                <div id="result_SQL" style="display:none">
                    <form action="result_SQL.php" method="get">
                        <input type="hidden" value='' name='earned_SQL' id='earned_SQL'>
                        <input type="hidden" value='' name='max_SQL' id='max_SQL'>
                        <button type="submit" class="btn btn-success">Enregistrer votre résultat</button>
                    </form>
                </div>
                <br>
                <hr>
                <br>
                <div id="scoreX" class="scoreX btn-group" role="group"><a class="btn btn-primary active" role="button" href="Score.php" >Historique Scores</a></div>
                <p> Votre score est de <span id="sum"></span> sur <span id="total"></span> </p>
            </div>
            <div class="row">
                <div class="col">
                    
                </div>
            </div>
        </div>
    </section>

<?php require_once './inc/footer.php' ?>
