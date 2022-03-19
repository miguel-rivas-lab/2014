<script>
	import Router from "svelte-spa-router";
	import Home from "./views/Home.svelte";
	import Projects from "./views/Projects.svelte";
	import Contact from "./views/Contact.svelte";
	import Navigation from "./components/Navigation.svelte";
	import Row from "nano-grid-svelte/components/Row.svelte";
	import Column from "nano-grid-svelte/components/Column.svelte";
	import Store from "./modules/Store";

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
</script>

<template>
	<main class="svelte-theme {$Store.theme}">
		<Row className="nano-app">
			<Navigation />
			<Column size="100%-50" className="workarea">
				<Router {routes} />
				<div class="bk-ornament" />
				<footer>
					<div class="clouds" />
					<div class="city" />
				</footer>
			</Column>
		</Row>
	</main>
</template>
