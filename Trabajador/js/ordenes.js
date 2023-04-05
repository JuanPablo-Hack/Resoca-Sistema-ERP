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
    aaSorting: [[3, "asc"]],
  });
});

function addScript(url) {
  var script = document.createElement("script");
  script.type = "application/javascript";
  script.src = url;
  document.head.appendChild(script);
}
addScript(
  "https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"
);

function crearPDF(id) {
  var opt = {
    margin: 1,
    filename: "Orden.pdf",
    image: {
      type: "jpeg",
      quality: 0.98,
    },
    html2canvas: {
      scale: 3,
    },
    jsPDF: {
      unit: "in",
      format: "a3",
      orientation: "portrait",
    },
  };

  $.ajax({
    type: "POST",
    data: "id=" + id,
    url: "php/ordenesPDF.php",
    success: function (r) {
      var worker = html2pdf().set(opt).from(r).toPdf().save();
    },
  });
}
function Mostrar_Tabla_Año() {
  var Año_Seleccionado = document.getElementById("filtro_ano").value;
  var sistema = geturl();
  if (Año_Seleccionado == 2022) {
    location.href = sistema + "historico_2022.php";
  } else {
    location.href = sistema + "listar_orden.php";
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
