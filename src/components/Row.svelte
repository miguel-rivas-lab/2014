<script>
  import { validateSpacing } from "nano-grid/modules/columns-manager";

  export let breakpoint = "",
    group = false,
    spacing = undefined,
    integrated = false,
    vertical = false,
    grid = false,
    className = "";

  $: computedSpacing = spacing ? validateSpacing(spacing) : "";
  $: computedGroup = group ? "nano-group" : "";
  $: computedIntegrated = integrated ? "integrated" : "";
  $: computedVertical = vertical ? "vertical" : "";
  $: computedGrid = grid ? "grid" : "";
  $: computedClasses = [
    "nano-row",
    computedGroup,
    computedIntegrated,
    computedVertical,
    computedGrid,
    computedSpacing,
    className,
  ]
    .join(" ")
    .replace(/\s+/g, " ")
    .trim();
</script>

<template>
  <div class={computedClasses}>
    <slot />
  </div>
</template>
