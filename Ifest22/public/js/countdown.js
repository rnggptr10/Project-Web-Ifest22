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

const changeTime2 = (h1 = 0, j1 = 0, m1 = 0, d1 = 0) => {
    document.getElementById("days2").innerText = h1;
    document.getElementById("hours2").innerText = j1;
    document.getElementById("minutes2").innerText = m1;
    document.getElementById("seconds2").innerText = d1;
};

const countdown2 = setInterval(() => {
    let now = new Date().getTime();
    let gap = countDate - now;

    let detik = 1000;
    let menit = detik * 60;
    let jam = menit * 60;
    let hari = jam * 24;

    let h1 = Math.floor(gap / hari);
    let j1 = Math.floor((gap % hari) / jam);
    let m1 = Math.floor((gap % jam) / menit);
    let d1 = Math.floor((gap % menit) / detik);

    changeTime2(h1, j1, m1, d1);

    if (gap <= 0) {
        clearInterval(countdown2);
        changeTime2();
    }
}, 1000);