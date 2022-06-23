const countDate = new Date("Jul 24, 2022 23:59:00").getTime();

const changeTime = (h = 0, j = 0, m = 0, d = 0) => {
    document.getElementById("days").innerText = h;
    document.getElementById("hours").innerText = j;
    document.getElementById("minutes").innerText = m;
    document.getElementById("seconds").innerText = d;
};

const countdown = setInterval(() => {
    let now = new Date().getTime();
    let gap = countDate - now;

    let detik = 1000;
    let menit = detik * 60;
    let jam = menit * 60;
    let hari = jam * 24;

    let h = Math.floor(gap / hari);
    let j = Math.floor((gap % hari) / jam);
    let m = Math.floor((gap % jam) / menit);
    let d = Math.floor((gap % menit) / detik);

    changeTime(h, j, m, d);

    if (gap <= 0) {
        clearInterval(countdown);
        changeTime();
    }
}, 1000);