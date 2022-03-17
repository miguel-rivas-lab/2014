<script>
  import { onMount } from "svelte";

  export let width = 0,
    className = "",
    teethAmount = 40,
    pitchRadius = 50,
    baseCircleRadius = 45,
    axisRadius = 5,
    sidePerforationRadius = 12,
    sidePerforationDistance = 25,
    sidePerforationAmount = 4,
    color = "#999",
    colorPerforation = "#444";

  $: classes = ["gear", className].join(" ").replace(/\s+/g, " ").trim();

  let canvas;

  onMount(() => {
    const ctx = canvas.getContext("2d");
    let percent = width / 100;
    let ang = Math.PI / 180;
    let x = width / 2;
    let y = width / 2;
    let gear_color = color;
    let holes_color = colorPerforation;
    /* ----------- Poligon 1 ----------- */
    let px = [];
    let py = [];
    /* ----------- Poligon 2 ----------- */
    let px2 = [];
    let py2 = [];
    /* ----------- Inner Circle ----------- */
    let px3 = [];
    let py3 = [];
    /* ----------- End Vars ----------- */

    ctx.clearRect(0, 0, width, width);
    for (let kk = 0; kk <= teethAmount - 1; kk++) {
      px[kk] =
        Math.cos((360 / teethAmount) * kk * ang) *
        pitchRadius *
        percent;
      py[kk] =
        Math.sin((360 / teethAmount) * kk * -ang) *
        pitchRadius *
        percent;
    }
    /* --------------------- Second Shape --------------------- */
    for (let kk = 0; kk <= teethAmount - 1; kk++) {
      px2[kk] =
        Math.cos((360 / (teethAmount * 2) + (360 / teethAmount) * kk) * ang) *
        baseCircleRadius *
        percent;
      py2[kk] =
        Math.sin(
          (360 / (teethAmount * 2) + (360 / teethAmount) * kk) * -ang
        ) *
        baseCircleRadius *
        percent;
    }
    /* --------------------- Circles --------------------- */
    for (let kk = 0; kk <= sidePerforationAmount - 1; kk++) {
      px3[kk] =
        Math.cos((360 / sidePerforationAmount) * kk * ang) *
        sidePerforationDistance *
        percent;
      py3[kk] =
        Math.sin((360 / sidePerforationAmount) * kk * -ang) *
        sidePerforationDistance *
        percent;
    }
    ctx.beginPath();
    ctx.moveTo(x + px[0], y + py[0]);
    ctx.lineTo(x + px2[0], y + py2[0]);
    for (let kk = 1; kk <= teethAmount - 1; kk++) {
      ctx.lineTo(x + px[kk], y + py[kk]);
      ctx.lineTo(x + px2[kk], y + py2[kk]);
    }
    ctx.fillStyle = gear_color;
    ctx.fill();
    ctx.closePath();
    ctx.beginPath();
    ctx.arc(x, y, axisRadius * percent, 0, Math.PI * 2, true);
    ctx.fillStyle = holes_color;
    ctx.fill();
    ctx.closePath();
    for (let kk = 0; kk <= sidePerforationAmount - 1; kk++) {
      ctx.beginPath();
      ctx.arc(
        x + px3[kk],
        y + py3[kk],
        sidePerforationRadius * percent,
        0,
        Math.PI * 2,
        true
      );
      ctx.fillStyle = holes_color;
      ctx.fill();
      ctx.closePath();
    }
  });
</script>

<template>
  <canvas bind:this={canvas} {width} height={width} class={classes} />
</template>
