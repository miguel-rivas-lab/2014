<script>
  import Gear from "../components/Gear.svelte";
</script>

<template>
  <section class="contact">
    <div class="container">

      <div class="form-container">
        <img src="./imgs/form-header.png" alt="" class="form-header">
      </div>
      <form>
        <input type="text" name="name" />
        <input type="text" name="email" />
        <textarea name="topic" cols="30" rows="10" />
      </form>

      <Gear size="450, 500" />
      <Gear size="450, 500" />

      <Gear size="450, 500" />
      <Gear size="450, 500" />

      <Gear size="450, 500" />
      <Gear size="450, 500" />

      <Gear size="600, 500" />
      <Gear size="600, 500" />

      <div class="bird b01" />
      <div class="bird b02" />
      <div class="bird b03" />
    </div>
  </section>
</template>
