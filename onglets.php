   <?php function affiche_onglets(){ 

    // tableaux contenant les liens d'accès et le texte à afficher
    $tab_menu_lien = array("index.php","check.php","interro", "revision");
    $tab_menu_texte = array("Tables","Chekboxes","Interro", "Révisions");

    //informations sur la page
    $info = pathinfo($_SERVER['PHP_SELF']);
    $onglets = "\n<div id=\"menu\">\n  <ul id=\"onglets\">\n";

    // boucle qui parcours les 2 tableaux
    foreach($tab_menu_lien as $cle=>$lien){
        $onglets .= "  <li";

        // si le fichier correspond à celui pointé par l'indice, alors on l'active
        if( $info['basename'] == $lien)
        $onglets .= " class=\"active\"";

        $onglets .= "><a href=\"" . $lien . "\">" . $tab_menu_texte[$cle] . "</a></li>\n";                                                                                                                                                              
    }

    $onglets .= "</ul>\n  </div>";


    // on renvoie le code html
    return $onglets;
}?>   

 <!-- <div id="menu">
    <ul id="onglets">
        <li><a href="index.php"> Tables</a> </li>
        <li><a href="check.php"> Checkboxes</a> </li>
        <li><a href="interro.php"> Interro</a> </li>
        <li><a href="revision.php"> Révisions</a> </li>
    </ul>
</div>  -->