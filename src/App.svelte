<script>
	import Router from "svelte-spa-router";
	import Home from "./views/Home.svelte";
	import Projects from "./views/Projects.svelte";
	import Contact from "./views/Contact.svelte";
	import Navigation from "./components/Navigation.svelte";
	import Row from "./components/Row.svelte";
	import Column from "./components/Column.svelte";

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

	let skin = "night";
	if (currentHour >= 0 && currentHour <= 4) {
		skin = "dragon";
	} else if (currentHour >= 5 && currentHour <= 11) {
		skin = "clock";
	} else if (currentHour >= 12 && currentHour <= 14) {
		skin = "underwater";
	} else if (currentHour >= 15 && currentHour <= 17) {
		skin = "sunset";
	} else if (currentHour >= 18 && currentHour <= 20) {
		skin = "dragon-night";
	}
</script>

<template>
	<main class="svelte-theme nano-light {skin}">
		<Row className="nano-app">
			<Navigation />
			<Column size="100%-50" className="workarea">
				<Router {routes} />
				<div class="bk-ornament"/>
			</Column>
		</Row>
	</main>
</template>
