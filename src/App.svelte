<script>
	import Router from "svelte-spa-router";
	import Home from "./views/Home.svelte";
	import Projects from "./views/Projects.svelte";
	import Contact from "./views/Contact.svelte";
	import Navigation from "./components/Navigation.svelte";
	import Store from "./modules/Store";
	import { location } from "svelte-spa-router";
	import { beforeUpdate } from "svelte";

	let routes = {
		"/home": Home,
		"/projects": Projects,
		"/contact": Contact,
		"*": Home,
	};

	let currentHour = new Date().toLocaleString("en-US", {
		hour: "numeric",
		hour12: false,
	});

	if (currentHour >= 0 && currentHour <= 4) {
		$Store.theme = "dragon";
	} else if (currentHour >= 5 && currentHour <= 11) {
		$Store.theme = "clock";
	} else if (currentHour >= 12 && currentHour <= 14) {
		$Store.theme = "underwater";
	} else if (currentHour >= 15 && currentHour <= 17) {
		$Store.theme = "sunset";
	} else if (currentHour >= 18 && currentHour <= 20) {
		$Store.theme = "dragon-night";
	}

	let computedClasses;
	
	beforeUpdate(() => {
		let currentLocation = `section-${$location.substring(1)}`;
		computedClasses = ["svelte-theme", $Store.theme, currentLocation]
			.join(" ")
			.replace(/\s+/g, " ")
			.trim();
	});
</script>

<template>
	<main class={computedClasses}>
		<nn-row class="nano-app">
			<Navigation />
			<nn-column size="100%-50" class="workarea">
				<Router {routes} />
				<div class="bk-ornament" />
				<footer>
					<div class="clouds" />
					<div class="city" />
					<div class="mountains" />
				</footer>
			</nn-column>
		</nn-row>
	</main>
</template>
