<script>
  import { validateSize } from "nano-grid/modules/columns-manager";

  export let size = undefined,
    mode = "column",
    className = "";
  let computedSize = size ? validateSize(size).class : "";
  let computedStyle = size ? validateSize(size).style : "";
  let computedClasses = [mode, computedSize, className]
    .join(" ")
    .replace(/\s+/g, " ")
    .trim();
</script>

<template>
  <div class={computedClasses} style={computedStyle}>
    <slot />
  </div>
</template>
