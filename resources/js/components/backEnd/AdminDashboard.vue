<template>
    <div class="admin-dashboard">
        <h1>Admin Dashboard</h1>
        <div class="stats">
            <div class="card">
                <h2>Users</h2>
                <p>{{ usersCount }}</p>
            </div>
            <div class="card">
                <h2>Orders</h2>
                <p>{{ ordersCount }}</p>
            </div>
            <div class="card">
                <h2>Revenue</h2>
                <p>${{ revenue }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            usersCount: 120,
            ordersCount: 58,
            revenue: 7500.0,
        };
    },
};
</script>

<style scoped>
.admin-dashboard {
    padding: 20px;
}
.stats {
    display: flex;
    gap: 20px;
}
.card {
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    flex: 1;
    text-align: center;
}
</style>
