<script>
  import Row from "../components/Row.svelte";
  import Column from "../components/Column.svelte";
  import Btn from "../components/Btn.svelte";

  const navigation = [{ icon: "aguacatekun", route: ["/home"], tooltip: "Home" }];
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
                color="persian-red"
                direction="top"
                to={nav.route[0]}
                title={`${nav.tooltip} button`}
              />
            {/each}
          </Column>
        </Row>
      </div>
    </div>
  </Column>
</template>
