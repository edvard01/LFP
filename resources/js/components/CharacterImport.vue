<script setup>
import { ref } from "vue";
</script>

<template>
    <form method="GET" id="character-fetch">
        <select
            class="form-select"
            aria-label="Region Select"
            name="region"
            id="region"
        >
            <option selected>Region</option>
            <option value="eu">EU</option>
            <option value="eu">NA</option>
        </select>

        <input type="text" class="form-control" />
    </form>
</template>
