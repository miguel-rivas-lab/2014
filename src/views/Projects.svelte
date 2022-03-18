<script>
	import ScrollArea from "nano-grid-svelte/components/ScrollArea.svelte";
	import Row from "nano-grid-svelte/components/Row.svelte";
	import Column from "nano-grid-svelte/components/Column.svelte";
	import Btn from "nano-grid-svelte/components/Btn.svelte";

	let contentDB = [
		{
			header: "DrLogic",
			secHeader: "Frontend Developer",
			img: "https://miguel-rivas.github.io/zapp/img/preview-square/apap.jpg",
			description: ["This was the second project..."],
			skills: ["html", "jQuery"],
		},
	];
</script>

<template>
	<section class="projects">
		<ScrollArea color="burn-orange">
			<div class="container">
				{#each contentDB as entry}
					<Row spacing="0.5">
						<Column size="220">
							<img src={entry.img} alt={entry.header + " preview"} />
						</Column>
						<Column size="100%-220">
							<h2>{@html entry.header}</h2>
							<h3>[ {@html entry.secHeader} ]</h3>
							{#if entry.description.length > 0}
								{#each entry.description as p}
									<p>{@html p}</p>
								{/each}
							{/if}
							{#if entry.skills.length > 0}
							<p>In this project:</p>
								<ul>
									{#each entry.skills as li}
										<li>{@html li}</li>
									{/each}
								</ul>
							{/if}
							<Btn text="See Project" color="emerald" />
						</Column>
					</Row>
				{/each}
			</div>
		</ScrollArea>
	</section>
</template>
