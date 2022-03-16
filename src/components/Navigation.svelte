<script>
  import {link} from "svelte-spa-router";
</script>

<template>
  <nav>
    <ul>
      <li>
        <a href="/" use:link>Home</a>
        <a href="/contact" use:link>Contact</a>
      </li>
    </ul>
  </nav>
</template>
