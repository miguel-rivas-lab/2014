<script>
  import Star from "../components/Star.svelte";
  import Btn from "nano-grid-svelte/components/Btn.svelte";

  let mX = 1,
    mY = 1;
  function moveObjects(event) {
    mX = parseInt(event.clientX) || 1;
    mY = parseInt(event.clientY) || 1;
  }
</script>

<svelte:window on:mousemove={moveObjects} on:load={moveObjects} />

<template>
  <section class="contact">
    <div class="form-container">
      <img src="./imgs/form-header.png" alt="" class="form-header" />
      <form>
        <input type="text" name="name" placeholder="Name" />
        <input type="email" name="email" placeholder="Email" />
        <textarea name="topic" cols="30" rows="10" placeholder="Message" />
        <Btn color="emerald" text="Send" mode="flat" />
      </form>

      <Star
        x={-mX * 0.008}
        y={mX * 0.005}
        className="st4 left"
        translation="500, 180"
      />
      <Star
        x={mX * 0.008}
        y={mX * 0.005}
        className="st4 right"
        translation="500, 180"
      />

      <Star
        x={-mX * 0.004}
        y={-mY * 0.006}
        className="st3 left"
        translation="350, 350"
      />
      <Star
        x={mX * 0.004}
        y={-mY * 0.006}
        className="st3 right"
        translation="350, 350"
      />

      <Star
        x={-mY * 0.005}
        y={mX * 0.002}
        className="st2 left"
        translation="470, 300"
      />
      <Star
        x={mY * 0.005}
        y={mX * 0.002}
        className="st2 right"
        translation="470, 300"
      />

      <Star
        x={-mX * 0.006}
        y={mY * 0.005}
        className="st5 left"
        translation="400, 30"
        starRadius="70"
        innerRadius="35"
      />
      <Star
        x={mX * 0.006}
        y={mY * 0.005}
        className="st5 right"
        translation="400, 30"
        starRadius="70"
        innerRadius="35"
      />
      <Star
        x={-mY * 0.002}
        y={mX * 0.003}
        className="st1 left"
        translation="350, 200"
        starRadius="40"
        innerRadius="20"
      />
      <Star
        x={mY * 0.002}
        y={mX * 0.003}
        className="st1 right"
        translation="350, 200"
        starRadius="40"
        innerRadius="20"
      />
    </div>
    <div class="bird b1" style={`transform: translate(${mX * -0.005}px, ${mY * -0.007}px)`} />
    <div class="bird b2" style={`transform: translate(${mY * -0.003}px, ${mX * 0.002}px)`} />
    <div class="bird b3" style={`transform: translate(${mX * 0.009}px, ${mY * -0.008}px)`} />
  </section>
</template>
