<script>
  import { validateSize } from "nano-grid/modules/columns-manager";
  import { beforeUpdate } from "svelte";

  export let size = undefined,
    mode = "column",
    className = "";

  let computedSize, computedStyle, computedClasses;

  beforeUpdate(() => {
    computedSize = size ? validateSize(size).class : "";
    computedStyle = size ? validateSize(size).style : "";
    computedClasses = [mode, computedSize, className]
      .join(" ")
      .replace(/\s+/g, " ")
      .trim();
  });
</script>

<template>
  <div class={computedClasses} style={computedStyle}>
    <slot />
  </div>
</template>
