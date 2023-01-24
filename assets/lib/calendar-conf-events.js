async function calcular() {
  let fechaI = $("#fechaI").val();
  let fechaF = $("#fechaF").val();

  let data = new FormData();

  data.append("fechai", fechaI);
  data.append("fechaf", fechaF);

  let req = await fetch("php/total_residuos.php", {
    method: "POST",
    body: data,
  });

  let res = await req.json();

  $("#resultado").val(res * 100);

  // // console.log(res);
}

fetch("php/calendario.php")
  .then((res) => res.json())
  .then((res) => {
    $("#calendar").fullCalendar({
      header: {
        left: "prev,next today",
        center: "title",
        right: "listYear,month,agendaWeek,agendaDay",
      },
      defaultView: "month",

      events: res,
    });
  });
