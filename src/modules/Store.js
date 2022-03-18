import { writable } from "svelte/store";

const Store = writable({
  theme: 'night'
});

export default Store;