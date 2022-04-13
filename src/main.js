import App from './App.svelte';
import "./stylesheets/application.scss";
import 'nano-grid/components';

const app = new App({
	target: document.body,
});

export default app;