

var tick = 0;
function displayTrademarkAnimation() {
    var sx = 20; // the size
    var sy = 10; // the size
    var tx = 3;
    var ty = 3;
    var canvas = document.getElementById("trademark");
    var context = canvas.getContext("2d");
    context.fillStyle = "#FF00FF";
    context.fillRect(tx + 1 * sx, ty, 8 * sx, 1 * sy);
    context.clearRect(0, ty + 8 * sy, 12 * sx, 5 * sy);
    context.fillRect(tx, ty + 1 * sy, 10 * sx, 9 * sy);
    var xx = tx + 3 * Math.sin(tick) * sy;
    tick += Math.PI * 2 / 50;
    if (tick > (2 * Math.PI)) { tick -= Math.PI * 2; }
    context.fillRect(xx, ty + 8 * sy, 4 * sx, 5 * sy);
    context.fillRect(xx + 6 * sx, ty + 8 * sy, 4 * sx, 5 * sy);
    context.fillStyle = "#FFFFFF";
    context.fillRect(tx + 2 * sx, ty + 2 * sy, 2 * sx, 4 * sy);
    context.fillRect(tx + 6 * sx, ty + 2 * sy, 2 * sx, 4 * sy);
    context.fillStyle = "#000000";
    context.fillRect(tx + 2 * sx, ty + 4 * sy, 1 * sx, 2 * sy);
    context.fillRect(tx + 6 * sx, ty + 4 * sy, 1 * sx, 2 * sy);
}

setInterval(displayTrademarkAnimation, 50);

