/**
 * Fonction qui gère la sidebar
 */
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});


/**
 * Fonction DATATABLE
 */
$(document).ready(function () {
    $('#table_id').DataTable({
            "dom": 'frtip',
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
            }
        }
    );
    $('#cash_valide').hide();
    $('#bankacc_valide').hide();
});

/**
 *Gestion license player
 */
$(document).on('click', '.license', function (e) {
    $.ajax({
        url: "/player/edit/license",
        type: "POST",
        cache: false,
        data: {
            class: $(this).attr('class'),
            player: $("#player_uid").text(),
            license: $(this).text(),
        },
        success: function (data) {

            if (data) {
                updateResultLicense(data);
                console.log($('#' + data));
            }
        }
    });
});

function updateResultLicense(data) {
    if ($('#' + data).hasClass('active')) {
        $('#' + data).removeClass('active');
    } else {
        $('#' + data).addClass('active');
    }
}

/**
 * Gestion argent en cash d'un joueur
 */

$(document).on('focusout', '#cash', function (e) {
    $.ajax({
        url: "/player/edit/cash",
        type: "POST",
        cache: false,
        data: {
            cash: $(this).val(),
            player: $("#player_uid").text(),
        },
        success: function (data) {
            $('#cash_valide').show();
            setTimeout(function () {
                $('#cash_valide').hide();
            }, 8000);
        }
    });
});

/**
 * Gestion argent en bank d'un joueur
 */

$(document).on('focusout', '#bankacc', function (e) {
    $.ajax({
        url: "/player/edit/bankacc",
        type: "POST",
        cache: false,
        data: {
            bankacc: $(this).val(),
            player: $("#player_uid").text(),
        },
        success: function (data) {
            $('#bankacc_valide').show();
            setTimeout(function () {
                $('#bankacc_valide').hide();
            }, 8000);
        }
    });
});

/**
 * Gestion nom d'un joueur
 */
$(document).on('focusout', '#player', function (e) {
    $.ajax({
        url: "/player/edit/name",
        type: "POST",
        cache: false,
        data: {
            name: $(this).val(),
            player: $("#player_uid").text(),
        },
        success: function (data) {
            $('#player').css({
                "border-color": "#198754 ",
                "box-shadow": "0 0 5px #198754 ",
                "border-width" : "1px",
            })
            setTimeout(function () {
                $('#player').css({
                    "border-color": "#6c757d",
                    "box-shadow": "none",
                    "border-width" : "1px"
                })
            }, 2000);
        }
    });
});

/**
 * Gestion cop level
 */

$(document).on('change', '#coplevel', function (e) {
    console.log($('#coplevel').prop('selected', true).val());
    $.ajax({
        url: "/player/edit/coplevel",
        type: "POST",
        cache: false,
        data: {
            coplevel: $('#coplevel').prop('selected', true).val(),
            player: $("#player_uid").text(),
        },
        success: function (data) {
            console.log(data)
            $('#coplevel').css({
                "border-color": "#198754 ",
                "box-shadow": "0 0 5px #198754 ",
                "border-width" : "1px",
            })
            setTimeout(function () {
                $('#coplevel').css({
                    "border-color": "#6c757d",
                    "box-shadow": "none",
                    "border-width" : "1px"
                })
            }, 2000);
        }
    });
});

/**
 * Gestion medic level
 */

$(document).on('change', '#mediclevel', function (e) {
    console.log($('#coplevel').prop('selected', true).val());
    $.ajax({
        url: "/player/edit/mediclevel",
        type: "POST",
        cache: false,
        data: {
            mediclevel: $('#mediclevel').prop('selected', true).val(),
            player: $("#player_uid").text(),
        },
        success: function (data) {
            console.log(data)
            $('#mediclevel').css({
                "border-color": "#198754 ",
                "box-shadow": "0 0 5px #198754 ",
                "border-width" : "1px",
            })
            setTimeout(function () {
                $('#mediclevel').css({
                    "border-color": "#6c757d",
                    "box-shadow": "none",
                    "border-width" : "1px"
                })
            }, 2000);
        }
    });
});
/**
 * Supprimer un vehicule a partir du profil player
 */
$(document).on('click', '.delete_vehicles_player', function (e) {
    $.ajax({
        url: "/player/delete/vehicle",
        type: "POST",
        cache: false,
        data: {
            vehicle: $(this).attr('id'),
            player: $("#player_uid").text(),
        },
        success: function (data) {
            console.log(data);
            $('#row-' + data).hide(1000, function () {
                $('#row-' + data).remove();
            });
        }
    });
});

/**
 * Supprimer une maison a partir du profil player
 */
$(document).on('click', '.delete_house_player', function (e) {
    $.ajax({
        url: "/player/delete/house",
        type: "POST",
        cache: false,
        data: {
            house: $(this).attr('id'),
            player: $("#player_uid").text(),
        },
        success: function (data) {
            console.log(data);
            $('#row-' + data).hide(1000, function () {
                $('#row-' + data).remove();
            });
        }
    });
});

/**
 * Supprimer un stockage a partir du profil player
 */
$(document).on('click', '.delete_container_player', function (e) {
    $.ajax({
        url: "/player/delete/container",
        type: "POST",
        cache: false,
        data: {
            container: $(this).attr('id'),
            player: $("#player_uid").text(),
        },
        success: function (data) {
            console.log(data);
            $('#row-' + data).hide(1000, function () {
                $('#row-' + data).remove();
            });
        }
    });
});

/**
 * Fonction pour modifier le player en fonction de son id, redirige sur la page player/edit --> Redirection
 * @param e
 */
function editPlayerAction(e) {
    let id = $(e).attr("data-id");
    console.log(id);
    $.redirect('/player/edit', {'uid': id});
}

/**
 * Fonction pour modifier un vehicule en fonction de son id, redirige sur la page vehicle/edit --> Redirection
 * @param e
 */
function editVehicleAction(e) {
    let id = $(e).attr("data-id");
    console.log(id);
    $.redirect('/vehicle/edit', {'id': id});
}

/**
 * Fonction pour modifier un vehicule en fonction de son id, redirige sur la page vehicle/edit --> Redirection
 * @param e
 */
function editContainerAction(e) {
    let id = $(e).attr("data-id");
    console.log(id);
   // $.redirect('/container/edit', {'id': id});
}