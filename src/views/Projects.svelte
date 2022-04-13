<script>
	import { allDBListVisible } from "../modules/format-db";
</script>

<template>
	<section class="projects">
		<nn-scroll-area color="burn-orange">
			<nn-container width="1450" class="gallery">
				{#each allDBListVisible as entry}
					<article class="nano-box">
						<nn-row spacing="4" breakpoint="lg">
							<nn-column size="3/5">
								<img src={entry.image} alt={entry.header + " preview"} />
							</nn-column>
							<nn-column size="2/5">
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
							</nn-column>
						</nn-row>
					</article>
				{/each}
			</nn-container>
		</nn-scroll-area>
	</section>
</template>
