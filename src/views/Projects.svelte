<script>
	import ScrollArea from "nano-grid-svelte/components/ScrollArea.svelte";
	import Row from "nano-grid-svelte/components/Row.svelte";
	import Column from "nano-grid-svelte/components/Column.svelte";
	import Container from "nano-grid-svelte/components/Container.svelte";
	import { allDBListVisible } from "../modules/format-db";
</script>

<template>
	<section class="projects">
		<ScrollArea color="burn-orange">
			<Container width="1450" className="gallery">
				{#each allDBListVisible as entry}
					<article class="nano-box">
						<Row spacing="4" breakpoint="lg">
							<Column size="3/5">
								<img src={entry.image} alt={entry.header + " preview"} />
							</Column>
							<Column size="2/5">
								<h2>
									{@html entry.clients[0]}
								</h2>
								<h3>
									{@html entry.title}
								</h3>
								<h4>
									{@html entry.types}
								</h4>
								<h5>
									<time>
										{@html entry.turingDate}
									</time>
								</h5>
								{#if entry.tools.length > 0}
									<ul class="skills">
										{#each entry.tools as li}
											<li>{@html li}</li>
										{/each}
									</ul>
								{/if}
							</Column>
						</Row>
					</article>
				{/each}
			</Container>
		</ScrollArea>
	</section>
</template>
