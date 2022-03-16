<script>
	import Router from "svelte-spa-router";
	import Home from "./views/Home.svelte";
	import Projects from "./views/Projects.svelte";
	import Prototypes from "./views/Prototypes.svelte";
	import Contact from "./views/Contact.svelte";
	import Navigation from "./components/Navigation.svelte";
	import Row from "./components/Row.svelte";
  import Column from "./components/Column.svelte";

	let routes = {
		"/": Home,
		"/projects": Projects,
		"/prototypes": Prototypes,
		"/contact": Contact,
		"*": Home,
	};
</script>

<template>
	<main class="svelte-theme nano-dark">
		<Row className="nano-app">
			<Navigation />
			<Column size="100%-50" className="workarea">
				<Router {routes} />
			</Column>
		</Row>
	</main>
</template>
