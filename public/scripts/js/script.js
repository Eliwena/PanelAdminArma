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

