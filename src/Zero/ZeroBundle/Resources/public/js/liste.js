$( document ).ready(function() {
    $(".physique").hide();
    $(".personnalite").hide();
    $(".competences").hide();
    $(".histoire").hide();

    $( "#profil_title" ).click(function() {
        $( ".profil" ).toggle( "slow", function() {
            // Animation complete.
        });
    });

    $( "#physique_title" ).click(function() {
        $( ".physique" ).toggle( "slow", function() {
            // Animation complete.
        });
    });

    $( "#personnalite_title" ).click(function() {
        $( ".personnalite" ).toggle( "slow", function() {
            // Animation complete.
        });
    });

    $( "#competences_title" ).click(function() {
        $( ".competences" ).toggle( "slow", function() {
            // Animation complete.
        });
    });

    $( "#histoire_title" ).click(function() {
        $( ".histoire" ).toggle( "slow", function() {
            // Animation complete.
        });
    });


});