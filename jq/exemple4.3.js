$(function () {

    alert($('#titre').html()); // la méthode html() permet d'accéder au contenu des éléments elle affiche alors "J'aime les frites."
    $('#titre').html('Je mange une pomme');
    // Remplace le contenu ("J'aime les frites.") par "Je mange une pomme".
    // Deux autres méthodes, before() et after() permettent d'ajouter du contenu ou un élément de la page
    // Ajoute "Voici le titre :" avant la balise ayant comme id "titre".
    $('#titre').before('Voici le titre :');
    // Ajoute "! Wahou !" après la balise ayant comme id "titre".
    $('#titre').after('! Wahou !');
    // Il faut savoir qu'on peut chaîner les méthodes
    $('#titre').before(' avant: ')
        .after('! après !');
    $("#para").html("C’est un exemple qui permet de tester quelque commande de jQuery en faisant appel à un fichier externe qui contient une fonction principale définie par $(function(){}). Cette fonction ne sera appelée que lorsque tout les élément DOM du HTML sontchargés ")
    //$("#para").css('column-count', '4')
    $("tab").css("")
});

