<script>
	import Gear from "nano-grid-svelte/components/Gear.svelte";

	const contentDB = [
		// {
		// 	header: `Hi! My name is Miguel Rivas, <small>I'm a Frontend Developer living in Austin, TX.</small>`,
		// },
		// {
		// 	header: `Why Me?`,
		// 	content: `I work with HTML/JADE/HAML, CSS/SASS/LESS, and the Adobe Suite (Illustrator, Photoshop, Indesign, Flash and Premiere). I also love git and have been known to roll up my sleeves and work with basic Ruby on Rails and PHP.`,
		// },
		{
			header: `Experience in the area`,
			content: `I've work as Front-End Developer for <strong>Cerveza Presidente</strong> in the web app <strong>Destapa El Coro</strong> and in the page of <strong>Carnaval Presidente 2015</strong>. also I worked with other brand as Orange, Pepsi and Outback.`,
		},
	];
</script>

<template>
	<section class="home">
		<div class="monitor">
			<div class="container">
				{#each contentDB as screen}
					<h1>{@html screen.header}</h1>
					{#if screen.content}
						<p>{@html screen.content}</p>
					{/if}
				{/each}

				<Gear
					sidePerforationRadius="5"
					sidePerforationDistance="32"
					sidePerforationAmount="7"
					width="180"
					className="rtr g1"
				/>
				<Gear
					axisRadius="10"
					sidePerforationRadius="8"
					sidePerforationAmount="3"
					width="160"
					className="rtr g2"
				/>
				<Gear
					teethAmount="25"
					axisRadius="15"
					sidePerforationRadius="8"
					sidePerforationAmount="0"
					width="52"
					className="rtl g3"
				/>
				<Gear teethAmount="25" width="100" className="rtl g4" />
				<Gear
					teethAmount="30"
					axisRadius="8"
					sidePerforationRadius="3"
					sidePerforationDistance="35"
					sidePerforationAmount="10"
					width="180"
					className="rtr g5"
				/>
				<Gear
					axisRadius="3"
					sidePerforationRadius="8"
					sidePerforationAmount="5"
					width="165"
					className="rtl g6"
				/>
			</div>
			<div class="screen-container">
				<div class="bone">
					<Gear
						teethAmount="25"
						axisRadius="15"
						sidePerforationRadius="8"
						sidePerforationAmount="0"
						width="52"
					/>
					<div class="screen" />
				</div>
			</div>
		</div>
	</section>
</template>
