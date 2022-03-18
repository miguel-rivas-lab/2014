<script>
  import Icon from "./Icon.svelte";
  import { link } from "svelte-spa-router";
  import { beforeUpdate } from "svelte";

  export let glyph = "",
    size = "",
    text = "",
    title = "",
    direction = "bottom",
    mode = "flat",
    to = "",
    color = "transparent",
    active = false;

  let computedClasses, computedLabel;

  beforeUpdate(() => {
    let isActive = active ? "active" : "";
    let btnType = `btn ${mode}`;

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
      <Icon {glyph} {direction} />
      {#if text !== ""}
        <span class="caption">
          {text}
        </span>
      {/if}
    </a>
  {:else}
    <button
      class={computedClasses}
      title={computedLabel}
      aria-label={computedLabel}
      on:click|passive
    >
      <Icon {glyph} {direction} />
      {#if text !== ""}
        <span class="caption">
          {text}
        </span>
      {/if}
    </button>
  {/if}
</template>
