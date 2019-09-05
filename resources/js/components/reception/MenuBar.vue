<template>
  <div class="col-3">
        <div class="card">
        <ul class="list-group list-group-flush">
            <router-link to="/reception/patient" class="list-group-item">New patient</router-link>
            <router-link to="/reception/queue" class="list-group-item">Add to queue</router-link>
        </ul>
        </div>
 </div>
</template>

<script>
export default {
    name: "MenuBar"
}
</script>

<style>

</style>
