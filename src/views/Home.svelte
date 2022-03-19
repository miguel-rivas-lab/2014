<script>
	import Gear from "nano-grid-svelte/components/Gear.svelte";
	import Container from "nano-grid-svelte/components/Container.svelte";
	import Icon from "nano-grid-svelte/components/Icon.svelte";
	import { contentDB } from "../db/content";

	let contentIndex = 0;

	let movePage = (movement) => {
		if (contentIndex + movement > contentDB.length - 1) {
			contentIndex = 0;
		} else if (contentIndex + movement < 0) {
			contentIndex = contentDB.length - 1;
		} else {
			contentIndex += movement;
		}
	};

	
</script>

<template>
	<section class="home">
		<div class="monitor">
			<Container>
				<h1>{@html contentDB[contentIndex].header}</h1>
				{#if contentDB[contentIndex].content}
					<p>{@html contentDB[contentIndex].content}</p>
				{/if}

				<button
					class="scrn_btn prev"
					on:click={() => {
						movePage(-1);
					}}
				>
					<Icon direction="left" glyph="chevron" />
				</button>
				<button
					class="scrn_btn next"
					on:click={() => {
						movePage(1);
					}}
				>
					<Icon direction="right" glyph="chevron" />
				</button>

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
			</Container>
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
