<script>
  import Row from "../components/Row.svelte";
  import Column from "../components/Column.svelte";
  import Btn from "../components/Btn.svelte";
  import {location} from 'svelte-spa-router'

  const navigation = [
    { icon: "avo", route: ["/home"], tooltip: "Home" },
    { icon: "duck", route: ["/projects"], tooltip: "Projects" },
    { icon: "paper-plane", route: ["/contact"], tooltip: "Contact Me" },
  ];

  $: currentLocation = $location;
</script>

<template>
  <Column size="50" className="main-panel">
    <div class="scroll-area royal-purple">
      <div class="container">
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
                active={currentLocation === nav.route[0]}
                title={`${nav.tooltip} button`}
              />
            {/each}
          </Column>
        </Row>
      </div>
    </div>
  </Column>
</template>
