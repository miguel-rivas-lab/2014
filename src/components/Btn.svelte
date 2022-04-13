<script>
  import { link } from "svelte-spa-router";
  import { beforeUpdate } from "svelte";

  export let glyph = "",
    size = "",
    text = "",
    title = "",
    direction = "down",
    mode = "flat",
    to = "",
    color = "transparent",
    active = false;

  let computedClasses, computedLabel;

  beforeUpdate(() => {
    let isActive = active ? "active" : "";
    let btnType = `btn ${mode}`;

    computedLabel = text !== "" ? undefined : title;

    computedClasses = [btnType, color, size, isActive]
      .join(" ")
      .replace(/\s+/g, " ")
      .trim();
  });
</script>

<template>
  {#if to !== ""}
    <a
      use:link
      class={computedClasses}
      title={computedLabel}
      aria-label={computedLabel}
      href={to}
    >
      <nn-icon {glyph} {direction} />
      {#if text !== ""}
        <span class="caption">
          {text}
        </span>
      {/if}
    </a>
  {:else}
    <button
      on:click
      {...$$restProps}
      class={computedClasses}
      title={computedLabel}
      aria-label={computedLabel}
    >
      <nn-icon {glyph} {direction} />
      {#if text !== ""}
        <span class="caption">
          {text}
        </span>
      {/if}
    </button>
  {/if}
</template>
