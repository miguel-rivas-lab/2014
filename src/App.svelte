<script>
	import Router from "svelte-spa-router";
	import Home from "./views/Home.svelte";
	import Projects from "./views/Projects.svelte";
	import Prototypes from "./views/Prototypes.svelte";
	import Contact from "./views/Contact.svelte";
	import Navigation from "./components/Navigation.svelte";

	let routes = {
		"/": Home,
		"/projects": Projects,
		"/prototypes": Prototypes,
		"/contact": Contact,
		"*": Home,
	};
</script>

<template>
	<Navigation />
	<Router {routes} />
</template>
