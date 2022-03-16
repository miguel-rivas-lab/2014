<script>
	const contentDB = [
		{
			header: `Hi! My name is Miguel Rivas, <small>I'm a Frontend Developer living in Austin, TX.</small>`,
		},
		{
			header: `Why Me?`,
			content: `I work with HTML/JADE/HAML, CSS/SASS/LESS, and the Adobe Suite (Illustrator, Photoshop, Indesign, Flash and Premiere). I also love git and have been known to roll up my sleeves and work with basic Ruby on Rails and PHP.`,
		},
		{
			header: `Experience in the area`,
			content: `I've work as Front-End Developer for <strong>Cerveza Presidente</strong> in the web app <strong>Destapa El Coro</strong> and in the page of <strong>Carnaval Presidente 2015</strong>. also i worked with other brand as Orange, Pepsi and Outback.`,
		},
	];
</script>

<template>
	<section class="home">
		<div class="container">
			<ul class="monitor">
				{#each contentDB as screen}
					<li>
						<h1>{@html screen.header}</h1>
						{#if screen.content}
							<p>{@html screen.content}</p>
						{/if}
					</li>
				{/each}
			</ul>
		</div>
	</section>
</template>
