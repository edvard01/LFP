import "bootstrap/dist/js/bootstrap.bundle.min.js";
import { createApp } from "vue";
import Counter from "./components/Counter.vue";

const app = createApp();

app.component("counter", Counter);

app.mount("#app");
