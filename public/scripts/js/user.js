/**
 * Fonction pour modifier un user en fonction de son id, redirige sur la page user/edit --> Redirection
 * @param e
 */
function editUserAction(e) {
    let uid = $(e).attr("data-id");
    console.log(uid);
    $.redirect('/user/edit', {'uid': uid});
}

/**
 * Gestion role
 */

$(document).on('change', '#role', function (e) {
    console.log($('#role').prop('selected', true).val());
    $.ajax({
        url: "/user/edit/role",
        type: "POST",
        cache: false,
        data: {
            role: $('#role').prop('selected', true).val(),
            user: $("#user_uid").text(),
        },
        success: function (data) {
            console.log(data)
            $('#role').css({
                "border-color": "#198754 ",
                "box-shadow": "0 0 5px #198754 ",
                "border-width" : "1px",
            })
            setTimeout(function () {
                $('#role').css({
                    "border-color": "#6c757d",
                    "box-shadow": "none",
                    "border-width" : "1px"
                })
            }, 2000);
        }
    });
});