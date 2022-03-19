<script>
	import ScrollArea from "nano-grid-svelte/components/ScrollArea.svelte";
	import Row from "nano-grid-svelte/components/Row.svelte";
	import Column from "nano-grid-svelte/components/Column.svelte";
	import Btn from "nano-grid-svelte/components/Btn.svelte";
	import Container from "nano-grid-svelte/components/Container.svelte";

	let contentDB = [
		{
			header: "Miguel Rivas",
			secHeader: "Portfolio 2022",
			date: "J31 M07 T14",
			type: "Application",
			img: "https://miguel-rivas.github.io/zapp/img/preview-wide/20211220_miguelrivas.jpg",
			skills: ["html", "jQuery"],
		},
		{
			header: "Miguel Rivas",
			secHeader: "Portfolio 2022",
			date: "J31 M07 T14",
			type: "Application",
			img: "https://miguel-rivas.github.io/zapp/img/preview-wide/20211220_miguelrivas.jpg",
			skills: ["html", "jQuery"],
		},
		{
			header: "Miguel Rivas",
			secHeader: "Portfolio 2022",
			date: "J31 M07 T14",
			type: "Application",
			img: "https://miguel-rivas.github.io/zapp/img/preview-wide/20211220_miguelrivas.jpg",
			skills: ["html", "jQuery"],
		},
		{
			header: "Miguel Rivas",
			secHeader: "Portfolio 2022",
			date: "J31 M07 T14",
			type: "Application",
			img: "https://miguel-rivas.github.io/zapp/img/preview-wide/20211220_miguelrivas.jpg",
			skills: ["html", "jQuery"],
		},
	];
</script>

<template>
	<section class="projects">
		<ScrollArea color="burn-orange">
			<Container width="1450" className="gallery">
				{#each contentDB as entry}
					<article class="nano-box">
						<Row spacing="4">
							<Column size="3/5">
								<img src={entry.img} alt={entry.header + " preview"} />
							</Column>
							<Column size="2/5">
								<ScrollArea color="burn-orange">
									<h2>
										{@html entry.header}
									</h2>
									<h3>
										{@html entry.secHeader}
									</h3>
									<h4>
										{@html entry.type}
									</h4>
									<h5>
										<time>
											{@html entry.date}
										</time>
									</h5>
									{#if entry.skills.length > 0}
										<ul class="skills">
											{#each entry.skills as li}
												<li>{@html li}</li>
											{/each}
										</ul>
									{/if}
									{#if true}
										<ul class="navigation">
											<!-- {#each entry.skills as li} -->
											<li>
												<Btn text="App" color="emerald" />
											</li>
											<li>
												<Btn text="Github" color="royal-purple" />
											</li>
											<!-- {/each} -->
										</ul>
									{/if}
								</ScrollArea>
							</Column>
						</Row>
					</article>
				{/each}
			</Container>
		</ScrollArea>
	</section>
</template>
