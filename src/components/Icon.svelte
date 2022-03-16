<script>
  export let glyph = "";
  export let direction = "bottom";

  let computedClasses = ["icon", glyph, direction].join(" ").trim();
</script>

<template>
  <span class={computedClasses} />
</template>
