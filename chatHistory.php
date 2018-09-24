<?php


    // Récupération des 10 derniers messages
    $reponse = $bdd->query('SELECT pseudo,message_content FROM message INNER JOIN chat_room.account as A ON A.id = message.id_message_owner ORDER BY ID DESC LIMIT 0, 10');

    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
    while ($donnees = $reponse->fetch()){
        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message_content']) . '</p>';
    }
    $reponse->closeCursor();


     $page = $_SERVER['PHP_SELF'];
     $sec = "10";
     header("Refresh: $sec; url=$page");
?>