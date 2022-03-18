<script>
	import { onMount, beforeUpdate } from "svelte";

	export let className = "",
		translation = "200",
		x = 0,
		y = 0,
		sides = 5,
		rotation = 0,
		starRadius = 50,
		innerRadius = 25,
		starColor = "#f5e65d",
		originTranslation = 150;

	let computedTranslation = translation.split(",");
	let xTranslation = computedTranslation[0],
		yTranslation = computedTranslation[1] || computedTranslation[0];

	let width = +starRadius * 2 + +xTranslation;
	let height = +starRadius * 2 + +yTranslation;

	$: classes = ["star", className].join(" ").replace(/\s+/g, " ").trim();

	let canvas, computedStyle;

	beforeUpdate(() => {
		computedStyle = `bottom: ${y}px; `;
		if (x >= 0) {
			computedStyle += `left: ${Math.abs(x)}px`;
		} else {
			computedStyle += `right: ${Math.abs(x)}px`;
		}
		computedStyle.replace(/\s+/g, " ").trim();
	});

	onMount(() => {
		const ctx = canvas.getContext("2d");
		const ang = Math.PI / 180;
		let originX = width - starRadius - xTranslation,
			originY = height - starRadius - yTranslation,
			px = [],
			py = [],
			px2 = [],
			py2 = [];

		/* --------------------- defining points --------------------- */
		for (let counter = 0; counter <= sides - 1; counter++) {
			px[counter] =
				Math.cos((rotation + (360 / sides) * counter) * ang) * starRadius;
			py[counter] =
				Math.sin((rotation + (360 / sides) * counter) * -ang) * starRadius;
			/* --------------------- second shape --------------------- */
			px2[counter] =
				Math.cos(
					(rotation + 360 / (sides * 2) + (360 / sides) * counter) * ang
				) * innerRadius;
			py2[counter] =
				Math.sin(
					(rotation + 360 / (sides * 2) + (360 / sides) * counter) * -ang
				) * innerRadius;
		}

		/* --------------------- drawing the tail --------------------- */
		ctx.beginPath();
		ctx.moveTo(originX + px[1], originY + py[1]);
		ctx.lineTo(originX + px2[3], originY + py2[3]);
		ctx.lineTo(width - originTranslation, height - originTranslation);
		ctx.fillStyle = "#d19c4b";
		ctx.fill();
		ctx.closePath();

		ctx.beginPath();
		ctx.moveTo(originX + px[3], originY + py[3]);
		ctx.lineTo(originX + px2[3], originY + py2[3]);
		ctx.lineTo(width - originTranslation, height - originTranslation);
		ctx.fillStyle = "#453415";
		ctx.fill();
		ctx.closePath();

		ctx.beginPath();
		ctx.moveTo(originX + px[1], originY + py[1]);
		ctx.lineTo(originX + px2[4], originY + py2[4]);
		ctx.lineTo(width - originTranslation, height - originTranslation);
		ctx.fillStyle = "#63471b";
		ctx.fill();
		ctx.closePath();

		ctx.beginPath();
		ctx.moveTo(originX + px[4], originY + py[4]);
		ctx.lineTo(originX + px2[4], originY + py2[4]);
		ctx.lineTo(width - originTranslation, height - originTranslation);
		ctx.fillStyle = "#7a5321";
		ctx.fill();
		ctx.closePath();

		ctx.beginPath();
		ctx.moveTo(originX + px[0], originY + py[0]);
		ctx.lineTo(originX + px2[4], originY + py2[4]);
		ctx.lineTo(width - originTranslation, height - originTranslation);
		ctx.fillStyle = "#a5742a";
		ctx.fill();
		ctx.closePath();

		/* --------------------- drawing the star --------------------- */
		ctx.beginPath();
		ctx.moveTo(originX + px[0], originY + py[0]);
		ctx.lineTo(originX + px2[0], originY + py2[0]);

		for (let counter = 1; counter <= sides - 1; counter++) {
			ctx.lineTo(originX + px[counter], originY + py[counter]);
			ctx.lineTo(originX + px2[counter], originY + py2[counter]);
		}

		ctx.fillStyle = starColor;
		ctx.fill();
		ctx.closePath();
	});
</script>

<template>
	<canvas
		bind:this={canvas}
		{width}
		{height}
		class={classes}
		style={computedStyle}
	/>
</template>
