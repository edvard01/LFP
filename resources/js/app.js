import "bootstrap/dist/js/bootstrap.bundle.min.js";
import { createApp } from "vue";
import Card from "./components/Card.vue";
import CharacterImport from "./components/CharacterImport.vue";

const app = createApp();

app.component("card", Card).component("character-import", CharacterImport);

app.mount("#app");
