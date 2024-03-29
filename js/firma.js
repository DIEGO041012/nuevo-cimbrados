var canvas = document.getElementById("signature");
    var ctx = canvas.getContext("2d");
    var drawing = false;

    canvas.addEventListener("mousedown", startDrawing);
    canvas.addEventListener("mouseup", stopDrawing);
    canvas.addEventListener("mousemove", draw);

    canvas.addEventListener("touchstart", startDrawing);
    canvas.addEventListener("touchend", stopDrawing);
    canvas.addEventListener("touchmove", draw);

    function startDrawing(e) {
      e.preventDefault();
      drawing = true;
      draw(e);
    }

    function stopDrawing() {
      drawing = false;
      ctx.beginPath();
    }

    function draw(e) {
      if (!drawing) return;

      var clientX, clientY;

      if (e.type.startsWith("touch")) {
        var touch = e.touches[0];
        clientX = touch.clientX;
        clientY = touch.clientY;
      } else {
        clientX = e.clientX;
        clientY = e.clientY;
      }

      ctx.lineWidth = 2;
      ctx.lineCap = "round";
      ctx.strokeStyle = "#000";

      ctx.lineTo(clientX - canvas.getBoundingClientRect().left, clientY - canvas.getBoundingClientRect().top);
      ctx.stroke();
      ctx.beginPath();
      ctx.moveTo(clientX - canvas.getBoundingClientRect().left, clientY - canvas.getBoundingClientRect().top);
    }

    function clearSignature() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
    }