<script>
  import Row from "nano-grid-svelte/components/Row.svelte";
  import Column from "nano-grid-svelte/components/Column.svelte";
  import Btn from "nano-grid-svelte/components/Btn.svelte";
  import Container from "nano-grid-svelte/components/Container.svelte";
  import ScrollArea from "nano-grid-svelte/components/ScrollArea.svelte";
  import { location } from "svelte-spa-router";
  import Store from "../modules/Store";

  const navigation = [
    { icon: "avo", route: ["/home", "/"], tooltip: "Home" },
    { icon: "duck", route: ["/projects"], tooltip: "Projects" },
    { icon: "paper-plane", route: ["/contact"], tooltip: "Contact Me" },
  ];

  const skins = [
    { icon: "leaf", evento: "clock", tooltip: "Tree Clock" },
    { icon: "teapot", evento: "underwater", tooltip: "Underwater" },
    { icon: "fire", evento: "dragon", tooltip: "Dragon" },
    { icon: "brightness", evento: "sunset", tooltip: "Sunset" },
    { icon: "fire", evento: "dragon-night", tooltip: "Dragon Night" },
    { icon: "moon", evento: "night", tooltip: "Night" },
  ];

  function setSkin(skin) {
    $Store.theme = skin;
  }

  $: currentLocation = $location;
</script>

<template>
  <Column size="50" className="main-panel">
    <ScrollArea color="burn-orange">
      <Container>
        <Row vertical={true}>
          <Column>
            {#each navigation as nav}
              <Btn
                glyph={nav.icon}
                size="md"
                mode="transparent"
                color="burn-orange"
                direction="top"
                to={nav.route[0]}
                active={nav.route.includes(currentLocation)}
                title={`${nav.tooltip} button`}
              />
            {/each}
            <hr />
            {#each skins as skin}
              <Btn
                glyph={skin.icon}
                size="md"
                on:click={() => setSkin(skin.evento)}
                mode="transparent"
                color="gold-tips"
                direction="top"
                active={$Store.theme === skin.evento}
                title={`${skin.tooltip} button`}
              />
            {/each}
          </Column>
        </Row>
      </Container>
    </ScrollArea>
  </Column>
</template>
