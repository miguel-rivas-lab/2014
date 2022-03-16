<script>
  import { validateSpacing } from "nano-grid/modules/columns-manager";

  export let breakpoint = "",
    group = false,
    spacing = undefined,
    integrated = false,
    vertical = false,
    grid = false,
    className = "";

  let computedSpacing = spacing ? validateSpacing(spacing) : "";
  let computedGroup = group ? "nano-group" : "";
  let computedIntegrated = integrated ? "integrated" : "";
  let computedVertical = vertical ? "vertical" : "";
  let computedGrid = grid ? "grid" : "";
  let computedClasses = [
    "nano-row",
    computedGroup,
    computedIntegrated,
    computedVertical,
    computedGrid,
    computedSpacing,
    className,
  ]
    .join(" ")
    .replace(/\s+/g, ' ')
    .trim();

    console.log([
    "nano-row",
    computedGroup,
    computedIntegrated,
    computedVertical,
    computedGrid,
    computedSpacing,
    className,
  ]);
</script>

<template>
  <div class={computedClasses}>
    <slot />
  </div>
</template>
