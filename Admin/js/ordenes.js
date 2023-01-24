/* Formating function for row details */
function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut =
    '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
  sOut +=
    "<tr><td>Nombre y cargo:</td><td>" +
    aData[6] +
    "-" +
    aData[7] +
    "</td></tr>";
  sOut +=
    "<tr><td>Fecha y Hora:</td><td>" +
    aData[3] +
    " - " +
    aData[8] +
    "</td></tr>";
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
  });

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
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("Form_Orden").addEventListener("submit", crearOrden);
});
async function crearOrden(e) {
  e.preventDefault();
  var form = document.getElementById("Form_Orden");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("php/orden_controller.php", {
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
function eliminarOrden(id) {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger",
    },
    buttonsStyling: false,
  });

  swalWithBootstrapButtons
    .fire({
      title: "Estas seguro?",
      text: "¡No podrás revertir esto!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Si, eliminar",
      cancelButtonText: "No, cancelar!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        let data = new FormData();
        data.append("id", id);
        data.append("accion", "eliminar");
        fetch("php/orden_controller.php", {
          method: "POST",
          body: data,
        })
          .then((result) => result.text())
          .then((result) => {
            if (result == 1) {
              swalWithBootstrapButtons.fire(
                "Eliminado!",
                "Su archivo ha sido eliminado.",
                "success"
              );
              setTimeout(function () {
                location.reload();
              }, 3000);
            } else {
              swalWithBootstrapButtons.fire(
                "Error",
                "Hemos tenido un error a la base de datos o la conexión.",
                "error"
              );
              setTimeout(function () {
                location.reload();
              }, 3000);
            }
          });
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Cancelado",
          "Tu archivo ha sido salvado",
          "error"
        );
      }
    });
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
