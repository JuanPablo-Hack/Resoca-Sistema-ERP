$(document).ready(function () {
  /*
   * Initialse DataTables, with no sorting on the 'details' column
   */
  var oTable = $("#hidden-table-info").dataTable({
    aoColumnDefs: [
      {
        bSortable: true,
        aTargets: [0],
      },
    ],
    aaSorting: [[4, "asc"]],
  });
});
function Mostrar_Tabla_Año() {
  var Año_Seleccionado = document.getElementById("filtro_ano").value;
  var sistema = geturl();
  if (Año_Seleccionado == 2022) {
    location.href = sistema + "listar_confirmaciones_2022.php";
  } else {
    location.href = sistema + "listar_confirmaciones.php";
  }
}

function geturl() {
  var loc = window.location;
  var pathname = loc.pathname.substring(0, loc.pathname.lastIndexOf("/") + 1);
  return loc.href.substring(
    0,
    loc.href.length -
      ((loc.pathname + loc.search + loc.hash).length - pathname.length)
  );
}
