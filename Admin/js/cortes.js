/* Formating function for row details */
function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut =
    '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
  sOut +=
    "<tr><td>Rendering engine:</td><td>" +
    aData[1] +
    " " +
    aData[4] +
    "</td></tr>";
  sOut += "<tr><td>Link to source:</td><td>Could provide a link here</td></tr>";
  sOut +=
    "<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>";
  sOut += "</table>";

  return sOut;
}

$(document).ready(function () {
  /*
   * Insert a 'details' column to the table
   */
  var nCloneTh = document.createElement("th");
  var nCloneTd = document.createElement("td");
  nCloneTd.innerHTML =
    '<img src="../assets/lib/advanced-datatable/images/details_open.png">';
  nCloneTd.className = "center";

  $("#hidden-table-info thead tr").each(function () {
    this.insertBefore(nCloneTh, this.childNodes[0]);
  });

  $("#hidden-table-info tbody tr").each(function () {
    this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
  });

  /*
   * Initialse DataTables, with no sorting on the 'details' column
   */
  var oTable = $("#hidden-table-info").dataTable({
    aoColumnDefs: [
      {
        bSortable: false,
        aTargets: [0],
      },
    ],
    aaSorting: [[1, "asc"]],
  });

  /* Add event listener for opening and closing details
   * Note that the indicator for showing which row is open is not controlled by DataTables,
   * rather it is done here
   */
  $("#hidden-table-info tbody td img").live("click", function () {
    var nTr = $(this).parents("tr")[0];
    if (oTable.fnIsOpen(nTr)) {
      /* This row is already open - close it */
      this.src = "../assets/lib/advanced-datatable/images/details_open.png";
      oTable.fnClose(nTr);
    } else {
      /* Open this row */
      this.src = "../assets/lib/advanced-datatable/images/details_close.png";
      oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), "details");
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("Form_Corte").addEventListener("submit", crearCorte);
});
async function crearCorte(e) {
  e.preventDefault();
  var form = document.getElementById("Form_Corte");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/cortes_controller.php", {
    method: "POST",
    body: data,
  })
    .then((result) => result.text())
    .then((result) => {
      if (result == 1) {
        document.getElementById("success").style.display = "inherit";
        document.getElementById("wrong").style.display = "none";
        setTimeout(function () {
          location.reload();
        }, 2000);
      } else {
        document.getElementById("success").style.display = "none";
        document.getElementById("wrong").style.display = "inherit";
      }
    });
}

function FormaDeCobrar() {
  FormatoDeCobroSeleccionado = document.getElementById("forma_cobrar").value;
  if (FormatoDeCobroSeleccionado == 1) {
    document.getElementById("rango_fechas").style.display = "inherit";
    document.getElementById("dias_cobrados").style.display = "none";
  } else {
    document.getElementById("rango_fechas").style.display = "none";
    document.getElementById("dias_cobrados").style.display = "inherit";
  }
}

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
    filename: "Corte.pdf",
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
    url: "php/cortesPDF.php",
    success: function (r) {
      var worker = html2pdf().set(opt).from(r).toPdf().save();
    },
  });
}
