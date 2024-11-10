<template>
    <div>
        <h1>{{ message }}</h1>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: 'Hello, Laravel with Vite and Vue!',
        };
    },
};
</script>

<style scoped>
h1 {
    color: #42b883;
}
</style>

